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
    <div class="row mb-3">
        <label for="inputPresensiUser" class="col-sm-1 col-form-label">Name :</label>
        <div class="col-sm-5">
            <input type="text" class="form-control disabled" id="inputPresensiUser" name="nama_mahasiswa">
            @error('nama_mahasiswa')
                <p class="text-danger"><i>{{ $message }}</i></p>
            @enderror
        </div>
    </div>

</div>
@endsection
