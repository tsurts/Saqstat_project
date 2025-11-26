<?php  
session_start();
if($_SESSION['gues_usr'] == 'logged_in'){

include('db.php');


$reload_page = isset($_SESSION['pg']) ? $_SESSION['pg'] : 0;

if(isset($_GET['pgi'])){
    $reload_page = $_GET['pgi'];
}else{
    
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
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

    </style>
</head>
<body>
    <div class="container"> 
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"> 
            <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"> 
                <svg class="bi me-2" width="40" height="32" aria-hidden="true">
                    <use xlink:href="#bootstrap">         
                    </use>
                </svg> 
          
                        <a href="index.php?pgi=0" class="fs-4 text-decoration-none d-block" >
                            SAQStatic
                        </a>
               

            <ul class="nav nav-pills"> 
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a> </li>
                <li class="nav-item"><a href="check.php?leav=1" class="nav-link">Leave</a></li> 
            </ul> 
        </header> 
    </div>


<div class="container">
  
    <div class="row justify-content-center kitxvaris_style_header">
        <div class="col-md-4 text-center" onclick="page_changer('0')">First page</div>
        <div class="col-md-4 text-center" onclick="page_changer('1')">Second page</div>
        <div class="col-md-4 text-center" onclick="page_changer('2')">Third page</div>
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
 
            $(document).ready(function() {
                const pages = ["First.php", "Second.php", "Third.php"];
                $("#main_page").load(pages[<?= $reload_page; ?>]);
            });            
            
            function page_changer(page) {
                const pages = ["First.php", "Second.php", "Third.php"];
                $("#main_page").load(pages[page]);

                $.ajax({
                    url: 'functional.php',
                    type: 'GET',
                    data: { pg: page }
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