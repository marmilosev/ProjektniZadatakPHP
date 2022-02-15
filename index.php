<style>
    <?php include "css/app.css"; ?>
</style>
<?php
include("header.html");
include("pdo.php");

$upit = $db->query("SELECT * FROM filmovi");
$rezultati = $upit->fetchAll();
?>

<?php
foreach($rezultati as $film){
?>
<div class="callout small-10">
              <img src="Slike/<?php 
              if($film["slika"] == ""){
                  echo "NemaSlike.jpg";
                  }else{
                      echo $film["slika"];
                  } ?>">
              <h2>
                  <?php
                      echo $film["naziv"];
                  ?>
              </h2>

              <a href="filmovi_sql.php?brisanje=<?php echo $film["id_film"]; ?>" class="alert button">Obriši</a>
              <a href="unos_uredjivanje_formular.php?id_film=<?php echo $film["id_film"]; ?>" class="button">Uredi</a>

              <p class="ocjena"> <img src="star.png" class="star"> 
            <?php
            echo $film["ocjena"];
            ?>/5</p>
              <!--Ikona zvijezde preuzeta s: https://www.flaticon.com/free-icon/star_1828884?term=star&page=1&position=4&page=1&position=4&related_id=1828884&origin=search-->
              <p><strong>Redatelj: </strong><?php
              echo $film["redatelj"];
              ?></p>
              <p><strong>Glumci: </strong><?php
              echo $film["glumci"];
              ?>
              </p>
              <p><strong>Godina izdanja: </strong><?php
              echo $film["godina_izlaska"];
              ?></p>
              <p><strong>Sadržaj filma: </strong><?php
              echo $film["sadrzaj"];
              ?></p>
             
</div>

<?php
 }

?>
<?php
include("footer.html");
?>