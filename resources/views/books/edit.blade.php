@extends('layouts.main')

@section('title', 'Edit Book')

@section('content')
<div class="container py-4">
    <div class="row mb-4">
        <div class="col-sm-12 col-md-6 mx-auto">
            <header class="text-center">
                <h2 class="display-6">Edit Book</h3>
            </header>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 mx-auto">
            <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">
                        <span>Title</span>
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ @old('title', $book->title) }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">
                        <span>Author</span>
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" id="author" value="{{ @old('author', $book->author) }}">
                    @error('author')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">
                        <span>Cover</span>
                        <span class="text-danger">*</span></label>
                    <input name="cover" class="form-control @error('cover') is-invalid @enderror" type="file" id="formFile">
                    @error('cover')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3 text-end">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection