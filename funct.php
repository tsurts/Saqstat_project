
<?php  
include('../fun/db.php');


if(isset($_GET['gas'])){
    unset($_SESSION['auc'], $_SESSION['usa']);
    
}

if(isset($_GET['del'])){
    $dell = $_GET['del'];
   

    $sql = "UPDATE taqrena SET act = '0' WHERE id = '$dell' ";
    
    mysqli_query($conn, $sql);
}
if(isset($_GET['page'])){
    $page=$_GET['page'];
    $_SESSION['page']=$page;
}else if(isset($_SESSION['page'])){
    $page=$_SESSION['page'];
}else {
    $page='home';
    $_SESSION['page']=$page;
}

if(isset($_GET['edit'])){
    $edit=$_GET['edit'];
    $_SESSION['edit']=$edit;
}else if(isset($_SESSION['edit'])){
    $edit=$_SESSION['edit'];
}else {
    $edit=0;
    $_SESSION['edit']=$edit;

}

if(isset($_GET['sad'])){
    $sad=$_GET['sad'];
    $_SESSION['sad']=$sad;
}else if(isset($_SESSION['sad'])){
    $sad=$_SESSION['sad'];
}else {
    $sad=0;

}
if(isset($_GET['lis'])){
    $lis=$_GET['lis'];
    $_SESSION['lis']=$lis;
}else if(isset($_SESSION['lis'])){
    $lis=$_SESSION['lis'];
}else {
    $lis=1;

}

if(isset($_SESSION['user']) == "active"){
    $user=$_SESSION['user'];
    
}else {
    $user=0;
    $_SESSION['user']='lost';

}

if(isset($_GET['auc'])){
    $auc=$_GET['auc'];
    $_SESSION['auc']=$auc;
}else if(isset($_SESSION['auc'])){
    $auc=$_SESSION['auc'];
}else {
    $auc=0;

}

if(isset($_GET['usa'])){
    $usa=$_GET['usa'];
    $_SESSION['usa']=$usa;
}else if(isset($_SESSION['usa'])){
    $usa=$_SESSION['usa'];
}else {
    $usa=0;

}

if (isset($_GET['ena'])) {
    $ena=$_GET['ena'];
    $_SESSION['lang']=$ena;
    
}else if (isset($_SESSION['lang'])) {
    $ena=$_SESSION['lang'];
    
}else{
    $ena='geo';
}






$sityvebi=array();  // <?=$sityvebi[$ena]['home'];
// Port names:
$sityvebi['geo']['serch']='ძებნა';    $sityvebi['eng']['clean']='Clean';           $sityvebi['eng']['titlee']='Calculate from US to Georgia (Poti)';
$sityvebi['eng']['serch']='Search';  $sityvebi['geo']['clean']='გასუფთავება';     $sityvebi['geo']['titlee']='გამოითვალე ამერიკიდან საქართველომდე (ფოთი)';
// register names:
$sityvebi['geo']['login']='შესვლა';  $sityvebi['eng']['gmail']='Email Address';    $sityvebi['eng']['pass']='Password';  $sityvebi['eng']['title']='Log in';  $sityvebi['eng']['leave']='Log out';
$sityvebi['eng']['login']='Sign up';  $sityvebi['geo']['gmail']='შეიყვანეთ მეილი';  $sityvebi['geo']['pass']='პაროლი';   $sityvebi['geo']['title']='შესვლა';  $sityvebi['geo']['leave']='გასვლა';

$sityvebi['eng']['sequrity']='Sequrity';          $sityvebi['eng']['settings']='Settings';         
$sityvebi['geo']['sequrity']='მონაცემების დაცვა';  $sityvebi['geo']['settings']='მონაცემები';         
// Navigate names:
$sityvebi['eng']['home']='Home';     $sityvebi['eng']['calc']='Calculate';        $sityvebi['eng']['list']='List';       $sityvebi['eng']['about']='About Us';
$sityvebi['geo']['home']='მთავარი';  $sityvebi['geo']['calc']='გამოთვლა';    $sityvebi['geo']['list']='ცხრილი';   $sityvebi['geo']['about']='შესახებ';
// Long Texts: 
$sityvebi['eng']['text']='<h1>About us</h1><br><b>
USA2GEORGIA is a member company of IATA (International Air Transport Association) that carries out shipments in various directions around the world. The logistics service includes delivery of cargo from a specified address, consolidation of cargo, transportation of complex cargo, and dispatching from any point in the world.'; 
$sityvebi['geo']['text']='<h1>ჩვენს შესახებ</h1><br><b>
USA2GEORGIA არის (IATA-ს წევრი) წევრი კომპანია, რომელიც გადაზიდვებს მსოფლიოს სხვადასხვა მიმართულებით ახორციელებს. ლოგისტიკის სერვისი მოიცავს ტვირთის მიწოდებას მითითებული მისამართიდან, ტვირთის შეჯგუფებას, რთულად გადასაზიდი ტვირთის ტრანსპორტირებას და მსოფლიოს ნებისმიერი წერტილიდან გამოგზავნას.';
?>




