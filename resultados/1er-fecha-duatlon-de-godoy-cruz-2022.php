<?php
include_once 'base_de_datos/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM aconcagua2020";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$resultados=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">

    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon"/>

    <title>1er Fecha Duatlón de Godoy Cruz 2022</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">

    <!-- datatables css -->
    <!--link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/-->
    <!--link rel="stylesheet" type="text/css" href="datatables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css"/-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>   
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css"/>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="../img/logo.png" alt="">
                        </a>
                    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <li><a href="../index ">Home</a></li>
                            <li><a href="https://mlteventossport.com/">Inscripciones</a></li>
                            <li><a href="../calendario ">Calendario</a></li>
                            <li><a href="../nosotros ">Nosotros</a></li>
                            <li><a href="../logistica ">Logística</a></li>
                            <li><a href="../preguntas ">Preguntas</a></li>
                            <li><a href="../contacto ">Contacto</a></li>
                        </ul>
                    </nav>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Portfolio Section Begin -->
    <br />
    <br />

    <section class="portfolio-section portfolio-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2><font face="Segoe UI">1er Fecha Duatlón de Godoy Cruz 2022</font></h2>
                    </div>
                </div>
            </div>
        </div>
    <br />
    
</section>
    
    <!-- Tablas-->
    <div class="container">
        <div class="row">    
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-hover table-bordered display compact responsive nowrap" cellspacing="0" style="width:100%">
                        <thead class="text-center table-dark" style="font-size:12px">
                            <tr>

                                <th style="text-align: center">DORSAL</th>
                                <th style="text-align: center">NOMBRE</th> 
                                <th style="text-align: center">APELLIDO</th>
                                <th style="text-align: center">SEXO</th>
                                <th style="text-align: center">DISTANCIA</th> 
                                <th style="text-align: center">CATEGORIA</th>
                                <th style="text-align: center">POS. GRAL.</th>
                                <th style="text-align: center">POS. GRAL. SEXO</th>
                                <th style="text-align: center">POS. CATEGORIA</th>
                                <th style="text-align: center">PAÍS </th>
                                <th style="text-align: center">TIEMPO</th>

                            </tr>
                        </thead>
                        <tbody class="text-center" style="font-size:12px">
                            <?php
                            foreach($resultados as $aconcagua){    
                            ?>
                            <tr>
                                <td><?php echo $aconcagua['Dorsal']?></td>
                                <td><?php echo $aconcagua['Nombre']?></td>
                                <td><?php echo $aconcagua['Apellido']?></td>
                                <td><?php echo $aconcagua['Sexo']?></td>
                                <td><?php echo $aconcagua['Distancia']?></td>
                                <td><?php echo $aconcagua['Categoria']?></td>
                                <td><?php echo $aconcagua['Pos.Gral.']?></td>
                                <td><?php echo $aconcagua['Pos.Gral.Sexo']?></td>
                                <td><?php echo $aconcagua['Pos.Categoria']?></td>
                                <td><?php echo $aconcagua['Pais']?></td>
                                <td><?php echo $aconcagua['Tiempo']?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        

    

<!-- Footer Section Begin -->
<br />
<br />
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="fs-about">
                    <div class="fa-logo">
                            <center><img src="../img/f-logo.png" alt=""></center>
                    </div>
                    <p>Empresa dedicada a la organización de Eventos Deportivos, prestando como principal servicio el de Logística e Infraestructura de Eventos.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="fs-about">
                    <div class="fa-logo">
                            <center><img src="../img/f-timer.png" alt=""></center>
                    </div>
                    <p>Club de Eventos ha incorporado su división TIMER, con la utilización del sistema de cronometraje descartable de alta tecnología Macsha Timer.</p>
                </div>
            </div>
            <!--div class="col-lg-3 col-md-6 col-sm-6">
                <div class="fs-about">
                    <div class="fa-logo">
                           <center><img src="img/f-eventbrite.png" alt=""></center>
                    </div>
                    <p>Vinculada con Eventbrite, ahora sacar entradas para tí, familia o amigos nunca fue tan fácil.</p>
                </div>
            </div-->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="fs-widget">
                    <center>
                    <h5>Disciplinas</h5>
                    <p>Maratones - Carreras</p>
                    <p>Rally - MTB - Mountain Bike</p>
                    <p>Ciclismo - Running - Kayak</p>
                    </center>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="fs-widget">
                    <center>
                    <h5>Contacto</h5>
                    <p>informacion@mlteventossport.com.ar</p>
                    <p>comercial@mlteventossport.com.ar</p>
                    </center>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="copyright-text">
                    <p>Copyright 2020 - 2022 | Desarrollo by <a href="https://mgmza.com"><img src="../img/f-mg.png" width=70px></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <script>
    function Nombre() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
    </script>

    <script>
    function Dorsal() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput2");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
    </script>

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/masonry.pkgd.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>

    

    <script src="jquery/jquery-3.6.1.min.js"></script>
    <!--script src="bootstrap/js/bootstrap.min.js"></script-->
    <!--script type="text/javascript" src="datatables/datatables.min.js"></script-->
    <script type="text/javascript" src="main.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    
</body>

</html>
