@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Form Article Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Input Dokumentasi Event</h6>
                    <form>

                        <div class="row mb-3">
                            <label for="inputJudulArtikel" class="col-sm-2 col-form-label">Judul Artikel</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputJudulArtikel">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputRingkasanArtikel" class="col-sm-2 col-form-label">Isi Artikel</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputRingkasanArtikel" style="height: 150px;"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputAuthorArtikel" class="col-sm-2 col-form-label">Author</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputAuthorArtikel">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4 d-flex justify-content-between align-items-center">
                    <h6 class="mb-4" style="margin-top:15px;">Input Foto untuk Artikel</h6>
                    <button type="submit" class="btn btn-outline-success m-2">Tambah dokumentasi</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 20px;">
                        <h6 class="mb-4" style="margin-top:15px">Input Foto 1</h6>
                    </div>
                    <form>
                        <div class="row mb-3">
                            <label for="inputDokumentasiDariEvent" class="col-sm-2 col-form-label">Event</label>
                            <div class="col-sm-10" style="margin-bottom: 20px;">
                                <select class="form-select form-control" id="inputDokumentasiDariEvent">
                                    <option selected>Pilih...</option>
                                    <option>
                                        <span class="idEvent">1</span> - <span class="namaEvent">Sesi 9 : Define - Design - Develop, Strategi Penerapan Transformasi Digital</span>
                                    </option>
                                    <option>
                                        <span class="idEvent">2</span> - <span class="namaEvent">Social Engineering dengan Dana</span>
                                    </option>
                                    <option>
                                        <span class="idEvent">3</span> - <span class="namaEvent">Pengembangan Software dengan Metode Scrum bersama Metrodata</span>
                                    </option>
                                    <option>
                                        <span class="idEvent">4</span> - <span class="namaEvent">Effective Scheduling Program with C#</span>
                                    </option>
                                    <option>
                                        <span class="idEvent">5</span> - <span class="namaEvent">Blockchain: Immutability, Security, Transparency</span>
                                    </option>
                                </select>
                            </div>

                            <label for="inputFotoDariDokumentasiEvent" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputFotoDariDokumentasiEvent">
                                    <option selected>Pilih...</option>
                                    <option>
                                        <span class="PilihanFotoDokumentasi">1</span>
                                    </option>
                                    <option>
                                        <span class="PilihanFotoDokumentasi">2</span>
                                    </option>
                                    <option>
                                        <span class="PilihanFotoDokumentasi">1 & 2</span>
                                    </option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 20px;">
                        <h6 class="mb-4" style="margin-top:15px">Input Foto 2</h6>
                        <button type="submit" class="btn btn-outline-danger">X</button>
                    </div>
                    <form>
                        <div class="row mb-3">
                            <label for="inputDokumentasiDariEvent" class="col-sm-2 col-form-label">Event</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputDokumentasiDariEvent">
                                    <option selected>Pilih...</option>
                                    <option>
                                        <span class="idEvent">1</span> - <span class="namaEvent">Sesi 9 : Define - Design - Develop, Strategi Penerapan Transformasi Digital</span>
                                    </option>
                                    <option>
                                        <span class="idEvent">2</span> - <span class="namaEvent">Social Engineering dengan Dana</span>
                                    </option>
                                    <option>
                                        <span class="idEvent">3</span> - <span class="namaEvent">Pengembangan Software dengan Metode Scrum bersama Metrodata</span>
                                    </option>
                                    <option>
                                        <span class="idEvent">4</span> - <span class="namaEvent">Effective Scheduling Program with C#</span>
                                    </option>
                                    <option>
                                        <span class="idEvent">5</span> - <span class="namaEvent">Blockchain: Immutability, Security, Transparency</span>
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputFotoDariDokumentasiEvent" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputFotoDariDokumentasiEvent">
                                    <option selected>Pilih...</option>
                                    <option>
                                        <span class="PilihanFotoDokumentasi">1</span>
                                    </option>
                                    <option>
                                        <span class="PilihanFotoDokumentasi">2</span>
                                    </option>
                                    <option>
                                        <span class="PilihanFotoDokumentasi">1 & 2</span>
                                    </option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                        <button type="submit" class="btn btn-outline-warning m-2 float-end w-100">Update Artikel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Article Ends -->
@endsection
