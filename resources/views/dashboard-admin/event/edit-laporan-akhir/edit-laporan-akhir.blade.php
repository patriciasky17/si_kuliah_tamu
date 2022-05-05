@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Form Event Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">

                    {{-- Jika laporan akhir sudah ada --}}
                    @if ($event->laporan_akhir != null)
                    <h6 class="mb-4">Edit Laporan Akhir Event</h6>
                    <form action="{{ route('event.editLaporanAkhir', $event->id_event) }}" method='POST' enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="inputLaporanAkhirEvent" class="col-sm-2 col-form-label">Laporan Akhir</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="hidden" name='oldlaporan_akhir' value='{{ $event->laporan_akhir != NULL ? $event->laporan_akhir : '' }}'>
                                <input class="form-control" type="file" id="inputLaporanAkhirEvent" name="laporan_akhir">
                                @if ($event->laporan_akhir)
                                    {{ 'Ini adalah dokumen yang telah di upload ' . $event->laporan_akhir }}
                                @endif
                                @error('laporan_akhir')
                                    <p class="text-danger"><i>{{ $message }}</i></p>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-outline-warning m-2 float-end">Update Laporan Akhir</button>
                    </form>
                    @endif

                    {{-- Jika laporan akhir belum ada --}}
                    @if ($event->laporan_akhir == null)
                    <h6 class="mb-4">Input Laporan Akhir Event</h6>
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
                                @error('id_event')
                                    <p class="text-danger"><i>{{ $message }}</i></p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputLaporanAkhirEvent" class="col-sm-2 col-form-label">Laporan Akhir</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="inputLaporanAkhirEvent" name="laporan_akhir">
                                @error('laporan_akhir')
                                    <p class="text-danger"><i>{{ $message }}</i></p>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-outline-warning m-2 float-end">Submit Laporan Akhir</button>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- Form Event Ends -->
@endsection
