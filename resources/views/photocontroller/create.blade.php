@extends('layouts.template')


@section('content')

    <h1>Une nouvelle photo</h1>



    <section class="page-section">
        <div class="container">

            @include('_errors')

            <form class="contact-form" method="post" action="/photos" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="Title" name="title" required value="{{ old('title') }}">
                    </div>
                    <div class="col-md-6">
                        <input type="file" placeholder="image" name="image" required>
                    </div>
                </div>
                <div class="text-center">
                    <button class="site-btn">Send</button>
                </div>
            </form>
        </div>
    </section>

@endsection