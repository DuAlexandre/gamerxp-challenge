<?php

    include '../database/dataBaseConfig.php';

    $dataChoice = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $query = $conn->query("SELECT * FROM product WHERE (datatime BETWEEN '".$dataChoice['initDate']." 00:00:00' AND '".$dataChoice['endDate']." 23:59:59')"); 

    if($query->num_rows > 0){ 
        $delimiter = ","; 
        $filename = "members-data_" . date('Y-m-d') . ".csv"; 

        $f = fopen('php://memory', 'w');

        $fields = array('product', 'desc', 'unit', 'price', 'date', 'staff'); 
        fputcsv($f, $fields, $delimiter); 

        while($row = $query->fetch_assoc()){ 
            $lineData = array($row['product'], $row['descr'], $row['unit'], $row['price'], $row['datatime'], $row['staff']); 
            fputcsv($f, $lineData, $delimiter); 
        } 
         
        fseek($f, 0);

        header('Content-Type: text/csv'); 
        header('Content-Disposition: attachment; filename="' . $filename . '";'); 

        fpassthru($f); 
    }
    else {
        echo 'Nenhum dado encontrado neste período.';
    }

    exit;
?>