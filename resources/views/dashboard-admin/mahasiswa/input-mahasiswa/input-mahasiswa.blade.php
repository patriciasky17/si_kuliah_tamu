@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Form Mahasiswa Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Input Data Mahasiswa</h6>
                    <form action="{{ route('mahasiswa.store') }}" method='POST'>
                        {{-- @method('DELETE') --}}
                        {{-- enctype="multipart/form-data" --}}
                        @csrf
                        <div class="row mb-3">
                            <label for="inputNIMMahasiswa" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNIMMahasiswa" name="nim">
                                @error('nim')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputNamaMahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNamaMahasiswa" name="nama_mahasiswa">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputJenisKelaminMahasiswa" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputJenisKelaminMahasiswa" name="jenis_kelamin">
                                    <option selected>Pilih...</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputProdiMahasiswa" class="col-sm-2 col-form-label">Prodi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputProdiMahasiswa" name="prodi">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputAngkatanMahasiswa" class="col-sm-2 col-form-label">Angkatan</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputAngkatanMahasiswa" name='angkatan'>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-outline-warning m-2 float-end">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Mahasiswa Ends -->
@endsection

