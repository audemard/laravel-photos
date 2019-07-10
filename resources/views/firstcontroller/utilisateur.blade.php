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
                    <p> {{ $user->overview }}</p>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="milestone">
                                <h2>56<span>Abonnements</span></h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="milestone">
                                <h2>112<span>Abonnés</span></h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="milestone">
                                <h2>{{$user->photos()->count()}}<span>Photos</span></h2>
                            </div>
                        </div>
                    </div>

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