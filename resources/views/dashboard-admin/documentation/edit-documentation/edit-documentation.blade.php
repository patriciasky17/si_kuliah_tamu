@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Form Dokumentasi Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Input Dokumentasi Event</h6>
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
                            <label for="inputFotoDokumentasi1" class="col-sm-2 col-form-label">Foto 1</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="inputFotoDokumentasi1">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputFotoDokumentasi2" class="col-sm-2 col-form-label">Foto 2</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="inputFotoDokumentasi2">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputLinkVideoDokumentasi" class="col-sm-2 col-form-label">Link Video</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputLinkVideoDokumentasi">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputFeedbackDokumentasi" class="col-sm-2 col-form-label">Feedback</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="inputFeedbackDokumentasi">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-outline-warning m-2 float-end">Update Dokumentasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Dokumentasi Ends -->
@endsection
