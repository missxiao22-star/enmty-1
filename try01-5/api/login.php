<?php
    include_once "db.php";
    
    $is_admin=$Admin->count($_POST);
    
    if($is_admin){
        to("../back.php");
    }
?>

<script>
    alert("帳號密碼錯誤");
    location.replace('../index.php?do=login')
</script>