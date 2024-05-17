<?php
$name = "Muhammad Fadel Akbar";
$occupation = "Mahasiswa UPN Veteran";
$location = "Jawa Timur";
$about_me = "Mahasiswa UPN Veteran Jawa Timur berprofesi sebagai Programer dan atlet cabang e-sport.";
$SMA = "SMA PROGRESIF BUMI SHALAWAT";
$tahun = "2019 - 2022";
$HP = "081354700130 (Handphone number)";
$IG = "fadelakbar528 (Instagram)";
$TT = "fadelakbar5 (Tiktok)";

$skills = [
    'name' => 'PRO GAMER',
    'star' => 4
];

//$juara1 = "Atlet POMPROV";
//$juara2 = "Atlet PMCC";
//$juara3 = "Juara 3 PUBGM (Provinsi SULTRA)";
//$juara4 = "Juara 1 PUBGM (FEB UI)";
//$juara5 = "Juara 1 PUBGM (BUDI LUHUR)";

$juara = array(
    "juara1" => "Atlet POMPROV",
    "juara2" => "Atlet PMCC",
    "juara3" => "Juara 3 PUBGM (Provinsi SULTRA)",
    "juara4" => "Juara 1 PUBGM (FEB UI)",
    "juara5" => "Juara 1 PUBGM (BUDI LUHUR)"
);
$nilaisiswa = array(
    array("UV21011", "BELA NEGARA", 3, "G159", 90, 90),
    array("UV210123", "KEPEMIMPINAN", 2, "G440", 70, 90),
    array("IF221113", "STRUKTUR DATA", 3, "C081", 100, 100)
);
//function hitungnilaiakhir($uts, $uas){
    //return ($uts + $uas) / 2;}


function kategoriNilai($nilaiakhir){
    if ($nilaiakhir >= 85){
        return "A";
    }else{
        return "B";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>CV Fadel</title>
</head>

<body>
    <div class="background">
        <img id="pic" src="image/Fadel.jpg" alt="Gfrost eror" width="500">
        <div class="id" style="display: none;">
            <h1 class="id" style="display: none;"><?php echo $name; ?></h1>
            <h1 class="id" style="display: none;"><?php echo $occupation; ?></h1>
            <h1 class="id" style="display: none;"><?php echo $location; ?></h1>
        </div>
    </div>

    <div>
        <h1 class="judul">ABOUT ME</h1>
        <p class="me" style="display: none;"><?= $about_me; ?></p>
    </div>

    <h1 class="judul">EDUCATION</h1>
    <p class="sekolah" style="display: none;"><?php echo $SMA; ?></p>
    <p class="sekolah" style="display: none;"><?php echo $tahun; ?></p>

    <h1 class="judul">SKILL</h1>
    <p class="game" style="display: none;"><?php echo $skills['name']; ?></p>
    <?php for ($i = 0; $i < $skills['star']; $i++) { ?>
        <i class="fa fa-star" style="display: none;"></i>
    <?php } ?>

    <h1 class="judul">ACHIEVEMENT</h1>
    <ol>
        <li class="juara" style="display: none;"><?php echo " " . $juara["juara1"]; ?></li>
        <li class="juara" style="display: none;"><?php echo " " . $juara["juara2"]; ?></li>
        <li class="juara" style="display: none;"><?php echo " " . $juara["juara3"]; ?></li>
        <li class="juara" style="display: none;"><?php echo " " . $juara["juara4"]; ?></li>
        <li class="juara" style="display: none;"><?php echo " " . $juara["juara5"]; ?></li>
    </ol>

    <h1 class="judul">CONTACT ME</h1>
    <ul>
        <li class="media" style="display: none;"><?php echo $HP; ?></li>
        <li class="media" style="display: none;"><?php echo $IG; ?></li>
        <li class="media" style="display: none;"><?php echo $TT; ?></li>
    </ul>

    <h1 class="judul">TRANSKRIP NILAI</h1>
   <div style="display: none;" class="kotak"> <?php echo "<table border='1' cellspacing='0' cellpading='5'>";
    echo "<thead>
        <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>MATA KULIAH</th>
            <th>SKS</th>
            <th>KELAS</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>NILAI</th>
        </tr>
    </thead>";
    echo "<tbody>"; 
        foreach ($nilaisiswa as $key => $nilai ){
            $nilaiakhir = ($nilai[4] + $nilai[5]) / 2;
            $kategori = kategorinilai($nilaiakhir);

            echo "<tr>";
                echo "<td>". ($key + 1)."</td>";
                echo "<td>". $nilai[0]."</td>";
                echo "<td>". $nilai[1]."</td>";
                echo "<td>". $nilai[2]."</td>";
                echo "<td>". $nilai[3]."</td>";
                echo "<td>". $nilai[4]."</td>";
                echo "<td>". $nilai[5]."</td>";
                echo "<td>". $kategori."</td>";
                echo "</tr>";
        }
        
    echo"</tbody>";     
    echo"</table>";
 ?>
 </div>
   

 

    <div class="container">
        <button class="profile">id</button>
        <button class="aboutme">ABOUT ME</button>
        <button class="education">EDUCATION</button>
        <button class="hobi">SKILL</button>
        <button class="penghargaan">ACHIEVEMENT</button>
        <button class="sosmed">CONTACT ME</button>
        <button class="Transkrip">TRANSKRIP NILAI</button>
    </div>

    <script>
        $(document).ready(function() {
            $(".profile").click(function() {
                $(".id").toggle(1000)
            });
        });
        $(document).ready(function() {
            $(".aboutme").click(function() {
                $(".me").toggle(1000)
            });
        });
        $(document).ready(function() {
            $(".education").click(function() {
                $(".sekolah").toggle(1000)
            });
        });
        $(document).ready(function() {
            $(".hobi").click(function() {
                $(".game, .fa-star").toggle(1000)
            });
        });
        $(document).ready(function() {
            $(".penghargaan").click(function() {
                $(".juara").toggle(1000)
            });
        });
        $(document).ready(function() {
            $(".sosmed").click(function() {
                $(".media").toggle(1000)
            });
        });
        $(document).ready(function(){
            $(".Transkrip").click(function(){
                $(".kotak").toggle(1000)
            });
        });
    </script>
    
</body>

</html>