<?php
    include('../database.php');
    
    $event_date = $_POST['event_date'];

    $query = "SELECT id_records, P.name_pilot, P.category, lap, lap_time, P.model, P.brand FROM records INNER JOIN pilots P ON records.id_pilot = P.id_pilot WHERE lap_time = ANY (SELECT MIN(lap_time) FROM records WHERE lap_time > '00.01:00.00' GROUP BY records.id_pilot ) AND event_date = '$event_date' ORDER BY lap_time ASC";
    $result_dep = mysqli_query($db, $query);

    if(!$result_dep) {
        die('Query Failed');
    }

    $json = array();
    while($row = mysqli_fetch_array($result_dep)) {
        $json[] = array(
            'name_pilot' => $row['name_pilot'],
            'category' => $row['category'],
            'lap' => $row['lap'],
            'lap_time' => $row['lap_time'],
            'model' => $row['model'],
            'brand' => $row['brand'],
            'id_records' => $row['id_records'],
        );
    }  

    $jsonstring = json_encode($json);
    echo $jsonstring;
?>

