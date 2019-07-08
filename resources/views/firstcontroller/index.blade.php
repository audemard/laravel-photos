@extends('layouts.template')

@section('content')

    <div class="container-fluid p-0">
        <div class="row portfolios-area">
            <div class="col-lg-12">
                <div class="portfolio-intro">
                    <h2 class="section-title mb-5">A <span>wonderful trip</span> between pictures and PHP</h2>
                </div>
            </div>

            @foreach($photos as $p)
                <div class="mix col-md-6 col-lg-3 rened">
                    <a href="{{ $p->url }}" class="portfolio-item pi-style2 set-bg"
                       data-setbg="{{ $p->url }}">
                        <div class="pi-inner">
                            <h2>+ See Project</h2>
                        </div>
                    </a>
                    <div class="portfolio-meta">
                        <h2>{{ $p->title }}</h2>
                        <p>Graphic design</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>





@endsection