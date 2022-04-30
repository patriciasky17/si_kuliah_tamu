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
                <table border="0" cellspacing="5" cellpadding="5">
                    <tbody class="d-flex">
                        <tr>
                            <td>Minimum date:</td>
                            <td><input type="text" id="min" name="min"></td>
                        </tr>
                        <tr>
                            <td>Maximum date:</td>
                            <td><input type="text" id="max" name="max"></td>
                        </tr>
                    </tbody>
                </table>

                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">ID Event</th>
                            <th scope="col">Nama Event</th>
                            <th scope="col">Cara Pelaksanaan</th>
                            <th scope="col">Background</th>
                            <th scope="col">Flyer</th>
                            <th scope="col">Tempat Pelaksanaan</th>
                            <th scope="col">Link</th>
                            <th scope="col">Tanggal Pelaksanaan</th>
                            <th scope="col">Jam Mulai</th>
                            <th scope="col">Durasi</th>
                            <th scope="col">PIC</th>
                            <th scope="col">Proposal</th>
                            <th scope="col">Pembicara</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th scope="col">ID Event</th>
                            <th scope="col">Nama Event</th>
                            <th scope="col">Cara Pelaksanaan</th>
                            <th scope="col">Background</th>
                            <th scope="col">Flyer</th>
                            <th scope="col">Tempat Pelaksanaan</th>
                            <th scope="col">Link</th>
                            <th scope="col">Tanggal Pelaksanaan</th>
                            <th scope="col">Jam Mulai</th>
                            <th scope="col">Durasi</th>
                            <th scope="col">PIC</th>
                            <th scope="col">Proposal</th>
                            <th scope="col">Pembicara</th>
                            <th scope="col">Details</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sesi 9 : Define - Design - Develop, Strategi Penerapan Transformasi Digital</td>
                            <td>Online</td>
                            <td><a href="#">bg_transformasi_digital.jpg</a></td>
                            <td><a href="#">flyer_transformasi_digital.jpg</a></td>
                            <td>Webex</td>
                            <td>https://ykgw.webex.com/ykgw/j.php?MTID=mee0a20ece781af062018afc0c9e0cd25</td>
                            <td>2022-02-23</td>
                            <td>09:00 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>Aditya</td>
                            <td><a href="#">proposal_hpc_1.pdf</a></td>
                            <td></td>
                            <<td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Social Engineering dengan Dana</td>
                            <td>Online</td>
                            <td><a href="#">bg_sc_dana.jpg</a></td>
                            <td><a href="#">flyer_sc_dana.jpg</a></td>
                            <td>Google Meet</td>
                            <td>https://meet.google.com/gms-kftj-bqu</td>
                            <td>2022-03-25</td>
                            <td>09:00 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>Candra</td>
                            <td><a href="#">proposal_se_1.pdf</a></td>
                            <td></td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pengembangan Software dengan Metode Scrum bersama Metrodata</td>
                            <td>Online</td>
                            <td><a href="#">bg_software_metrodata.jpg</a></td>
                            <td><a href="#">flyer_software_metrodata.jpg</a></td>
                            <td>Google Meet</td>
                            <td>https://meet.google.com/ujs-pqfz-kyk</td>
                            <td>2022-03-11</td>
                            <td>13:30 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>Arief</td>
                            <td><a href="#">proposal_imk_1.pdf</a></td>
                            <td></td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Effective Scheduling Program with C#</td>
                            <td>Online</td>
                            <td><a href="#">bg_scheduling.jpg</a></td>
                            <td><a href="#">flyer_scheduling.jpg</a></td>
                            <td>Google Meet</td>
                            <td>https://meet.google.com/vou-wwoa-hcb</td>
                            <td>2022-03-29</td>
                            <td>10:00 WIB</td>
                            <td>1 Jam 30 Menit</td>
                            <td>David</td>
                            <td><a href="#">proposal_arsikom_1.pdf</a></td>
                            <td></td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Blockchain: Immutability, Security, Transparency</td>
                            <td>Online</td>
                            <td><a href="#">bg_transformasi_digital.jpg</a></td>
                            <td><a href="#">flyer_transformasi_digital.jpg</a></td>
                            <td>Zoom</td>
                            <td>https://zoom.us/j/96968536381?pwd=MitNL0tiR05DcUE2OElCaU9SamJ6Zz09</td>
                            <td>2022-04-01</td>
                            <td>13:30 WIB</td>
                            <td>2 Jam 0 Menit</td>
                            <td>Putri</td>
                            <td><a href="#">proposal_ml_1.pdf</a></td>
                            <td></td>
                            <td class="d-flex align-items-center">
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
