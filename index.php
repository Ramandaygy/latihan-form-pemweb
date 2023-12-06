<html>
    <head>
    <style>
        .error {color: #FF0000;}
    </style>
    </head>
    <body>
        <h2>FORM HTML DAN FORM HANDLING</h2>
        <?php
        $nim=$nama=$alamat=$email=$no_hp=$prodi"";
        $nimErr=$namaErr=$alamatErr=$emailErr=$no_hpErr=$prodiErr"";

        if ($_SERVER["REQUEST_METHOD"] == "POST" 
            && isset($_POST["NIM"]) 
            && isset($_POST["Nama"]) 
            && isset($_POST["alamat"])
            && isset($_POST["Email"]) 
            && isset($_POST["No HP"]) 
            && isset($_POST["Prodi"])) {
                $nim = $_POST ["NIM"];
                $nama = $_POST["Nama"];
                $alamat = $_POST ["Alamat"];
                $email = $_POST ["Email"];
                $no_hp = $_POST["No HP"];
                $prodi = $_POST ["Prodi"];
            }
        ?>

        <?php
        $nim=$nama=$alamat=$email=$no_hp=$prodi"";
        $nimErr=$namaErr=$alamatErr=$emailErr=$no_hpErr=$prodiErr"";

        if ($_SERVER["REQUEST_METHOD"] == "POST" 
            && isset($_POST["NIM"]) 
            && isset($_POST["Nama"]) 
            && isset($_POST["alamat"])
            && isset($_POST["Email"]) 
            && isset($_POST["No HP"]) 
            && isset($_POST["Prodi"])){
                if (empty($_POST["NIM"])) {
                    $namaErr = "NIM kosong";
                } else {
                    $nama = test_input($_POST["NIM"]);
                }
                if (empty($_POST["nama"])) {
                    $emailErr = "nama kosong";
                } else {
                    $email = test_input($_POST["nama"]);
                }
                if (empty($_POST["alamat"])){
                    $alamatErr = "Alamat kosong";
                } else {
                $alamat = test_input($_POST["alamat"]);
                }
                if (empty($_POST["email"])) {
                    $emailErr = "Email kosong";
                } else {
                    $email = test_input($_POST["email"]);
                }
                if (empty($_POST["no hp"])) {
                    $emailErr = "No HP kosong";
                } else {
                    $email = test_input($_POST["no hp"]);
                }
                if (empty($_POST["prodi"])) {
                    $emailErr = "Prodi kosong";
                } else {
                    $email = test_input($_POST["prodi"]);
                }

        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <form action ="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>" method = "POST">
        NIM : <input type ="text" name="NIM"><span class="error">* <?php echo $nimErr;?></span><br><br>
        Nama : <input type ="text" name="Nama"><span class="error">* <?php echo $namaErr;?></span><br><br>
        Alamat : <input type = "text" name="Alamat"><span class="error">* <?php echo $alamatErr;?></span><br><br>
        Email : <input type ="text" name="Email"><span class="error">* <?php echo $emailErr;?></span><br><br>
        No_HP : <input type ="text" name="No HP"><span class="error">* <?php echo $no_hpErr;?></span><br><br>
        Prodi : <input type = "text" name="Prodi"><span class="error">* <?php echo $prodiErr;?></span><br><br>
        
        <input type="submit">
        </form>

        <?php

            echo "NIM:";
            echo $nim;
            echo "<br>";
            echo "Nama:"; 
            echo $nama;
            echo "<br>";
            echo "Alamat:"; 
            echo $alamat;
            echo "<br>";
            echo "Email:"; 
            echo $email;
            echo "<br>";
            echo "No HP:"; 
            echo $no_hp;
            echo "<br>";
            echo "Prodi:"; 
            echo $prodi;
            echo "<br>";

        ?>

    </body>
</html>