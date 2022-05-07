@extends('website-for-user.partials-main.main')
@section('css')
    <link rel ="stylesheet" href ="/assets-user/css/style-event.css">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endsection


@section('main')
    <!-- Event Start -->
        <div class="container">
            <div class="top-event">
                <h1 class="event-section">EVENT LIST</h1>
                <div class="search-area">
                    <form class="search-event">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="date-picker input-group">
                                    <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%; height:38px; border-radius: 3px;">
                                        <i class="bi bi-calendar"></i>&emsp;
                                        <span></span> <i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="input-group">
                                    <input type="search" class="form-control rounded search-bar-for-event" placeholder="Search for event.." aria-label="Search" aria-describedby="search-addon">
                                    <button type="button" class="btn btn-outline-warning">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark" style="background-color:#FFE6C2; text-align: center; vertical-align:middle;">
                            <th scope="col">Num.</th>
                            <th scope="col">ID Event</th>
                            <th scope="col">Nama Event</th>
                            <th scope="col">Cara Pelaksanaan</th>
                            <th scope="col">Tempat Pelaksanaan</th>
                            <th scope="col">Link</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Durasi</th>
                            <th scope="col">Presensi</th>
                            <th scope="col">Pembicara</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($event as $e)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $e->id_event }}</td>
                            <td>{{ $e->nama_event }}</td>
                            <td>{{ $e->cara_pelaksanaan }}</td>
                            <td>{{ $e->tempat_pelaksanaan }}</td>
                            <td><a class="btn btn-sm btn-outline-success w-100" href="{{ $e->link }}">Enter The Event</a></td>
                            <td>{{ $e->tanggal_pelaksanaan }}</td>
                            <td><span class="jam_mulai">{{ date('H:i',strtotime($e->jam_mulai)) }}</span> - <span class="jam_selesai">{{  date('H:i',strtotime($e->jam_selesai)) }}</td>
                            <td>{{ date('G \j\a\m i \m\e\n\i\t', strtotime($e->jam_selesai) - strtotime($e->jam_mulai))}}</td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="#">Presensi</a></td>
                            <td><a class="btn btn-sm btn-outline-info w-100" href="#">Show</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="test1.html">1</a></li>
                    <li class="page-item"><a class="page-link" href="test1.html">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    <!-- Event End -->
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src ="/assets-user/js/script-datepicker.js"></script>
@endsection
