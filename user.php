<?php

include 'functions.php';

if (!islogedIn()) {
    redirect('index.php?msg=noPermissions');
}

if (isset($_GET['search'])) {
    $keyword = $_GET['search'];

    if (searchUser($keyword)) {
        echo 'Korisnik ' . $keyword . ' postoji.';
    } else {
        echo 'Korisnik ' . $keyword . ' ne postoji!';
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User page</title>
</head>
<body>
<form action="">
    <input type="text" name="search" placeholder="Pretraga korisnika">

    <input type="submit" value="Potvrdi">
</form>



</body>
</html>