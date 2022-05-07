@section("main")
<div class="container" style="margin-top: 150px;">
    <h5>PRESENSI</h5>

    <br>

    <p><b>Kuliah Tamu : </b> "<span class="nama_event">Social Engineering</span>" - <span class="nama_event">27 Februari 2022</span></p>
    <p><b>Pembicara : </b><span class="nama_pembicara">Theresia Herlina</span></p>

    <br>

    <div class="col-md-6 col-sm-12">
        <div class="row mb-3">
            <label for="inputPresensiUser" class="col-sm-2 col-form-label">NIM :</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPresensiUser" name="nim">
                @error('nim')
                    <p class="text-danger"><i>{{ $message }}</i></p>
                @enderror
            </div>
        </div>
    </div>

    <br>
    <p><b>Check your data before submitting your attendance</b></p>
    <br>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="row mb-3">
                <label for="DeteksiNamaUser" class="col-sm-2 col-form-label"><b>Name :</b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="DeteksiNamaUser" name="nama_mahasiswa" disabled>
                    @error('nama_mahasiswa')
                        <p class="text-danger"><i>{{ $message }}</i></p>
                    @enderror
                </div>
            </div>
            <br>

            <div class="row mb-3">
                <label for="deteksiJenisKelaminUser" class="col-sm-2 col-form-label"><b>Gender :</b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="deteksiJenisKelaminUser" name="jenis_kelamin" disabled>
                    @error('jenis_kelamin')
                        <p class="text-danger"><i>{{ $message }}</i></p>
                    @enderror
                </div>
            </div>
            <br>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="row mb-3">
                <label for="deteksiProdiUser" class="col-sm-2 col-form-label"><b>Major :</b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="deteksiProdiUser" name="prodi" disabled>
                    @error('nama_mahasiswa')
                        <p class="text-danger"><i>{{ $message }}</i></p>
                    @enderror
                </div>
            </div>
            <br>

            <div class="row mb-3">
                <label for="deteksiAngkatanUser" class="col-sm-2 col-form-label"><b>Year :</b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="deteksiAngkatanUser" name="angkatan" disabled>
                    @error('angkatan')
                        <p class="text-danger"><i>{{ $message }}</i></p>
                    @enderror
                </div>
            </div>
            <br>
        </div>
    </div>

</div>
<!-- End of Documentation -->
@endsection
