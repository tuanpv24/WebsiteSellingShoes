<?php
function insert_taikhoan($email, $user, $pass)
{
    $sql = "INSERT INTO taikhoan(email, user, pass) values ('$email', '$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan where user='" . $user . "' and pass='" . $pass . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "SELECT * FROM taikhoan where email='" . $email . "'";
    $sp = pdo_query_one($sql); 
    return $sp;
}

function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "update taikhoan set user='" . $user . "',pass='" . $pass . "',email='" . $email . "',address='" . $address . "', tel='" . $tel . "' where id=" . $id;
    pdo_execute($sql);
}


function loadall_taikhoan()
{
    $sql = "SELECT * FROM taikhoan ORDER BY id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}