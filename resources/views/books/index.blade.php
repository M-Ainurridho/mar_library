@extends('layouts.main')

@section('title', 'Book Lists')

@section('content')
<div class="container py-4">
    <div class="row mb-2">
        <div class="col-12">
            <header class="d-flex justify-content-between align-items-center">
                <h2 class="display-6">Book Lists</h3>
                    <a href="{{ route('books.create') }}" class="btn btn-primary">Add Book</a>
            </header>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $i => $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>
                            <form id="delete-form-{{ $book->id }}" onsubmit="handleSubmit(event)" action="{{ route('books.destroy', $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-info">Detail</a>
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger" role="alert">
                        No data books!
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function handleSubmit(e) {
        e.preventDefault()

        return Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                const id = e.target.id
                const form = document.getElementById(id)
                form.submit()
            }
        });
    }
</script>
@endsection