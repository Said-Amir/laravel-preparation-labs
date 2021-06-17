@extends('backoffice.navBack')

@section('content')

<style>
    .myHover:hover{
        transform: translateY(-8px);
        transition: 0.4s
    }

    .myBtn{
        color: #2D405F;
        font-size: 40px;
        margin-bottom: 10px;
    }
</style>

<section id="services" class="services mx-auto mt-5" style="width: 96%">
    <div class="container" data-aos="fade-up">
        @if (session('message'))
            <div class="container p-0">
                <div  class="alert alert-success">
                    {{ session('message') }}
                </div>
            </div>
        @endif
        <div class="section-title">
            <h2>Services</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx {{ $service->icon }}"></i></div>
                        <h4 class="title"><a href="">{{ $service->title }}</a></h4>
                        <p class="description">{{ $service->description }}</p>
                        <div>
                            <a href={{ route("service.edit", $service) }}><i class='bx myBtn myHover bx-edit'></i></a>
                            <form class="d-inline" action={{ route("service.destroy", $service) }} method="post">
                                @csrf
                                @method('DELETE')
                                <button style="vertical-align: unset" class="btn myBtn p-0" type="submit"><i class='bx myHover bx-trash'></i></button style="height: unset;">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section><!-- End Services Section -->

@endsection