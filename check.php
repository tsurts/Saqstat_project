<?php
session_start();
include('db.php');

function gavwmindot_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    
    return $data;
}

if (isset($_POST['state'])) {
    $_SESSION['On_Refresh_Login'] = $_POST['state'];
    exit();
}

if(isset($_GET['leav'])){
        $_SESSION['gues_usr'] = "guest";
        session_destroy();
        header("Location: index.php");
            exit();
}

if(isset($_POST['del_usr'])){
        $delete_user = $_POST['del_usr'];
        $romeli = $_POST['romeli'];

        if ($romeli === '1') {
            $washla="DELETE FROM mesame_kitxvari_1 WHERE id = '$delete_user'";
        } elseif ($romeli === '2') {
            $washla="DELETE FROM meame_kitxvari_2 WHERE id = '$delete_user'";
        } else {

            $washla = null;
        }

        if ($washla) {
            mysqli_query($conn, $washla);         
        }
                
        header("Location: index.php?scroll=$romeli");
        exit();

}

if(isset($_POST['sing_in_user'])){

    $mail = gavwmindot_input($_POST['mail_usr']);
    $pass = $_POST['pass_usr'];

        // Fetch user using email OR username
        $stmt = $conn->prepare("
            SELECT id_usr, psw_usr, gmail_usr
            FROM usr 
            WHERE gmail_usr = ? 
            LIMIT 1
        ");

        $stmt->bind_param("s", $mail);
        $stmt->execute();
        $stmt->bind_result($user_id, $hashed_password, $db_email);
        $stmt->fetch();
        $stmt->close();

        // 1. No user found
        if (!$user_id) {
            header("Location: register.php?error=1");
            exit();
        }


        // 3. Password wrong
        if (!password_verify($pass, $hashed_password)) {
            $_SESSION['error_pass'] = $_POST['mail_usr'];
            header("Location: register.php?error=2");
            exit();
        }

        // 4. Everything correct — login
        $_SESSION['user_id'] = $user_id;
        $_SESSION['gues_usr'] = "logged_in";
        $_SESSION['error_pass'] = '';
        header("Location: index.php");
        exit();
                
}
if(isset($_POST['reg_new_user'])){

            $username = $_POST['name_reg'];
            $lastname = $_POST['lastname_reg'];
            $mail = $_POST['mail_reg'];
            $tell = $_POST['Tel_reg'];
            $pass = $_POST['pass_reg'];
            $pass_clear = $pass;

            if(empty($username) || empty($lastname) || empty($mail) || empty($tell) || empty($pass)){
                header("Location: register.php?error=5"); // missing fields
                exit();
            }

            $_SESSION['reg_name'] = $username;
            $_SESSION['reg_lastname'] = $lastname;
            $_SESSION['reg_mail'] = $mail;
            $_SESSION['reg_tell'] = $tell;
            $_SESSION['reg_pass'] = $pass;

            $stmt = $conn->prepare("SELECT id_usr FROM usr WHERE gmail_usr = ?");
            $stmt->bind_param("s", $mail);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->close();
                header("Location: register.php?error=3"); // email exists
                exit();
            }
            $stmt->close();


            $stmt = $conn->prepare("SELECT id_usr FROM usr WHERE tel_usr = ?");
            $stmt->bind_param("s", $tell);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->close();
                header("Location: register.php?error=4"); // tel exists
                exit();
            }
            $stmt->close();


$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

$stmt_insert = $conn->prepare(
    "INSERT INTO usr (name_usr, last_name, gmail_usr, psw_usr, tel_usr, psw_usr_clear)
     VALUES (?, ?, ?, ?, ?, ?)"
);
$stmt_insert->bind_param("ssssss", $username, $lastname, $mail, $hashed_password, $tell, $pass_clear);

if ($stmt_insert->execute()) {
    $stmt_insert->close();
    $_SESSION['On_Refresh_Login'] = '1';
    unset($_SESSION['reg_name']);
    header("Location: register.php");
       
    exit();
}

$stmt_insert->close();


} else{
    header("Location: register.php");
    exit();
}

?>