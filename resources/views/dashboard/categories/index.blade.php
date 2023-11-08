@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 boder-bottom">
    <h1 class="h2">Post Categories</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-7" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-7">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Create New
        Category</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info">
                        <i class="bi bi-info-circle"></i>
                    </a>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i
                            class="bi bi-pencil-square"></i></a>
                    <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i
                                class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection