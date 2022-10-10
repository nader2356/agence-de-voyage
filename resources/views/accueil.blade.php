<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  
<img src="images/profile-02.jpg" style="width:1530px;height:320px;">


<section id="main-content">

<section class="wrapper">
  <!-- page start-->

  <div class="row">
  <h2 class="mb-5" style="margin-left:17px;color:white">
                        <span>Basic Elements</span>
                    </h2>
        <!-- TWITTER PANEL -->
        <a href="ajout">   <div class="col-md-4 mb">
       <button class="white-panel pn" style="width:350px;">
            
            
            <div class="row" style="padding-top:88px;">
            
              <div class="col-md-12" >
              <i class="bi bi-plus"></i>
                <p class="small mt" style="color:blue;font-size:10px;">Ajouter un associations </p>
             
              </div>
             
            </div>
            <div class="white-header" style="width:347px;margin-left:-8px;height:35px;">
              <h5>Associations</h5>
            </div>
            
          </button >
      </div></a>
        <!-- /col-md-4 -->
        <div class="col-md-4 mb">
          <!-- WHITE PANEL - TOP USER -->
          @foreach ($data  as $key => $value)
  <button class="white-panel pn" style="width:350px;">
            
         
            <p style="text-align:center;color:black"><b>{{ $value->nom_asso }}</b></p>
            <p style="text-align:center;color:black"><b>{{ $value->description_asso }}</b></p>
              
            </div>
           
            </button><a>
        </div>
        @endforeach
</section>
<!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->
<!--footer start-->
<footer class="site-footer">
<div class="text-center">
  <p>
    &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
  </p>
  <div class="credits">
    <!--
      You are NOT allowed to delete the credit link to TemplateMag with free version.
      You can delete the credit link only if you bought the pro version.
      Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
      Licensing information: https://templatemag.com/license/
    -->
    Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
  </div>
  <a href="inbox.html#" class="go-top">
    <i class="fa fa-angle-up"></i>
    </a>
</div>
</footer>
<!--footer end-->
</section>

  <!-- js placed at the end of the document so the pages load faster -->
  
  <!--script for this page-->

</body>

</html>
