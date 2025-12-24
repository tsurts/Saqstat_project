<?php
include('db.php');
session_start();


if(isset($_GET['ena'])){
    $ena = $_GET['ena'];
    $_SESSION['ena']=$ena;
}else if( isset($_SESSION['ena'])){
    $ena = $_SESSION['ena'];
}else {
        $ena = 'geo';
}

if(isset($_SESSION['user_id'])){
    $update_first = $_SESSION['user_id'];
  
}else{
   $update_first = 0;
    
}



if(isset($_POST['autosave'])){
$isAutosave = isset($_POST['autosave']);
} else{
$isAutosave = false;
}


if(isset($_GET['pg'])){
  
     $_SESSION['pg'] = $_GET['pg'];
   
}else if(isset($_SESSION['pg'])){
     $_SESSION['pg'] = $_SESSION['pg'];
}else{    
     $_SESSION['pg'] = 0;
}

// First Kitxvari Table Insert/Update

if(isset($_POST['third_first'])){
    $first_input = $_POST['first_input'];
    $second_input = $_POST['second_input'];
    $third_input = $_POST['third_input'];
    $fourth_input = $_POST['fourth_input'];
    $fifth_input = $_POST['fifth_input'];
    $sixth_input = $_POST['sixth_input'];

    $monacemis_damateba="INSERT INTO mesame_kitxvari_1 (dasax, whole, mt_shris_nac, pasi, ertwliani, mravalwliani, usr_id) VALUES ('$first_input', '$second_input', '$third_input', '$fourth_input', '$fifth_input', '$sixth_input', '$update_first')";
    mysqli_query($conn, $monacemis_damateba);
    header("Location: index.php?scroll=1");
     $_SESSION['pg'] = 2;
    exit();
}
if(isset($_POST['third_first_update'])){
    $row_id_0 = $_POST['row_id_0'];
    $first_input = $_POST['first_input'];
    $second_input = $_POST['second_input'];
    $third_input = $_POST['third_input'];
    $fourth_input = $_POST['fourth_input'];
    $fifth_input = $_POST['fifth_input'];
    $sixth_input = $_POST['sixth_input'];

     $sql="UPDATE mesame_kitxvari_1 SET dasax='$first_input', whole='$second_input', mt_shris_nac='$third_input', pasi='$fourth_input', ertwliani='$fifth_input', mravalwliani='$sixth_input' WHERE id='".$row_id_0."'";
     mysqli_query($conn, $sql);
     header("Location:index.php?scroll=1");
      $_SESSION['pg'] = 2;
     exit();
}

// Second Kitxvari Table Insert/Update

if(isset($_POST['third_second'])){
     $first_input = $_POST['first'];
     $second_input = $_POST['second'];
     $third_input = $_POST['third'];
     $fourth_input = $_POST['fourth'];
     $fifth_input = $_POST['fifth'];
     $sixth_input = $_POST['sixth'];
     $seventh_input = $_POST['seventh'];
     
     $monacemis_damateba="INSERT INTO meame_kitxvari_2 (dasaxeleba, zomis_ert, sul, mt_shrs_nachq, pasi, ertwliani, mravawliani, usr_id) VALUES ('$first_input', '$second_input', '$third_input', '$fourth_input', '$fifth_input', '$sixth_input', '$seventh_input', '$update_first')";
     mysqli_query($conn, $monacemis_damateba);
     header("Location:index.php?scroll=2");
      $_SESSION['pg'] = 2;
     exit();
}
if(isset($_POST['third_second_update'])){
     $first_input = $_POST['first'];
     $second_input = $_POST['second'];
     $third_input = $_POST['third'];
     $fourth_input = $_POST['fourth'];
     $fifth_input = $_POST['fifth'];
     $sixth_input = $_POST['sixth'];
     $seventh_input = $_POST['seventh'];
     $row_id_1 = $_POST['row_id_1'];

     $sql="UPDATE meame_kitxvari_2 SET dasaxeleba='$first_input', zomis_ert='$second_input', sul='$third_input', mt_shrs_nachq='$fourth_input', pasi='$fifth_input', ertwliani='$sixth_input', mravawliani='$seventh_input' WHERE id='".$row_id_1."'";
     mysqli_query($conn, $sql);
     header("Location:index.php?scroll=2");
      $_SESSION['pg'] = 2;
     exit();
}

// Third Kitxvari Table Insert/Update

if(isset($_POST['third_third'])){
     $first=$_POST['first'];
     $second=$_POST['second'];
     $third=$_POST['third'];
     $fourth=$_POST['fourth'];
     $fifth=$_POST['fifth'];
     $sixth=$_POST['sixth'];
     
     $check = "SELECT usr_id FROM mesame_kitxvari_3 WHERE usr_id = '$update_first'";
     $result = mysqli_query($conn, $check);

     if(mysqli_num_rows($result) > 0){ // user already has an entry, update it
          $sql="UPDATE mesame_kitxvari_3 SET 1_raodenoba='$first', 2_raodenoba='$second', 2_kg_pasi='$third', 3_raodenoba='$fourth', 4_ertwliani='$fifth', 4_mravawliani='$sixth' WHERE usr_id='".$update_first."'";
          mysqli_query($conn, $sql);

          if (!$isAutosave) {
                $_SESSION['pg'] = 2;
               header("Location:index.php");
               exit();
               }

               exit();
     } else { // no entry yet, insert new one

          $monacemis_damateba="INSERT INTO mesame_kitxvari_3 (1_raodenoba, 2_raodenoba, 2_kg_pasi, 3_raodenoba, 4_ertwliani, 4_mravawliani, usr_id) VALUES ('$first', '$second', '$third', '$fourth', '$fifth', '$sixth', '$update_first')";
          mysqli_query($conn, $monacemis_damateba);
          if (!$isAutosave) {
                $_SESSION['pg'] = 2;
               header("Location:index.php");
               exit();
               }

               exit();
          }
}

// First Kitxvari Form Insert/Update

if(isset($_POST['kitxvri_1'])){
    $saxeli=$_POST['res_saxeli'];
    $res_gvari=$_POST['res_gvari'];
    $res_damokidebuleba=$_POST['res_damokidebuleba'];
    $int_kodi=$_POST['int_kodi'];
    $int_saxeli=$_POST['int_saxeli'];
    $int_gvari=$_POST['int_gvari'];
    $misamarti=$_POST['misamarti'];
    $chanaweri_type=$_POST['chanaweri_type'];
    $gender=$_POST['gender'];
    $asaki=$_POST['asaki']; 
    $raodenoba=$_POST['raodenoba'];
     $sakutari = (float) $_POST['sakutari'];
     $saxelmwifosgan = (float) $_POST['saxelmwifosgan'];
     $kerdzo_pirisgan = (float) $_POST['kerdzo_pirisgan'];
    
    $tanams_xarisxi=$_POST['tanams_xarisxi'];
    $xangrdzlivoba=$_POST['xangrdzlivoba'];
    $tarigi=$_POST['tarigi'];
     
    $ijarit_agebuli= $saxelmwifosgan + $kerdzo_pirisgan;
    $mtliani = $ijarit_agebuli + $sakutari;



     $check = "SELECT usr_id FROM pirveli_kitxvari WHERE usr_id = '$update_first'";
     $result = mysqli_query($conn, $check);

            if (mysqli_num_rows($result) > 0){ // user already has an entry, update it
               $sql="UPDATE pirveli_kitxvari SET res_saxeli='$saxeli', res_gvari='$res_gvari', res_damok='$res_damokidebuleba', int_kodi='$int_kodi', int_saxeli='$int_saxeli', int_gvari='$int_gvari', cvl_meur_1='$misamarti', cvl_meur_2='$chanaweri_type', saw_sqesi='$gender', saw_xelm_asaki='$asaki', nak_raod='$raodenoba', sakutari='$sakutari', ijarit_ageb='$ijarit_agebuli', agebuli_sax='$saxelmwifosgan', ageb_kerdz_prdan='$kerdzo_pirisgan', sruli_fart='$mtliani', tan_xarisx='$tanams_xarisxi', xangrdzlivoba='$xangrdzlivoba', gamokitxvis_tarigi='$tarigi' WHERE usr_id='".$update_first."'";
               mysqli_query($conn, $sql);
               if (!$isAutosave) {
                
                    header("Location:index.php");
                    exit();
                    }

                    exit();
            }else{ // no entry yet, insert new one
                $sql="INSERT INTO pirveli_kitxvari (res_saxeli, res_gvari, res_damok, int_kodi, int_saxeli, int_gvari, cvl_meur_1, cvl_meur_2, saw_sqesi, saw_xelm_asaki,nak_raod, sakutari, ijarit_ageb, agebuli_sax, ageb_kerdz_prdan, sruli_fart, tan_xarisx, xangrdzlivoba, gamokitxvis_tarigi, usr_id) VALUES ('$saxeli', '$res_gvari', '$res_damokidebuleba', '$int_kodi', '$int_saxeli', '$int_gvari', '$misamarti', '$chanaweri_type', '$gender', '$asaki', '$raodenoba', '$sakutari', '$ijarit_agebuli', '$saxelmwifosgan', '$kerdzo_pirisgan', '$mtliani', '$tanams_xarisxi', '$xangrdzlivoba', '$tarigi', '$update_first')";
               mysqli_query($conn, $sql);
               if (!$isAutosave) {
              
                    header("Location:index.php");
                    exit();
                    }

                    exit();
            }

}

