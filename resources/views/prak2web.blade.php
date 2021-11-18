<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        background: -webkit-linear-gradient(bottom, #A8C0ED, #cfa8c9);
        background-repeat: repeat;
    }

    .bigbox {
        background: #fbfbfb;
        border-radius: 10px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        padding: 18px;
        height: auto;
        margin: 6rem auto 8.1rem auto;
        margin-top: 30px;
        padding-bottom: 20px;
    }
</style>

<body>
    <div class="container-sm">
        <div class="bigbox">
            <h3 style="text-align: center; font-family: 'Times New Roman'; "><b>REGISTRATION FORM</b></h3>
            <form action=https://integra.its.ac.id/app.php class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name"
                        onkeypress="return isNumericKey(event)" name="name" required>
                    <small id="nameHelpBlock" class="form-text text-muted">
                        Name contains letters and must not contain numbers.
                    </small>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address"
                        required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label> <br>
                    <label for="emailaddress">Address:</label>
                    <input type="email" class="form-control" id="emailaddress" placeholder="Enter e-mail address"
                        name="emailaddress" required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd"
                        pattern="[0-9a-zA-Z]{8,16}" maxlength="16" minlength="8" required>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Your password must be 8-16 characters long.
                    </small>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone:</label>
                    <input type="text" class="form-control" id="telephone" placeholder="Enter telephone number"
                        onkeypress="return isNumberKey(event)" minlength="7" required>
                    <small id="telephoneHelpBlock" class="form-text text-muted">
                        Your telephone number must be minimum 7 characters long, contain only numbers.
                    </small>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="sel1">SELECT YOUR</label><br>
                    <label for="sel1">COURSE</label>
                    <select class="form-control" id="sel1" name="sellist1" required>
                        <option selected disabled value=""> </option>
                        <option value="BTECH">BTECH</option>
                        <option value="BBA">BBA</option>
                        <option value="BCA">BCA</option>
                        <option value="B COM">B COM</option>
                        <option value="GEEKFORGEEKS">GEEKFORGEEKS</option>
                    </select>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="code">Zip Code:</label>
                    <input type="text" class="form-control" id="code" placeholder="Enter zip code" name="code"
                        onkeypress="return isNumberKey(event)" max length="6" minlength="6" required>
                    <small id="codeHelpBlock" class="form-text text-muted">
                        Your Zip Code must be 6 characters long, contain only numbers.
                    </small>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <input type="submit" value="Send"><br>
                <input type="reset" value="Reset">
            </form>
        </div>
    </div>
    <script>
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
        function isNumericKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31
                && (charCode < 48 || charCode > 57))
                return true;
            return false;
        }
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }

    </script>

</body>

</html>
