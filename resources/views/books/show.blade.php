@extends('layouts.main')

@section('title', 'Book Details')

@section('content')
<div class="container py-4">
    <div class="row mb-2">
        <div class="col-12">
            <header>
                <h2 class="display-6">Book Details</h3>
            </header>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <div class="card" style="width: 18rem;">
                <img src="{{ Storage::url('books/' . $book->cover) }}" class="card-img-top" alt="{{ $book->cover }}" style="aspect-ratio:1/1;" />
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">Author : {{ $book->author }}</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-danger" style="width:100%;">Delete</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary" style="width: 100%;">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection