
<div class="row text-white">
    <div class="col-md-6 fw-bold">
                        ინტერვიუვერის მონაცემები
            <div class="col-10 kitxvaris_style_1 text-black">ინტერვიუერის კოდი</div>
            <div class="col-10 kitxvaris_style_1 text-black">ინტერვიუერის სახელი</div>
            <div class="col-10 kitxvaris_style_1 text-black">ინტერვიუერის გვარი</div>
             <hr>
    </div>
        <div class="col-2">   
            <input type="text" class="form-control loadPagekitxvaris_style_input" placeholder="კოდი" required maxlength="15" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            <input type="text" class="form-control loadPagekitxvaris_style_input" placeholder="გვარი" required maxlength="15" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')">
            <input type="text" class="form-control loadPagekitxvaris_style_input" placeholder="ინტერვიუერის გვ" required maxlength="15" title="Only letters allowed. Max size 20" oninput="this.value = this.value.replace(/[^A-Za-zა-ჰ]/g, '')"> 
           
        </div>

        <div class="col-md-6 fw-bold">
                        ცვლილება მეურნეობაში
            <div class="col-10 kitxvaris_style_1 text-black ">(ცვლილების შემთხვევაში შეცვლილი რეკვიზიტები მიუთითეთ
                                                                ბოლო გვერდზე შენიშვნებით)</div>
                                                                 <hr>
        </div>
         <div class="col-2">   

                <div class="col-12"><br>
                     <select class="form-select loadPagekitxvaris_style_input" id="country" required> 
                        <option value="">აირჩიეთ</option> 
                        <option>მხოლოდ მეურნის მისამართი</option> 
                    </select>
                </div>          
        </div>
            <div class="col-2"> 
                     ჩანაწერი:<br>
                     <select class="form-select loadPagekitxvaris_style_input" id="country" required> 
                        <option value="">აირჩიეთ</option> 
                        <option>სრული</option> 
                    </select>
            </div>
            <div class="col-md-6 fw-bold">
                        ინტერვიუვერის მონაცემები
            <div class="col-10 kitxvaris_style_1 text-black">მეურნეობის იდენტიფიკაციის შედეგი:</div>
            <div class="col-10 kitxvaris_style_1 text-black">მეურნეობის არარსებობის მიზეზი:</div>
            <div class="col-10 kitxvaris_style_1 text-black">გამოკითხვის შედეგი:</div>
             <hr>
    </div>
        <div class="col-2">   
            <select class="form-select loadPagekitxvaris_style_input"
                    id="First_select" onchange="change_select()">
                <option value="0">-აირჩიეთ-</option>
                <option value="1">მხოლოდ მეურნის მისამართი</option>
            </select>

            <select class="form-select loadPagekitxvaris_style_input"
                    id="Third_select" onchange="change_select()">
                <option value="0">-აირჩიეთ-</option>
                <option value="1">მხოლოდ მეურნის მისამართი</option>
            </select>

            <select class="form-select loadPagekitxvaris_style_input"
                    id="Second_select" onchange="change_select()">
                <option value="0">-აირჩიეთ-</option>
                <option value="1">მხოლოდ მეურნის მისამართი</option>
            </select>
        </div>

                        <div class="row align-items-center">
                    <div class="col-2 ms-auto">  
                        <button type="submit" name="kitxvri_1" class="shenaxvis_bottm text-center">დამახსოვრება</button>
                    </div>  
                </div>
</div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
                $(document).ready(function(){
                document.getElementById("Second_select").disabled = true;
                document.getElementById("Third_select").disabled = true;
            });

       function change_select(){
            const select_1 = document.getElementById("First_select");
            const select_2 = document.getElementById("Second_select");
            const select_3 = document.getElementById("Third_select");

                if (select_1.value === '0') {
                    select_2.disabled = true;
                    select_3.disabled = true;

                    select_2.value = '0'; 
                    select_3.value = '0';
                    return;
                }


                if (select_1.value === '1') {
                    select_2.disabled = true;
                    select_3.disabled = false;


                    if (select_3.value === '1') {
                        select_2.disabled = false;
                    }

                    if (select_3.value === '0') {
                        select_2.value = '0';
                        select_2.disabled = true;
                    }
                }
        }
</script>