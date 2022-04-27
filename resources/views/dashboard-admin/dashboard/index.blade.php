@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Dashboard 4 Grid Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-warning"></i>
                    <div class="ms-3">
                        <p class="mb-2">Jumlah Kuliah Tamu</p>
                        <h6 class="mb-0">43</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-warning"></i>
                    <div class="ms-3">
                        <p class="mb-2">Jumlah Mahasiswa</p>
                        <h6 class="mb-0">65</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-warning"></i>
                    <div class="ms-3">
                        <p class="mb-2">Jumlah Artikel Post</p>
                        <h6 class="mb-0">17</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-warning"></i>
                    <div class="ms-3">
                        <p class="mb-2">Jumlah Dokumentasi</p>
                        <h6 class="mb-0">24</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard 4 Grid End -->

    <!-- Kuliah Tamu Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Tata Cara</h6>
            </div>
            <p><b>Selamat datang di dashboard admin kuliah tamu Pradita University!</b></p>
            <p>Silahkan ikuti petunjuk berikut untuk mendata event</p>
            <ol>
                <li>Daftarkan terlebih dahulu proposal</li>
                <li>Daftarkan pembicara yang ada dalam event.<b>*</b></li>
                <li>Masukkan PIC yang bersangkutan dalam event tersebut.<b>*</b></li>
                <li>Masukkan data event kuliah tamu yang akan diselenggarakan</li>
            </ol>
            <p><i><b>*</b> = Jika sudah ditambahkan sebelumnya, maka tahap ini bisa dilewati</i></p>

            <hr>

            <p>Untuk data mahasiswa, perlu ditambahkan terlebih dahulu!</p>

            <p>Setelah event sudah terlaksana, ikuti petunjuk berikut!</p>
            <ol>
                <li>Masukkan dokumentasi berupa foto atau video (foto maksimal 2 dan link video maksimal 1 ). Jangan lupa pilih event yang bersangkutan.</li>
                <li>Jika ingin mengetik ringkasan yang ada pada event, masukkan ke dalam bagian posts.</li>
            </ol>
            </p>
        </div>
    </div>
    <!-- Kuliah Tamu End -->
@endsection
