<?php
    require_once('../function/connection.php');
    $query = $db->query("SELECT * FROM members WHERE account='".$_POST['account']."'");
    $data = $query->fetch(PDO::FETCH_ASSOC);

    if($data != null){
        echo "repeat";   //有重複的Email帳號
    }else if($_POST['account'] == null){
        echo "null";   //有重複的Email帳號
    }else{
        echo "no_repeat";
    }
?>