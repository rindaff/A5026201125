<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hi-Fidelity Desain Rinda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
    function isNumericKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31
                && (charCode < 48 || charCode > 57))
                return true;
            return false;
        }
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();


</script>
<style>
    body {
        background: -webkit-linear-gradient(bottom, #A8C0ED, #cfa8c9);
        background-repeat: repeat;
    }
    .bigbox {
        background: white;
        border-style: solid;
        border-width: 1px;
        border-radius: 0px;
        padding: 20px;
        height: 500px;
        margin: 6rem auto 8.1rem auto;
        margin-top: 30px;
        padding-bottom: 20px;
    }

        input[type=submit] {
            background-color: blue;
            color: white;
            padding: 5px 5px;
            margin: 12px;
            border: none;
            font-size: medium;
            width: 200px;
        }
        input[type=reset] {
            background-color: greenyellow;
            padding: 5px 5px;
            margin: 12px;
            border: none;
            font-size: medium;
            width: 200px;
        }
    }
    .form {
        text-align: center;
    }

</style>

<body>
    <div class="container">
        <div class="bigbox">
            <span>Rinda Faiz Shabira</span><br>
            <span>Rinda</span><br>
            <span>5026201125</span>

            <div class="form">
                <form action=https://integra.its.ac.id/app.php class="needs-validation" novalidate>
                <h2 style="text-align: center;">Form Pendaftaran Kuota Internet</h2><br>
                <div class="content">
                    <label for="nama">Nama Mahasiswa    :</label>
                        <input type="text" id="nama" name="nama" onkeypress="return isNumericKey(event) min length="2" required><br>
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <label for="nrp">NRP Mahasiswa : </label>
                        <input type="text" id="nrp" name="nrp" onkeypress="return isNumberKey(event)" max length="10" minlength="10" required><br></td>
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <label for="jurusan">Jurusan : </label>
                        <select>
                            <option selected disabled value=""> </option>
                            <option>Sistem Informasi</option>
                            <option>Elektro</option>
                            <option>Informatika</option>
                        </select><br>
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <label for="nomor">Nomor Handphone :</label>
                        <input type="text" id="nomor" name="nomor" onkeypress="return isNumberKey(event)" minlength="10" required><br><br>
                        <div class="invalid-feedback">Please fill out this field.</div>

                    <input type="submit" value="Kirim">
                    <input type="reset" value="Reset">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
