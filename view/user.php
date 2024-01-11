<?php
    require_once 'model/osztaly.php';    

    $id = $_GET['id'];
    $queryArray = $osztaly->getUser($id);
    $data = [];
    foreach($queryArray as $row){
        foreach($row as $key=>$segment){
            $data[$key] = $segment; 
        }
    }

    echo '<h3>'.$data['nev'].'</h3>';
    echo '<img src="uploads/'.$id.'.gif">';
    echo '<p>'.($data['sor']+1).'. sor '.($data['oszlop']+1).'. hely</p>';
?>