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
            <table class="table table-striped-columns table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $i => $book)
                    <tr onclick="onClickBtn('{{$book->id}}')">
                        <th scope="row">{{ $i+1 }}</th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
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
</div>
@endsection

@section('js')
<script>
    function onClickBtn(id) {
        window.location.href = `/books/${id}`
    }
</script>
@endsection