@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Form Event Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Input Pembicara ke Event</h6>
                    <form action="{{ route('event.storePembicara') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputDokumentasiDariEvent" class="col-sm-2 col-form-label">Event</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputDokumentasiDariEvent" name='id_event'>
                                    <option selected value=''>Pilih...</option>
                                    @forelse ($event as $e)
                                        <option value="{{ $e->id_event }}">
                                            <span class="idEvent">{{ $e->id_event }}</span> - <span class="namaEvent">{{ $e->nama_event }}</span>
                                        </option>
                                    @empty

                                    @endforelse
                                </select>
                                @error('id_event')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPembicaraEvent" class="col-sm-2 col-form-label">Pembicara</label>
                            <div class="col-sm-10">
                                <select class="form-select form-control" id="inputPembicaraEvent" multiple name="id_pembicara">
                                    @forelse ($pembicara as $p)
                                        <option value="{{ $p->id_pembicara }}">
                                            <span class="id-pembicara">{{ $p->id_pembicara }}</span> -
                                            <span class="nama-pembicara">{{ $p->nama }}</span> -
                                            <span class="institusi-pembicara">{{ $p->institusi }}</span>
                                        </option>
                                    @empty

                                    @endforelse
                                </select>
                                @error('id_pembicara')
                                    <p class="text-danger"><i>{{ $message }}</i></p>
                                @enderror
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
