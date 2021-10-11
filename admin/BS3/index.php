<?php session_start(); ?>
<?php if($_SESSION['admin']){ ?>
<?php require '../../koneksi.php'; ?>
<?php include_once 'header.php' ?>

    <?php
    if(!empty($_GET['page'])){
        if(!empty($_GET['item'])){
            include 'modul/'.$_GET['page'].'/'.$_GET['item'].'.php';
        }
        else{
            include 'modul/'.$_GET['page'].'/index.php';
        }   

    }
    else{
        echo 'modul/home/index.php';
    }
    ?>

<?php }else{ ?>
Sesi lu bukan admin bos! Log In dulu coy.. <a href="../../login.php">Log In</a>
<?php }?>