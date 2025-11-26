<?php 
session_start();
if(isset($_GET['pg'])){
  
     $_SESSION['pg'] = $_GET['pg'];
   
}else{
     $_SESSION['pg'] = 0;
}



/*if(isset($_POST(['kitxvri_1']))){
    $res_saxeli = $_POST['res_saxeli'];
    $res_gvari = $_POST['res_gvari'];
    $res_damokidebuleba = $_POST['res_damokidebuleba'];
    $int_kodi = $_POST['int_kodi'];
    $int_saxeli = $_POST['int_saxeli'];
    $int_gvari = $_POST['int_gvari'];
    $misamarti = $_POST['misamarti'];
    $chanaweri_type = $_POST['chanaweri_type'];

    $stmt_insert_kitxvri = $conn->prepare(
        "INSERT INTO kitxvri (res_saxeli, res_gvari, res_damokidebuleba, int_kodi, int_saxeli, int_gvari, misamarti, chanaweri_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
    );
    $stmt_insert_kitxvri->bind_param("ssssssss", $res_saxeli, $res_gvari, $res_damokidebuleba, $int_kodi, $int_saxeli, $int_gvari, $misamarti, $chanaweri_type);
    
    if ($stmt_insert_kitxvri->execute()) {
        
        $stmt_insert_kitxvri->close();
        header("Location: next_page.php");
        exit();
    } 
    $stmt_insert_kitxvri->close();
} else {
    header("Location: First.php");
    exit();
}*/


?>