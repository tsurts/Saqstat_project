<?php include('db.php'); 
include('functional.php');

if(isset($_POST['edit_id'])){
    
    $update_by_user = $_POST['edit_id'];
    $romeli = $_POST['romeli'];
}else{
    $update_by_user = 0;
    $romeli = 0;
}

?>

<div class="kitxvaris_style_header mb-3 text-center fs-5 fw-bold">
   <?php echo $sityvebi[$ena]['მონაცემები ბაზაში']; ?>
</div>


<small> <?php echo $sityvebi[$ena]['საწარმოს მიეწ გამოყენებული სასუქები გასული კვარტლის განმავლობაში']; ?></small>
<br><br>
<form action="functional.php" method="POST">
    <div id="table_1">
    <table class="custom">
        <tr>
            <th rowspan="1" style="width:15%;"><?php echo $sityvebi[$ena]['სასუქის ტიპი']; ?></th>
            <th rowspan="1" colspan="2" style="width:30%;"> <?php echo $sityvebi[$ena]['გამოყენებული რაოდენობა(კგ)']; ?></th>
            <th rowspan="2" style="width:10%;"> <?php echo $sityvebi[$ena]['1კგ-ის ფასი(ლარი)']; ?></th>
            <th rowspan="1" colspan="2" style="width:24%;"> <?php echo $sityvebi[$ena]['განოყიერებული ფართობი, ჰექტარებში 0,01ჰა-მდე სიზუსტით']; ?></th>
            <th rowspan="2" style="width:10%">  <?php echo $sityvebi[$ena]['ოპერაციები']; ?></th>
        </tr>
        <tr>
            <th style="width:15%;"> <?php echo $sityvebi[$ena]['დასახელება']; ?></th>    
            <th style="width:10%;"> <?php echo $sityvebi[$ena]['სულ']; ?></th>
            <th style="width:10%;"> <?php echo $sityvebi[$ena]['მათ შორის ნაჩუქარი']; ?></th>
            <th style="width:12%;"> <?php echo $sityvebi[$ena]['ერთწლიანი']; ?></th>
            <th style="width:12%;"> <?php echo $sityvebi[$ena]['მარავალწიანი ნარგავები']; ?></th>
        </tr>
        
            <?php  
                $cxrili_0 = "SELECT * FROM mesame_kitxvari_1";
                $result_0 = mysqli_query($conn, $cxrili_0);
                while($row_0 = mysqli_fetch_assoc($result_0)){
                    $monacemis_id = $row_0['id'] ?? '';
                    $first_col_0 = $row_0['dasax'] ?? '';
                    $second_col_0 = $row_0['whole'] ?? '';
                    $third_col_0 = $row_0['mt_shris_nac'] ?? '';
                    $fourth_col_0 = $row_0['pasi'] ?? '';
                    $fifth_col_0 = $row_0['ertwliani'] ?? '';
                    $sixth_col_0 = $row_0['mravalwliani'] ?? '';
            ?>
            <tr>
                <td class="mini_td"><?= $first_col_0 ?></td>
                <td class="mini_td"><?= $second_col_0 ?></td>
                <td class="mini_td"><?= $third_col_0 ?></td>
                <td class="mini_td"><?= $fourth_col_0 ?></td>
                <td class="mini_td"><?= $fifth_col_0 ?></td>
                <td class="mini_td"><?= $sixth_col_0 ?></td>
            
            <td class="mini_td" style="text-align:center;">
                <button class="btn btn-danger btn-sm" type="button" onclick="monacemis_washla(<?= $monacemis_id ?>, '1')" ><img src="img/delete.png" alt="❌" width="10px;" height="15px;"></button>
                <button class="btn btn-primary btn-sm" type="button" onclick="display_edit(<?= $monacemis_id ?>, '1')"><img src="img/edit.png" alt="" width="10px;" height="15px;"></button>
        </tr>
        <?php } ?>

            <tr class="insert-row" id="insert_1">
                <td><input type="text" name="first_input" maxlength="20" oninput="this.value = this.value.replace(/[^a-zA-Z0-9]/g, '')"></td>
                <td><input type="text" name="second_input" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
                <td><input type="text" name="third_input" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
                <td><input type="text" name="fourth_input" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
                <td><input type="text" name="fifth_input" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
                <td><input type="text" name="sixth_input" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
                <td style="text-align:center;">
                    <button class="btn btn-primary btn-sm" type="submit" name="third_first"><img src="img/add.png" alt="" width="21px;" height="21px;"></button>    
                </td>
            </tr>
