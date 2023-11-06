@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"> Back to all my
                    posts</i></a>
            <a href="" class="btn btn-warning"><i class="bi bi-pencil-square"> Edit</i></a>
            <a href="" class="btn btn-danger"><i class="bi bi-trash"> Delete</i></a>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection