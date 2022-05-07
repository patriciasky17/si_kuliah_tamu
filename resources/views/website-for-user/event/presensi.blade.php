@extends('website-for-user.partials-main.main')
@section("main")
<div class="container">
    <h5>PRESENSI</h5>

    <br>

    <p>Kuliah Tamu : "<span class="nama_event">Social Engineering</span>" - <span class="nama_event">27 Februari 2022</span></p>
    <p>Pembicara : <span class="nama_pembicara">Theresia Herlina</span></p>

    <br>

    <div class="row mb-3">
        <label for="inputPresensiUser" class="col-sm-2 col-form-label">NIM :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPresensiUser" name="nim">
            @error('nim')
                <p class="text-danger"><i>{{ $message }}</i></p>
            @enderror
        </div>
    </div>

    <p>Check your data before submitting your attendance</p>
    <div class="row">
        <div class="col-6">
            <div class="row mb-3">
                <label for="DeteksiNamaUser" class="col-sm-2 col-form-label">Name :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control disabled" id="DeteksiNamaUser" name="nama_mahasiswa">
                    @error('nama_mahasiswa')
                        <p class="text-danger"><i>{{ $message }}</i></p>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="deteksiJenisKelaminUser" class="col-sm-2 col-form-label">Gender :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control disabled" id="deteksiJenisKelaminUser" name="jenis_kelamin">
                    @error('jenis_kelamin')
                        <p class="text-danger"><i>{{ $message }}</i></p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="row mb-3">
                <label for="deteksiProdiUser" class="col-sm-2 col-form-label">Major :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control disabled" id="deteksiProdiUser" name="prodi">
                    @error('nama_mahasiswa')
                        <p class="text-danger"><i>{{ $message }}</i></p>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="deteksiAngkatanUser" class="col-sm-2 col-form-label">Year :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control disabled" id="deteksiAngkatanUser" name="angkatan">
                    @error('angkatan')
                        <p class="text-danger"><i>{{ $message }}</i></p>
                    @enderror
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