// Second Kitxvari Form Insert/Update

if(isset($_POST['kitxvri_2'])){
     $int_kodi=$_POST['int_kodi'];
     $int_saxeli=$_POST['int_saxeli'];
     $int_gvari=$_POST['int_gvari'];
     $cvl_meur_1=$_POST['2_1'];
     $cvl_meur_2=$_POST['2_2'];
     $First_select=$_POST['First_select'];
     $Third_select=$_POST['Third_select'];
     $Second_select=$_POST['Second_select'];

     $check = "SELECT usr_id FROM kitxvari_second WHERE usr_id = '$update_first'";
     $result = mysqli_query($conn, $check);

     if(mysqli_num_rows($result) > 0){ // user already has an entry, update it
          $sql="UPDATE kitxvari_second SET inter_kodi='$int_kodi', inter_saxeli='$int_saxeli', inter_gvari='$int_gvari', cvlileba_meurne_1='$cvl_meur_1', cvlileba_meurne_2='$cvl_meur_2', murn_idnt_sdgi_1='$First_select', ar_ar_miz='$Third_select', gmktx_sdg='$Second_select' WHERE usr_id='".$update_first."'";
          mysqli_query($conn, $sql);
          if (!$isAutosave) {
                $_SESSION['pg'] = 1;
               header("Location:index.php");
               exit();
               }

               exit();
     } else { // no entry yet, insert new one
          $second_damateba="INSERT INTO kitxvari_second (inter_kodi, inter_saxeli, inter_gvari, cvlileba_meurne_1, cvlileba_meurne_2, murn_idnt_sdgi_1, ar_ar_miz, gmktx_sdg, usr_id) VALUES ('$int_kodi', '$int_saxeli', '$int_gvari', '$cvl_meur_1', '$cvl_meur_2', '$First_select', '$Third_select', '$Second_select', '$update_first')";
          mysqli_query($conn, $second_damateba);
          if (!$isAutosave) {
                $_SESSION['pg'] = 1;
               header("Location:index.php");
               exit();
               }

               exit();
     }
}


$sityvebi=array(); // მაგალითის სახით $sityvebi[$ena]['list']; გამოიყენება ესე პირველ ინდექსად ყოვეთბის არის ენა და მეორეზე უბრალოდ სიტყვა რომ მარტივი და გასაგები იყოს;

//rgister.php სიტყვები
$sityvebi['geo']['Login to Your Account']='შედით თქვენს ანგარიშზე';    $sityvebi['eng']['Email']='Email';      $sityvebi['eng']['Password']='Password';   $sityvebi['eng']['Sign In']='Sign In';
$sityvebi['eng']['Login to Your Account']='Login to Your Account';     $sityvebi['geo']['Email']='ელ-ფოსტა';       $sityvebi['geo']['Password']='პაროლი';   $sityvebi['geo']['Sign In']='შესვლა';

$sityvebi['eng']['Dont have an account?']='Dont have an account?';  $sityvebi['eng']['Register here']='Register here';      $sityvebi['eng']['mail is incorrect']='mail is incorrect';  $sityvebi['geo']['Password is incorrect']='პაროლი არასწორია';
$sityvebi['geo']['Dont have an account?']='არ გაქვთ ანგარიში?';      $sityvebi['geo']['Register here']='დარეგისტრირდით';   $sityvebi['geo']['mail is incorrect']='ელ-ფოსტა არასწორაია';  $sityvebi['eng']['Password is incorrect']='Password is incorrect'; 

// register.php რეგისტრაციისას სიტყვები
$sityvebi['geo']['Create Your Account']='შექმენით თქვენი ანგარიში';   $sityvebi['geo']['First Name']='სახელი';      $sityvebi['geo']['Last Name']='გვარი';        $sityvebi['geo']['Register']='რეგისტრაცია'; 
$sityvebi['eng']['Create Your Account']='Create Your Account';       $sityvebi['eng']['First Name']='First Name';   $sityvebi['eng']['Last Name']='Last Name';    $sityvebi['eng']['Register']='Register';

$sityvebi['eng']['Telephone']='Telephone';   $sityvebi['eng']['Register']='Register';  
$sityvebi['geo']['Telephone']='ტელეფონი';   $sityvebi['geo']['Register']='დარეგისტრირება'; 

