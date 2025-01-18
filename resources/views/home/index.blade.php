@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="hero bg-secondary" style="height:250px;"></div>

<div class="container my-4">
    <section class="mt-3">
        <div class="row mb-2">
            <div class="col-12">
                <header class="d-flex justify-content-between align-items-center">
                    <h4>Latest Books</h4>
                    <a href="" class="text-decoration-none fs-6">Lihat semua</a>
                </header>
            </div>
        </div>

        <div class="row">
            @foreach ($latestBooks as $book)
            <div class="col-sm-2 col-md-3">
                <a href="{{ route('books.show', $book->id) }}" class="card text-decoration-none">
                    <img
                        src="{{ Storage::url('books/' . $book->cover) }}"
                        class="card-img-top"
                        alt="{{ $book->title }}"
                        style="aspect-ratio: 1/1; object-fit: fit;">
                    <div class="card-body">
                        <p class="card-text">{{ $book->title }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection