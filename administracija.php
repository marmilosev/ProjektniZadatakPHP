<?php
include("header.html");
include("pdo.php");
include("session.php");

$upit_filmovi = $db->query("SELECT * FROM filmovi");
$rezultati_filmovi = $upit_filmovi -> fetchAll();
?>

<table>
  <thead>
    <tr>
      <th>Naziv filma</th>
      <th>Ocjena</th>
      <th>Redatelj</th>
      <th>Glumci</th>
      <th>Godina izlaska</th>
      <th>Sadržaj filma</th>
    </tr>
  </thead>
  <tbody>
  <?php
      foreach($rezultati_filmovi as $filmovi){
      ?>
    <tr>
      <td><?php
      echo $filmovi["naziv"];
      ?></td>
      <td><?php
      echo $filmovi["ocjena"];
      ?></td>
      <td><?php
      echo $filmovi["redatelj"];
      ?></td>
      <td><?php
      echo $filmovi["glumci"];
      ?></td>
      <td><?php
      echo $filmovi["godina_izlaska"];
      ?></td>
      <td><?php
      echo $filmovi["sadrzaj"];
      ?></td>
    </tr>
<?php
}
?>
  </tbody>
</table>
<?php
include("footer.html");
?>