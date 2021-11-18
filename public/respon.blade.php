<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Document</title>

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        body{
        background-image: rgba(47, 33, 100, 0.781);;
        background-repeat: no-repeat;
        background-size: cover;

        }
        .container{
            align-items: center;
            justify-content: center;
            width: 700px;
            background: rgba(235, 241, 241, 0.842);
            padding: 20px;
            border-radius: 10px;
            margin: 50px auto;

        }
        button{
        width: 200px;
        }

    </style>
</head>
<body>
<?php
            $first = $last = $sex = $age = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = test_input($_POST["nama"]);
                $sex = test_input($_POST["sex"]);
                $age = test_input($_POST["age"]);
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }


    ?>

    <div class="container mt-3 mb-3 shadow-lg">



            <center><h1>Halo, Selamat Datang</h1></center>
            <br>

                       <p>Dear,
                           <?php
                            if ($sex == "male") {
                            echo "Mr.";
                            }
                            elseif ($age < 21 && $sex == "female") {
                            echo "Ms.";
                            }
                            else {
                            echo "Mrs.";
                            }
                        ?>
                        <?php
                            echo $last ." " .$first;
                        ?>
                        </p>
                        <pre>Halo, Selamat Datang!!</pre>
                        <pre>Selamat bergabung dengan kami !</pre>
                </div>
</body>
</html>
