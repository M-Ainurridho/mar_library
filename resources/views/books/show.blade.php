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
                    <form class="d-flex gap-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete btn btn-danger" style="width:100%;">Delete</button>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary" style="width: 100%;">Edit</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    const form = document.querySelector('form')

    form.addEventListener('submit', function(e) {
        e.preventDefault()

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                this.setAttribute('action', "{{ route('books.destroy', $book->id) }}")
                this.setAttribute('method', "POST")
                this.submit()
            }

        });
    })
</script>
@endsection