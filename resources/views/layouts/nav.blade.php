<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">MAR Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                <a class="nav-link" href="">Bookmark</a>
                <a class="nav-link" href="{{ route('books.index') }}">Books</a>
            </div>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <!-- <button class="btn border border-secondary rounded-circle d-flex align-items-center justify-content-center" style="width:40px;height:40px">
                <i class='bx bx-shopping-bag bx-sm'></i>
            </button> -->
            <button class="btn btn-primary">Join us</button>
        </div>
    </div>
</nav>