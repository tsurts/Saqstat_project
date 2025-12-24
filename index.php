<?php  



include('db.php');
include('functional.php');
if($_SESSION['gues_usr'] == 'logged_in'){


if(isset($_GET['ena'])){
    $ena = $_GET['ena'];
    $_SESSION['ena']=$ena;
}else if( isset($_SESSION['ena'])){
    $ena = $_SESSION['ena'];
}else {
        $ena = 'geo';
}

$reload_page = isset($_SESSION['pg']) ? $_SESSION['pg'] : 0;


?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
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
            
        .Kitxvaris_style{
            margin:10px;
            padding:15px;
            background-color:rgba(127, 165, 190, 1);
            font-weight: bold;            
        }
        .kitxvaris_style_1{
            margin:10px;
            padding-bottom:10px;
            padding-left:30px;
            font-weight: bold;
            font-size:15px;
        }
        .kitxvaris_style_header{
            cursor: pointer;
            background-color:rgba(61, 128, 173, 1);
            padding:10px;
            font-weight: bold;
            border-radius:5px;
        }
        .loadPagekitxvaris_style_input{
            margin:10px;
            padding-bottom:10px;         
            font-weight:bold;
            font-size:15px;
        }
        .shenaxvis_bottm{
            font-weight:bold;
            background-color:rgba(23, 82, 121, 1);
            cursor: pointer;
            border-radius:7px;
            padding:4px;
            color:white;            
        }
        .last_part{
                border: 1px solid #858585ff;
                background-color: #a8c8ddff;
                font-weight: bold;
                padding: 8px;
                text-align: center;
                height: 50px;
        }
                .last_part_1{
                border: 1px solid #858585ff;
                background-color: #a8c8ddff;
                padding: 8px;
                 text-align: center;
                height: 15px;
                font-weight: bold;
        }
        table.custom {

                border-collapse: collapse;
                text-align: center;
                font-weight: bold;
               
            }

        table.custom th
         {
                border: 2px solid #3b3b3bff;
                background-color:rgba(61, 128, 173, 1);   /* your screenshot's blue */
                color: white;
                padding: 6px;
                
            }
            table.custom td {
                border: 2px solid #6d6e70ff;
                padding: 6px;
                background-color:rgba(170, 198, 218, 1); 
                font-size: small;
                text-align: left;
            }
            table.custom td.mini_td {
                padding: 2px 4px;     
                height: 20px;         /* optional */
                border: 2px solid #6d6e70ff;
            }
            table.custom td input {
                width: 90%;        
                margin: auto;       
                border-radius: 10px;
                border: 2px solid #6d6e70ff;
                font-weight: bold;
            }
   
            table.custom td select {
                width: 95%;        
                margin: auto;       
                border-radius: 10px;
                border: 2px solid #6d6e70ff;
                font-weight: bold;
            }
            .header_icon{
                text-decoration: none !important;
                font-size: 30px;
                font-weight: bold;
                color: #000;
                cursor: pointer;

            }
            table.custom tr.edit-row td {
                background-color:rgba(170, 129, 91, 1);                
                border-color: #79693cff;
            }

            /* Highlight row during first insert */
            table.custom tr.insert-row td {
                background-color:rgba(82, 135, 151, 1);    
                border-color: #559755ff;
            }

            /* Optionally make text bold inside these rows */
            table.custom tr.edit-row td input,
            table.custom tr.insert-row td input,
            table.custom tr.edit-row td select,
            table.custom tr.insert-row td select {
                background: #fff; 
                font-weight: bold;
            }
            .user-menu {
                position: relative;
                display: inline-block;
            }

            .user-btn {
                background: #212121;
                color: #fff;
                padding: 10px 15px;
                border: none;
                cursor: pointer;
                border-radius: 8px;
                font-weight: 600;
            }

            .user-btn:hover {
                background: #333;
            }

            .menu-options {
                display: none;
                position: absolute;
                background: #fafafa;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.15);
                min-width: 150px;
                margin-top: 5px;
                overflow: hidden;
                z-index: 999;
            }

            .menu-options a {
                display: block;
                padding: 10px;
                text-decoration: none;
                color: #222;
                font-size: 14px;
            }

            .menu-options a:hover {
                background: #e5e5e5;
            }

    </style>
</head>
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
                            <img src="img/geo.png" style="width: 30px; height: 20px;"> ქარ
                        </a>
                    </div>
                <?php } ?>
    <div class="container"> 
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"> 
       
          
                        <div onclick="page_changer('0')" class=" header_icon d-flex align-items-center mb-3 mb-md-0 me-md-auto" style="font-weight: bold; font-size: 30px;" >
                             <?php echo $sityvebi[$ena]['SAQStatic']; ?>
                        </div>
               
<?php  
$id_of_usr = $_SESSION['user_id'];
$sql = "SELECT name_usr, last_name FROM usr WHERE id_usr = '$id_of_usr'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


$name_of_user = $row['name_usr'];
$last_name_of_user = $row['last_name'];
$web_name = $name_of_user . ' ' . $last_name_of_user;
?>

                  

            <div class="user-menu">
                <button class="user-btn" onclick="toggleMenu()">
                    <?php echo htmlspecialchars($web_name); ?>
                    <span class="arrow">▼</span>
                </button>

                <div class="menu-options" id="userMenu">
                 <!--   <a href="#"><?php // echo $sityvebi[$ena]['პაროლის შეცვლა']; ?></a>
                    <a href="#"><?php //echo $sityvebi[$ena]['ანგარიშის ინფორმაცია']; ?></a>
                    <a href="#"><?php //echo $sityvebi[$ena]['პარამეტრები']; ?></a> -->
                    <a href="check.php?leav=1"><?php echo $sityvebi[$ena]['გამოსვლა']; ?></a>
                </div>
            </div>
        </header> 
    </div>   

