<?php
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Message = $_POST['Message'];

    //Database coonection
    $conn = new mysql('localhost','root', '', 'info');
    if ($conn->connect_error){
            die('Connection failed : ' . $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact(Name, Email, Number, Message) values(?,?,?,?)");
        $stmt->bind_param("ssis",$Name,$Email,$Number,$Message);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
    }

?>