<!-- ------------------------------------------------------------------------------ 
                                edit                                                -->
        
        <?php  
        if($romeli === '1'){
            $cxrili_1 = "SELECT * FROM mesame_kitxvari_1 WHERE id = '$update_by_user'";
            $result_1 = mysqli_query($conn, $cxrili_1);
            while($row_1 = mysqli_fetch_assoc($result_1)){
                $first_col_1 = $row_1['dasax'] ?? '';
                $second_col_1 = $row_1['whole'] ?? '';
                $third_col_1 = $row_1['mt_shris_nac'] ?? '';
                $fourth_col_1 = $row_1['pasi'] ?? '';
                $fifth_col_1 = $row_1['ertwliani'] ?? '';
                $sixth_col_1 = $row_1['mravalwliani'] ?? '';
                $edit_id_0 = $row_1['id'] ?? '';
        
            }
        
        ?>

        <tr id="edit_1" class="edit-row" hidden>
            <input type="hidden" name="row_id_0" value="<?php echo $edit_id_0; ?>">
            <td><input type="text" value="<?php echo $first_col_1 ?>" name="first_input"></td>
            <td><input type="text" value="<?php echo $second_col_1 ?>" name="second_input" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td><input type="text" value="<?php echo $third_col_1 ?>" name="third_input" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td><input type="text" value="<?php echo $fourth_col_1 ?>" name="fourth_input" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td><input type="text" value="<?php echo $fifth_col_1 ?>" name="fifth_input" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td><input type="text" value="<?php echo $sixth_col_1 ?>" name="sixth_input" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td style="text-align:center;">
                <button class="btn btn-primary btn-sm" name="third_first_update" type="submit"><img src="img/edit.png" alt="" width="21px;" height="21px;"></button>    
            </td>
        </tr>
        <?php } ?>
<!-- ------------------------------------------------------------------------------ -->
    </table>
</div>
</form>




<br>
<small> <?php echo $sityvebi[$ena]['საწარმოს მიეწ გამოყენებული პესტიციდები გასული კვარტლის განმავლობაში']; ?></small>
<br><br>

<form action="functional.php" method="POST">
    <div id="table_2">
    <table class="custom">
        <tr>
            <th rowspan="1" style="width:15%;"> <?php echo $sityvebi[$ena]['პესტიდიცის ტიპი']; ?></th>
            <th rowspan="1" colspan="3" style="width:30%;"> <?php echo $sityvebi[$ena]['გამოყენებული რაოდენობა']; ?></th>
            <th rowspan="2" style="width:10%;"> <?php echo $sityvebi[$ena]['ზომის ერთეულის ფასი(ლარი)']; ?></th>
            <th rowspan="1" colspan="2" style="width:24%;"> <?php echo $sityvebi[$ena]['დამუშავებული ფართობი, ჰექტარებში 0,01ჰა-მდე სიზუსტით']; ?></th>
            <th rowspan="2" style="width:10%">  <?php echo $sityvebi[$ena]['ოპერაციები']; ?></th>
        </tr>
        <tr>
            <th style="width:15%;"> <?php echo $sityvebi[$ena]['დასახელება']; ?></th>
            <th style="width:10%;"> <?php echo $sityvebi[$ena]['ზომის ერთეული']; ?></th>
            <th style="width:10%;"> <?php echo $sityvebi[$ena]['სულ']; ?></th>
            <th style="width:10%;"> <?php echo $sityvebi[$ena]['მათ შორის ნაჩუქარი']; ?></th>
            <th style="width:12%;"> <?php echo $sityvebi[$ena]['ერთწლიანი']; ?></th>
            <th style="width:12%;"> <?php echo $sityvebi[$ena]['მარავალწიანი ნარგავები']; ?></th>
        </tr>
                <?php  
                    $cxrili_2 = "SELECT * FROM meame_kitxvari_2";
                    $result_2 = mysqli_query($conn, $cxrili_2);
                    while($row_2 = mysqli_fetch_assoc($result_2)){
                        $monacemis_id = $row_2['id'] ?? '';
                        $first_col_2 = $row_2['dasaxeleba'] ?? '';
                        $second_col_2 = $row_2['zomis_ert'] ?? '';
                        $third_col_2 = $row_2['sul'] ?? '';
                        $fourth_col_2 = $row_2['mt_shrs_nachq'] ?? '';
                        $fifth_col_2 = $row_2['pasi'] ?? '';
                        $sixth_col_2 = $row_2['ertwliani'] ?? '';
                        $seventh_col_2 = $row_2['mravawliani'] ?? '';
                ?>
                <tr>
                    <td class="mini_td"><?= $first_col_2 ?></td>
                    <td class="mini_td"><?= $second_col_2 ?></td>
                    <?php if($third_col_2 == 1){
                        $third_col_2 = $sityvebi[$ena]['კგ'];
                    } elseif($third_col_2 == 2){
                        $third_col_2 = $sityvebi[$ena]['ლიტრი'];
                    } elseif($third_col_2 == 3){
                        $third_col_2 = $sityvebi[$ena]['გრამი'];
                    } ?>
                    <td class="mini_td"><?= $third_col_2 ?></td>
                    <td class="mini_td"><?= $fourth_col_2 ?></td>
                    <td class="mini_td"><?= $fifth_col_2 ?></td>
                    <td class="mini_td"><?= $sixth_col_2 ?></td>
                    <td class="mini_td"><?= $seventh_col_2 ?></td>
                
                <td class="mini_td" style="text-align:center;">
                    <button class="btn btn-danger btn-sm" type="button" onclick="monacemis_washla(<?= $monacemis_id ?>, '2')" ><img src="img/delete.png" alt="❌" width="10px;" height="15px;"></button>
                    <button class="btn btn-primary btn-sm" type="button" onclick="display_edit(<?= $monacemis_id ?>, '2')" ><img src="img/edit.png" alt="" width="10px;" height="15px;"></button>
                    </td>
            </tr>
            <?php } ?>
        <tr class="insert-row" id="insert_2">
            <td><input type="text" name="first"></td>
            <td><input type="text" name="second" maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
                <td>
                    <select name="third" id="wona">
                        <option value="0"> <?php echo $sityvebi[$ena]['-აირჩიე-']; ?></option>
                        <option value="1"> <?php echo $sityvebi[$ena]['კგ']; ?></option>
                        <option value="2"> <?php echo $sityvebi[$ena]['ლიტრი']; ?></option>
                        <option value="3"> <?php echo $sityvebi[$ena]['გრამი']; ?></option>
                    </select>
                </td>
            <td><input type="text" name="fourth" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td><input type="text" name="fifth" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td><input type="text" name="sixth" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td><input type="text" name="seventh" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td style="text-align:center;">
                <button class="btn btn-primary btn-sm" name="third_second" type="submit"><img src="img/add.png" alt="" width="21px;" height="21px;"></button>    
            </td>
        </tr>
