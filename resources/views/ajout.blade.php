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
  
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="css/font-awesome.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.css" />
  
  
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
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content2">
      <section class="wrapper2">
        
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-8">
            <div class="form-panel">
          


              <form class="form-horizontal style-form" action="{{ route('association.ajout') }}" method="post" enctype="multipart/form-data">

              @csrf

                        <div class="results">
                           


                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{Session::get('fail')}}
                                </div>
                            @endif
                        </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label" >Nom d association</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nom"  placeholder="nom">
                    <span class="help-block" style="color:red;">@error('nom') {{ $message }} @enderror</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="description"  placeholder="description">
                    <span class="help-block" style="color:red;">@error('description') {{ $message }} @enderror</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="email"  placeholder="email">
                    <span class="help-block" style="color:red;">@error('email') {{ $message }} @enderror</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2">contact</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="focusedInput" type="text" name="contact"  placeholder="contact">
                    <span class="help-block" style="color:red;">@error('contact') {{ $message }} @enderror</span>
                  </div>
                </div>
                
                
               
               
                <!--<div class="form-group">
                  <label class="control-label col-sm-2">logo</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt=""  id="preview"/>
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    
                    
                     
                      <div>
                      <span class="help-block" style="color:red;">@error('fille') {{ $message }} @enderror</span>
                        <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" name="fille" />
                        
                        </span>
                        </div>-->

                        <div class="form-group last">
                  <label class="control-label col-md-2">Image Upload</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                      <span class="help-block" style="color:red;">@error('fille') {{ $message }} @enderror</span>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" name="fille" />
                        </span>
                        <!--<a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"></a>-->
                      </div>
                    </div>
                    <button type="submit" class="btn btn-theme" style="text-align:center" data-dismiss="fileupload">Ajouter</button>
                  </div>


              </form>
            </div>

          </div>
          
                
          
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
        <!-- INLINE FORM ELELEMNTS -->
       
        <!-- /row -->
        <!-- INPUT MESSAGES -->
        
          <!-- /col-lg-12 -->
          <!-- CUSTOM TOGGLES -->
         
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer2">
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
        <a href="form_component.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="js/common-scripts.js"></script>
  <!--script for this page-->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
 
  <script src="js/advanced-form-components.js"></script>
  <!--<script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>-->
  
<script>
</script>
</body>

</html>
