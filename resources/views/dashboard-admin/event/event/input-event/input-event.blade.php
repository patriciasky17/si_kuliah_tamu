@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Form Event Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Input Event</h6>
                    <form>
                        <div class="row mb-3">
                            <label for="inputNamaEvent" class="col-sm-2 col-form-label">Nama Event</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNamaEvent">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputCaraPelaksanaanEvent" class="col-sm-2 col-form-label">Cara Pelaksanaan</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputCaraPelaksanaanEvent">
                                    <option selected>Pilih...</option>
                                    <option value="Offline">Offline</option>
                                    <option value="Online">Online</option>
                                    <option value="Hybrid">Hybrid</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputBackgroundEvent" class="col-sm-2 col-form-label">Background</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="inputBackgroundEvent">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputFlyerEvent" class="col-sm-2 col-form-label">Flyer</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="inputFlyerEvent">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputLinkEvent" class="col-sm-2 col-form-label">Link</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputLinkEvent">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputTanggalPelaksanaanEvent" class="col-sm-2 col-form-label">Tanggal Pelaksanaan</label>
                            <div class="col-sm-10">
                                <input type="date" placeholder="yyyy-mm-dd" class="form-control" min="1997-01-01" max="2080-12-31" id="inputTanggalPelaksanaanEvent">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputWaktuMulaiEvent" class="col-sm-2 col-form-label">Waktu Mulai</label>
                            <div class="col-sm-10">
                                <input type="time"  class="form-control" id="inputWaktuMulaiEvent">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputWaktuSelesaiEvent" class="col-sm-2 col-form-label">Waktu Selesai</label>
                            <div class="col-sm-10">
                                <input type="time"  class="form-control" id="inputWaktuSelesaiEvent">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPICEvent" class="col-sm-2 col-form-label">PIC</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputPICEvent">
                                    <option selected>Pilih...</option>
                                    <option value="Offline">Aditya</option>
                                    <option value="Online">Arief</option>
                                    <option value="Hybrid">Putri</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputProposalEvent" class="col-sm-2 col-form-label">Proposal</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputProposalEvent">
                                    <option selected>Pilih...</option>
                                    <option>
                                        <span class="id-proposal">1</span> -
                                        <span class="mata-kuliah">Social Engineering</span> -
                                        <span class="file-proposal">proposal_se_1.pdf</span>
                                    </option>
                                    <option>
                                        <span class="id-proposal">2</span> -
                                        <span class="mata-kuliah">Interaksi Manusia dan Komputer</span> -
                                        <span class="file-proposal">proposal_imk_1.pdf</span>
                                    </option>
                                    <option>
                                        <span class="id-proposal">3</span> -
                                        <span class="mata-kuliah">Arsitektur komputer</span> -
                                        <span class="file-proposal">proposal_arsikom_1.pdf</span>
                                    </option>
                                    <option>
                                        <span class="id-proposal">4</span> -
                                        <span class="mata-kuliah">Pemrograman Web</span> -
                                        <span class="file-proposal">proposal_pemrograman_website_1.pdf</span>
                                    </option>
                                    <option>
                                        <span class="id-proposal">5</span> -
                                        <span class="mata-kuliah">Komputasi Kinerja Tinggi</span> -
                                        <span class="file-proposal">proposal_hpc_1.pdf</span>
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPembicaraEvent" class="col-sm-2 col-form-label">Pembicara</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputPembicaraEvent" multiple>
                                    <option>
                                        <span class="id-pembicara">1</span> -
                                        <span class="nama-pembicara">Vina Fitria</span> -
                                        <span class="institusi-pembicara">Dana</span>
                                    </option>
                                    <option>
                                        <span class="id-pembicara">2</span> -
                                        <span class="nama-pembicara">Misbah Munirin Alkhafadh</span> -
                                        <span class="institusi-pembicara">Metrodata</span>
                                    </option>
                                    <option>
                                        <span class="id-pembicara">3</span> -
                                        <span class="nama-pembicara">Fahrizal Husein</span> -
                                        <span class="institusi-pembicara">DANA</span>
                                    </option>
                                    <option>
                                        <span class="id-pembicara">4</span> -
                                        <span class="nama-pembicara">Antonio Andre</span> -
                                        <span class="institusi-pembicara">DANA</span>
                                    </option>
                                    <option>
                                        <span class="id-pembicara">5</span> -
                                        <span class="nama-pembicara">Bpk. Ryan Ari Setyawan, S.Kom., M.Eng.</span> -
                                        <span class="institusi-pembicara">Fakultas Teknik Universitas Janabadra</span>
                                    </option>
                                </select>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-outline-warning m-2 float-end">Submit Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Event Ends -->
@endsection
