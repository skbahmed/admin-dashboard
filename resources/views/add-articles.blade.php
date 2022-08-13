@extends('admin.layouts.master')

<!-- ======= Head ======= -->
@section('page-title', 'Create Article')
<!-- End Head -->

<!-- ======= Header ======= -->
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<!-- End Sidebar-->

<!-- ======= #main ======= -->

<!-- ======= Page Title ======= -->
<!-- End Page Title -->

<!-- ======= Section ======= -->
@section('main-section')

<form action="{{ url('articles') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12 col-lg-6">
            <label for="postTitle" class="col-12 col-form-label text-capitalize">{{ "title" }}</label>
            <input type="text" class="col-12 form-control mb-4 text-capitalize" id="postTitle" name="title" required>
        </div>
        <div class="col-12 col-lg-6">
            <label class="col-12 col-form-label text-capitalize">{{ "add image" }}</label>
            <input type="file" class="col-12 form-control mb-4 text-capitalize" name="image" accept="image/*" required>
        </div>
        <div class="col-12">
            <label for="postContent" class="col-12 col-form-label text-capitalize">{{ "Content" }}</label>
            <textarea class="form-control" rows="10" id="postContent" name="content" required></textarea>
        </div>
        <div class="col-12">
            <input type="text" class="col-12 form-control my-4 text-capitalize" name="authorId" required value="{{ Auth::user()->id }}" hidden>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-5 text-start">
            <div class="form-check px-5 py-2 mt-5">
                <input type="checkbox" class="form-check-input" id="gridCheck2" name="status" checked>
                <label class="form-check-label text-capitalize" for="gridCheck2">{{ "publish" }}</label>
            </div>
        </div>
        <div class="col-12 col-lg-7 text-center text-lg-start">
            <input type="submit" class="btn btn-primary text-capitalize px-5 py-2 mt-5" name="addPost" value="add article">
        </div>
    </div>
</form>

@endsection
<!-- End Section -->

<!-- End #main -->

<!-- ======= Footer ======= -->
<!-- End Footer -->