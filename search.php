<?php

include 'functions.php';

if (isset($_GET['search'])) {
    $keyword = $_GET['search'];
    searchUser($keyword);
}