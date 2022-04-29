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

                        <br>

                        <div class="d-flex justify-content-between">
                            <h6 class="mb-4" style="margin-top:15px;">Input Foto untuk Artikel</h6>
                            <button type="button" id="add-documentation-event"
                                class="add btn btn-outline-success m-2 add_field">Tambah dokumentasi foto</button>
                        </div>

                        <br>

                        <div class="row mb-3" id="input-multiple-foto">
                            <label for="inputDokumentasiDariEvent" class="col-sm-2 col-form-label">Event</label>
                            <div class="col-sm-9" style="margin-bottom: 20px;">
                                <select class="form-select form-control" id="inputDokumentasiDariEvent" name="id_event[]">
                                    <option selected>Pilih...</option>
                                    @forelse ($event as $e)
                                        <option value="{{ $e->id_dokumentasi }}">
                                            <span class="idEvent">{{ $e->id_event }}</span> - <span
                                                class="namaEvent">{{ $e->nama_event }}</span>
                                        </option>
                                    @empty
                                    @endforelse

                                    @error('id_event')
                                        {{ $message }}
                                    @enderror
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-warning m-2 float-end w-100">Submit Dokumentasi</button>
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
