<?php    
include('db.php');
include('functional.php');


$ID = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT * FROM pirveli_kitxvari WHERE usr_id = ?");
$stmt->bind_param("i", $ID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $first_name = $row['res_saxeli'];
    $second_name = $row['res_gvari'];
    $third = $row['res_damok'];
    $fourth = $row['int_kodi'];
    $fifth = $row['int_saxeli'];
    $sixth = $row['int_gvari'];
    $seventh = $row['cvl_meur_1'];
    $eighth = $row['cvl_meur_2'];
    $nineth = $row['saw_sqesi'];
    $tenth = $row['saw_xelm_asaki'];
    $eleventh = $row['nak_raod'];
    $twelfth = $row['sakutari'];

    $fourteenth = $row['agebuli_sax'];
    $fifteenth = $row['ageb_kerdz_prdan'];

    $eighteenth = $row['tan_xarisx'];
    $nineteenth = $row['xangrdzlivoba'];
    $twentieth = $row['gamokitxvis_tarigi'];

     $thirteenth =  $fourteenth + $fifteenth;
     $sixteenth = $twelfth + $thirteenth;
  
} else {
    $first_name = '';
    $second_name = '';
    $third = '';
    $fourth = '';
    $fifth = '';
    $sixth = '';
        $seventh = '';
        $eighth = '';
    $nineth = '';
    $tenth = '';
    $eleventh = '';
    $twelfth = '';
        $thirteenth = '';
    $fourteenth = '';
    $fifteenth = '';
        $sixteenth = '';
    $eighteenth = '';
    $nineteenth = '';
    $twentieth = '';
}

?>


