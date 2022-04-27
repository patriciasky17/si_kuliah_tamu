@extends('dashboard-admin.partials-main.main')

@section('css')
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@endsection

@section('main')
    <!-- Artikel Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="top-article">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h5 class="mb-0" style="margin-top: 10px;">Artikel Kuliah Tamu</h5>
            </div>
            <div class="search-area">
                <form class="search-article">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search for article.." aria-label="Search" aria-describedby="search-addon" style="width:190px;">
                        <button type="button" class="btn btn-outline-warning">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-light rounded p-4">
            <div class="container">
                <img src = "https://file.maukuliah.id/img/gallery/031067/maukuliah-1635218473.jpg" alt="foto" class="article-photo">
                <div class="article-detail">
                    <p class = "tanggal">July, 19 2019</p>
                    <p class = "judul">JUDUL ARTIKEL</p>
                    <p class = "isi">Universitas Pradita turut serta dalam memajukan bangsa dalam bidang pendidikan dengan mengadakan event kuliah tamu dari berbagai mitra di seluruh penjuru dunia. Dengan adanya event-event ini Universitas</p>
                </div>
                <div class="d-flex">
                    <a class="btn btn-sm btn-outline-info w-100" href="#">Show</a>
                    <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                    <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded p-4">
            <div class="container">
                <img src = "https://file.maukuliah.id/img/gallery/031067/maukuliah-1635218473.jpg" alt="foto" class="article-photo">
                <div class="article-detail">
                    <p class = "tanggal">July, 19 2019</p>
                    <p class = "judul">JUDUL ARTIKEL</p>
                    <p class = "isi">Universitas Pradita turut serta dalam memajukan bangsa dalam bidang pendidikan dengan mengadakan event kuliah tamu dari berbagai mitra di seluruh penjuru dunia. Dengan adanya event-event ini Universitas</p>
                </div>
                <div class="d-flex">
                    <a class="btn btn-sm btn-outline-info w-100" href="#">Show</a>
                    <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                    <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded p-4">
            <div class="container">
                <img src = "https://file.maukuliah.id/img/gallery/031067/maukuliah-1635218473.jpg" alt="foto" class="article-photo">
                <div class="article-detail">
                    <p class = "tanggal">July, 19 2019</p>
                    <p class = "judul">JUDUL ARTIKEL</p>
                    <p class = "isi">Universitas Pradita turut serta dalam memajukan bangsa dalam bidang pendidikan dengan mengadakan event kuliah tamu dari berbagai mitra di seluruh penjuru dunia. Dengan adanya event-event ini Universitas</p>
                </div>
                <div class="d-flex">
                    <a class="btn btn-sm btn-outline-info w-100" href="#">Show</a>
                    <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                    <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <ul class="pagination justify-content-center" style="margin-top: 30px;">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </div>
    <!-- Artikel Ends -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
