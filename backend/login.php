<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../plugins/bootstrap.min.css">
<link href="../plugins/style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="../plugins/jquery-3.5.1.min.js"></script>
</head>
<body class="bg-dark text-white">
<div class="container ">
    <h1 class="text-center">LOGIN</h1>
    <ul class="list-group col-md-4 mx-auto mt-5">
        <li class="list-group-item text-dark ">帳號：　<input type="text" name="acc" id="acc" class=w-75></li>
        <li class="list-group-item text-dark ">密碼：　<input type="password" name="pw" id="pw" class=w-75></li>
        <li class="list-group-item text-center">
            <input type="button" value="登入" class="btn btn-dark" onclick="login()">
        </li>
    </ul>   
</div>

<script>

function login(){
    let acc=$("#acc").val();
    let pw=$("#pw").val();
    if(acc=="" || pw==""){
        alert("帳號及密碼欄位不可為空白")
    }else{
        $.post("../api/chk_acc.php",{acc},function(res){
            if(res==='1'){
                $.post("../api/chk_pw.php",{acc,pw},function(res){
                    if(res==='1'){
                        if(acc){                           
                            location.href="../admin.php"
                        }else{
                            location.href="../index.php"
                        }
                    }else{
                        alert("密碼錯誤")
                        location.reload();
                    }
                })
            }else{
                alert("無此帳號")
                location.reload();
            }
        })
    }

}


</script>
</body>
</html>