<?php 
include 'db.php';
include 'functional.php';


$ID = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM kitxvari_second WHERE usr_id = ?");
$stmt->bind_param("i", $ID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $first = $row['inter_kodi'];
    $second = $row['inter_saxeli'];
    $third = $row['inter_gvari'];

    $fifth = $row['cvlileba_meurne_1'];
    $sixth = $row['cvlileba_meurne_2'];
    $seventh = $row['murn_idnt_sdgi_1'];
    $eighth = $row['ar_ar_miz'];
    $ninth = $row['gmktx_sdg'];


} else {
    $first = '';
    $second = '';
    $third = '';
    $fourth = '';
    $fifth = '';
    $sixth = '';
    $seventh = '';
    $eighth = '';
    $ninth = '';
}

?>
<form class="autosave-form" onsubmit="return false;">
<div class="row text-white">
    <div class="col-md-6 fw-bold">
                         <?php echo $sityvebi[$ena]['ინტერვიუვერის მონაცემები']; ?>
            <div class="col-10 kitxvaris_style_1 text-black"><?php echo $sityvebi[$ena]['ინტერვიუერის კოდი']; ?></div>
            <div class="col-10 kitxvaris_style_1 text-black"><?php echo $sityvebi[$ena]['ინტერვიუერის სახელი']; ?></div>
            <div class="col-10 kitxvaris_style_1 text-black"><?php echo $sityvebi[$ena]['ინტერვიუერის გვარი']; ?></div>
             <hr>
    </div>
        <div class="col-2">   
            <input type="text" name="int_kodi" value="<?php echo htmlspecialchars($first); ?>" class="form-control loadPagekitxvaris_style_input" placeholder="<?php echo $sityvebi[$ena]['კოდი']; ?>"  maxlength="15" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            <input type="text" name="int_saxeli" value="<?php echo htmlspecialchars($second); ?>" class="form-control loadPagekitxvaris_style_input" placeholder="<?php echo $sityvebi[$ena]['სახელი']; ?>"  maxlength="15" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
            <input type="text" name="int_gvari" value="<?php echo htmlspecialchars($third); ?>" class="form-control loadPagekitxvaris_style_input" placeholder="<?php echo $sityvebi[$ena]['ინტერვიუერის გვარი']; ?>"  maxlength="15" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')"> 
           
        </div>

        <div class="col-md-6 fw-bold">
                         <?php echo $sityvebi[$ena]['ცვლილება მეურნეობაში']; ?>
            <div class="col-10 kitxvaris_style_1 text-black "> <?php echo $sityvebi[$ena]['(ცვლილების შემთხვევაში შეცვლილი რეკვიზიტები მიუთითეთ ბოლო გვერდზე შენიშვნებით)']; ?></div>
                                                                 <hr>
        </div>
         <div class="col-2">   

                <div class="col-12"><br>
                     <select class="form-select loadPagekitxvaris_style_input" id="2_1" name="2_1" > 
                        <option value="0"<?php if($fifth == 0) echo ' selected'; ?>><?php echo $sityvebi[$ena]['აირჩიეთ']; ?></option> 
                        <option value="1" <?php if($fifth == 1) echo ' selected'; ?>><?php echo $sityvebi[$ena]['ცვლილება']; ?></option> 
                        <option value="2"<?php if($fifth == 2) echo ' selected'; ?>><?php echo $sityvebi[$ena]['შენახვა']; ?></option> 
                    </select>
                </div>          
        </div>
            <div class="col-2"> 
                       <?php echo $sityvebi[$ena]['ჩანაწერი:']; ?><br>
                     <select class="form-select loadPagekitxvaris_style_input" id="2_2" name="2_2" > 
                        <option value="0" <?php if($sixth == 0) echo ' selected'; ?>><?php echo $sityvebi[$ena]['აირჩიეთ']; ?></option> 
                        <option value="1" <?php if($sixth == 1) echo ' selected'; ?>><?php echo $sityvebi[$ena]['სრული']; ?></option> 
                    </select>
            </div>
            <div class="col-md-6 fw-bold">
                        <?php echo $sityvebi[$ena]['ინტერვიუვერის მონაცემები']; ?>
            <div class="col-10 kitxvaris_style_1 text-black"><?php echo $sityvebi[$ena]['მეურნეობის იდენტიფიკაციის შედეგი:']; ?></div>
            <div class="col-10 kitxvaris_style_1 text-black"><?php echo $sityvebi[$ena]['მეურნეობის არარსებობის მიზეზი:']; ?></div>
            <div class="col-10 kitxvaris_style_1 text-black"><?php echo $sityvebi[$ena]['გამოკითხვის შედეგი:']; ?></div>
             <hr>
    </div>
        <div class="col-2">   
            <select class="form-select loadPagekitxvaris_style_input"
                    id="First_select" name="First_select" onchange="change_select()">
                <option value="0" <?php if($seventh == 0) echo ' selected'; ?>><?php echo $sityvebi[$ena]['-აირჩიეთ-']; ?></option>
                <option value="1" <?php if($seventh == 1) echo ' selected'; ?>><?php echo $sityvebi[$ena]['იდენტიფიცირებული']; ?></option>
            </select>

            <select class="form-select loadPagekitxvaris_style_input"
                    id="Third_select" name="Third_select" onchange="change_select()">
                <option value="0" <?php if($eighth == 0) echo ' selected'; ?>><?php echo $sityvebi[$ena]['-აირჩიეთ-']; ?></option>
                <option value="1" <?php if($eighth == 1) echo ' selected'; ?>><?php echo $sityvebi[$ena]['დოკუმენტაციის არასტული ოდენობა']; ?></option>
            </select>

            <select class="form-select loadPagekitxvaris_style_input"
                    id="Second_select" name="Second_select" onchange="change_select()">
                <option value="0" <?php if($ninth == 0) echo ' selected'; ?>><?php echo $sityvebi[$ena]['-აირჩიეთ-']; ?></option>
                <option value="1" <?php if($ninth == 1) echo ' selected'; ?>><?php echo $sityvebi[$ena]['იდეალური']; ?></option>
                <option value="3" <?php if($ninth == 3) echo ' selected'; ?>><?php echo $sityvebi[$ena]['ცუდი']; ?></option>
            </select>
        </div>
    
                        <div class="row align-items-center">
                    <div class="col-2 ms-auto">  
                        <button type="button" name="kitxvri_2" onclick="manualSave('kitxvri_2')" class="shenaxvis_bottm text-center"><?php echo $sityvebi[$ena]['დამახსოვრება']; ?></button>
                    </div>  
                </div>
</div>
</form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>


                $(document).ready(function(){
                    const select_1 = document.getElementById("First_select");
                    const select_2 = document.getElementById("Second_select");
                    const select_3 = document.getElementById("Third_select");

                    function updateSelects() {
                        if (select_1.value === '0') {
                            select_2.disabled = true;
                            select_3.disabled = true;
                            select_2.value = '0';
                            select_3.value = '0';
                        } else if (select_1.value === '1') {
                            select_3.disabled = false;

                            if (select_3.value === '1') {
                                select_2.disabled = false;
                            } else {
                                select_2.value = '0';
                                select_2.disabled = true;
                            }
                        }
                    }

                    // Run once on page load to initialize selects
                    updateSelects();

                    // Run when user changes First_select or Third_select
                    select_1.addEventListener('change', updateSelects);
                    select_3.addEventListener('change', updateSelects);
                });
</script>