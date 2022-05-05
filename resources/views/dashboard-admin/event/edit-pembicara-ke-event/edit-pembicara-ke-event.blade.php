@extends('dashboard-admin.partials-main.main')

@section('main')
    <!-- Form Event Starts -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    @if ($event->id_pembicara != null)
                    <h6 class="mb-4">Edit Pembicara ke Event - {{ $event->nama_event }}</h6>
                    <form action="{{ route('event.editPembicara', $event->id_event) }}" method='POST' enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="inputPembicaraEvent" class="col-sm-2 col-form-label select-label">Pembicara</label>
                            <div class="col-sm-10" style="margin-top: 10px">
                                    @forelse ($pembicara as $p)
                                    <div class="multiple-checkbox" style="margin-bottom: 5px">
                                        <input type="checkbox" class="custom-control-input" id="customCheckBox1" name="id_pembicara[]" value="{{ $p->id_pembicara }}">
                                        <span class="id-pembicara">{{ $p->id_pembicara }}</span> - <span class="nama-pembicara">{{ $p->nama }}</span> - <span class="institusi-pembicara">{{ $p->institusi }}</span>
                                    </div>
                                    @empty
                                    @endforelse
                                </select>
                                @error('id_pembicara[]')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-warning m-2 float-end">Update Pembicara ke Event</button>
                    </form>
                    @endif

                    @if ($event->id_pembicara == null)
                    <h6 class="mb-4">Input Pembicara ke Event</h6>
                    <form action="{{ route('event.storePembicara') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputDokumentasiDariEvent" class="col-sm-2 col-form-label">Event</label>
                            <div class="col-sm-10">
                                <select data-placeholder="Pilih 1 atau lebih pembicara" class="form-select form-control" id="inputDokumentasiDariEvent chosen-select" name='id_event'>
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
                            <label for="inputPembicaraEvent" class="col-sm-2 col-form-label select-label">Pembicara</label>
                            <div class="col-sm-10" style="margin-top: 10px">
                                    @forelse ($pembicara as $p)
                                    <div class="multiple-checkbox" style="margin-bottom: 5px">
                                        <input type="checkbox" class="custom-control-input" id="customCheckBox1" name="id_pembicara[]" value="{{ $p->id_pembicara }}">
                                        <span class="id-pembicara">{{ $p->id_pembicara }}</span> - <span class="nama-pembicara">{{ $p->nama }}</span> - <span class="institusi-pembicara">{{ $p->institusi }}</span>
                                    </div>
                                    @empty
                                    @endforelse
                                </select>
                                @error('id_pembicara[]')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-outline-warning m-2 float-end">Submit Event</button>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- Form Event Ends -->
@endsection
