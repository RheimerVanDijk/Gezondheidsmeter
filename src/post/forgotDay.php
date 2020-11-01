<?php
try {
    $connection = (new DB)->connect();
    $bool;

    $stm = $connection->prepare("SELECT * FROM `results` WHERE id = :user_id");

    $stm->execute([
        'user_id' => $_SESSION['userId'],
    ]);

    $result = $stm->fetchAssoc();
    $lastDate = $result['created_at'];

    $currentDate = date("y/m/d");

    if($lastDate < $currentDate){
        $bool = true;
        echo json_encode([
            $bool
            ]);
    }else{
        $bool = false;
        echo json_encode([
            $bool
            ]);
    }

    $connection = null;


    }
    catch (PDOxception $e) {
    echo json_encode([
        'error' => $e->getMessage(),
    ]);

    print "Error!: " . $e->getMessage() . "<br/>";
}
