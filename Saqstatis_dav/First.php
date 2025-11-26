<form id="sruli" method = "POST" action = "functional.php">    
    <div class="row text-white">
        <div class="col-md-6 fw-bold">
            რესპოდენტის მონაცემები
            <div class="col-10 kitxvaris_style_1 text-black ">რესპოდენტის სახელი</div>
                <div class="col-10 kitxvaris_style_1 text-black">რესპოდენტის გვარი</div>
                    <div class="col-10 kitxvaris_style_1 text-black">რესპოდენტის დამოკიდებულება მეურნეობასთან</div>
                        <hr>
        </div>
        <div class="col-2">            
            <input type="text" class="form-control loadPagekitxvaris_style_input" name="res_saxeli" placeholder="სახელი" required maxlength="20" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
                <input type="text" class="form-control loadPagekitxvaris_style_input" name="res_gvari" placeholder="გვარი" required  pattern="[A-Za-z]{2,20}" maxlength="20" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
                    <input type="text" class="form-control loadPagekitxvaris_style_input" name="res_damokidebuleba" placeholder="დამოკიდებულება" required  pattern="[A-Za-z]{2,20}" maxlength="20" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
       
        </div>

        <div class="col-md-6 fw-bold">
            ინტერვიუვერის მონაცემები
            <div class="col-10 kitxvaris_style_1 text-black">ინტერვიუერის კოდი</div>
                <div class="col-10 kitxvaris_style_1 text-black">ინტერვიუერის სახელი</div>
                    <div class="col-10 kitxvaris_style_1 text-black">ინტერვიუერის გვარი</div>
                        <hr>
        </div>
        <div class="col-2">   
            <input type="text" class="form-control loadPagekitxvaris_style_input" name="int_kodi" placeholder="სახელი" required  pattern="[A-Za-z]{2,20}" maxlength="20" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
            <input type="text" class="form-control loadPagekitxvaris_style_input" name="int_saxeli" placeholder="გვარი" required  pattern="[A-Za-z]{2,20}" maxlength="20"  title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
            <input type="text" class="form-control loadPagekitxvaris_style_input" name="int_gvari" placeholder="ინტერვიუერის გვ" required  pattern="[A-Za-z]{2,20}" maxlength="20" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
        </div>

        <div class="col-md-6 fw-bold">
            ცვლილება მეურნეობაში
            <div class="col-10 kitxvaris_style_1 text-black ">(ცვლილების შემთხვევაში შეცვლილი რეკვიზიტები მიუთითეთ
                                        ბოლო გვერდზე შენიშვნებით)</div>
                                            <hr>
        </div>
        <div class="col-2">   
            <div class="col-12"><br>
                <select class="form-select loadPagekitxvaris_style_input" id="misamarti" required> 
                    <option value="">აირჩიეთ</option> 
                    <option value="მხოლოდ მეურნის მისამართი">მხოლოდ მეურნის მისამართი</option> 
                </select>
            </div>          
        </div>
        <div class="col-2"> 
            ჩანაწერი:<br>
                <select class="form-select loadPagekitxvaris_style_input" onchange="display_second_part()" id="chanaweri_type" required> 
                    <option value="0">აირჩიეთ</option> 
                    <option value ="1">სრული</option> 
                </select>
        </div>


   
        <section id="second_part" >
            <div class="row">
                <div class="col-md-6 fw-bold">
                    საწარმოს ხელმძღვანელის მონაცემები
                        <div class="col-10 kitxvaris_style_1 text-black ">საწარმოს ხელმძღვანელის სქესი</div>
                        <div class="col-10 kitxvaris_style_1 text-black ">საწარმოს ხელმძღვანელის ასაკი</div>
                            <hr>
                </div>
                <div class="col-2"><br>
                    <div class="d-flex align-items-center">
                        <div class="form-check me-3">
                            <input id="male" name="gender" type="radio" value="კაცი"class="form-check-input" required>
                            <label class="form-check-label" for="male">კაცი</label>
                        </div>

                        <div class="form-check">
                            <input id="female" name="gender" type="radio" value="ქალი" class="form-check-input" required>
                            <label class="form-check-label" for="female">ქალი</label>
                        </div>
                    </div>
                        <div class="col-6">   
                            <input type="text" class="form-control loadPagekitxvaris_style_input" name="asaki" max="100"       oninput="this.value = this.value.replace(/[^0-9]/g, ''); 
                                if (this.value > 100) this.value = 100; if (this.value < 18) this.value = 18;" maxlength="3" title="ხელმძღვანელის ასაკი უნდა აღემატებოდეს 18-წელს და არ აღემატებოდეს 100 წელს" placeholder="ასაკი" required>
                        </div>
                </div>

                <div class="col-md-6 fw-bold">
                    საწარმოს სარგებლობაში არსებული ნაკვეთები
                    <div class="col-10 kitxvaris_style_1 text-black ">ნაკვეთების რაოდენობა</div>
                </div>  
                <div class="col-2">  
                    <input type="text" class="form-control loadPagekitxvaris_style_input" name="rapdenoba" placeholder="რაოდენობა" required pattern="[0-9]{0,4}" maxlength="4" title="Only numbers allowed" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </div>
                <div class="col-md-12 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black ">საწარმოს მიწის ფართობი(მიუთითეთ ჰექტარებში, 0,01 ჰა-მდე სიზუსტით)</div>
                </div>
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black ">ა) საკუთარი</div>
                </div>    
                <div class="col-2">  
                    <input type="number" class="form-control loadPagekitxvaris_style_input" name="sakutari" onchange="Dajameba_sum()" id= a_value placeholder="საკუთარი" required maxlength="10" pattern="[0-9]{0,10}" title="Only numbers allowed" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </div>  
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black ">ბ) იჯარით აღებული(გ+დ)</div>
                </div>
                <div class="col-2">  
                    <input type="number" class="form-control loadPagekitxvaris_style_input" name="ijarit_agebuli" onchange="Dajameba_sum()" id= b_value placeholder="იჯარით" disabled >
                </div>  
                <div class="col-md-12 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black ">მათ შორის:</div>
                </div>
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black ">
                        <div class="col-5" style="padding-left:20px;">
                            გ)სახელმწიფოსგან
                        </div>
                    </div>
                </div>
                <div class="col-2">  
                    <input type="number" class="form-control loadPagekitxvaris_style_input" name="saxelmwifosgan" onchange="Dajameba_sum()" id=g_value placeholder="სახელმწიფოსგან" required maxlength="10" pattern="[0-9]{0,10}" title="Only numbers allowed"oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </div>  
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black ">
                        <div class="col-5"style="padding-left:20px;">
                        დ)კერძო პირისგან
                        </div>
                    </div>
                </div>
                <div class="col-2">  
                    <input type="number" class="form-control loadPagekitxvaris_style_input" name="kerdzo_pirisgan" onchange="Dajameba_sum()" id=d_value placeholder="კერძო პირისგან" required maxlength="10" pattern="[0-9]{0,10}" title="Only numbers allowed" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </div>  
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black ">ე) მთლიანი ფართობი(ა+ბ)</div>
                        <br>
                </div>
                <div class="col-2">  
                    <input type="number" class="form-control loadPagekitxvaris_style_input" name="mtliani" onchange="Dajameba_sum()" id=e_value placeholder="სრული" disabled>
                </div>  
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black ">თანამშრომლობის ხარისხი</div>
                </div>
                <div class="col-2">  
                    <input type="text" class="form-control loadPagekitxvaris_style_input" name="tanams_xarisxi" placeholder="ხარისხი" required maxlength="10">
                </div>  
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black ">ინტერვიუს ხანგრძლივობა</div>
                        <br>
                </div>
                <div class="col-2">  
                    <input type="time" class="form-control loadPagekitxvaris_style_input" name="xangrdzlivoba" placeholder="ხანგრძლივობა" required>
                </div>  
                <div class="col-md-6 fw-bold">
                    <div class="col-10 kitxvaris_style_1 text-black ">გამოკითხვის ჩატარების თარიღი</div>
                </div>
                <div class="col-2">  
                    <input type="datetime-local" class="form-control loadPagekitxvaris_style_input" name="tarigi" placeholder="თარიღი" required>
                </div>  
            </div>
        </section>
                <div class="row align-items-center">
                    <div class="col-2 ms-auto">
                        <button type="submit" name="kitxvri_1" class="shenaxvis_bottm text-center">დამახსოვრება</button>
                    </div>
                </div>
    </div>
</form>   
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>

        $(document).ready(function() {
        $("#second_part").hide(); 

        $("#chanaweri_type").on("change", function() {
            if ($(this).val() === "0") {
            $("#second_part").hide();
            $("#second_part").find("input, select, textarea").val(""); 
            $("#second_part").find("input:radio, input:checkbox").prop("checked", false);
            } else {
            $("#second_part").show();
            }
        });
        });
</script>