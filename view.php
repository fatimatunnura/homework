<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "rini07", "students");
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

?>
<table border="1" width="70%">
    <tr>
