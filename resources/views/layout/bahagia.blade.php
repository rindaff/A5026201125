<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

</head>
<style>
    .container {
        margin-top: 10px;
    }
    .header {
        background-color: rgb(13, 23, 65);
        color: rgb(255, 255, 255)
    }
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: rgb(202, 202, 202);
        color: rgb(24, 14, 14);
        text-align: center;
}
</style>


<body>
    <div class = "container">
    <div class = "header">
        <div class="row">
            <div class="col-sm-3">
            <img src="{{ asset('img/formal.jpeg') }}" width="100px" height="150px" alt="fotoformalrinda">
        </div>

        <div class="col-sm-9">
            <div class="row">
            <h2><b>Rinda Faiz Shabira</b></h2>
            </div>
            <div class="row">
            <h3>5026201125</h3>
            </div>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <h3> Menu </h3>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="btn btn-primary" href="/pegawai">Pegawai</a>
            </li><br>
            <li>
                <a class="btn btn-primary" href="/absen">Absen</a>
            </li><br>
            <li>
                <a class="btn btn-primary" href="#">Minggu Depan</a>
            </li><br>
            <li>
                <a class="btn btn-primary" href="#">Praktikum</a>
            </li><br>
        </ul>
    </div>

    <div class="col-sm-9">
    <h3>@yield('judulhalaman')</h3>

    @section('konten')

    @show
    </div>
    <div class="footer">
        <p>&copy; Hak Cipta oleh Rinda Faiz Shabira - 5026201125</p>
    </div>

</body>

</html>
