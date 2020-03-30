<?php
mysql_connect("localhost:3306","root","password") or die("could not connect");
mysql_select_db("artists") or die("could not find db");
//collect
if (isset($_POST['artist-search'])){
    $searchq = $_POST['artist-search'];
    $query = mysql_query("SELECT * FROM ") or die("could not search");
}
?>