<!-- ------------------------------------------------------------------------------ 
                                edit                                                -->       
        <?php  
        if($romeli === '2'){
            $cxrili_3 = "SELECT * FROM meame_kitxvari_2 WHERE id = '$update_by_user'";
            $result_3 = mysqli_query($conn, $cxrili_3);
            while($row_3 = mysqli_fetch_assoc($result_3)){
                $first_col_3 = $row_3['dasaxeleba'] ?? '';
                $second_col_3 = $row_3['zomis_ert'] ?? '';
                $third_col_3 = $row_3['sul'] ?? '';
                $fourth_col_3 = $row_3['mt_shrs_nachq'] ?? '';
                $fifth_col_3 = $row_3['pasi'] ?? '';
                $sixth_col_3 = $row_3['ertwliani'] ?? '';
                $seventh_col_3 = $row_3['mravawliani'] ?? '';
                $edit_id_1 = $row_3['id'] ?? '';
            }
        
        ?>

        <tr id="edit_2" class="edit-row" hidden>
            <input type="hidden" name="row_id_1" value="<?php echo $edit_id_1; ?>">
            <td><input type="text" value="<?php echo $first_col_3 ?>" name="first"></td>
            <td><input type="text" value="<?php echo $second_col_3 ?>" name="second" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
                <td>
                    <select name="third" id="wona">
                        <option value="1" <?php if($third_col_3 == 1) echo 'selected'; ?>> <?php echo $sityvebi[$ena]['კგ']; ?></option>
                        <option value="2" <?php if($third_col_3 == 2) echo 'selected'; ?>> <?php echo $sityvebi[$ena]['ლიტრი']; ?></option>
                        <option value="3" <?php if($third_col_3 == 3) echo 'selected'; ?>> <?php echo $sityvebi[$ena]['გრამი']; ?></option>
                    </select>
                </td>
            <td><input type="text" value="<?php echo $fourth_col_3 ?>" name="fourth" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td><input type="text" value="<?php echo $fifth_col_3 ?>" name="fifth" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td><input type="text" value="<?php echo $sixth_col_3 ?>" name="sixth" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td><input type="text" value="<?php echo $seventh_col_3 ?>" name="seventh" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td style="text-align:center;">
                <button class="btn btn-primary btn-sm" name="third_second_update" type="submit"><img src="img/edit.png" alt="" width="21px;" height="21px;"></button>    
            </td>
        </tr>
        <?php } ?>
