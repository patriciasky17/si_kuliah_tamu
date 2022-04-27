@extends('dashboard-admin.partials-main.main')

@section('css')
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@endsection

@section('main')
    <!-- Laporan Akhir Event Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Laporan Akhir Kuliah Tamu</h6>
            </div>

            <div class="table-responsive">
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">ID Event</th>
                            <th scope="col">Nama Event</th>
                            <th scope="col">File Laporan Akhir</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th scope="col">ID Event</th>
                            <th scope="col">Nama Event</th>
                            <th scope="col">File Laporan Akhir</th>
                            <th scope="col">Details</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sesi 9 : Define - Design - Develop, Strategi Penerapan Transformasi Digital</td>
                            <td><a href="#">laporan_akhir_transformasi_digital.pdf</a></td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Social Engineering dengan Dana</td>
                            <td><a href="#">laporan_akhir_sc_dana.pdf</a></td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pengembangan Software dengan Metode Scrum bersama Metrodata</td>
                            <td><a href="#">laporan_akhir_software_metrodata.pdf</a></td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Effective Scheduling Program with C#</td>
                            <td><a href="#">laporan_akhir_scheduling.pdf</a></td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Blockchain: Immutability, Security, Transparency</td>
                            <td><a href="#">laporan_akhir_blockchain.pdf</td>
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
    <!-- Laporan Akhir Event End -->


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
