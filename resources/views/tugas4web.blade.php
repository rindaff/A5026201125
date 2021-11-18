<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sorting</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Code java :
        // static void insertionSort(int []arr, char order ){
        //    //make some modification here
        //     int[] numArray = {5,1,3,4,2,100,25,500,13};
        // for(int k=1; k<numArray.length; k++)   {
        //     int temp = numArray[k];
        //     int j= k-1;
        //     while(j>=0 && temp <= numArray[j])   {
        //         numArray[j+1] = numArray[j];
        //         j = j-1;
        //     }
        //     numArray[j+1] = temp;
        // }
        //    //print out the array
        //     for(int i=0; i<arr.length;i++){
        //         System.out.print(arr[i]+" ");
        //     }
        //     System.out.println();

        // }

        function processorting() {
            var angka = $("#deretAngka").val();
            var deret = angka.split(",");
            var hasil = "";

            for (var i = 1; i < deret.length; i++) {
                var temp = parseInt(deret[i]);
                var j = i - 1;
                while (j >= 0 && temp <= parseInt(deret[j])) {
                    deret[j + 1] = parseInt(deret[j]);
                    j = j - 1;
                }
                deret[j + 1] = temp;
            }

            for (var i = 0; i < deret.length; i++) {
                hasil += deret[i];
                if (i < deret.length - 1) {
                    hasil += ",";
                }
            }
            $("#txtHasil").val(hasil);

        }
    </script>
    <style>
        body {
            background: #a6b0db;
            background-size: cover;
        }

        .bigbox {
            background: #8d94b1;
            border-radius: 10px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            height: 300px;
            margin: 6rem auto 8.1rem auto;
            width: 500px;
        }


    </style>

</head>

<body>
    <div class="bigbox">
        <div class="container" >
            <h2 style="padding-top: 20px;">Ascending Sort</h2>
            <div class="form-group">
                <label for="deretAngka">Angka : </label> <br>
                <input type="text" id="deretAngka" placeholder="1,2,3, etc." class="form-control">
            </div>
            <div class="form-group">
                <label for="deretAngka">Sorted List : </label> <br>
                <input type="text" id="txtHasil" class="form-control">
            </div>
            <button class="btn btn-primary" onclick="processorting();" id="sort">Calculate</button>
        </div>
        </div>
</body>

</html>
