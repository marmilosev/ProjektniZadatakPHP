<style>
    <?php include "css/app.css"; ?>
</style>
<?php
include("header.html");
include("pdo.php");


if(isset($_GET["id_film"]) && $_GET["id_film"] > 0){
    $upit = $db->query("SELECT * FROM filmovi WHERE id_film =" . $_GET["id_film"]);
    $film = $upit ->fetchAll();
    $id_film = $_GET["id_film"];
    $naziv = $film[0]["naziv"];
    $ocjena = $film[0]["ocjena"];
    $redatelj = $film[0]["redatelj"];
    $glumci = $film[0]["glumci"];
    $godina_izlaska = $film[0]["godina_izlaska"];
    $sadrzaj = $film[0]["sadrzaj"];
    $slika = $film[0]["slika"];
}else{
    $id_film = "";
    $naziv = "";
    $ocjena = "";
    $redatelj = "";
    $glumci = "";
    $godina_izlaska = "";
    $sadrzaj = "";
    $slika = "";
}
?>
           
<div class="callout">
       
<form method="post" action="filmovi_sql.php" enctype="multipart/form-data">

<input type="hidden" name="id_film" value="<?php echo $id_film;?>">

  Naziv filma: <input type="text" name="naziv" value="<?php echo $naziv; ?>"><br>

  Ocjena: <br>
  
<input type="radio" name="ocjena" value="1"
<?php echo ($ocjena == "1") ? "checked" : ""; ?>> 1 <br>
<input type="radio" name="ocjena" value="2"
<?php echo ($ocjena == "2") ? "checked" : ""; ?>> 2 <br>
<input type="radio" name="ocjena" value="3"
<?php echo ($ocjena == "3") ? "checked" : ""; ?>> 3 <br>
<input type="radio" name="ocjena" value="4"
<?php echo ($ocjena == "4") ? "checked" : ""; ?>> 4 <br>
<input type="radio" name="ocjena" value="5"
<?php echo ($ocjena == "5") ? "checked" : ""; ?>> 5 <br>


  Redatelj: <input type="text" name="redatelj" value="<?php echo $redatelj; ?>"><br>

  Glumci: <input type="text" name="glumci" value="<?php echo $glumci; ?>"><br>

  Godina izlaska: <input type="text" name="godina_izlaska" value="<?php echo $godina_izlaska; ?>"><br>

  Sadržaj filma: <br>
  <textarea name="sadrzaj" rows="4" value="<?php echo $sadrzaj;?>"><?php echo $sadrzaj;?></textarea>

  
    <input type="hidden" name="slika" value="<?php echo $slika;?>" >
   
    <?php
			if($slika == ""){
				echo "<input type='file' name='slika' value='<?php echo $slika ?>'>";
			}else{
        if($slika != "" && $_GET["id_film"] > 0){
        echo "Trenutna slika:<br>";
        echo "<img src='Slike/" . $slika . "' class='slika'><br>";
			}else{
        echo "";
      }}
			?>
  <div style="clear: both;"></div>
    <input type="submit" name="submit" value="Unos" class="button">   
  <br>
  
</form>

</div>
<?php
include("footer.html");
?>
<a href="index.php" class="button">Odustani</a>


