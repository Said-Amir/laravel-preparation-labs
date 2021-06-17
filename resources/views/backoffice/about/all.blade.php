@extends('backoffice.navBack')

@section('content')

<style>
    .myHover:hover{
        color: white!important;
    }

    .myBtn{
        font-size: 40px;
        color: #b6bdfc;
        margin-bottom: 10px;
    }
</style>

<div id="hero" class="py-5" style="height: unset;">
    <h1>About Section</h1>
</div>
<section id="about" class="about mx-auto" style="width: 90%;">
    <div class="container">
        @if (session('message'))
            <div class="container p-0">
                <div  class="alert alert-success">
                    {{ session('message') }}
                </div>
            </div>
        @endif
        <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
                <div class="content">
                    <h3>{{ $about->title }}</h3>
                    <p>
                        {{ $about->subtitle }}
                    </p>
                    <a href="#" class="about-btn">{{ $about->button }} <i class="bx bx-chevron-right"></i></a>
                    <a href={{ route('about.edit', $about->id) }} class="about-btn">Edit</a>
                </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
            <div class="icon-boxes d-flex flex-column justify-content-center">
                <a href={{ route('aboutFact.create') }}><i class='bx myHover myBtn bx-plus-circle'></i></a>
                <div class="row">
                    @foreach ($about->aboutFacts as $aboutfact)
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="d-flex justify-content-between w-100">
                                <i class="bx m-0 {{ $aboutfact->icon }}"></i>

                                <div>
                                    <a class="" href={{ route("aboutFact.edit", $aboutfact) }}><i class='bx myHover bx-edit'></i></a>
                                    <form class="d-inline" action={{ route("aboutFact.destroy", $aboutfact) }} method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button style="vertical-align: unset" class="btn p-0" type="submit"><i class='bx myHover bx-trash'></i></button style="height: unset;">
                                    </form>
                                </div>
                            </div>
                            <h4>{{ $aboutfact->title }}</h4>
                            <p>{{ $aboutfact->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div><!-- End .content-->
        </div>
      </div>

    </div>
</section><!-- End About Section -->

@endsection