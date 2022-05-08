@extends('website-for-user.partials-main.main')
@section('css')
    <link rel="stylesheet" href="/assets-user/css/style-article.css">
@endsection

@section('main')
    <!-- Article starts here -->
    <div class="container">
        <div class="top-article">
            <h1 class="article-section">ARTICLE</h1>
            <div class="search-area">
                <form class="search-article">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search for article.." aria-label="Search" aria-describedby="search-addon" style="width:250px;">
                        <button type="button" class="btn btn-outline-warning">Search</button>
                    </div>
                </form>
            </div>
        </div>

        @forelse ( $posts as $p )
        <div class="col-12 article-content">
            <a href="#" class="article-spesific">
                <div class="container">
                    <img src = "https://file.maukuliah.id/img/gallery/031067/maukuliah-1635218473.jpg" alt="foto" class="article-photo">
                    <div class="article-detail">
                        <p class = "tanggal">{{ date("M-d-Y",strtotime($p->waktu_publikasi)) }}</p>
                        <p class = "judul">{{ $p->judul }}</p>
                        <p class = "author"> {{ "Penulis : " . $p->author }}</p>
                        <p class = "isi">{{ Str::limit($p->ringkasan, 140, ' ...') }}</p>
                    </div>
                </div>
            </a>
        </div>
        @empty
        @endforelse

        <div class="col-sm-12">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="dokumentasi1.html">1</a></li>
                <li class="page-item"><a class="page-link" href="dokumentasi1.html">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Article ends here -->
@endsection

@section('js')
    <!--Bootstrap JS Bundle + Separate-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src ="./assets/js/script.js"></script>
@endsection