<div class="container">
  
    <div class="row justify-content-center kitxvaris_style_header">
        <div class="col-md-4 text-center" onclick="page_changer('0')"><?php echo $sityvebi[$ena]['პირველი გვერდი']; ?></div>
        <div class="col-md-4 text-center" onclick="page_changer('1')"><?php echo $sityvebi[$ena]['მეორე გვერდი']; ?></div>
        <div class="col-md-4 text-center" onclick="page_changer('2')"><?php echo $sityvebi[$ena]['მესამე გვერდი']; ?></div>
    </div>
 
    <div class="row justify-content-center ">
        <div class="col-12 kitxvaris_style">
            <section id="main_page">            
            </section>
        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

    const pages = ["First.php", "Second.php", "Third.php"];

    const CURRENT_PG = <?= (int)$_SESSION['pg'] ?>;



            function toggleMenu() {
                let menu = document.getElementById('userMenu');
                menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
            }

        function applyScroll() {
            let scroll = new URLSearchParams(location.search).get("scroll");
            if (!scroll) return;

            let target = document.getElementById("table_" + scroll);

            if (target) {
                setTimeout(() => {
                    target.scrollIntoView({ behavior: "smooth" });
                }, 100); // wait for AJAX DOM insert
            }
        }

        let isDirty = false;
        let currentPage = null;

        /* Detect changes */
        document.addEventListener("input", function (e) {
            if (document.getElementById("main_page").contains(e.target)) {
                isDirty = true;
            }
        });

        /* Page change handler */
            function page_changer(pageIndex) {
                if (isDirty) {
                    if (confirm("შენ გაქვს შეუნახავი ცვლილებები. შეინახეთ მონაცემები")) {
                        saveCurrentPage(() => loadPage(pageIndex));
                    } else {
                        isDirty = false;
                        loadPage(pageIndex);
                    }
                } else {
                    loadPage(pageIndex);
                }
            }

            function clearDirty() {
            isDirty = false;
                }

        /* Load page content */
            function loadPage(pageIndex) {
                fetch(pages[pageIndex])
                    .then(res => res.text())
                    .then(html => {
                        document.getElementById("main_page").innerHTML = html;
                        currentPage = pageIndex;
                        isDirty = false;
                    });

                $.get("functional.php", { pg: pageIndex });
            }

        /* Save current page */
        function saveCurrentPage(callback) {
            const form = document.querySelector("#main_page form");
            if (!form) {
                isDirty = false;
                callback();
                return;
            }

            const formData = new FormData(form);

            fetch("save_page.php", {
                method: "POST",
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    isDirty = false;
                    callback();
                } else {
                    alert("შენახვა ვერ მოხერხდა");
                }
            });
        }

        /* Warn on browser close */
        window.addEventListener("beforeunload", function (e) {
            if (isDirty) {
                e.preventDefault();
                e.returnValue = "";
            }
        });
                
        $(document).ready(function() {

            $("#main_page").load(pages[<?= $reload_page; ?>], function () {
                applyScroll();   // NOW it scrolls correctly
            });
        });

        function autosave_and_change(nextPage) {
            const form = $(".autosave-form");

            if (form.length) {
                $.ajax({
                    url: "functional.php",
                    type: "POST",
                    data: form.serialize() + "&autosave=1&save_pg=" + CURRENT_PG,
                    success: function () {
                        clearDirty();
                        loadPage(nextPage);
                    }
                });
            } else {
                clearDirty();
                loadPage(nextPage);
            }
        }

     $(document).on("submit", ".autosave-form", function () {
        $("<input>")
            .attr("type", "hidden")
            .attr("name", "save_pg")
            .val(CURRENT_PG)
            .appendTo(this);
    });

    function loadPage(page) {
        const pages = ["First.php", "Second.php", "Third.php"];
        $("#main_page").load(pages[page]);
        $.get("functional.php", { pg: page });
    }

        function manualSave(buttonName) {
    const form = $(".autosave-form");
    if (!form.length) return;

    let data = form.serialize();
    data += "&" + encodeURIComponent(buttonName) + "=1";
    data += "&save_pg=" + CURRENT_PG;

    $.ajax({
        url: "functional.php",
        type: "POST",
        data: data,
        success: function () {
            clearDirty();
            
        }
    });
}

    const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
        });


        function display_second_part(){
            const select = document.getElementById("chanaweri_type");
            const div = document.getElementById("second_part");

            if(select.value === '0'){
                div.style.display = 'none';
            }else {
                div.style.display = 'show';
            }
        }
        
        function Dajameba_sum(){
            const a_value = parseFloat(document.getElementById('a_value').value) || 0;
            const g_value = parseFloat(document.getElementById('g_value').value) || 0;
            const d_value = parseFloat(document.getElementById('d_value').value) || 0;

            const b_value = g_value + d_value;
            const e_value = a_value + b_value;

       const bInput = document.getElementById('b_value');
        const eInput = document.getElementById('e_value');

        if (bInput) bInput.value = b_value.toFixed();
        if (eInput) eInput.value = e_value.toFixed();
        }
      




</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
<?php  }else{   
                header("Location: register.php");  
            }  ?>