@extends('backoffice.navBack')

@section('content')
    <section id="hero" class="d-flex align-items-center" style="height: unset!important;">
        <div class="container p-0 d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
            @if (session('message'))
                <div class="container p-0">
                    <div  class="alert alert-success">
                        {{ session('message') }}
                    </div>
                </div>
            @endif
            <a style="display: inline-block!important;" class="btn-get-started align-self-start mt-2 py-1 px-2 scrollto" href={{ route('home.edit', $home->id) }}>Edit</a>
            <h1>{{ $home->title }}</h1>
            <h2>{{ $home->subTitle }}</h2>
            <a href="#about" class="btn-get-started scrollto">{{ $home->button }}</a>
            <img src="img/{{ $home->image }}" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
        </div>

    </section><!-- End Hero -->
@endsection