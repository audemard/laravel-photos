@extends('layouts.template')


@section('content')

    <h1>Une nouvelle photo</h1>


    <section class="page-section">
        <div class="container">
            <form class="contact-form" method="post" action="/photos">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="Title" name="title">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="URL" name="url">
                    </div>
                </div>
                <div class="text-center">
                    <button class="site-btn">Send</button>
                </div>
            </form>
        </div>
    </section>

@endsection