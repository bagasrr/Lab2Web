<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 Web</title>
    <style>
    .container {
        display: flex;
        justify-content: space-evenly;
    }

    /* Style untuk form input */
    form {
        width: 400px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0px 0px 5px #ccc;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type=text],
    input[type=date] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type=submit] {
        display: block;
        margin: 0 auto;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Style untuk output data */
    h2 {
        text-align: center;
        margin-top: 50px;
    }

    .output {
        width: 500px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0px 0px 5px #ccc;
    }

    .output p {
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <?php
		if(isset($_POST['submit'])){
			$nama = $_POST['nama'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$pekerjaan = $_POST['pekerjaan'];

			// Menghitung umur
			$tanggal_lahir = new DateTime($tgl_lahir);
			$today = new DateTime();
			$umur = $today->diff($tanggal_lahir)->y;

			// Menghitung gaji berdasarkan pekerjaan
			if($pekerjaan == "pns"){
                $pekerjaan = "PNS alias(#MantuIdaman Ibumu dek)";
				$gaji = 'Rp5.000.000 belum tunjangannya ya:)';
			}elseif($pekerjaan == "swasta"){
				$gaji = 'Rp7.000.000';
			}else{
				$gaji = 'Rp10.000.000';
			}}
    ?>

    <!-- Html -->

    <div class="container">
        <div class="input">
            <h2>Form Input Data</h2>
            <form method="post" action="">
                <label>Nama:</label>
                <input type="text" name="nama" required><br>
                <label>Tanggal Lahir:</label>
                <input type="date" name="tgl_lahir" required><br>
                <label>Pekerjaan:</label>
                <select name="pekerjaan">
                    <option value="pns">PNS</option>
                    <option value="swasta">Swasta</option>
                    <option value="wirausaha">Wirausaha</option>
                </select><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
        <div class="output-container">
            <h2>Output</h2>
            <div class="output">
                <p>
                    <?php 
                    if(isset($_POST['submit'])) {
                     $ket ="";
                     echo "Hai, Nama Aku ${nama}, <br>Umurku sekarang ${umur}, Aku bekerja sebagai ${pekerjaan} yang gajinya ${gaji}";
                    } ?>
                </p>
            </div>
        </div>

    </div>




    <!-- // Menampilkan output
    echo "<h2>Output Data</h2>";
    echo "Nama: ".$nama."<br>";
    echo "Umur: ".$umur." tahun<br>";
    echo "Pekerjaan: ".$pekerjaan."<br>";
    echo "Gaji: Rp ".$gaji.'<br>';
    date_default_timezone_set('Asia/Jakarta');
    echo date("l d m y").'<br>';
    echo date("H:i:s"); -->

</body>

</html>