@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Form PIC Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Input PIC</h6>
                    <form>
                        <div class="row mb-3">
                            <label for="inputNamaPembicara" class="col-sm-2 col-form-label">Nama PIC</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNamaPembicara" name="nama_dosen">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputProdiPembicara" class="col-sm-2 col-form-label">Prodi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputProdiPembicara" name="prodi">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-outline-warning m-2 float-end">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form PIC Ends -->
@endsection
