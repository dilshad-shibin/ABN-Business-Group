<!DOCTYPE html>
<html lang="en">
<?php include("manufactures.php"); ?>  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ABN Bussiness Group</title>
    <!-- Favicon and Touch Icons -->
    <link href="img/abn_favicon.png" rel="shortcut icon" type="image/png">
    <!--  css files -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- external javascripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-plugin-collection.js"></script>
    <!-- datatable -->
    <link rel="stylesheet" href="js/datatable/dataTables.bootstrap4.min.css">

    <style>
        .navbar-nav li .active {
            color: #162a75 !important;
            text-decoration: underline;
        }
    </style>

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!--====== Scroll To Top Area Start ======-->
        <button id="back-to-top"><i class="fa fa-arrow-up"></i></button>

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">

            <div class="topbar">
                <div class="lower-topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="img/logo-png.png" alt></a>
                                </div>
                            </div>
                            <div class="col col-md-9">
                                <div class="lower-topbar-info-wrapper">
                                    <div class="lower-topbar-info">
                                        <div>
                                            <div class="icon">
                                                <i class="fi flaticon-smartphone"></i>
                                            </div>
                                            <div class="details">
                                                <p>0484-2630-444</p>
                                                <p>0484-2621-214</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="icon">
                                                <i class="fi flaticon-opened-email-envelope"></i>
                                            </div>
                                            <div class="details">
                                                <p style="margin-top: 10px;">info@abnbusinessgroup.com</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="icon">
                                                <i class="fi flaticon-alarm-clock"></i>
                                            </div>
                                            <div class="details">
                                                <p style="margin-top: 10px;">Monday - Saturday</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a> </li>
                            <li> <a href="capabilities.html">Capabilities</a> </li>
                            <li><a href="principals.php" class="active">Principals</a></li>
                            <li><a href="customers.html">Customers</a></li>
                            <li> <a href="associates.html">Associates</a> </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- start Principals -->
        <section class="associate-section section-padding">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 section-title text-left">
                        <h2 class="mb-4">ABN <span class="color-b">Principals</span></h2>
                    </div>
                </div>
                <div class="row d-flex f-w">
                    <div class="about-content">
                        <p>Group distributes Pharmaceutical products in all therapeutic areas of almost all multinational and Indian national pharmaceutical companies and also deals with many leading products in food & nutrition, personal care, and life
                            style products.
                        </p>
                        <p>It is associated with 258 number of companies in distributing their products in the assigned territory in Kerala.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- customer listing -->
        <section class="section-padding listing-seection">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 shadow-md">
                        <!-- tabs start -->
                        <ul class="tablist nav nav-tabs">
                            <li class="nav-item active">
                                <a href="#vco" data-toggle="tab">Varghese & Company</a>
                            </li>
                            <li class="nav-item">
                                <a  href="#bruklyn" data-toggle="tab">Bruklyn Associates</a>
                            </li>
                            <li class="nav-item">
                                <a href="#abn" data-toggle="tab">ABN Business Group</a>
                            </li>
                        </ul>
                        <!-- tab Contents -->
                        <div class="tab-content">
                            <!-- varghese -->
                            <div class="tab-pane fade in active" id="vco">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="dataTable" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="bg-success color-black">No</th>
                                                <th scope="col" class="bg-success color-black">Company</th>
                                                <th scope="col" class="bg-success color-black" style="display:none">Contribution</th>
                                            </tr>
                                        </thead>
                                       <?php $Varghese = getmanufactures(2); ?> 
                                        
                                         <tbody>
                                             <?php 
                                             $i = "0";
                                             foreach($Varghese as $vargheseData){ 
                                              $i++;
                                             ?>
                                            <tr>
                                                <th scope="row"><?php echo $i ?></th>
                                                <td><?php echo $vargheseData->name ?></td>
                                                <td style="display:none"><?php echo $vargheseData->contribution ?></td>
                                            </tr>
                                            
                                             <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            <!-- bruklyn -->
                            <div class="tab-pane fade" id="bruklyn">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="dataTable2" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="bg-success color-black">No</th>
                                                <th scope="col" class="bg-success color-black">Company</th>
                                                <th scope="col" class="bg-success color-black" style="display:none">Contribution</th>
                                            </tr>
                                        </thead>
                                         <?php $Bruklyn = getmanufactures(1);?> 
                                       <tbody>
                                             <?php 
                                             $i = "0";
                                             foreach($Bruklyn as $BruklynData){ 
                                              $i++;
                                             ?>
                                            <tr>
                                                <th scope="row"><?php echo $i ?></th>
                                                <td><?php echo $BruklynData->name ?></td>
                                                <td style="display:none"><?php echo $BruklynData->contribution ?></td>
                                            </tr>
                                            
                                             <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- abn -->
                            <div class="tab-pane fade0" id="abn">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="dataTable3" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="bg-success color-black">No</th>
                                                <th scope="col" class="bg-success color-black">Company</th>
                                                <th scope="col" class="bg-success color-black" style="display:none">Contribution</th>
                                            </tr>
                                        </thead>
                                        <?php $abn = getmanufactures(3);?> 
                                         <tbody>
                                             <?php 
                                             $i = "0";
                                             foreach($abn as $abnData){ 
                                              $i++;
                                             ?>
                                            <tr>
                                                <th scope="row"><?php echo $i ?></th>
                                                <td><?php echo $abnData->name ?></td>
                                                <td style="display:none"><?php echo $abnData->contribution ?></td>
                                            </tr>
                                            
                                             <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Brand Section -->
     
        <!-- Brand Section -->
        <section>
            <!-- start brand-section 1st-->
            <div class="brand-section layer-overlay">
                <div class="container">
                    <div class="row">
                        <h3 style="padding-left: 15px;margin-bottom: 20px;">Varghese & Company</h3>
                    </div>
                    <div class="row">
                        <div class="brand-slider">

                            <div class="col-xs-12">
                                <a href="https://www.cipla.com/home" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/vco/cipla.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.abbott.co.in/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/vco/Abbott.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.lupin.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/vco/The_Lupin_Logo.svg.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.usvindia.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/vco/usv.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.glenmarkpharma.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/vco/glenmark-logo.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://intaspharma.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/vco/intas_head.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.mankindpharma.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/vco/mankind.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://aristopharma.org/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/vco/aristo.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.gsk.com/en-gb/home/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/vco/gsk.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="http://www.bluecrosslabs.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/vco/blue-cross.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start brand-section 2nd-->
            <div class="brand-section layer-overlay">
                <div class="container">
                    <div class="row">
                        <h3 style="padding-left: 15px;margin-bottom: 20px;">Bruklyn Associates</h3>
                    </div>
                    <div class="row">
                        <div class="brand-slider">
                            <div class="col-xs-12">
                                <a href="http://www.torrentpharma.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/bruklyn/torrentPharma.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://sunpharma.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/bruklyn/sunpharma.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="http://www.microlabsltd.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/bruklyn/micro labs.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://zyduscadila.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/bruklyn/zydus-logo.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.sanofi.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/bruklyn/sanofi logo.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://eris.co.in/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/bruklyn/eris-logo.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.macleodspharma.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/bruklyn/macleods.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.systopic.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/bruklyn/Systopic Laboratories Pvt. Ltd Recruitment 2019.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="aabbott.co.in" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/bruklyn/Abbott.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://curatiohealthcare.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/bruklyn/curatio-logo-2.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start brand-section  3rd-->
            <div class="brand-section layer-overlay">
                <div class="container">
                    <div class="row">
                        <h3 style="padding-left: 15px;margin-bottom: 20px;">ABN Business Group</h3>
                    </div>
                    <div class="row">
                        <div class="brand-slider">
                            <div class="col-xs-12">
                                <a href="http://www.ajantapharma.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/abn/Ajanta-Pharma.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://akesissindia.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/abn/akesiss.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="http://www.francoindian.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/abn/franco-logo.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.astrazeneca.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/abn/astra-zenica.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://himalayawellness.in/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/abn/himalaya.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="http://www.britishbiologicals.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/abn/BB_Logo.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.smartlaboratories.co.in/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/abn/Smart_Logo-171x70.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.cipla.com/home" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/abn/cipla.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.cadilapharma.com/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/abn/Cadila_Pharmaceuticals_Logo.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="https://www.pankajakasthuri.in/" target="_blank">
                                    <div class="brand-item">
                                        <img src="img/company_300_200/abn/pankajakasthoori.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- start footer -->
        <footer class="site-footer">
            <div class="upper-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="widget usefull-links-widget">
                                <h3>ABN Business Group</h3>
                                <address style="color: #fff;">
                                    20/179-3, ABN Arcade, <br>
                                    Great Lane Road, <br>
                                    Bazar P.O, Aluva, <br>
                                    Ernakulam,683101.
                                </address>
                                <ul>
                                    <li><a href="tel:9846216601"><i class="fi flaticon-smartphone"></i><span class="ml-1">984-621-6601</span></a></li>
                                    <li><a href="mailto:info@abnbusinessgroup.com"><i class="fi flaticon-opened-email-envelope"></i><span class="ml-1">info@abnbusinessgroup.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="widget usefull-links-widget">
                                <h3>Varghese & Company</h3>
                                <address style="color: #fff;">
                                    20/179-1&2, ABN Arcade, <br>
                                    Great Lane Road, <br>
                                    Bazar P.O, Aluva, <br>
                                    Ernakulam,683101.
                                </address>
                                <ul>
                                    <li><a href="tel:9847474783"><i class="fi flaticon-smartphone"></i><span class="ml-1">984-747-4783</span></a></li>
                                    <li><a href="mailto:info@abnbusinessgroup.com"><i class="fi flaticon-opened-email-envelope"></i><span class="ml-1">info@abnbusinessgroup.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="widget usefull-links-widget">
                                <h3>Bruklyn Associates</h3>
                                <address style="color: #fff;">
                                    20/179-4, ABN Arcade, <br>
                                    Great Lane Road, <br>
                                    Bazar P.O, Aluva, <br>
                                    Ernakulam,683101
                                </address>
                                <ul>
                                    <li><a href="tel:9846216601"><i class="fi flaticon-smartphone"></i><span class="ml-1">984-621-6601</span></a></li>
                                    <li><a href="mailto:info@abnbusinessgroup.com"><i class="fi flaticon-opened-email-envelope"></i><span class="ml-1">info@abnbusinessgroup.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="widget usefull-links-widget">
                                <h3>Location</h3>
                                <div class="map-container" id="map-control" style="border: 5px solid #fff;">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125720.88798778618!2d76.23477334826443!3d10.03519035442534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080ed7ea21f053%3A0xc57fc3e99b692ceb!2sABN%20Arcade!5e0!3m2!1sen!2sin!4v1577165744981!5m2!1sen!2sin"
                                        width="" height="" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- footer area start -->
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="copyright text-center">
                            <h4><a href="rhombusitsolutions.com" target="_blank">Designed with <img src="img/footer/love.png" width="13" class="blink-image" alt="Footer-love"> RhombusItSolutions</a> </h4>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



    </div>
    <!-- End page-wrapper -->
   <input id="searchBycompany" value="2" type="hidden">

    <!-- All JavaScript files
    ================================================== -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/custom.js"></script>
    <!-- datatable -->
    <script src="js/datatable/jquery.dataTables.min.js"></script>
    <script src="js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="js/datatables-demo.js"></script>

<!--
<script>
$(document).ready(function(){
   
  var dataTable = $('#empTable').DataTable({
    'ordering': true, 
    'processing': true,
    'serverSide': true,
    'serverMethod': 'post',
    'searching': true, // Remove default Search Control
    'ajax': {
       'url':'manufactures.php',
       'data': function(data){
     
           // Read values
          var companycode = $('#searchBycompany').val();
         
          // Append to data
          data.searchBycompany = companycode;
          
       }
    },
    'columns': [
       { data: 'no' }, 
       { data: 'company' },
       { data: 'contribution' },
     
    ]
  });

  $(".getmanufacture").on('click', function() {
      $(".nav-item").removeClass("active");
      $(this).closest(".nav-item").addClass("active");
     var companycode= $(this).attr("data-id");
      $("#searchBycompany").val(companycode);
  
      dataTable.clear().draw();
  
   dataTable.columns.adjust().draw(); // Redraw the DataTable
  });

});
    </script>
-->
</body>

</html>