<?php
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danhmuc(name) values ('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "DELETE FROM danhmuc WHERE id=" . $id;
    pdo_query($sql);
}
function loadall_danhmuc()
{
    $sql = "SELECT * FROM danhmuc ORDER BY id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM danhmuc where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE danhmuc set name =  '" . $tenloai . "'where id=" . $id;
    pdo_execute($sql);
}