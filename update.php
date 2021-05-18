<?php
//start session
session_start();

//including the database connection file
include_once('Crud.php');

//getting the id
$id = $_GET['id'];
 
$crud = new Crud();
 
if(isset($_POST['edit'])) {    
    $nama_depan = $crud->escape_string($_POST['nama_depan']);
    $nama_belakang = $crud->escape_string($_POST['nama_belakang']);
    $alamat = $crud->escape_string($_POST['alamat']);
        
    //update data
    $sql = "UPDATE penduduk SET nama_depan = '$nama_depan', nama_belakang = '$nama_belakang', alamat = '$alamat' WHERE id = '$id'";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'Data penduduk berhasil di update';
    }
    else{
        $_SESSION['message'] = 'Tidak bisa update data';
    }
        
    header('location: index.php');
}
else{
    $_SESSION['message'] = 'Harap pilih data terlebih dahulu';
    header('location: index.php');
}
