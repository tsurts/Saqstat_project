<?php

include('functional.php');
if (!isset($_SESSION['gues_usr'])) {
    $_SESSION['gues_usr'] = 'guest';
}
$error = isset($_GET['error']) ? $_GET['error'] : '';



if($_SESSION['gues_usr'] == 'logged_in'){
            header("Location: index.php");
            exit();
        }   
    else
        {

if( isset($_SESSION['error_pass'])){
    $error_pass = $_SESSION['error_pass'];
}else {
        $error_pass = '';
}

if( isset($_SESSION['On_Refresh_Login'])){
    $page_on_refresh = $_SESSION['On_Refresh_Login'];
}else {
        $page_on_refresh = '1';
}

if(isset($_GET['ena'])){
    $ena = $_GET['ena'];
    $_SESSION['ena']=$ena;
}else if( isset($_SESSION['ena'])){
    $ena = $_SESSION['ena'];
}else {
        $ena = 'geo';
}


    ?>
<html>
<head>
    <style>
                    .lang-pill {
                    position: fixed;
                    top: 20px;
                    right: 20px;

                    display: flex;
                    align-items: center;    
                    gap: 6px;

                    padding: 6px 12px;
                    background: rgba(0,0,0,0.05);
                    border-radius: 12px;
                    text-decoration: none;
                    font-weight: 600;
                    color: #333;
                    transition: background 0.2s;

                    z-index: 1000;
            }

            .lang-pill:hover {
                background: rgba(0,0,0,0.15);
            }
            .kitxvaris_style_header{
                cursor: pointer;
                background-color:rgba(61, 128, 173, 1);
                padding:10px;
                font-weight: bold;
                border-radius:5px;
                }
            #Register_form {
                display: none;
                }
            #message {
                display:none;
                background: #f1f1f1;
                color: #000;
                position: relative;
                padding: 20px;
                margin-top: 10px;
                }

            #message p {
                padding: 10px 35px;
                font-size: 18px;
                }

            .valid {
                color: green;
                }
            .valid:before {
                position: relative;
                left: -35px;
                content: "✅";
                }

            .invalid {
                color: red;
                }

            .invalid:before {
                position: relative;
                left: -35px;
                content: "❌";
                }
                    form i {
                        position: absolute;
                        right: 15px;
                        top: 50%;
                        transform: translateY(-50%);
                        cursor: pointer;
                    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
            <link rel="stylesheet" 
          href=
            "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
                <link rel="stylesheet" 
                    href=
            "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                    integrity=
            "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
                    crossorigin="anonymous">
</head>
<?php 
if(isset($_SESSION['reg_name'])){

            $username = $_SESSION['reg_name'];
            $lastname = $_SESSION['reg_lastname'];
            $mail = $_SESSION['reg_mail'];
            $tell = $_SESSION['reg_tell'];
            $pass = $_SESSION['reg_pass'];
            } else{
            $username = '';
            $lastname = ''; 
            $mail = '';
            $tell = '';
            $pass = '';
            }
        


?>
<body>
                <?php if($ena == 'geo'){ ?>
                    <div class="col-2">
                        <a href="?ena=eng" class="lang-pill">
                            <img src="img/eng.png" style="width: 30px; height: 20px;"> EN
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="col-2">
                        <a href="?ena=geo" class="lang-pill">
                            <img src="img/geo.png" style="width: 30px; height: 20px;"> GEO
                        </a>
                    </div>
                <?php } ?>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-10 col-md-8 col-lg-5">
                
                <div class="card shadow-lg p-3">
                    <div id="Login_form" class="card-body">
                        <h4 class="card-title text-center mb-4"><?php echo $sityvebi[$ena]['Login to Your Account']; ?></h4>
                        
                        <form action="check.php" method="POST">
                            
                            <div class="mb-3">
                                <label for="username" class="form-label"><?php echo $sityvebi[$ena]['Email']; ?></label>
                                <input type="text" value="<?php echo $error_pass; ?>" class="form-control" id="email_input" name="mail_usr" maxlength="20"  pattern="{3,20}">
                                    <small id="emailError" class="text-danger" style="display:none;">
                                        <?php echo $sityvebi[$ena]['mail is incorrect']; ?>
                                    </small>
                            </div>

                    

                            <div class="mb-4">
                                <label for="pass_input" class="form-label"><?php echo $sityvebi[$ena]['Password']; ?></label>

                                    <div style="position: relative;">
                                        <input type="password" class="form-control" id="pass_input" name="pass_usr" required>
                                        <i class="bi bi-eye-slash togglePassword"></i>

                                    </div>

                                <small id="passError" class="text-danger" style="display:none;">
                                    <?php echo $sityvebi[$ena]['Password is incorrect']; ?>
                                </small>
                            </div>

                            
                            <div class="d-grid">
                                <button type="submit" name="sing_in_user" class="btn btn-primary btn-lg"><?php echo $sityvebi[$ena]['Sign In']; ?></button>
                            </div>
                            
                            <p class="text-center mt-3">
                                 <?php echo $sityvebi[$ena]['Dont have an account?']; ?> <br><button onclick="toggleDiv()" class="btn btn-link text-decoration-underline p-0 border-0"><?php echo $sityvebi[$ena]['Create Your Account']; ?></button>
                            </p>
                        </form>
                    </div>

                    <div id="Register_form" class="card-body" >
                        <h4 class="card-title text-center mb-4"><?php echo $sityvebi[$ena]['Create Your Account']; ?></h4>
                        
                        <form action="check.php" method="POST">
                            
                            <div class="mb-3">
                                <label for="username" class="form-label"><?php echo $sityvebi[$ena]['First Name']; ?></label>
                                <input type="text" class="form-control" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>" id="name" name="name_reg" required maxlength="25"  title="A_z, 0-9" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ0-9_-]/g, '')">
                                <small id="reg_name" class="text-danger" style="display:none;">
                                        <?php echo $sityvebi[$ena]['Please fill out all the fields.']; ?>
                                </small>
                            </div>
                              <div class="mb-3">
                                <label for="username" class="form-label"><?php echo $sityvebi[$ena]['Last Name']; ?></label>
                                <input type="text" class="form-control" value="<?php echo isset($lastname) ? htmlspecialchars($lastname) : ''; ?>" id="last_name" name="lastname_reg" required maxlength="25"  title="A_z, 0-9" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ0-9_-]/g, '')">
                                <small id="reg_name" class="text-danger" style="display:none;">
                                        <?php echo $sityvebi[$ena]['Please fill out all the fields.']; ?>
                                </small>
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label"><?php echo $sityvebi[$ena]['Email']; ?></label>
                                <input type="email" class="form-control" value="<?php echo isset($mail) ? htmlspecialchars($mail) : ''; ?>" id="mail" name="mail_reg" maxlength="30" required pattern={3,30} title="max 30 symbols">
                                <small id="reg_mail" class="text-danger" style="display:none;">
                                        <?php echo $sityvebi[$ena]['Similar email already exists.']; ?>
                                    </small>
                            </div>

                             <div class="mb-3">
                                <label for="username" class="form-label"><?php echo $sityvebi[$ena]['Telephone']; ?></label>
                                <input type="tel" class="form-control" value="<?php echo isset($tell) ? htmlspecialchars($tell) : ''; ?>" id="Tel"  name="Tel_reg" maxlength="9" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                <small id="reg_tel" class="text-danger" style="display:none;">
                                        <?php echo $sityvebi[$ena]['Telephone number is already registered.']; ?>
                                    </small>
                            </div>
                                                        
                            <div class="mb-4">
                                <label for="pass" class="form-label">
                                    <?php echo $sityvebi[$ena]['Password']; ?>
                                </label>

                                <div style="position: relative;">
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="pass"
                                        name="pass_reg"
                                        value="<?php echo isset($pass) ? htmlspecialchars($pass) : ''; ?>"
                                        required
                                        minlength="5"
                                        maxlength="20"
                                        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{5,20}$"
                                        title="Password must be 5–20 characters and include uppercase, lowercase, number and special character."
                                        autocomplete="new-password"
                                        aria-describedby="passwordHelp"
                                    >
                                    <i class="bi bi-eye-slash togglePassword"></i>
                                </div>

                                <small id="passwordHelp" class="form-text text-muted">
                                    Uppercase, lowercase, number and special character required.
                                </small>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" name="reg_new_user" class="btn btn-primary btn-lg"><?php echo $sityvebi[$ena]['Register']; ?></button>
                            </div>
                            
                            <p class="text-center mt-3">
                                <?php echo $sityvebi[$ena]['Already have an account?']; ?> <br> <button  onclick="toggleDiv()" class="btn btn-link text-decoration-underline p-0 border-0"><?php echo $sityvebi[$ena]['Login here']; ?></button>
                            </p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>


            $(document).ready(function() {
                        const loginForm = document.getElementById("Login_form");
                        const registerForm = document.getElementById("Register_form");

                        let page_on_refresh = "<?= $page_on_refresh ?>";

                        if (page_on_refresh === "1") {
                            loginForm.style.display = "block";
                            registerForm.style.display = "none";
                        } else {
                            loginForm.style.display = "none";
                            registerForm.style.display = "block";
                        }
            });

                
                const toggleIcons = document.querySelectorAll('.togglePassword');
                const loginPass = document.querySelector('#pass_input');
                const regPass = document.querySelector('#pass');

                toggleIcons.forEach(icon => {
                    icon.addEventListener('click', function () {
                        
                        if (loginPass) {
                            const t1 = loginPass.type === 'password' ? 'text' : 'password';
                            loginPass.type = t1;
                        }

                        if (regPass) {
                            const t2 = regPass.type === 'password' ? 'text' : 'password';
                            regPass.type = t2;
                        }

                        this.classList.toggle('bi-eye');
                        this.classList.toggle('bi-eye-slash');
                    });
                });
        


        const tel = document.getElementById("Tel");
        const passw = document.getElementById("pass");
        const mail_ck = document.getElementById("mail");
        const user_ck = document.getElementById("name");

        // Block spacebar
        tel.addEventListener("keydown", function(e) {
            if (e.key === " ") {
                e.preventDefault();
            }
        });
             passw.addEventListener("keydown", function(a) {
            if (a.key === " ") {
                a.preventDefault();
            }
            });
                         mail_ck.addEventListener("keydown", function(b) {
            if (b.key === " ") {
                b.preventDefault();
            }
            });
                         user_ck.addEventListener("keydown", function(c) {
            if (c.key === " ") {
                c.preventDefault();
            }
            });



        // Remove spaces AND anything that is not a number
        tel.addEventListener("input", function() {
            this.value = this.value.replace(/\D/g, ""); 
        });



        if("<?= $error ?>" === '1'){ // maili - არის არასწორი
                 document.getElementById("emailError").style.display = "block";
        }if("<?= $error ?>" === '2'){// პაროლი ავტორიზაციისას
                 document.getElementById("passError").style.display = "block";
        } if("<?= $error ?>" === '3'){//მეილი რეგისტრაციისას
                 document.getElementById("reg_mail").style.display = "block";
        } if("<?= $error ?>" === '4'){//ტელეფონი რეგისტრაციისას
                 document.getElementById("reg_tel").style.display = "block";
        } if("<?= $error ?>" === '5'){// სახელი რეგისტრაციისას
                 document.getElementById("reg_name").style.display = "block";

        }


        function toggleDiv() {
            
        const loginForm = document.getElementById("Login_form");
        const registerForm = document.getElementById("Register_form");
        
            let nextState = "";

            if (loginForm.style.display === "none") {
                loginForm.style.display = "block";
                registerForm.style.display = "none";
                nextState = "1";
            } else {
                loginForm.style.display = "none";
                registerForm.style.display = "block";
                nextState = "2"; 
            }

        $.post("check.php", { state: nextState });
        }

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
<?php
}
?>