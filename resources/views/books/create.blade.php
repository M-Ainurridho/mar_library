@extends('layouts.main')

@section('title', 'Add New Book')

@section('content')
<div class="container py-4">
    <div class="row mb-4">
        <div class="col-sm-12 col-md-6 mx-auto">
            <header class="text-center">
                <h2 class="display-6">Add New Book</h3>
            </header>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 mx-auto">
            <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">
                        <span>Title</span>
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ @old('title') }}">
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
                    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" id="author" value="{{ @old('author') }}">
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
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection