@extends('backoffice.navBack')

@section('content')
<section id="features" class="features" data-aos="fade-up">
    <div class="container">
    <div class="container w-75 mx-auto mt-4">
        @if (session('message'))
        <div class="container p-0">
            <div  class="alert alert-success">
                {{ session('message') }}
            </div>
        </div>
        @endif

        <div class="row content mb-5">
        @foreach ($features as $key => $feature)
            @if ($key%2 !== 1)

                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                    <img src="img/{{ $feature->image }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                    <h3>{{ $feature->title }}</h3>
                    <p class="fst-italic">
                        {{ $feature->description }}
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i>{{ $feature->fact1 }}</li>
                        <li><i class="bi bi-check"></i>{{ $feature->fact2 }}</li>
                        <li><i class="bi bi-check"></i>{{ $feature->fact3 }}</li>
                    </ul>
                </div>
                <div class="col-md-1 navbar">
                    <a style="display: inline-block!important;" class="getstarted py-2 px-3 m-0 scrollto" href={{ route('feature.edit', $feature->id) }}>Edit</a>
                </div>
                
            @else

                <div class="col-md-1 navbar">
                    <a style="display: inline-block!important;" class="getstarted py-2 px-3 m-0 scrollto" href={{ route('feature.edit', $feature->id) }}>Edit</a>
                </div>
                <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                    <h3>{{ $feature->title }}</h3>
                    <p class="fst-italic">
                        {{ $feature->description }}
                    </p>
                    <p>
                        {{ $feature->text }}                  
                    </p>
                </div>
                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                    <img src="img/{{ $feature->image }}" class="img-fluid" alt="">
                </div>

                
                @endif
            @endforeach
        </div>
        {{ $features->links() }}
    </div>
    </div>
</section>
@endsection