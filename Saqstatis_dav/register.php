<?php
session_start();

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
    ?>
<html>
<head>
    <style>
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
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-10 col-md-8 col-lg-5">
                
                <div class="card shadow-lg p-3">
                    <div id="Login_form" class="card-body">
                        <h4 class="card-title text-center mb-4">Login to Your Account</h4>
                        
                        <form action="check.php" method="POST">
                            
                            <div class="mb-3">
                                <label for="username" class="form-label">Email / Username</label>
                                <input type="text" value="<?php echo $error_pass; ?>" class="form-control" id="email_input" name="mail_usr" maxlength="20"  pattern="{3,20}">
                                    <small id="emailError" class="text-danger" style="display:none;">
                                        (mail / username) is incorrect.
                                    </small>
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password"   class="form-control" id="pass_input" name="pass_usr" required>
                                    <small id="passError" class="text-danger" style="display:none;">
                                        Password is incorrect.
                                    </small>
                                <small class="form-text text-end"><a href="#" class="text-decoration-none">Forgot Password?</a></small>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" name="sing_in_user" class="btn btn-primary btn-lg">Sign In</button>
                            </div>
                            
                            <p class="text-center mt-3">
                                Don't have an account? <button onclick="toggleDiv()" class="btn btn-link text-decoration-underline p-0 border-0">Register here</button>
                            </p>
                        </form>
                    </div>

                    <div id="Register_form" class="card-body" >
                        <h4 class="card-title text-center mb-4">Register Here</h4>
                        
                        <form action="check.php" method="POST">
                            
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control"  id="name" name="name_reg" required maxlength="25"  title="A_z, 0-9" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ0-9_-]/g, '')">
                                <small id="reg_name" class="text-danger" style="display:none;">
                                        Similar username already exists.
                                </small>
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Email</label>
                                <input type="email" class="form-control"  id="mail" name="mail_reg" maxlength="25" required pattern={3,25} title="max 25 symbols">
                                <small id="reg_mail" class="text-danger" style="display:none;">
                                        Similar email already exists.
                                    </small>
                            </div>

                             <div class="mb-3">
                                <label for="username" class="form-label">Telephone</label>
                                <input type="tel" class="form-control" id="Tel" name="Tel_reg" maxlength="9" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                <small id="reg_tel" class="text-danger" style="display:none;">
                                        Telephone number is already registered.
                                    </small>
                            </div>
                                                        
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="pass" name="pass_reg" required maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                            <small>
                                <div id="message">
                                    <h6>Password must contain the following:</h6>
                                        <div>
                                            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                            <p id="number" class="invalid">A <b>number</b></p>
                                            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                        </div>
                                    </div>
                            </small>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" name="reg_new_user" class="btn btn-primary btn-lg">Register</button>
                            </div>
                            
                            <p class="text-center mt-3">
                                Already have an account? <button  onclick="toggleDiv()" class="btn btn-link text-decoration-underline p-0 border-0">Login here</button>
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

     

            var myInput = document.getElementById("pass");
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var number = document.getElementById("number");
            var length = document.getElementById("length");


            myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
            }
    
            myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
            }

            myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if(myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if(myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if(myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate length
            if(myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
            }
        


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