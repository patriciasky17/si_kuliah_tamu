@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Form Proposal Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Input Proposal</h6>
                    <form>
                        <div class="row mb-3">
                            <label for="inputMataKuliahProposal" class="col-sm-2 col-form-label">Mata Kuliah</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputMataKuliahProposal">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputLatarBelakangProposal" class="col-sm-2 col-form-label">Latar Belakang</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputLatarBelakangProposal" style="height: 150px; min-height: 50px;" ></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputTujuanKegiatanProposal" class="col-sm-2 col-form-label">Tujuan Kegiatan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputTujuanKegiatanProposal" style="height: 150px; min-height: 50px;" ></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputFileProposal" class="col-sm-2 col-form-label">File Proposal</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="inputFileProposal">
                            </div>

                        </div>

                        <button type="submit" class="btn btn-outline-warning m-2 float-end">Submit Proposal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Proposal End -->
@endsection