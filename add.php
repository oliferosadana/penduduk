<?php
//start session
session_start();

//including the database connection file
include_once('Crud.php');
 
$crud = new Crud();
 
if(isset($_POST['add'])) {    
    $nama_depan = $crud->escape_string($_POST['nama_depan']);
    $nama_belakang = $crud->escape_string($_POST['nama_belakang']);
    $alamat = $crud->escape_string($_POST['alamat']);
        
    //insert data to database
    $sql = "INSERT INTO penduduk (nama_depan, nama_belakang, alamat) VALUES ('$nama_depan','$nama_belakang','$alamat')";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'Data berhasil di tambah';
    }
    else{
        $_SESSION['message'] = 'Tidak bisa menambahkan data';
    }
        
    header('location: index.php');
}
else{
    $_SESSION['message'] = 'silahkan isi form data terlebih dahulu';
    header('location: index.php');
}
?>