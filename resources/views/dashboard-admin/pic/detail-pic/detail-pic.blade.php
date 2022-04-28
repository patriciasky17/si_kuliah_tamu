@extends('dashboard-admin.partials-main.main')

@section('css')
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@endsection

@section('main')
    <!-- PIC Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Person In Charge</h6>
            </div>


            <div class="table-responsive">
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">ID PIC</th>
                            <th scope="col">Nama Dosen</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th scope="col">ID PIC</th>
                            <th scope="col">Nama Dosen</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Details</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @forelse ( $pic as $personincharge)
                            <tr>
                                <td>{{ $personincharge->id_pic }}</td>
                                <td>{{ $personincharge->nama_dosen }}</td>
                                <td>{{ $personincharge->prodi }}</td>
                                <td class="d-flex align-items-center">
                                    <a class="btn btn-sm btn-outline-warning w-100" href="#">Edit</a>
                                    <a class="btn btn-sm btn-outline-danger w-100" href="#">Delete</a>
                                </td>
                            </tr>
                            @empty
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- PIC End -->

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