$sityvebi['eng']['Please fill out all the fields.']='Please fill out all the fields.';   $sityvebi['eng']['Similar email already exists.']='Similar email already exists.';  $sityvebi['eng']['Telephone number is already registered.']='Telephone number is already registered.';   
$sityvebi['geo']['Please fill out all the fields.']='გთხოვთ შეავსოთ ყველა ველი.';      $sityvebi['geo']['Similar email already exists.']='მსგავსი ელ-ფოსტა უკვე არსებობს';    $sityvebi['geo']['Telephone number is already registered.']='ტელეფონის ნომერი უკვე რეგისტრირებულია';  

$sityvebi['eng']['Already have an account?']='Already have an account?';   $sityvebi['eng']['Login here']='Login here';  
$sityvebi['geo']['Already have an account?']='უკვე გაქვთ ანგარიში?';       $sityvebi['geo']['Login here']='შესვლა'; 

//===========================================================================
// ინდექსის სიტყვები

$sityvebi['eng']['SAQStatic']='SAQStatic';   $sityvebi['geo']['პაროლის შეცვლა']='პაროლის შეცვლა';   $sityvebi['eng']['ანგარიშის ინფორმაცია']='Account Information';   $sityvebi['eng']['პარამეტრები']='Settings';  
$sityvebi['geo']['SAQStatic']='საქსტატი';   $sityvebi['eng']['პაროლის შეცვლა']='Change The Password'; $sityvebi['geo']['ანგარიშის ინფორმაცია']='ანგარიშის ინფორმაცია';   $sityvebi['geo']['პარამეტრები']='პარამეტრები';  
$sityvebi['eng']['გამოსვლა']='Leave Account';   $sityvebi['geo']['პირველი გვერდი']='პირველი გვერდი'; $sityvebi['eng']['მეორე გვერდი']='Second Page';   $sityvebi['eng']['მესამე გვერდი']='Third Page';  
$sityvebi['geo']['გამოსვლა']='გამოსვლა';        $sityvebi['eng']['პირველი გვერდი']='First Page';      $sityvebi['geo']['მეორე გვერდი']='მეორე გვერდი';   $sityvebi['geo']['მესამე გვერდი']='მესამე გვერდი'; 

//===========================================================================
// First.php სიტყვები  

$sityvebi['geo']['რესპოდენტის მონაცემები'] = 'რესპოდენტის მონაცემები';
$sityvebi['eng']['რესპოდენტის მონაცემები'] = 'Respondent Data'; $sityvebi['geo']['რესპოდენტის სახელი'] = 'რესპოდენტის სახელი'; $sityvebi['eng']['რესპოდენტის სახელი'] = 'Respondent First Name';

$sityvebi['geo']['რესპოდენტის გვარი'] = 'რესპოდენტის გვარი';$sityvebi['geo']['რესპოდენტის დამოკიდებულება მეურნეობასთან'] = 'რესპოდენტის დამოკიდებულება მეურნეობასთან';
$sityvebi['eng']['რესპოდენტის დამოკიდებულება მეურნეობასთან'] = 'Respondent Relation to Farm';$sityvebi['eng']['რესპოდენტის გვარი'] = 'Respondent Last Name';

$sityvebi['geo']['ინტერვიუვერის მონაცემები'] = 'ინტერვიუვერის მონაცემები'; $sityvebi['geo']['ინტერვიუერის კოდი'] = 'ინტერვიუერის კოდი';
$sityvebi['eng']['ინტერვიუერის კოდი'] = 'Interviewer Code';$sityvebi['eng']['ინტერვიუვერის მონაცემები'] = 'Interviewer Data';

$sityvebi['geo']['ინტერვიუერის სახელი'] = 'ინტერვიუერის სახელი'; $sityvebi['geo']['ინტერვიუერის გვარი'] = 'ინტერვიუერის გვარი';
$sityvebi['eng']['ინტერვიუერის გვარი'] = 'Interviewer Last Name';$sityvebi['eng']['ინტერვიუერის სახელი'] = 'Interviewer First Name';

$sityvebi['geo']['ცვლილება მეურნეობაში'] = 'ცვლილება მეურნეობაში'; $sityvebi['geo']['(ცვლილების შემთხვევაში შეცვლილი რეკვიზიტები მიუთითეთ ბოლო გვერდზე შენიშვნებით)'] = '(ცვლილების შემთხვევაში შეცვლილი რეკვიზიტები მიუთითეთ ბოლო გვერდზე შენიშვნებით)';
$sityvebi['eng']['(ცვლილების შემთხვევაში შეცვლილი რეკვიზიტები მიუთითეთ ბოლო გვერდზე შენიშვნებით)'] = '(If changes, specify modified details on the last page with notes)';$sityvebi['eng']['ცვლილება მეურნეობაში'] = 'Change in Farm';

$sityvebi['geo']['აირჩიეთ'] = 'აირჩიეთ'; $sityvebi['geo']['ჩანაწერი:'] = 'ჩანაწერი:';  
$sityvebi['eng']['ჩანაწერი:'] = 'Record:'; $sityvebi['eng']['აირჩიეთ'] = 'Select';

$sityvebi['geo']['დამოკიდებულება'] = 'დამოკიდებულება';  
$sityvebi['eng']['დამოკიდებულება'] = 'Relationship';        

$sityvebi['geo']['აირჩიეთ'] = 'აირჩიეთ'; $sityvebi['geo']['ჩანაწერი:'] = 'ჩანაწერი:';  
$sityvebi['eng']['ჩანაწერი:'] = 'Record:'; $sityvebi['eng']['აირჩიეთ'] = 'Select';


$sityvebi['geo']['მათ შორის'] = 'მათ შორის:'; $sityvebi['geo']['მხოლოდ მეურნის მისამართი'] = 'მხოლოდ მეურნის მისამართი:';
$sityvebi['eng']['მათ შორის'] = 'Including:'; $sityvebi['eng']['მხოლოდ მეურნის მისამართი'] = 'Only Farm Address';

$sityvebi['geo']['სრული'] = 'სრული'; $sityvebi['geo']['საწარმოს ხელმძღვანელის მონაცემები'] = 'საწარმოს ხელმძღვანელის მონაცემები';
$sityvebi['eng']['საწარმოს ხელმძღვანელის მონაცემები'] = 'Farm Manager Data';$sityvebi['eng']['სრული'] = 'Full';

$sityvebi['geo']['საწარმოს ხელმძღვანელის სქესი'] = 'საწარმოს ხელმძღვანელის სქესი'; $sityvebi['geo']['საწარმოს ხელმძღვანელის ასაკი'] = 'საწარმოს ხელმძღვანელის ასაკი';
$sityvebi['eng']['საწარმოს ხელმძღვანელის ასაკი'] = 'Farm Manager Age';$sityvebi['eng']['საწარმოს ხელმძღვანელის სქესი'] = 'Farm Manager Gender';

$sityvebi['geo']['კაცი'] = 'კაცი'; $sityvebi['geo']['ქალი'] = 'ქალი';
$sityvebi['eng']['ქალი'] = 'Female';$sityvebi['eng']['კაცი'] = 'Male';

$sityvebi['geo']['საწარმოს სარგებლობაში არსებული ნაკვეთები'] = 'საწარმოს სარგებლობაში არსებული ნაკვეთები'; $sityvebi['geo']['ნაკვეთების რაოდენობა'] = 'ნაკვეთების რაოდენობა';
$sityvebi['eng']['ნაკვეთების რაოდენობა'] = 'Number of Plots'; $sityvebi['eng']['საწარმოს სარგებლობაში არსებული ნაკვეთები'] = 'Farm Plots in Use';

$sityvebi['geo']['საწარმოს მიწის ფართობი(მიუთითეთ ჰექტარებში, 0,01 ჰა-მდე სიზუსტით)'] = 'საწარმოს მიწის ფართობი(მიუთითეთ ჰექტარებში, 0,01 ჰა-მდე სიზუსტით)'; $sityvebi['geo']['ა) საკუთარი'] = 'ა) საკუთარი';
$sityvebi['eng']['ა) საკუთარი'] = 'a) Owned'; $sityvebi['eng']['საწარმოს მიწის ფართობი(მიუთითეთ ჰექტარებში, 0,01 ჰა-მდე სიზუსტით)'] = 'Farm Land Area (in hectares, to 0.01 ha)';

$sityvebi['geo']['ბ) იჯარით აღებული(გ+დ)'] = 'ბ) იჯარით აღებული(გ+დ)'; $sityvebi['geo']['იჯარით'] = 'იჯარით';
$sityvebi['eng']['იჯარით'] = 'Leased'; $sityvebi['eng']['ბ) იჯარით აღებული(გ+დ)'] = 'b) Leased (g+d)';

$sityvebi['geo']['გ)სახელმწიფოსგან'] = 'გ)სახელმწიფოსგან'; $sityvebi['geo']['დ)კერძო პირისგან'] = 'დ)კერძო პირისგან';
$sityvebi['eng']['დ)კერძო პირისგან'] = 'd) From Private'; $sityvebi['eng']['გ)სახელმწიფოსგან'] = 'c) From Government';

