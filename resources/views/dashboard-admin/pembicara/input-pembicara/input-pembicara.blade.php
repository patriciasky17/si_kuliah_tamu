@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Form Pembicara Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Input Pembicara</h6>
                    <form>
                        <div class="row mb-3">
                            <label for="inputNamaPembicara" class="col-sm-2 col-form-label">Nama Pembicara</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNamaPembicara">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputInstitusiPembicara" class="col-sm-2 col-form-label">Institusi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputInstitusiPembicara">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputJabatanPembicara" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputJabatanPembicara">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputFotoPembicara" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="inputFotoPembicara">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputCVPembicara" class="col-sm-2 col-form-label">CV</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="inputCVPembicara">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputNPWPPembicara" class="col-sm-2 col-form-label">NPWP</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputNPWPPembicara">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputBankPembicara" class="col-sm-2 col-form-label">Bank</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputBankPembicara">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputNoRekeningPembicara" class="col-sm-2 col-form-label">No. Rekening</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputNoRekeningPembicara">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputSertifikatPembicara" class="col-sm-2 col-form-label">Sertifikat</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="inputSertifikatPembicara">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-outline-warning m-2 float-end">Submit Pembicara</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Pembicara Ends -->
@endsection
