@extends('dashboard-admin.partials-main.main')

@section('css')
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
@endsection

@section('main')

    @if (session()->has('success'))
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded p-4">
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        </div>
    </div>
    @endif

    <!-- Event Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data Event Kuliah Tamu</h6>
            </div>
            <div class="table-responsive">
                <table border="0" cellspacing="5" cellpadding="5" style="margin-bottom: 20px;">
                    <tbody class="d-flex justify-content-center">
                        <tr>
                            <td>Minimum date:</td>
                            <td><input type="text" id="min" name="min" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Maximum date:</td>
                            <td><input type="text" id="max" name="max" class="form-control"></td>
                        </tr>
                    </tbody>
                </table>

                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Num.</th>
                            <th scope="col">ID Event</th>
                            <th scope="col">Nama Event</th>
                            <th scope="col">Cara Pelaksanaan</th>
                            <th scope="col">Tanggal Pelaksanaan</th>
                            <th scope="col">Jam Mulai</th>
                            <th scope="col">Durasi</th>
                            <th scope="col">PIC</th>
                            <th scope="col">Pembicara</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th scope="col">Num.</th>
                            <th scope="col">ID Event</th>
                            <th scope="col">Nama Event</th>
                            <th scope="col">Cara Pelaksanaan</th>
                            <th scope="col">Tanggal Pelaksanaan</th>
                            <th scope="col">Jam Mulai</th>
                            <th scope="col">Durasi</th>
                            <th scope="col">PIC</th>
                            <th scope="col">Pembicara</th>
                            <th scope="col">Details</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Sesi 9 : Define - Design - Develop, Strategi Penerapan Transformasi Digital</td>
                            <td>Online</td>
                            <td>2022-02-23</td>
                            <td>09:00 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>Aditya</td>
                            <td></td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-info w-100" href="#">Show</a>
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>Social Engineering dengan Dana</td>
                            <td>Online</td>
                            <td>2022-03-25</td>
                            <td>09:00 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>Candra</td>
                            <td></td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-info w-100" href="#">Show</a>
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>3</td>
                            <td>Pengembangan Software dengan Metode Scrum bersama Metrodata</td>
                            <td>Online</td>
                            <td>2022-03-11</td>
                            <td>13:30 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>Arief</td>
                            <td></td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-info w-100" href="#">Show</a>
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>4</td>
                            <td>Effective Scheduling Program with C#</td>
                            <td>Online</td>
                            <td>2022-03-29</td>
                            <td>10:00 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>David</td>
                            <td></td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-info w-100" href="#">Show</a>
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>5</td>
                            <td>Blockchain: Immutability, Security, Transparency</td>
                            <td>Online</td>
                            <td>2022-04-01</td>
                            <td>13:30 WIB</td>
                            <td>2 Jam 0 Menit</td>
                            <td>Putri</td>
                            <td></td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-info w-100" href="#">Show</a>
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- Event End -->

    <!-- Data Detail Event Starts Here -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-justify rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data Event - <span class="nama-event">Sesi 9 : Define - Design - Develop, Strategi Penerapan Transformasi Digital</span></h6>
            </div>

            <div class="row">
                <div class="col-12" style="margin-bottom:30px">
                    <dl class="row mb-0 d-flex">
                        <dt class="col-sm-4">Cara Pelaksanaan</dt>
                        <dd class="col-sm-8">Online</dd>

                        <dt class="col-sm-4">Tempat/Media Pelaksanaan</dt>
                        <dd class="col-sm-8">Webex</dd>

                        <dt class="col-sm-4">Link</dt>
                        <dd class="col-sm-8">https://ykgw.webex.com/ykgw/j.php?MTID=mee0a20ece781af062018afc0c9e0cd25</dd>

                        <dt class="col-sm-4">Estimasi Waktu</dt>
                        <dd class="col-sm-8"><span class="jam_mulai">09:00</span> - <span class="jam_selesai">10:30</span> WIB</dd>

                        <dt class="col-sm-4">Pembicara</dt>
                        <dd class="col-sm-8">-</dd>

                        <dt class="col-sm-4">Laporan Akhir</dt>
                        <dd class="col-sm-8">
                            <a class="btn btn-sm btn-outline-info" href="#">Show Laporan Akhir</a>
                            <a class="btn btn-sm btn-outline-info" href="#">Show Laporan Akhir</a>
                        </dd>

                        <dt class="col-sm-4">Proposal</dt>
                        <dd class="col-sm-8"><a class="btn btn-sm btn-outline-info" href="#">Show Proposal</a></dd>
                    </dl>
                </div>
                <div class="col-12 col-sm-12 col-md-6" style="margin-top:30px">
                    <h6 class="text-center" style="margin-bottom: 20px;">Background</h6>
                    <div class="group-contains d-flex justify-content-center">
                        <img class="img-fluid  mx-auto  bg-flyer-photo" src="./assets/img/profile-picture-test1.jfif">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6" style="margin-top:30px">
                    <h6 class="text-center" style="margin-bottom: 20px;">Flyer</h6>
                    <div class="group-contains d-flex justify-content-center">
                        <img class="img-fluid  mx-auto  bg-flyer-photo" src="./assets/img/profile-picture-test1.jfif">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Detail Event Ends Here -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>

    <script>
        var minDate, maxDate;

        // Custom filtering function which will search data in column four between two values
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = minDate.val();
                var max = maxDate.val();
                var date = new Date( data[4] );

                if (
                    ( min === null && max === null ) ||
                    ( min === null && date <= max ) ||
                    ( min <= date   && max === null ) ||
                    ( min <= date   && date <= max )
                ) {
                    return true;
                }
                return false;
            }
        );

        $(document).ready(function() {
            // Create date inputs
            minDate = new DateTime($('#min'), {
                format: 'YYYY-MM-DD'
            });
            maxDate = new DateTime($('#max'), {
                format: 'YYYY-MM-DD'
            });

            // DataTables initialisation
            var table = $('#example').DataTable();

            // Refilter the table
            $('#min, #max').on('change', function () {
                table.draw();
            });
        });
    </script>
@endsection
