<?php
    $connect="mysql:host=localhost;charset=utf8;dbname=post;";
    $pdo = new PDO($connect,'admin','1234');

    echo $_POST["name"];
    //$sql = "insert into tickets values"('', '{$_POST["name"]}','({$_POST["email"]}', '{$_POST["phone"]}','{$_POST["password"]}');

    $sql = "INSERT INTO `ticket` (`id`, `name`, `email`,`phone`, `password`)
        VALUES (NULL, '{$_POST["name"]}', '{$_POST["email"]}','{$_POST["phone"]}','{$_POST["password"]}')";

    //$pdo->exec($sql);

    if($_POST["ver"] == $_POST['answer']){
        $pdo->exec($sql);
        header("location:index.html");
        //echo "<script>alert('購票成功 點及下方回到首頁');
        //location.href = ('index.html')
        //</script>";

    }else{
        echo "<script>alert('驗證碼錯誤');
        location.href = ('tickets.html');
        </script>";
    }