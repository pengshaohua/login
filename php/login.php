<?php

require "conn.php";

if (isset($_POST['user']) && isset($_POST['pass'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    //利用获取的用户名和密码和数据库进行匹配

    $result = $conn->query("select * from registry where username='$username' and password='$password'");

    if ($result->fetch_assoc()) { //成功
        echo true;
    } else { //失败
        echo false;
    }
}
