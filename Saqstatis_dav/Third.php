<?php include('db.php'); ?>
<div class="kitxvaris_style_header mb-3 text-center fs-5 fw-bold">
  მონაცემები ბაზაში
</div>


<small>საწარმოს მიეწ გამოყენებული სასუქები გასული კვარტლის განმავლობაში</small>
<br><br>

<table class="custom">
    <tr>
        <th rowspan="1" style="width:15%;">სასუქის ტიპი</th>
        <th rowspan="1" colspan="2" style="width:30%;">გამოყენებული რაოდენობა(კგ)</th>
        <th rowspan="2" style="width:10%;">1კგ-ის ფასი(ლარი)</th>
        <th rowspan="1" colspan="2" style="width:24%;">განოყიერებული ფართობი, ჰექტარებში 0,01ჰა-მდე სიზუსტით</th>
        <th rowspan="2" style="width:10%"> ოპერაციები</th>
    </tr>
    <tr>
        <th style="width:15%;">დასახელება</th>    
        <th style="width:10%;">სულ</th>
        <th style="width:10%;">მათ შორის ნაჩუქარი</th>
        <th style="width:12%;">ერთწლიანი</th>
        <th style="width:12%;">მარავალწიანი ნარგავები</th>
    </tr>
    <tr>
        <td><input type="text" maxlength="20" oninput="this.value = this.value.replace(/[^a-zA-Z0-9]/g, '')"></td>
        <td><input type="text" maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
        <td><input type="text" maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
        <td><input type="text" maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
        <td><input type="text" maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
        <td><input type="text" maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
        <td style="text-align:center;">
            <button class="btn btn-danger btn-sm" onclick="monacemis_washla(1)">❌</button>
            <button class="btn btn-primary btn-sm" ><img src="img/add.png" alt="" width="21px;" height="21px;"></button>    
        </td>
</table>




<br>
<small>საწარმოს მიეწ გამოყენებული პესტიციდები გასული კვარტლის განმავლობაში</small>
<br><br>

<table class="custom">
    <tr>
        <th rowspan="1" style="width:15%;">პესტიდიცის ტიპი</th>
        <th rowspan="1" colspan="3" style="width:30%;">გამოყენებული რაოდენობა</th>
        <th rowspan="2" style="width:10%;">ზომის ერთეულის ფასი(ლარი)</th>
        <th rowspan="1" colspan="2" style="width:24%;">დამუშავებული ფართობი, ჰექტარებში 0,01ჰა-მდე სიზუსტით</th>
        <th rowspan="2" style="width:10%"> ოპერაციები</th>
    </tr>
    <tr>
        <th style="width:15%;">დასახელება</th>
        <th style="width:10%;">ზომის ერთეული</th>
        <th style="width:10%;">სულ</th>
        <th style="width:10%;">მათ შორის ნაჩუქარი</th>
        <th style="width:12%;">ერთწლიანი</th>
        <th style="width:12%;">მარავალწიანი ნარგავები</th>
    </tr>
    <tr>
        <td><input type="text" ></td>
        <td><input type="text" maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            <td>
                <select name="wona" id="wona">
                    <option value="კგ">კგ</option>
                    <option value="ლიტრი">ლიტრი</option>
                    <option value="გრამი">გრამი</option>
                </select>
            </td>
        <td><input type="text" maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
        <td><input type="text" maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
        <td><input type="text" maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
        <td><input type="text" maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
        <td style="text-align:center;">
            <button class="btn btn-danger btn-sm" onclick="monacemis_washla(1)">❌</button>
            <button class="btn btn-primary btn-sm" ><img src="img/add.png" alt="" width="21px;" height="21px;"></button>    
        </td>
</table>

<br>
<small> საწარმოს მიერ გამოყენებული პროდუქტი გასული კვარტლის განმავლობაში</small><br><br>

<table class="custom">
    <tr>
        <th rowspan="2" style="width:12%;">წყარო</th>
        <th rowspan="2" style="width:12%;">რაოდენობა(კგ)</th>
        <th rowspan="2" style="width:12%;">1კგ-ის ფასი(ლარი)</th>


        <th colspan="2" style="width:24%;">
            განოყიერებული ფართობი, ჰექტარში 0.01ჰა-მდე სიზუსტით
        </th>
    </tr>

    <tr>
        <th style="width:12%;">ერთწლიანი ნარგავები</th>
        <th style="width:12%;">მრავალწლიანი ნარგავები</th>
    </tr>
    
    <tr>
        <td>1. საკუთარი მეურნეობიდან</td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>
    </tr>

    <tr>
        <td>2. ნაყიდი</td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>   
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td> 
    </tr>
        <tr>
        <td>3. სხვა (ნაჩუქარი და ა.შ)</td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" ></td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>   
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td> 
    </tr>
        <tr>
        <td>4. სულ</td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" disabled></td>   
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" ></td>
        <td><input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" ></td> 
    </tr>
        
</table>
<br>
    <button type="submit" name="kitxvri_1" class="shenaxvis_bottm text-center">დამახსოვრება</button>

    
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>



        function display_insert(){
            const div = document.getElementById("insert_new");
                if (div.hidden) {
              
                    div.hidden = false;
                } else {
                   
                    div.hidden = true;
                }
        }
        

    function monacemis_washla(D_id){       
         if (!confirm("Are you sure you want to delete this record?")) return;
            $.ajax({
                    url: 'check.php',
                    type:'POST',
                    data:{'del_usr': D_id},
                    success: function (c) {
                    
                    }

                });
    
    }
</script>
