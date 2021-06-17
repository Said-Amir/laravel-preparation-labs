@extends('backoffice.navBack')

@section('content')
                        
    <div id="hero" class="container pt-5 text-start" style="height: unset;">
        <h1 class="pb-5 pt-3">Edit Home</h1>
        <a href={{ route("home.index") }} class="btn-get-started scrollto py-2 px-3 d-inline"><</a>
        <form action={{ route('home.update', $home) }} method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-5">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$home->title}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Sub-title</label>
                <input type="text" class="form-control" name="subTitle" value="{{$home->subTitle}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Button</label>
                <input type="text" class="form-control" name="button" value="{{$home->button}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-get-started scrollto">Submit</button>
        </form>
    </div>

@endsection