<!-- ------------------------------------------------------------------------------ -->
    </table>
</div>
</form>

<br>
<small>  <?php echo $sityvebi[$ena]['საწარმოს მიერ გამოყენებული პროდუქტი გასული კვარტლის განმავლობაში']; ?></small><br><br>

<?php  
$ID = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM mesame_kitxvari_3 WHERE usr_id = ?");
$stmt->bind_param("i", $ID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $first = $row['1_raodenoba'] ?? '';
    $second = $row['2_raodenoba'] ?? '';
    $third = $row['2_kg_pasi'] ?? '';
    $fourth = $row['3_raodenoba'] ?? '';
    $fifth = $row['4_ertwliani'] ?? '';
    $sixth = $row['4_mravawliani'] ?? '';
} else {
    $first = '';
    $second = '';
    $third = '';
    $fourth = '';
    $fifth = '';
    $sixth = '';
}
?>


<form class="autosave-form" onsubmit="return false;">
    <div id="table_3">
    <table class="custom">
        <tr>
            <th rowspan="2" style="width:12%;"> <?php echo $sityvebi[$ena]['წყარო']; ?></th>
            <th rowspan="2" style="width:12%;"> <?php echo $sityvebi[$ena]['რაოდენობა(კგ)']; ?></th>
            <th rowspan="2" style="width:12%;"> <?php echo $sityvebi[$ena]['1კგ-ის ფასი(ლარი)']; ?></th>


            <th colspan="2" style="width:24%;">
                <?php echo $sityvebi[$ena]['განოყიერებული ფართობი, ჰექტარში 0.01ჰა-მდე სიზუსტით']; ?>
            </th>
        </tr>

        <tr>
            <th style="width:12%;"> <?php echo $sityvebi[$ena]['ერთწლიანი ნარგავები']; ?></th>
            <th style="width:12%;"> <?php echo $sityvebi[$ena]['მრავალწლიანი ნარგავები']; ?></th>
        </tr>
        
        <tr>
            <td> <?php echo $sityvebi[$ena]['1. საკუთარი მეურნეობიდან']; ?></td>
            <td><input type="text" name="first" value="<?php echo htmlspecialchars($first); ?>" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>
            <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>
            <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>
        </tr>

        <tr>
            <td> <?php echo $sityvebi[$ena]['2. ნაყიდი']; ?></td>
            <td><input type="text" name="second" value="<?php echo htmlspecialchars($second); ?>" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td><input type="text" name="third" value="<?php echo htmlspecialchars($third); ?>" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>   
            <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>
            <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td> 
        </tr>
            <tr>
            <td> <?php echo $sityvebi[$ena]['3. სხვა (ნაჩუქარი და ა.შ)']; ?></td>
            <td><input type="text" name="fourth"  value="<?php echo htmlspecialchars($fourth); ?>" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" ></td>
            <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>   
            <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>
            <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td> 
        </tr>
            <tr>
            <td> <?php echo $sityvebi[$ena]['4. სულ']; ?></td>
            <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>
            <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>   
            <td><input type="text" name="fifth"  value="<?php echo htmlspecialchars($fifth); ?>" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" ></td>
            <td><input type="text" name="sixth" value="<?php echo htmlspecialchars($sixth); ?>" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" ></td> 
        </tr>
            
    </table>
</div>
<br>
                <div class="row align-items-center">
                    <div class="col-2 ms-auto">
                            <button type="button" name="third_third" onclick="manualSave('third_third')" class="shenaxvis_bottm text-center"> <?php echo $sityvebi[$ena]['დამახსოვრება']; ?></button>
                    </div>
                </div>

</form>
    
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>



function display_edit(id, romeli) {
    $.ajax({
        url: "Third.php",
        type: "POST",
        data: { edit_id: id, romeli: romeli },
        success: function(html) {

            $("#main_page").html(html);

            if (romeli == '1') {
                document.getElementById("edit_1").hidden = false;
                document.getElementById("insert_1").hidden = true;
            }

            if (romeli == '2') {
                document.getElementById("edit_2").hidden = false;
                document.getElementById("insert_2").hidden = true;
            }
        }
    });
}


    function monacemis_washla(D_id, romeli){       
         if (!confirm("Are you sure you want to delete this record?")) return;
            $.ajax({
                    url: 'check.php',
                    type:'POST',
                    data:{'del_usr': D_id,
                          'romeli': romeli
                    },
                    success: function (c) {
                        location.reload();
                    }

                });
    
    }
</script>
