
   @extends('layout.bahagia')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen Pegawai')

   @section('konten')

    <form action="/absen/store" method="post">
        {{ csrf_field() }}
    <label for = "idpegawai">
    Pegawai</label> <select class = "form-control" name="idpegawai" >
    @foreach($pegawai as $p)
     <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
    @endforeach
</select>
<br>
        <div class="form-group">
            <label for="dtpickerdemo" class="control-label">Tanggal :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <script type="text/javascript">
            $(function() {
                $('#dtpickerdemo').datetimepicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    showTodayButton: false,
                    locale : 'id',
                    "defaultDate": new Date(),
                });
            });
        </script>

        Status <br />
        <input type="radio" id="html" name="status" value="I">
        <label for="html">Izin</label><br>
        <input type="radio" id="css" name="status" value="S" checked="checked">
        <label for="css">Sakit</label><br>
        <input type="radio" id="javascript" name="status" value="A">
        <label for="javascript">Alpha</label><br><br>


        <p><input type="submit" class="btn btn-success" value="Simpan Data"></p>
        <p> <a href="/absen" class = "btn btn-warning"> Kembali</a></p>
</form>
@endsection

