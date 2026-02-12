<?php
include "db.php";
$table=$_GET['table'];
$db=${ucfirst($table)};

foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $db->del($id);
    } else {
        $row = $db->find($id);
        switch ($table) {
            case 'title':
                $row['text'] = $_POST['text'][$id];
                $row['sh'] = ($_POST['sh'] == $id)?1:0 ;
                break;
            case 'mvim':
            case 'image':
                $row['sh'] = in_array($id,$_POST['sh']) ? 1:0;
                break;
            case 'total':
            case 'bottom':
                $row[$table] = $_POST[$table];
                break;
            case 'admin':
                $row['acc']=$_POST['acc'][$id];
                $row['pw']=$_POST['pw'][$id];
                break;
            case 'ad':
            case 'news':
                $row['text'] = $_POST['text'][$id];
                $row['sh'] = in_array($id,$_POST['sh']) ? 1:0;
                break;
            case 'menu':
                $row['text'] = $_POST['text'][$id];
                $row['href'] = $_POST['href'][$id];
                $row['sh'] = in_array($id,$_POST['sh']) ? 1:0;
                break;
            default:
                $_POST['sh'] = 1;
                break;
        }
        $db->save($row);
    }
}
to("../back.php?do={$table}");
