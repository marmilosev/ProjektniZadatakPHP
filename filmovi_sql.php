<?php
include("pdo.php");
//unos slike
$filename = $_FILES['slika']['name'];
$tempname = $_FILES["slika"]["tmp_name"];
$folder = 'Slike/' . $filename;
move_uploaded_file($tempname, $folder);

if(isset($_POST["id_film"]) && $_POST["id_film"] == ""){
    $unos = $db->query("
    INSERT INTO filmovi (naziv, ocjena, redatelj, glumci, godina_izlaska, sadrzaj, slika)
    VALUES
    ('" . $_POST["naziv"] . "',
    '" . $_POST["ocjena"] . "',
    '" . $_POST["redatelj"] . "',
    '" . $_POST["glumci"] . "',
    '" . $_POST["godina_izlaska"] . "',
    '" . $_POST["sadrzaj"] . "',
    '" . $filename . "') 
    ");

    header("Location:index.php");
}

if(isset($_POST["id_film"]) && $_POST["id_film"] > 0){
    $upit = $db->query("
    UPDATE filmovi SET
    naziv ='" . $_POST["naziv"] . "',
    ocjena ='" . $_POST["ocjena"] . "',
    redatelj ='" . $_POST["redatelj"] . "',
    glumci ='" . $_POST["glumci"] . "',
    godina_izlaska =" . $_POST["godina_izlaska"] . ",
    sadrzaj ='" . $_POST["sadrzaj"] . "',
    slika ='" . $_POST["slika"] . "'
    WHERE id_film=" . $_POST["id_film"]);

    header("Location:index.php");
}

if(isset($_GET["brisanje"])){
    $upit_brisanje = $db->query("DELETE FROM filmovi WHERE id_film = " . $_GET["brisanje"]);
    header("Location:index.php");
}
?>