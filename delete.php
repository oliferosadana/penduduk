<?php
//start session
session_start();

//including the database connection file
include_once('Crud.php');

if(isset($_GET['id'])){

    //getting the id
    $id = $_GET['id'];
     
    $crud = new Crud();

    //delete data
    $sql = "DELETE FROM penduduk WHERE id = '$id'";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'Data berhasil di hapus';
    }
    else{
        $_SESSION['message'] = 'Tidak dapat menghapus';
    }
        
    header('location: index.php');
}
else{
    $_SESSION['message'] = 'Harap pilih data yang mau di hapus';
    header('location: index.php');
}
?>