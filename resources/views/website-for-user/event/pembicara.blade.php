@extends('website-for-user.partials-main.main')
@section('css')
<!-- Data Tables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">

@endsection

@section('main')
<div class="container">
    <h5>SPEAKER</h5>
    <div class="row">
        <div class="col-sm-3 col-12">
            <img src = "https://career.summarecon.com/public/images/post/big/executive-secretary-to-pradita-institute.jpg" alt= "foto" class ="documentation-photo">
        </div>

        <div class="col-sm-9 col-12">
            <p><b>Name: </b>\t <span class="nama_pembicara">Theresia Herlina</span></p>
            <p><b>Institution: </b>\t <span class="institusi_pembicara">Pradita University  </span></p>
            <p><b>Position: </b>\t <span class="nama_pembicara">Lecturer</span></p>
        </div>
    </div>

    <h6>SPEAKER'S HISTORY</h6>

    <div class="table-responsive">
        <table border="0" cellspacing="5" cellpadding="5" style="margin-bottom: 20px;">
            <tbody class="d-flex justify-content-center">
                <tr>
                    <td>Minimum date:</td>
                    <td><input type="text" id="min" name="min" class="form-control"></td>
                </tr>
                <tr>
                    <td>Maximum date:</td>
                    <td><input type="text" id="max" name="max" class="form-control"></td>
                </tr>
            </tbody>
        </table>

        <table id="example" class="display" style="text-align: center" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th scope="col">Num.</th>
                    <th scope="col">Nama Event</th>
                    <th scope="col">Cara Pelaksanaan</th>
                    <th scope="col">Tempat</th>
                    <th scope="col">Tanggal Pelaksanaan</th>
                    <th scope="col">Jam</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th scope="col">Num.</th>
                    <th scope="col">Nama Event</th>
                    <th scope="col">Cara Pelaksanaan</th>
                    <th scope="col">Tempat</th>
                    <th scope="col">Tanggal Pelaksanaan</th>
                    <th scope="col">Jam</th>
                </tr>
            </tfoot>

            <tbody>
                @forelse ($pembicara as $e)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $e->nama_event }}</td>
                        <td>{{ $e->cara_pelaksanaan }}</td>
                        <td>{{ $e->tempat_pelaksanaan }}</td>
                        <td>{{ $e->tanggal_pelaksanaan }}</td>
                        <td>{{ date('H:i',strtotime($e->jam_mulai))}} - {{ date('H:i',strtotime($e->jam_selesai))}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <div class="alert alert-info text-center">
                                <h5 class="text-center">Tidak ada data</h5>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>


</div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>

    <script>
        var minDate, maxDate;

        // Custom filtering function which will search data in column four between two values
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = minDate.val();
                var max = maxDate.val();
                var date = new Date( data[4] );

                if (
                    ( min === null && max === null ) ||
                    ( min === null && date <= max ) ||
                    ( min <= date   && max === null ) ||
                    ( min <= date   && date <= max )
                ) {
                    return true;
                }
                return false;
            }
        );

        $(document).ready(function() {
            // Create date inputs
            minDate = new DateTime($('#min'), {
                format: 'YYYY-MM-DD'
            });
            maxDate = new DateTime($('#max'), {
                format: 'YYYY-MM-DD'
            });

            // DataTables initialisation
            var table = $('#example').DataTable();

            // Refilter the table
            $('#min, #max').on('change', function () {
                table.draw();
            });
        });
    </script>
@endsection
