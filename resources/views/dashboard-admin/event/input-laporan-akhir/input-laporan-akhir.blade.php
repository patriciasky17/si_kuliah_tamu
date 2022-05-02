@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Form Event Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Input Pembicara ke Event</h6>
                    <form action='{{ route('event.storeLaporanAkhir') }}' method='post' enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEvent" class="col-sm-2 col-form-label">Nama Event</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputEvent" name="id_event">
                                    <option selected>Pilih...</option>
                                    @forelse ($event as $e)
                                        <option value="{{ $e->id_event }}">
                                            <span class="idEvent">{{ $e->id_event }}</span> - 
                                            <span class="namaEvent">{{ $e->nama_event }}</span> -
                                            <span class="institusiEvent">{{ $e->tanggal_pelaksanaan }}</span>
                                        </option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputLaporanAkhirEvent" class="col-sm-2 col-form-label">Laporan Akhir</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="inputLaporanAkhirEvent" name="laporan_akhir">
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
