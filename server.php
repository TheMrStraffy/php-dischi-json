<?php 
$dischiStr = file_get_contents('dischi.json');
$dischi = json_decode($dischiStr, true);

header('Content-Type: application/json');
echo json_encode($dischi);
?>