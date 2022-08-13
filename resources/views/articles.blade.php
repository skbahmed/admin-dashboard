@extends('admin.layouts.master')

<!-- ======= Head ======= -->
@section('page-title', 'Articles')
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

<div class="overflow-scroll" style="max-height: 80vh">
    <table class="table table-striped bg-light table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                <th scope="row">{{ $article->id }}</th>
                <td class="text-capitalize">{{ $article->name }}</td>
                <td class="text-lowercase ta">{{ Str::limit($article->post_desc, 100 ) }}</td>
                <td class=""><img src="{{ asset('storage/admin/img/articles/'. $article->post_image) }}" alt="{{ $article->post_image }}" style="height: 100px"></td>
                <td class="text-capitalize">{{ $article->status == 1 ? 'published' : 'hidden' }}</td>
                <td class="text-capitalize">{{ $article->user->name }}</td>
                <td class="text-center">
                    <a href="{{ url('articles/delete', $article->id) }}" class="btn btn-danger h5" title="Delete this article">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $articles->links() }}

@endsection
<!-- End Section -->

<!-- End #main -->

<!-- ======= Footer ======= -->
<!-- End Footer -->