$sityvebi['geo']['ე) მთლიანი ფართობი(ა+ბ)'] = 'ე) მთლიანი ფართობი(ა+ბ)'; $sityvebi['geo']['თანამშრომლობის ხარისხი'] = 'თანამშრომლობის ხარისხი';
$sityvebi['eng']['თანამშრომლობის ხარისხი'] = 'Cooperation Quality'; $sityvebi['eng']['ე) მთლიანი ფართობი(ა+ბ)'] = 'e) Total Area (a+b)';

$sityvebi['geo']['ხარისხი'] = 'ხარისხი'; $sityvebi['geo']['ინტერვიუს ხანგრძლივობა'] = 'ინტერვიუს ხანგრძლივობა';
$sityvebi['eng']['ინტერვიუს ხანგრძლივობა'] = 'Interview Duration'; $sityvebi['eng']['ხარისხი'] = 'Quality';

$sityvebi['geo']['გამოკითხვის ჩატარების თარიღი'] = 'გამოკითხვის ჩატარების თარიღი'; $sityvebi['geo']['დამახსოვრება'] = 'დამახსოვრება';
$sityvebi['eng']['დამახსოვრება'] = 'Save'; $sityvebi['eng']['გამოკითხვის ჩატარების თარიღი'] = 'Survey Date'; 

//===========================================================================

// Second.php სიტყვები

$sityvebi['geo']['ინტერვიუვერის მონაცემები'] = 'ინტერვიუვერის მონაცემები'; $sityvebi['eng']['ინტერვიუვერის მონაცემები'] = 'Interviewer Data';
$sityvebi['geo']['ინტერვიუერის კოდი'] = 'ინტერვიუერის კოდი'; $sityvebi['eng']['ინტერვიუერის კოდი'] = 'Interviewer Code';
$sityvebi['geo']['ინტერვიუერის სახელი'] = 'ინტერვიუერის სახელი'; $sityvebi['eng']['ინტერვიუერის სახელი'] = 'Interviewer First Name';
$sityvebi['geo']['ინტერვიუერის გვარი'] = 'ინტერვიუერის გვარი'; $sityvebi['eng']['ინტერვიუერის გვარი'] = 'Interviewer Last Name';
$sityvebi['geo']['კოდი'] = 'კოდი'; $sityvebi['eng']['კოდი'] = 'Code';
$sityvebi['geo']['სახელი'] = 'სახელი'; $sityvebi['eng']['სახელი'] = 'First Name';
$sityvebi['geo']['ინტერვიუერის გვარი'] = 'ინტერვიუერის გვარი'; $sityvebi['eng']['ინტერვიუერის გვარი'] = 'Last Name';
$sityvebi['geo']['ცვლილება მეურნეობაში'] = 'ცვლილება მეურნეობაში'; $sityvebi['eng']['ცვლილება მეურნეობაში'] = 'Change in Farm';
$sityvebi['geo']['(ცვლილების შემთხვევაში შეცვლილი რეკვიზიტები მიუთითეთ ბოლო გვერდზე შენიშვნებით)'] = '(ცვლილების შემთხვევაში შეცვლილი რეკვიზიტები მიუთითეთ ბოლო გვერდზე შენიშვნებით)'; $sityvebi['eng']['(ცვლილების შემთხვევაში შეცვლილი რეკვიზიტები მიუთითეთ ბოლო გვერდზე შენიშვნებით)'] = '(If changes, specify modified details on the last page with notes)';
$sityvebi['geo']['აირჩიეთ'] = 'აირჩიეთ'; $sityvebi['eng']['აირჩიეთ'] = 'Select';
$sityvebi['geo']['ცვლილება'] = 'ცვლილება'; $sityvebi['eng']['ცვლილება'] = 'Change';
$sityvebi['geo']['შენახვა'] = 'შენახვა'; $sityvebi['eng']['შენახვა'] = 'Save';
$sityvebi['geo']['ჩანაწერი:'] = 'ჩანაწერი:'; $sityvebi['eng']['ჩანაწერი:'] = 'Record:';
$sityvebi['geo']['სრული'] = 'სრული'; $sityvebi['eng']['სრული'] = 'Full';
$sityvebi['geo']['მეურნეობის იდენტიფიკაციის შედეგი:'] = 'მეურნეობის იდენტიფიკაციის შედეგი:'; $sityvebi['eng']['მეურნეობის იდენტიფიკაციის შედეგი:'] = 'Farm Identification Result:';
$sityvebi['geo']['მეურნეობის არარსებობის მიზეზი:'] = 'მეურნეობის არარსებობის მიზეზი:'; $sityvebi['eng']['მეურნეობის არარსებობის მიზეზი:'] = 'Reason for Farm Nonexistence:';
$sityvebi['geo']['გამოკითხვის შედეგი:'] = 'გამოკითხვის შედეგი:'; $sityvebi['eng']['გამოკითხვის შედეგი:'] = 'Survey Result:';
$sityvebi['geo']['-აირჩიეთ-'] = '-აირჩიეთ-'; $sityvebi['eng']['-აირჩიეთ-'] = '-Select-';
$sityvebi['geo']['იდენტიფიცირებული'] = 'იდენტიფიცირებული'; $sityvebi['eng']['იდენტიფიცირებული'] = 'Identified';
$sityvebi['geo']['დოკუმენტაციის არასტული ოდენობა'] = 'დოკუმენტაციის არასტული ოდენობა'; $sityvebi['eng']['დოკუმენტაციის არასტული ოდენობა'] = 'Insufficient Documentation';
$sityvebi['geo']['იდეალური'] = 'იდეალური'; $sityvebi['eng']['იდეალური'] = 'Ideal';
$sityvebi['geo']['ცუდი'] = 'ცუდი'; $sityvebi['eng']['ცუდი'] = 'Poor';
$sityvebi['geo']['დამახსოვრება'] = 'დამახსოვრება'; $sityvebi['eng']['დამახსოვრება'] = 'Save';

