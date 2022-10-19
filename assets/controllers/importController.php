<?php

    include '../database/dataBaseConfig.php';

    $arquivo = $_FILES["file"]["tmp_name"];
    $nome = $_FILES["file"]["name"];

    $ext = explode(".", $nome);
    $extension = end($ext);

    if($extension != "csv") {
        echo "Extensão inválida!";
    }
    else {
        $object = fopen($arquivo, 'r');
        fgetcsv($object);

        while(($dados = fgetcsv($object, 1000, ",")) !== FALSE) {

            $product = utf8_encode($dados[0]);
            $descr = utf8_encode($dados[1]);
            $unit = utf8_encode($dados[2]);
            $price = utf8_encode($dados[3]);
            $datatime = utf8_encode($dados[4]);
            $staff = utf8_encode($dados[5]);

            $result = $conn->query("INSERT INTO product (product, descr, unit, price, datatime, staff) VALUES('$product', '$descr', $unit, $price, '$datatime', $staff)");
        }

        if($result) {
            echo 'Dados inseridos com sucesso';
        }
        else {
            echo 'Erro ao inserir os dados';
        }
    }
?>