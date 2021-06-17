@extends('backoffice.navBack')

@section('content')
                        
    <div id="hero" class="container pt-5 text-start" style="height: unset;">
        <h1 class="pb-5 pt-3">Create Fact</h1>
        <a href={{ route("about.index") }} class="btn-get-started scrollto py-2 px-3 d-inline"><</a>
        <form action={{ route("aboutFact.store") }} method="post">
            @csrf
            <div class="mb-3 mt-5">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="mb-3">
                <label class="form-label">Icon</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="icon" value="bxl-dribbble" checked>
                        <label class="form-check-label"><i class="fs-3 bx bxl-dribbble"></i></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="icon" value="bx-file">
                        <label class="form-check-label"><i class="fs-3 bx bx-file"></i></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="icon" value="bx-tachometer">
                        <label class="form-check-label"><i class="fs-3 bx bx-tachometer"></i></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="icon" value="bx-layer">
                        <label class="form-check-label"><i class="fs-3 bx bx-layer"></i></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="icon" value="bx-slideshow">
                        <label class="form-check-label"><i class="fs-3 bx bx-slideshow"></i></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="icon" value="bx-arch">
                        <label class="form-check-label"><i class="fs-3 bx bx-arch"></i></label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-get-started scrollto">Submit</button>
        </form>
    </div>

@endsection