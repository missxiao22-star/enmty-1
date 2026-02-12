<?php
session_start();
date_default_timezone_set("Asia/Taipei");

function q($sql){
    $dsn = "mysql:host=localhost;charset=utf8;dbname=db08";
    $pdo = new PDO($dsn,'root','');
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
function dd($array){
    echo"<pre>";
    print_r($array);
    echo"</pre>";
}
function to($url){
    header("location:".$url);
}

class DB{
    private $dsn="mysql:host=localhost;charset=utf8;dbname=db08";
    private $pdo;
    private $table;

    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }

    private function arraytosql($array){
        $tmp = [];
        foreach($array as $key => $value){
            $tmp[]="`$key`=>'$value'";
        }
        return $tmp;
    }

    function all(...$arg){
        $sql = "SELECT * FROM `$this->table`";
        if(isset($arg[0])){
            if(is_array($arg[0])){
                $tmp = $this->arraytosql($arg[0]);
                $sql = $sql . " WHERE ".join(" AND ",$tmp);
            }else{
                $sql .= $arg[0];
            }
        }
        if(isset($arg[1])){
            $sql .= $arg[1];
        }
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    function sum($col,...$arg){
        $sql = "SELECT COUNT($col) FROM `$this->table`";
        if(isset($arg[0])){
            if(is_array($arg[0])){
                $tmp = $this->arraytosql($arg[0]);
                $sql = $sql . " WHERE ".join(" AND ",$tmp);
            }else{
                $sql .= $arg[0];
            }
        }
        if(isset($arg[1])){
            $sql .= $arg[1];
        }
        return $this->pdo->query($sql)->fetchColumn();
    }
    function max($col,...$arg){
        $sql = "SELECT MAX($col) FROM `$this->table`";
        if(isset($arg[0])){
            if(is_array($arg[0])){
                $tmp = $this->arraytosql($arg[0]);
                $sql = $sql . " WHERE ".join(" AND ",$tmp);
            }else{
                $sql .= $arg[0];
            }
            if(isset($arg[1])){
                $sql .= $arg[1];
            }
        }
        return $this->pdo->query($sql)->fetchColumn();
    }
    function count($id){
        $sql = " SELECT COUNT(*) FROM `$this->table`";
        if(isset($arg[0])){
            if(is_array($arg[0])){
                $tmp = $this->arraytosql($arg[0]);
                $sql = $sql. " WHERE ".join(" AND ",$tmp);
            }else{
                $sql .= $arg[0];
            }
            if(isset($arg[1])){
                $sql .= $arg[1];
            }
        }
        return $this->pdo->query($sql)->fetchColumn();
    }
    function del($id){
        $sql = " DELETE FROM `$this->table`";
        if(is_array($id)){
            $tmp = $this->arraytosql($id);
            $sql = $sql. " WHERE ".join(" AND ",$tmp);
        }else{
            $sql .= " WHERE `id` = '$id'";
        }
        return $this->pdo->exec($sql);
    }
    function find($id){
        $sql = " SELECT * FROM `$this->table`";
        if(is_array($id)){
            $tmp = $this->arraytosql($id);
            $sql = $sql. " WHERE ".join(" AND ",$tmp);
        }else{
            $sql .= " WHERE `id` = '$id'";
        }
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    function save($array){
        if(isset($array['id'])){
        $sql = " UPDATE  `$this->table` SET";
        $tmp = $this->arraytosql($array);
        $sql .= join(",",$tmp)." WHERE `id` = '{$array['id']}'";
    }else{
        $cols = join("`,`",array_keys($array));
        $values = join("','",$array);
        $sql= " INSERT INTO `$this->table` (`$cols`) VALUES(`$values`)";
    }
    return $this->pdo->exec($sql);
    }
}

$Title= new DB('title');
$Ad= new DB('ad');
$image= new DB('image');
$Mvim= new DB('mvim');
$Total= new DB('total');
$Bottom= new DB('bottom');
$News= new DB('news');
$Admin= new DB('admin');
$Menu= new DB('menu');

?>