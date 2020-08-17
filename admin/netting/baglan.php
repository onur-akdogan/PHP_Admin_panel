<?php
try {
    $db=new PDO("mysql:host=localhost;dbname=eticaret;charset=utf8",'root','Onur2000');
    //echo "Veritabanı bağlantısı başarılı";


} catch (PDOException $e) {
    
    echo $e->getMessage();

}
?>