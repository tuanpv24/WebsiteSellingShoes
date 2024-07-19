<?php

function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
    $ngaybinhluan = date('Y-m-d');

    $sql = "INSERT INTO binhluan(noidung, iduser, idpro, ngaybinhluan) VALUES('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
    pdo_execute($sql);
}

function loadAll_binhLuan($idpro)
{
    $sql = "SELECT * FROM binhluan WHERE 1";
    if ($idpro > 0) $sql .= " AND idpro='$idpro'";
    $sql .= " ORDER BY id DESC";
    $listBl = pdo_query($sql);
    return $listBl;
}

function loadAll_comment()
{
    $sql = "SELECT * FROM binhluan ORDER BY id DESC";
    $listBl = pdo_query($sql);
    return $listBl;
}

function delete_binhLuan($id)
{
    $sql = "DELETE FROM binhluan WHERE id = $id";
    pdo_execute($sql);
}