<form class="autosave-form" id="sruli" onsubmit="return false;">
    <div class="row text-white">
        <div class="col-md-6 fw-bold">
             <?php echo $sityvebi[$ena]['რესპოდენტის მონაცემები']; ?>
            <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['რესპოდენტის სახელი']; ?></div>
                <div class="col-10 kitxvaris_style_1 text-black"> <?php echo $sityvebi[$ena]['რესპოდენტის გვარი']; ?></div>
                    <div class="col-10 kitxvaris_style_1 text-black"><?php echo $sityvebi[$ena]['რესპოდენტის დამოკიდებულება მეურნეობასთან']; ?></div>
                        <hr>
        </div>
        <div class="col-2">            
            <input type="text" class="form-control loadPagekitxvaris_style_input" value="<?php echo htmlspecialchars($first_name); ?>" name="res_saxeli" placeholder="<?php echo $sityvebi[$ena]['სახელი']; ?>"  maxlength="20" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
                <input type="text" class="form-control loadPagekitxvaris_style_input" value="<?php echo htmlspecialchars($second_name); ?>" name="res_gvari" placeholder="<?php echo $sityvebi[$ena]['Last Name']; ?>"    maxlength="20" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
                    <input type="text" class="form-control loadPagekitxvaris_style_input" value="<?php echo htmlspecialchars($third); ?>" name="res_damokidebuleba" placeholder="<?php echo $sityvebi[$ena]['დამოკიდებულება']; ?>" maxlength="20" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
       
        </div>

        <div class="col-md-6 fw-bold">
           <?php echo $sityvebi[$ena]['ინტერვიუვერის მონაცემები']; ?>
            <div class="col-10 kitxvaris_style_1 text-black"> <?php echo $sityvebi[$ena]['ინტერვიუერის კოდი']; ?></div>
                <div class="col-10 kitxvaris_style_1 text-black"><?php echo $sityvebi[$ena]['ინტერვიუერის სახელი']; ?></div>
                    <div class="col-10 kitxvaris_style_1 text-black">  <?php echo $sityvebi[$ena]['ინტერვიუერის გვარი']; ?></div>
                        <hr>
        </div>
        <div class="col-2">   
            <input type="text" class="form-control loadPagekitxvaris_style_input" value="<?php echo htmlspecialchars($fourth); ?>" name="int_kodi" placeholder="<?php echo $sityvebi[$ena]['კოდი']; ?>"  maxlength="20" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            <input type="text" class="form-control loadPagekitxvaris_style_input" value="<?php echo htmlspecialchars($fifth); ?>" name="int_saxeli" placeholder="<?php echo $sityvebi[$ena]['ინტერვიუერის სახელი']; ?>"    maxlength="20"  title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
            <input type="text" class="form-control loadPagekitxvaris_style_input" value="<?php echo htmlspecialchars($sixth); ?>" name="int_gvari" placeholder="<?php echo $sityvebi[$ena]['Last Name']; ?>"    maxlength="20" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
        </div>

        <div class="col-md-6 fw-bold">
            <?php echo $sityvebi[$ena]['ცვლილება მეურნეობაში']; ?>
            <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['(ცვლილების შემთხვევაში შეცვლილი რეკვიზიტები მიუთითეთ ბოლო გვერდზე შენიშვნებით)']; ?></div>
                                            <hr>
        </div>
        <div class="col-2">   
            <div class="col-12"><br>
                <select class="form-select loadPagekitxvaris_style_input" id="misamarti" name="misamarti" > 
                    <option value="0" <?php if($seventh == 0) { echo 'selected'; } ?>> <?php echo $sityvebi[$ena]['აირჩიეთ']; ?></option> 
                    <option value="1" <?php if($seventh == 1) { echo 'selected'; } ?>> <?php echo $sityvebi[$ena]['მხოლოდ მეურნის მისამართი']; ?></option> 
                </select>
            </div>          
        </div>
        <div class="col-2"> 
             <?php echo $sityvebi[$ena]['ჩანაწერი:']; ?><br>
                <select class="form-select loadPagekitxvaris_style_input" onchange="display_second_part()" id="chanaweri_type" name="chanaweri_type" > 
                    <option value="0" <?php if($eighth == 0) { echo 'selected'; } ?>> <?php echo $sityvebi[$ena]['აირჩიეთ']; ?></option> 
                    <option value ="1" <?php if($eighth == 1) { echo 'selected'; } ?>> <?php echo $sityvebi[$ena]['სრული']; ?></option> 
                </select>
        </div>


   
        <section id="second_part" >
            <div class="row">
                <div class="col-md-6 fw-bold">
                     <?php echo $sityvebi[$ena]['საწარმოს ხელმძღვანელის მონაცემები']; ?>
                        <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['საწარმოს ხელმძღვანელის სქესი']; ?></div>
                        <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['საწარმოს ხელმძღვანელის ასაკი']; ?></div>
                            <hr>
                </div>
                <div class="col-2"><br>
                    <div class="d-flex align-items-center">
                        <div class="form-check me-3">
                            <input id="male" name="gender" type="radio" value="1"class="form-check-input" <?php if($nineth ==1) {echo 'checked'; } ?>>
                            <label class="form-check-label" for="male" > <?php echo $sityvebi[$ena]['კაცი']; ?></label>
                        </div>

                        <div class="form-check">
                            <input id="female" name="gender" type="radio" value="2" class="form-check-input" <?php if($nineth ==2) {echo 'checked'; } ?> >
                            <label class="form-check-label" for="female" > <?php echo $sityvebi[$ena]['ქალი']; ?></label>
                        </div>
                    </div>
                        <div class="col-6">   
                            <input type="text" class="form-control loadPagekitxvaris_style_input" value="<?php echo htmlspecialchars($tenth); ?>" name="asaki" max="100" min="18"   oninput="this.value = this.value.replace(/[^0-9]/g, '');" 
                                maxlength="3" title="ხელმძღვანელის ასაკი უნდა აღემატებოდეს 18-წელს და არ აღემატებოდეს 100 წელს" placeholder="ასაკი" >
                        </div>
                </div>

                <div class="col-md-6 fw-bold">
                     <?php echo $sityvebi[$ena]['საწარმოს სარგებლობაში არსებული ნაკვეთები']; ?>
                    <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['ნაკვეთების რაოდენობა']; ?></div>
                </div>  
                <div class="col-2">  
                    <input type="text" class="form-control loadPagekitxvaris_style_input" name="raodenoba" value="<?php echo htmlspecialchars($eleventh); ?>" placeholder="რაოდენობა"  pattern="[0-9]{0,4}" maxlength="4" title="Only numbers allowed" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </div>
                <div class="col-md-12 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['საწარმოს მიწის ფართობი(მიუთითეთ ჰექტარებში, 0,01 ჰა-მდე სიზუსტით)']; ?></div>
                </div>
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['ა) საკუთარი']; ?></div>
                </div>    
                <div class="col-2">  
                    <input type="number" class="form-control loadPagekitxvaris_style_input" value="<?php echo htmlspecialchars($twelfth); ?>" name="sakutari" onchange="Dajameba_sum()" id= a_value placeholder="საკუთარი"  maxlength="10" pattern="[0-9]{0,10}" title="Only numbers allowed" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </div>  
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['ბ) იჯარით აღებული(გ+დ)']; ?></div>
                </div>
                <div class="col-2">  
                    <input type="number" class="form-control loadPagekitxvaris_style_input" value="<?php echo htmlspecialchars($thirteenth); ?>" name="ijarit_agebuli" onchange="Dajameba_sum()" id= b_value placeholder="<?php echo $sityvebi[$ena]['იჯარით']; ?>" readonly >
                </div>  
                <div class="col-md-12 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['მათ შორის']; ?></div>
                </div>
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black ">
                        <div class="col-5" style="padding-left:20px;">
                            <?php echo $sityvebi[$ena]['გ)სახელმწიფოსგან']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-2">  
                    <input type="number" value="<?php echo htmlspecialchars($fourteenth); ?>" class="form-control loadPagekitxvaris_style_input" name="saxelmwifosgan" onchange="Dajameba_sum()" id=g_value placeholder="სახელმწიფოსგან"  maxlength="10" pattern="[0-9]{0,10}" title="Only numbers allowed"oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </div>  
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black ">
                        <div class="col-5"style="padding-left:20px;">
                        <?php echo $sityvebi[$ena]['დ)კერძო პირისგან']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-2">  
                    <input type="number" value="<?php echo htmlspecialchars($fifteenth); ?>" class="form-control loadPagekitxvaris_style_input" name="kerdzo_pirisgan" onchange="Dajameba_sum()" id=d_value placeholder="კერძო პირისგან"  maxlength="10" pattern="[0-9]{0,10}" title="Only numbers allowed" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </div>  
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['ე) მთლიანი ფართობი(ა+ბ)']; ?></div>
                        <br>
                </div>
                <div class="col-2">  
                    <input type="number" class="form-control loadPagekitxvaris_style_input" value="<?php echo htmlspecialchars($sixteenth); ?>" name="mtliani" onchange="Dajameba_sum()" id=e_value placeholder="<?php echo $sityvebi[$ena]['სრული']; ?>" readonly>
                </div>  
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['თანამშრომლობის ხარისხი']; ?></div>
                </div>
                <div class="col-2">  
                    <input type="text" value="<?php echo htmlspecialchars($eighteenth); ?>" class="form-control loadPagekitxvaris_style_input" name="tanams_xarisxi" placeholder="<?php echo $sityvebi[$ena]['ხარისხი']; ?>"  maxlength="15">
                </div>  
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['ინტერვიუს ხანგრძლივობა']; ?></div>
                        <br>
                </div>
                <div class="col-2">  
                    <input type="time" value="<?php echo htmlspecialchars($nineteenth); ?>" class="form-control loadPagekitxvaris_style_input" name="xangrdzlivoba" placeholder="ხანგრძლივობა" >
                </div>  
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['გამოკითხვის ჩატარების თარიღი']; ?></div>
                </div>
                <div class="col-2">  
                    <input type="datetime-local" value="<?php echo htmlspecialchars($twentieth); ?>" class="form-control loadPagekitxvaris_style_input" name="tarigi" placeholder="თარიღი" >
                </div>  
            </div>
        </section>
                <div class="row align-items-center">
                    <div class="col-2 ms-auto">
                        <button type="buttton" name="kitxvri_1" onclick="Dajameba_sum(); manualSave('kitxvri_1')" class="shenaxvis_bottm text-center"> <?php echo $sityvebi[$ena]['დამახსოვრება']; ?></button>
                    </div>
                </div>
    </div>
</form>   
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>


    $(document).ready(function() {
    function toggleSecondPart() {
        if ($("#chanaweri_type").val() === "1") {
            $("#second_part").show();
        } else {
            $("#second_part").hide();
            $('#second_part').find('input, select, textarea').val('');
            $('#second_part').find('input:radio, input:checkbox').prop('checked', false);
      
         
        }
    }

    // Run on page load
    // Show correct state on load
    toggleSecondPart();

    // Show/hide on change
    $("#chanaweri_type").on("change", function() {
        toggleSecondPart();      // FIXED — this was calling a non-existing function
    });
});

function Dajameba_sum() {
    var a_value = parseFloat(document.getElementById("a_value").value) || 0;
    var b_value = parseFloat(document.getElementById("b_value").value) || 0;
    var g_value = parseFloat(document.getElementById("g_value").value) || 0;
    var d_value = parseFloat(document.getElementById("d_value").value) || 0;

    var b_sum = g_value + d_value;
    document.getElementById("b_value").value = b_sum.toFixed();

    var e_sum = a_value + b_sum;
    document.getElementById("e_value").value = e_sum.toFixed();
}
</script>