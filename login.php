<?php
include("header.html");
include("pdo.php");

if(isset($_POST["submit"])){

    $query=$db->prepare("
    SELECT * FROM administratori WHERE 
    korisnicko_ime = :korisnicko_ime 
     AND lozinka = :lozinka
    "); 
    $podaci = array(
        "korisnicko_ime" => $_POST["username"],
        "lozinka" => $_POST["password"]
    );
    $query -> execute($podaci);
    $rezultati = $query->fetchAll();

    if(count($rezultati) > 0){
        session_start();
        $_SESSION["ulogiran"] = true;
        header("Location:administracija.php");
        exit;
    }else{
        echo "Pogrešni pristupni podaci!";
    }

}

?>

<form method="post" action="">
Korisničko ime:<br>
<input name="username" type="text"><br>
Lozinka:<br>
<input name="password" type="password"><br>
<input type="submit" name="submit" value="Login" class="button">
</form>

<?php
include("footer.html");
?>