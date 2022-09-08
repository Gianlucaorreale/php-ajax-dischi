<?php

require '../../includes/data.php';
$results = $discs;    
header ('content-Type: application/json');
echo json_encode($results);