@extends('backoffice.navBack')

@section('content')
                        
    <div id="hero" class="container pt-5 text-start" style="height: unset;">
        <h1 class="pb-5 pt-3">Edit about</h1>
        <a href={{ route("about.index") }} class="btn-get-started scrollto py-2 px-3 d-inline"><</a>
        <form action={{ route('about.update', $about->id) }} method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-5">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$about->title}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Subtitle</label>
                <input type="text" class="form-control" name="subtitle" value="{{$about->subtitle}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Button</label>
                <input type="text" class="form-control" name="button" value="{{$about->button}}">
            </div>
            <button type="submit" class="btn btn-get-started scrollto">Submit</button>
        </form>
    </div>

@endsection