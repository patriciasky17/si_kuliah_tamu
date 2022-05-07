@section('css')
    <link rel ="stylesheet" href ="./assets/css/style-event.css">

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
                            <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> -->
                            <th scope="col">ID Event</th>
                            <th scope="col">Nama Event</th>
                            <th scope="col">Cara Pelaksanaan</th>
                            <th scope="col">Tempat Pelaksanaan</th>
                            <th scope="col">Link</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam Mulai</th>
                            <th scope="col">Durasi</th>
                            <th scope="col">PIC</th>
                            <th scope="col">Presensi</th>
                            <th scope="col">Proposal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                            <td>1</td>
                            <td>Sesi 9 : Define - Design - Develop, Strategi Penerapan Transformasi Digital</td>
                            <td>Online</td>
                            <td>Webex</td>
                            <td>https://ykgw.webex.com/ykgw/j.php?MTID=mee0a20ece781af062018afc0c9e0cd25</td>
                            <td>23 February 2022</td>
                            <td>09:00 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>Aditya</td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="presensi.html">Detail</a></td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="proposal.html">Proposal</a></td>
                        </tr>
                        <tr>
                            <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                            <td>2</td>
                            <td>Social Engineering dengan Dana</td>
                            <td>Online</td>
                            <td>Google Meet</td>
                            <td>https://meet.google.com/gms-kftj-bqu</td>
                            <td>25 Maret 2022</td>
                            <td>09:00 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>Candra</td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="presensi.html">Detail</a></td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="proposal.html">Proposal</a></td>
                        </tr>
                        </tr>
                        <tr>
                            <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                            <td>3</td>
                            <td>Pengembangan Software dengan Metode Scrum bersama Metrodata</td>
                            <td>Online</td>
                            <td>Google Meet</td>
                            <td>https://meet.google.com/ujs-pqfz-kyk</td>
                            <td>11 Maret 2022</td>
                            <td>13:30 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>Arief</td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="presensi.html">Detail</a></td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="proposal.html">Proposal</a></td>
                        </tr>
                        <tr>
                            <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                            <td>4</td>
                            <td>Effective Scheduling Program with C#</td>
                            <td>Online</td>
                            <td>Google Meet</td>
                            <td>https://meet.google.com/vou-wwoa-hcb</td>
                            <td>29 Maret 2022</td>
                            <td>10:00 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>David</td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="presensi.html">Detail</a></td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="proposal.html">Proposal</a></td>
                        </tr>
                        <tr>
                            <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                            <td>5</td>
                            <td>Blockchain: Immutability, Security, Transparency</td>
                            <td>Online</td>
                            <td>Zoom</td>
                            <td>https://zoom.us/j/96968536381?pwd=MitNL0tiR05DcUE2OElCaU9SamJ6Zz09</td>
                            <td>01 April 2022</td>
                            <td>13:30 WIB</td>
                            <td>2 Jam 00 Menit</td>
                            <td>Putri</td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="presensi.html">Detail</a></td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="proposal.html">Proposal</a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Program Your Application with Dart!</td>
                            <td>Offline</td>
                            <td>Aula A Universitas Pradita</td>
                            <td>-</td>
                            <td>18 January 2022</td>
                            <td>09:00 WIB</td>
                            <td>3 Jam 30 Menit</td>
                            <td>Jessica</td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="presensi.html">Detail</a></td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="proposal.html">Proposal</a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Data, The Essential Thing for Sustainsibility Business</td>
                            <td>Online</td>
                            <td>Google Meet</td>
                            <td>https://meet.google.com/abc-efgh-ijk</td>
                            <td>18 April 2021</td>
                            <td>08:00 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>Dimas</td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="presensi.html">Detail</a></td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="proposal.html">Proposal</a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Machine Learning and Artificial Intelligence</td>
                            <td>Online</td>
                            <td>Google Meet</td>
                            <td>https://meet.google.com/haw-opgh-eij</td>
                            <td>14 February 2022</td>
                            <td>13:00 WIB</td>
                            <td>2 Jam 30 Menit</td>
                            <td>Tiara</td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="presensi.html">Detail</a></td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="proposal.html">Proposal</a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>How to be a Full-Stack Developer </td>
                            <td>Offline</td>
                            <td>Aula B Universitas Pradita</td>
                            <td>-</td>
                            <td>01 Maret 2022</td>
                            <td>09:00 WIB</td>
                            <td>3 Jam 30 Menit</td>
                            <td>Sarah</td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="presensi.html">Detail</a></td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="proposal.html">Proposal</a></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Embedded System and Arduino</td>
                            <td>Online</td>
                            <td>Google Meet</td>
                            <td>https://meet.google.com/opy-jdyo-iwn</td>
                            <td>17 November 2021/td>
                            <td>13:30 WIB</td>
                            <td>3 Jam 30 Menit</td>
                            <td>Nadia</td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="presensi.html">Detail</a></td>
                            <td><a class="btn btn-sm btn-outline-warning w-100" href="proposal.html">Proposal</a></td>
                        </tr>
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
    <script src ="./assets/js/script-datepicker.js"></script>
@endsection
