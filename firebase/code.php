<?php
session_start();
include('includes/dbconfig.php');
    $p="hiiii";
    echo $p;
    if(isset($_POST['save_push_data']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $phoneno=$_POST['phoneno'];

        $data=[
            'username' => $username,
            'email' => $email,
            'phoneno' => $phoneno
        ];
        $ref = "contact/";
        $Postdata = $database->getReference($ref)->push($data);
        if($Postdata){
            $_SESSION['status']="Data Inserted Successfully";
            header("location:index.php");
        }
        else{
            $_SESSION['status']="Data Not Inserted.Something went wrong.!";
            header("location:index.php");
        }
    }
// update data
    if(isset($_POST['update_data']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $phoneno=$_POST['phoneno'];
        $token = $_POST['token'];
        $data=[
            'username' => $username,
            'email' => $email,
            'phoneno' => $phoneno
        ];
        $ref = "contact/".$token;
        $Postdata = $database->getReference($ref)->update($data);
        if($Postdata){
            $_SESSION['status']="Data updated Successfully";
            header("location:index.php");
        }
        else{
            $_SESSION['status']="Data Not Updated.Something went wrong.!";
            header("location:index.php");
        }
    }
// delete data
    if(isset($_POST['ref_token_delete']))
    {
        $token = $_POST['ref_token_delete'];

        $ref="contact/".$token;
        $deletedata=$database->getReference($ref)->remove();
    }
    if($deletedata){
            $_SESSION['status']="Data deleted Successfully";
            header("location:index.php");
        }
        else{
            $_SESSION['status']="Data Not deleted.Something went wrong.!";
            header("location:index.php");
        }
?>