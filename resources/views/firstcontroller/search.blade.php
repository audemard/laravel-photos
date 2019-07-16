@extends('layouts.template')

@section('content')

    <h3>Les photos</h3>
    <div class="container-fluid p-0">
        <div class="row portfolios-area">

            @include('_photos', ['photos' => $photos])
        </div>
    </div>

    <h3>Les utilisateurs</h3>

    <div class="container-fluid p-0">
        <div class="row portfolios-area">


            @foreach($users as $u)
                <div class="mix col-md-2 col-lg-2 rened">
                    <figure class="pic-frame">
                        <img src="{{ $u->avatar }}" alt="">
                    </figure>
                    <div>
                        <span><a href="/users/{{$u->id}}">{{$u->name}}</a></span>
                        <span><i class="fa fa-arrow-circle-o-right"></i>{{$u->theyLikeMe()->count()}}</span>
                        <span>{{$u->ILikeThem()->count()}}<i class="fa fa-arrow-circle-o-right"></i></span>
                        <span>{{$u->photos()->count()}}<i class="fa fa-camera-retro"></i></span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



@endsection