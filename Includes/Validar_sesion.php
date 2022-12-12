<?php
session_start();
if ($_SESSION["activo"]) {

    # code...
} else {
    header("location:../index.php");
}
