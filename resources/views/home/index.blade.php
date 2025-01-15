@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="hero bg-secondary" style="height:250px;"></div>

<div class="container my-4">
    <section class="mt-3">
        <div class="row mb-2">
            <div class="col-12">
                <header class="d-flex justify-content-between align-items-center">
                    <h4>Newest Books</h4>
                    <a href="" class="text-decoration-none fs-6">Lihat semua</a>
                </header>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2 col-md-3">
                <div class="card">
                    <img src="{{ asset('book1.jpeg') }}" class="card-img-top" alt="book1" style="aspect-ratio: 1/1;">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-3">
                <div class="card">
                    <img src="{{ asset('book1.jpeg') }}" class="card-img-top" alt="book1" style="aspect-ratio: 1/1;">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-3">
                <div class="card">
                    <img src="{{ asset('book1.jpeg') }}" class="card-img-top" alt="book1" style="aspect-ratio: 1/1;">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-3">
                <div class="card">
                    <img src="{{ asset('book1.jpeg') }}" class="card-img-top" alt="book1" style="aspect-ratio: 1/1;">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection