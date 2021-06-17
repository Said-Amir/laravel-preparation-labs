@extends('backoffice.navBack')

@section('content')
                        
    <div id="hero" class="container pt-5 text-start" style="height: unset;">
        <h1 class="pb-5 pt-3">Edit Feature</h1>
        <a href={{ route("feature.index") }} class="btn-get-started scrollto py-2 px-3 d-inline"><</a>
        <form action={{ route('feature.update', $feature) }} method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-5">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$feature->title}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description" value="{{$feature->description}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="image">
            </div>

            @if ($feature->id%2 === 1 )
                <div class="mb-3">
                    <label class="form-label">Fact 1</label>
                    <input type="text" class="form-control" name="fact1" value="{{$feature->fact1}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Fact 2</label>
                    <input type="text" class="form-control" name="fact2" value="{{$feature->fact2}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Fact 3</label>
                    <input type="text" class="form-control" name="fact3" value="{{$feature->fact3}}">
                </div>
            @else
                <div class="mb-3">
                    <label class="form-label">Text</label>
                    <input type="text" class="form-control" name="text" value="{{$feature->text}}">
                </div>
            @endif

            <button type="submit" class="btn btn-get-started scrollto">Submit</button>
        </form>
    </div>

@endsection