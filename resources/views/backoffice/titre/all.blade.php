@extends('backoffice.navBack')

@section('content')

    <div class="container w-75 mx-auto mt-4">
        @if (session('message'))
        <div class="container p-0">
            <div  class="alert alert-success">
                {{ session('message') }}
            </div>
        </div>
        @endif
        <div class="navbar mt-5">
            @foreach ($titres as $titre)
                <div class="section-title">
                    <h2>{{ $titre->id }}. {{ $titre->title }}</h2>
                    <a style="display: inline-block!important;" class="getstarted py-2 px-3 m-0 scrollto" href={{ route('titre.edit', $titre->id) }}>Edit</a>
                    <p>{{ $titre->description }}</p>
                </div>
            @endforeach
        </div>
        {{ $titres->links() }}
    </div>

@endsection