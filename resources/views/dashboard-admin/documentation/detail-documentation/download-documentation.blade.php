@extends('dashboard-admin.partials-main.main')

@section('css')
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

    <!-- Custom CSS by Group 2 -->
    <link href="./assets/css/style-download-documentation.css" rel="stylesheet">
@endsection

@section('main')
    <!-- Data Dokumentasi Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Dokumentasi Event</h6>
            </div>


            <div class="table-responsive">
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">ID Dokumentasi</th>
                            <th scope="col">Nama Event</th>
                            <th scope="col">Feedback</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th scope="col">ID Dokumentasi</th>
                            <th scope="col">Nama Event</th>
                            <th scope="col">Feedback</th>
                            <th scope="col">Details</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @forelse ($documentation as $d)
                            <tr>
                                <td>{{ $d->id_dokumentasi }}</td>
                                <td>{{ $d->nama_event }}</td>
                                <td><a href="/dokumentasi/{{ $d->feedback }}">{{ $d->feedback }}</a></td>
                                <td class="d-flex align-items-center">
                                    <a class="btn btn-sm btn-outline-info w-100" href="{{ route('documentation.index') . '?id_dokumentasi=' . $d->id_dokumentasi  }}">Detail</a>
                                    <a class="btn btn-sm btn-outline-warning w-100" href="{{ route('documentation.edit',$d->id_dokumentasi) }}">Edit</a>
                                    <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <div class="alert alert-info text-center">
                                        <h5 class="text-center">Tidak ada data</h5>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Data Dokumentasi Ends -->

    <!-- Download Dokumentasi Starts Here -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-justify rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Download Dokumentasi</h6>
            </div>

            <div class="row">
                <div class="col-md-5 col-sm-12 d-flex justify-content-center">
                    <img class="img-fluid mx-auto documentation-photo" src="./assets/img/profile-picture-test1.jfif">
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="bg-light rounded h-100">
                        <h6 class="mb-4"><span class="nama-pembicara">Sesi 9 : Define - Design - Develop, Strategi Penerapan Transformasi Digital</span></h6>
                        <dl class="row mb-0">
                            <dt class="col-sm-4">Foto Dokumentasi</dt>
                            <dd class="col-sm-8">
                                <a class="btn btn-sm btn-outline-info"  href="#">Show</a>
                                <a class="btn btn-sm btn-outline-warning" href="#">Download Foto 1</a>
                            </dd>

                            <dt class="col-sm-4"></dt>
                            <dd class="col-sm-8">
                                <a class="btn btn-sm btn-outline-info"  href="#">Show</a> <!--kalau gak ada kasih - aja-->
                                <a class="btn btn-sm btn-outline-warning" href="#">Download Foto 2</a> <!--kalau gak ada kasih - aja-->
                            </dd>

                            <dt class="col-sm-4">Video Dokumentasi</dt>
                            <dd class="col-sm-8"><a class="btn btn-sm btn-outline-warning" href="#">Download Video</a></dd>

                            <dt class="col-sm-12" style="margin-bottom: 30px; margin-top: 30px;"></dt>

                            <dt class="col-sm-4">Feedback</dt>
                            <dd class="col-sm-8"><a class="btn btn-sm btn-outline-warning" href="#">Download Feedback</a></dd>
                        </dl>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Download Dokumentasi Ends Here -->

    <!-- Footer Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    &copy; Copyright 2022. Pradita University, All Right Reserved.
                </div>
                <div class="col-12 col-sm-6 text-center text-sm-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <b>Group 2 - IT 2021</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

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
