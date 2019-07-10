@extends('layouts.template')

@section('content')

    <div class="container-fluid p-0">
        <div class="row portfolios-area">
            <div class="col-lg-12">
                <div class="portfolio-intro">
                    <h2 class="section-title mb-5">A <span>wonderful trip</span> between pictures and PHP</h2>
                </div>
            </div>

            @include('_photos', ['photos' => $photos])
        </div>
    </div>





@endsection