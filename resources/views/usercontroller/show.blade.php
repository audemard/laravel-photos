@extends('layouts.template')

@section('content')

    <!-- intro section start -->
    <section class="intro-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h2 class="section-title">{{$user->name}}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- intro section end -->


    <!-- page section start -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <p id="overview" {{Auth::check() && Auth::id() == $user->id ? "contenteditable" : ""}}>
                    {!!  $user->overview== null ? "Veuillez rentrer une description de vous" : $user->overview  !!}
                    </p>

                    @if(Auth::check() && Auth::id() == $user->id)
                        <form id="overviewform" method="post" action="/users/updateoverview">
                            @csrf
                            <input type="hidden" name="overview" />
                            <button type="submit" class="site-btn btn-fade">Valider</button>
                        </form>
                    @endif


                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="milestone">
                                <h2>{{$user->theyLikeMe()->count()}}<span>Abonnements</span></h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="milestone">
                                <h2>{{$user->ILikeThem()->count()}}<span>Abonnés</span></h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="milestone">
                                <h2>{{$user->photos()->count()}}<span>Photos</span></h2>
                            </div>
                        </div>
                    </div>
                    @auth
                        @if(Auth::id() !=$user->id)
                            @if(Auth::user()->ILikeThem->contains($user->id))
                                <a href="/suivre/{{$user->id}}" class="site-btn btn-line">Suivi</a>
                            @else
                                <a href="/suivre/{{$user->id}}" class="site-btn btn-fade">Suivre</a>
                            @endif

                        @endif

                    @endauth

                </div>
                <div class="col-lg-5 offset-lg-1">
                    <figure class="pic-frame">
                        <img src="{{ $user->avatar }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <div class="container-fluid p-0">
        <div class="row portfolios-area">


            @include('_photos', ["photos" => $user->photos])
        </div>
    </div>






@endsection