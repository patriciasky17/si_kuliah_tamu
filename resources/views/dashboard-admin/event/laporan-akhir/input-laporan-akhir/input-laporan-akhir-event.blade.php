@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Form Laporan Akhir Event Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Input Laporan Akhir Event</h6>
                    <form>
                        <div class="row mb-3">
                            <label for="inputProposalEvent" class="col-sm-2 col-form-label">Nama Event</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputProposalEvent">
                                    <option selected>Pilih...</option>
                                    <option>
                                        <span class="id-event">1</span> -
                                        <span class="mata-kuliah">Sesi 9 : Define - Design - Develop, Strategi Penerapan Transformasi Digital</span> -
                                        <span class="file-proposal">(2022-02-23)</span>
                                    </option>
                                    <option>
                                        <span class="id-event">2</span> -
                                        <span class="mata-kuliah">Social Engineering dengan Dana</span> -
                                        <span class="file-proposal">(2022-03-25)</span>
                                    </option>
                                    <option>
                                        <span class="id-event">3</span> -
                                        <span class="mata-kuliah">Pengembangan Software dengan Metode Scrum bersama Metrodatar</span> -
                                        <span class="file-proposal">(2022-03-11)</span>
                                    </option>
                                    <option>
                                        <span class="id-event">4</span> -
                                        <span class="mata-kuliah">Effective Scheduling Program with C#</span> -
                                        <span class="file-proposal">(2022-03-29)</span>
                                    </option>
                                    <option>
                                        <span class="id-event">5</span> -
                                        <span class="mata-kuliah">Blockchain: Immutability, Security, Transparency</span> -
                                        <span class="file-proposal">(2022-04-01)</span>
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputLaporanAkhirEvent" class="col-sm-2 col-form-label">Laporan Akhir</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="inputLaporanAkhirEvent">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-outline-warning m-2 float-end">Submit Laporan Akhir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Laporan Akhir Event Ends -->
@endsection