// ===========================================================================

// Third.php სიტყვები

$sityvebi['geo']['მონაცემები ბაზაში'] = 'მონაცემები ბაზაში'; $sityvebi['eng']['მონაცემები ბაზაში'] = 'Data in Database';
$sityvebi['geo']['საწარმოს მიეწ გამოყენებული სასუქები გასული კვარტლის განმავლობაში'] = 'საწარმოს მიეწ გამოყენებული სასუქები გასული კვარტლის განმავლობაში'; $sityvebi['eng']['საწარმოს მიეწ გამოყენებული სასუქები გასული კვარტლის განმავლობაში'] = 'Fertilizers Used by the Enterprise During the Last Quarter';

$sityvebi['geo']['სასუქის ტიპი'] = 'სასუქის ტიპი'; $sityvebi['eng']['სასუქის ტიპი'] = 'Type of Fertilizer';
$sityvebi['geo']['გამოყენებული რაოდენობა(კგ)'] = 'გამოყენებული რაოდენობა(კგ)'; $sityvebi['eng']['გამოყენებული რაოდენობა(კგ)'] = 'Quantity Used (kg)';
$sityvebi['geo']['1კგ-ის ფასი(ლარი)'] = '1კგ-ის ფასი(ლარი)'; $sityvebi['eng']['1კგ-ის ფასი(ლარი)'] = 'Price per kg (GEL)';
$sityvebi['geo']['განოყიერებული ფართობი, ჰექტარებში 0,01ჰა-მდე სიზუსტით'] = 'განოყიერებული ფართობი, ჰექტარებში 0,01ჰა-მდე სიზუსტით'; $sityvebi['eng']['განოყიერებული ფართობი, ჰექტარებში 0,01ჰა-მდე სიზუსტით'] = 'Fertilized Area (ha, 0.01 precision)';
$sityvebi['geo']['ოპერაციები'] = 'ოპერაციები'; $sityvebi['eng']['ოპერაციები'] = 'Actions';

$sityvebi['geo']['დასახელება'] = 'დასახელება'; $sityvebi['eng']['დასახელება'] = 'Name';
$sityvebi['geo']['სულ'] = 'სულ'; $sityvebi['eng']['სულ'] = 'Total';
$sityvebi['geo']['მათ შორის ნაჩუქარი'] = 'მათ შორის ნაჩუქარი'; $sityvebi['eng']['მათ შორის ნაჩუქარი'] = 'Of Which Gifted';
$sityvebi['geo']['ერთწლიანი'] = 'ერთწლიანი'; $sityvebi['eng']['ერთწლიანი'] = 'Annual Crops';
$sityvebi['geo']['მარავალწიანი ნარგავები'] = 'მარავალწიანი ნარგავები'; $sityvebi['eng']['მარავალწიანი ნარგავები'] = 'Perennial Crops';

$sityvebi['geo']['საწარმოს მიეწ გამოყენებული პესტიციდები გასული კვარტლის განმავლობაში'] = 'საწარმოს მიეწ გამოყენებული პესტიციდები გასული კვარტლის განმავლობაში'; $sityvebi['eng']['საწარმოს მიეწ გამოყენებული პესტიციდები გასული კვარტლის განმავლობაში'] = 'Pesticides Used by the Enterprise During the Last Quarter';

