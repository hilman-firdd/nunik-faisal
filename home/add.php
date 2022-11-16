<?php

$nama = $_POST['name'];
$doa = $_POST['doa'];

$conn = new mysqli('localhost','u1686239_uo_istisalman','bandung123=','u1686239_uo_istisalman');
$query = $conn->query("INSERT INTO tb_comment (nama,doa) VALUES ('".$nama."','".$doa."')");