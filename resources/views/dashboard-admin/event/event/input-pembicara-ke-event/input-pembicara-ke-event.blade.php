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
                                <input type="text" class="form-control" id="inputNamaEvent" name="name_event">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPembicaraEvent" class="col-sm-2 col-form-label">Pembicara</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputPembicaraEvent" multiple name="id_pembicara">
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
