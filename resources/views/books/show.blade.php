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
        <div class="col-4">
            <div class="card">
                <img src="{{ Storage::url('books/' . $book->cover) }}" class="card-img-top" alt="{{ $book->cover }}" style="aspect-ratio:1/1;" />
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">Author : {{ $book->author }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection