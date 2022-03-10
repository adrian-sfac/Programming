<?php
require '../../../includes/conn.php';
session_start();

$get_id = $_GET['board_memb_id'];

mysqli_query($db, "DELETE FROM tbl_board_memb WHERE board_memb_id = '$get_id' ") or die(mysqli_error($db));
$_SESSION['successDel'] = true;
header("location: ../list.board_memb.php");