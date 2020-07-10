<?php
date_default_timezone_set("Asia/Taipei");
session_start();

class DB{

    //設定屬性
    private $dsn="mysql:host=localhost;charset=utf8;dbname=resume";
    private $root="root";
    private $password="";
    private $table;
    private $pdo;

    //設定建構式
    public function __construct($table){      
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,$this->root,$this->password); 
    }


    //取得全部資料的函式
    public function all(...$arg){

        $sql="select * from $this->table ";

        if(!empty($arg[0]) && is_array($arg[0])){
            foreach($arg[0] as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
            
            $sql=$sql. " where " . implode(" && ",$tmp);
        }

        if(!empty($arg[1])){
            $sql=$sql.$arg[1];
        }

        return $this->pdo->query($sql)->fetchAll();
    }


//取得單筆資料
public function find($arg){

    $sql="select * from $this->table ";

    if(is_array($arg)){

        foreach($arg as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        
        $sql=$sql. " where " . implode(" && ",$tmp);

    }else{

        $sql=$sql . " where `id`='$arg'";
    }

    //echo $sql;

    //回傳查詢後的結果，並限定只取得單筆資料，同時排除索引資料
    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}


//計算筆數
public function count(...$arg){

    $sql="select count(*) from $this->table ";

    if(!empty($arg[0]) && is_array($arg[0])){

        foreach($arg[0] as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }

        $sql=$sql. " where " . implode(" && ",$tmp);
    }

    if(!empty($arg[1])){
        $sql=$sql.$arg[1];
    }

    //echo $sql;

    //以fetchColumn的方式回傳查詢的結果
    return $this->pdo->query($sql)->fetchColumn();

}


//新增/更新資料
    //這裏我們規定參數必須為陣列，如果不是陣列則此函式會直接報錯
    public function save($arg){

        //藉由判斷陣列中是否有key為id的資料來決定要進行的動作是新增還是更新
        if(!empty($arg['id'])){
            //更新
            foreach($arg as $key => $value){
                //排除key為id的資料不處理
                if($key!='id'){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
            }

            $sql="update $this->table set ".implode(",",$tmp)." where `id`='".$arg['id']."'";

        }else{
            //新增
            $sql="insert into $this->table (`".implode("`,`",array_keys($arg))."`) values('".implode("','",$arg)."')";

        }
        // echo $sql;
        return $this->pdo->exec($sql);
    }


    //刪除資料
public function del($arg){

    $sql="delete from $this->table ";

    if(is_array($arg)){

        foreach($arg as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        
        $sql=$sql. " where " . implode(" && ",$tmp);

    }else{

        $sql=$sql . " where `id`='$arg'";
    }

    //echo $sql;

    return $this->pdo->exec($sql);
}


//萬用語法，此函式只是籍由類別中的pdo來執行sql語句
//因此即使在sql中要直接查詢其它資料表的內容也是可以的
function q($sql){

    //以fetchAll的方式回傳查詢的結果
    return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
}


//頁面導向
function to($url){
    header("location:".$url);
}


?>