$sityvebi['geo']['პესტიდიცის ტიპი'] = 'პესტიდიცის ტიპი'; $sityvebi['eng']['პესტიდიცის ტიპი'] = 'Type of Pesticide';
$sityvebi['geo']['გამოყენებული რაოდენობა'] = 'გამოყენებული რაოდენობა'; $sityvebi['eng']['გამოყენებული რაოდენობა'] = 'Quantity Used';
$sityvebi['geo']['ზომის ერთეულის ფასი(ლარი)'] = 'ზომის ერთეულის ფასი(ლარი)'; $sityvebi['eng']['ზომის ერთეულის ფასი(ლარი)'] = 'Unit Price (GEL)';
$sityvebi['geo']['დამუშავებული ფართობი, ჰექტარებში 0,01ჰა-მდე სიზუსტით'] = 'დამუშავებული ფართობი, ჰექტარებში 0,01ჰა-მდე სიზუსტით'; $sityvebi['eng']['დამუშავებული ფართობი, ჰექტარებში 0,01ჰა-მდე სიზუსტით'] = 'Processed Area (ha, 0.01 precision)';

$sityvebi['geo']['ზომის ერთეული'] = 'ზომის ერთეული'; $sityvebi['eng']['ზომის ერთეული'] = 'Unit';

$sityvebi['geo']['-აირჩიე-'] = '-აირჩიე-'; $sityvebi['eng']['-აირჩიე-'] = '-Select-';
$sityvebi['geo']['კგ'] = 'კგ'; $sityvebi['eng']['კგ'] = 'KG';
$sityvebi['geo']['ლიტრი'] = 'ლიტრი'; $sityvebi['eng']['ლიტრი'] = 'Liter';
$sityvebi['geo']['გრამი'] = 'გრამი'; $sityvebi['eng']['გრამი'] = 'Gram';

$sityvebi['geo']['საწარმოს მიერ გამოყენებული პროდუქტი გასული კვარტლის განმავლობაში'] = 'საწარმოს მიერ გამოყენებული პროდუქტი გასული კვარტლის განმავლობაში'; $sityvebi['eng']['საწარმოს მიერ გამოყენებული პროდუქტი გასული კვარტლის განმავლობაში'] = 'Products Used by the Enterprise During the Last Quarter';

$sityvebi['geo']['წყარო'] = 'წყარო'; $sityvebi['eng']['წყარო'] = 'Source';
$sityvebi['geo']['რაოდენობა(კგ)'] = 'რაოდენობა(კგ)'; $sityvebi['eng']['რაოდენობა(კგ)'] = 'Quantity (kg)';
$sityvebi['geo']['1კგ-ის ფასი(ლარი)'] = '1კგ-ის ფასი(ლარი)'; $sityvebi['eng']['1კგ-ის ფასი(ლარი)'] = 'Price per kg (GEL)';
$sityvebi['geo']['განოყიერებული ფართობი, ჰექტარში 0.01ჰა-მდე სიზუსტით'] = 'განოყიერებული ფართობი, ჰექტარში 0.01ჰა-მდე სიზუსტით'; $sityvebi['eng']['განოყიერებული ფართობი, ჰექტარში 0.01ჰა-მდე სიზუსტით'] = 'Fertilized Area (ha, 0.01 precision)';

$sityvebi['geo']['ერთწლიანი ნარგავები'] = 'ერთწლიანი ნარგავები'; $sityvebi['eng']['ერთწლიანი ნარგავები'] = 'Annual Crops';
$sityvebi['geo']['მრავალწლიანი ნარგავები'] = 'მრავალწლიანი ნარგავები'; $sityvebi['eng']['მრავალწლიანი ნარგავები'] = 'Perennial Crops';

$sityvebi['geo']['1. საკუთარი მეურნეობიდან'] = '1. საკუთარი მეურნეობიდან'; $sityvebi['eng']['1. საკუთარი მეურნეობიდან'] = '1. From Own Farm';
$sityvebi['geo']['2. ნაყიდი'] = '2. ნაყიდი'; $sityvebi['eng']['2. ნაყიდი'] = '2. Purchased';
$sityvebi['geo']['3. სხვა (ნაჩუქარი და ა.შ)'] = '3. სხვა (ნაჩუქარი და ა.შ)'; $sityvebi['eng']['3. სხვა (ნაჩუქარი და ა.შ)'] = '3. Other (Gifted, etc.)';
$sityvebi['geo']['4. სულ'] = '4. სულ'; $sityvebi['eng']['4. სულ'] = '4. Total';

$sityvebi['geo']['დამახსოვრება'] = 'დამახსოვრება'; $sityvebi['eng']['დამახსოვრება'] = 'Save';



?>

