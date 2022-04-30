@extends('dashboard-admin.partials-main.main')

@section('css')
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

    <!-- Custom CSS By Kelompok 2 -->
    <link href="./assets/css/style-proposal.css" rel="stylesheet">
@endsection

@section('main')
    @if (session()->has('success'))
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded p-4">
                <div class="alert alert-success col-lg-8" role="alert">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif

    <!-- Data Proposal Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Proposal Kuliah Tamu</h6>
            </div>


            <div class="table-responsive">
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">ID Proposal</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">File Proposal</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th scope="col">ID Proposal</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">File Proposal</th>
                            <th scope="col">Details</th>
                        </tr>
                    </tfoot>

                    <tbody>

                        @forelse ( $proposal as $p)
                            <tr>
                                <td>{{ $p->id_proposal }}</td>
                                <td>{{ $p->mata_kuliah }}</td>
                                <td><a href="{{ $p->file_proposal }}">{{ $p->file_proposal }}</a></td>
                                <td class="d-flex align-items-center">
                                    <a class="btn btn-sm btn-outline-info w-100" href="#">Detail</a>
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
    <!-- Data Proposal End -->

    <!-- Latar Belakang & Tujuan Kegiatan Starts Here -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Latar Belakang dan Tujuan Kegiatan -
                    <span class="Mata Kuliah">Social Engineering</span>
                </h6>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="bg-light rounded h-100 p-4" style="border: 1px solid rgb(193, 193, 193); border-radius: 10px;">
                        <h6 class="mb-4">Latar Belakang</h6>
                        <p class="isi-latar-belakang-proposal text-muted">
                            Dalam menciptakan sumber daya manusia yang berkualitas, perguruan tinggi perlu bekerja
                            sama dengan dunia industri untuk menyelaraskan pengetahuan dan keterampilan yang
                            diberikan kepada mahasiswa. Dalam proses pembelajaran, mahasiswa diharapkan memahami dan
                            memperluas wawasan dalam menerapkan pengetahuan yang telah diperoleh dalam perkuliahan
                            ke dalam dunia kerja yang sesungguhnya. Oleh karena itu, sharing best practice dari
                            dunia industri diperlukan. Dengan adanya kuliah tamu ini program studi informatika
                            mengundang narasumber langsung dari dunia industri untuk berbagi pengalaman dalam
                            mengantisipasi dan memitigasi bahaya social engineering.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="bg-light rounded h-100 p-4" style="border: 1px solid rgb(193, 193, 193); border-radius: 10px;">
                        <h6 class="mb-4">Tujuan Kegiatan</h6>
                        <p class="isi-tujuan-kegiatan-proposal text-muted">
                            Mahasiswa mendapatkan sharing best practice bagaimana indsutri mengantisipasi dan
                            memitigasi bahaya social engineering.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Latar Belakang & Tujuan Kegiatan Ends Here -->



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
