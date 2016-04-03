<?php  include_once('flisol2016/controller/InscritosController.php'); ?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Flisol 2016 - Ceará -  16 de Abril de 2016</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Styles -->
<link href="flisol2016/public/css/fonts.css" rel="stylesheet"  type="text/css" charset="utf-8" />
<link href="flisol2016/public/css/bootstrap.css" rel="stylesheet">
<link href="flisol2016/public/css/style.css" rel="stylesheet">
<link href="flisol2016/public/css/prettyPhoto.css" rel='stylesheet' id='prettyphoto-css'  type='text/css' media='all'>
<link href="flisol2016/public/css/fontello.css" type="text/css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>


<!--[if lt IE 7]>
        <link href="css/fontello-ie7.css" type="text/css" rel="stylesheet">
    <![endif]-->
<!-- Google Web fonts
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
<style>
body {
    padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
}
</style>
<link href="flisol2016/public/css/bootstrap-responsive.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- Favicon -->
<link rel="shortcut icon" href="flisol2016/public/img/favicon.ico">
<!-- JQuery -->
<script type="text/javascript" src="flisol2016/public/js/jquery.js"></script>
<!-- Load ScrollTo -->
<script type="text/javascript" src="flisol2016/public/js/jquery.scrollTo-1.4.2-min.js"></script>
<!-- Load LocalScroll -->
<script type="text/javascript" src="flisol2016/public/js/jquery.localscroll-1.2.7-min.js"></script>
<!-- prettyPhoto Initialization -->
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
    </script>
</head>
<body>

<!--******************** NAVBAR ********************-->
<div class="navbar-wrapper">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
        <!--<h1 class="brand"><a href="#top">FLISOL CEARÁ</a></h1>-->
        <a class="navbar-brand" href="#"> <img src="flisol2016/public/img/logo-header.png" alt="">  </a>
        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
        <nav class="pull-right nav-collapse collapse">
          <ul id="menu-main" class="nav">
              <!-- <li><a title="Portifolio" href="#portfolio">Flisol </a></li>
              <li><a title="Cidade" href="#team">Cidades</a></li>
              <li><a title="Programação" href="#services">Programação</a></li>
              <li><a title="Paletrantes" href="#news">Palestrantes</a></li>
              <li><a title="Inscreva-se" href="#contact">Inscrição</a></li>
              <li><a title="Certificados"  href=" #certification">Certificados</a></li> -->
              <li><a title="Incritos"  href="index.php">Voltar para o site</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.navbar-inner -->
  </div>
  <!-- /.navbar -->
</div>
<!-- /.navbar-wrapper -->
<div id="top"></div>



<!--******************** Portfolio Section ********************-->
<section id="portfolio" class="single-page scrollblock">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
                <div class="cform" id="theme-form">
                    <form id="form-cidade" action="" method="get" class="cform-form">
                        <select name="cidade" id="cidade" required >
                            <option <?php ($_GET[cidade]=='*' || $_GET[cidade]=='')? print 'selected="selected"':''; ?> value="*">Todos</option>
                            <option value="acarau" <?php ($_GET[cidade]=='acarau')? print 'selected="selected"':''; ?> > Acarau</option>
                            <option value="cariri" <?php ($_GET[cidade]=='cariri')? print 'selected="selected"':''; ?> >Cariri</option>
                            <option value="caninde" <?php ($_GET[cidade]=='caninde')? print 'selected="selected"':''; ?> >Caninde</option>
                            <option value="crateus" <?php ($_GET[cidade]=='crateus')? print 'selected="selected"':''; ?> >Crateus</option>
                            <option value="fortaleza" <?php ($_GET[cidade]=='fortaleza')? print 'selected="selected"':''; ?> >Fortaleza</option>
                            <option value="juazeiro-do-norte" <?php ($_GET[cidade]=='juazeiro-do-norte')? print 'selected="selected"':''; ?> >Juazeiro do Norte</option>
                            <option value="quixada" <?php ($_GET[cidade]=='quixada')? print 'selected="selected"':''; ?> >Quixada</option>
                            <option value="redencao"<?php ($_GET[cidade]=='redencao')? print 'selected="selected"':''; ?> >Redenção</option>
                            <option value="reriutaba" <?php ($_GET[cidade]=='reriutaba')? print 'selected="selected"':''; ?> >Reriutaba</option>
                            <option value="russas" <?php ($_GET[cidade]=='russas')? print 'selected="selected"':''; ?> >Russas</option>
                            <option value="sao-goncalo-do-amarante" <?php ($_GET[cidade]=='sao-goncalo-do-amarante')? print 'selected="selected"':''; ?> >São Gonçalo do Amarante</option>
                            <option value="sobral" <?php ($_GET[cidade]=='sobral')? print 'selected="selected"':''; ?> >Sobral</option>
                        </select>
                       
                        <input type="submit" id="pesquisar" value="pesquisar" class="cform-submit pull-right">
                           
                    </form>
                </div>
<br/>
<div style="padding: 10px 0px;"><?php print 'Total de Inscritos: ' . count($inscritos); ?></div>
<br/>
                <div class="table-responsive">
                <table id="table" class="table  table-striped table-bordered" style="font-size: 12px;">
                  <thead>
                    <tr>
                      <td>Cidade</td>
                      <td>Nome</td>
                      <td>E-mail</td>
                      <td>Endereço</td>
                      <td>Link</td>
                      <td>Resumo</td>
                      <td>Instituição</td>
                      <td>Semestre</td>
                  </tr>
                  </thead>
                  
                  <tbody>

                  <?php foreach($inscritos as $inscrito): ?>
                    <tr>
                        <td><?= trim($inscrito['cidade']);?></td>
                        <td><?= trim($inscrito['nome']); ?></td>
                        <td><?= trim($inscrito['email']); ?></td>
                        <td><?= trim($inscrito['endereco']); ?></td>
                        <td><?= trim($inscrito['link']); ?></td>
                        <td><?= trim($inscrito['resumo']); ?></td>
                        <td><?= trim($inscrito['instituicao']); ?></td>
                        <td><?= trim($inscrito['semestre']); ?></td>
                    </tr>
                  <?php endforeach ?>

                </tbody>
                </table>
                </div>
          </div>
        </div>
  </div>
  <!-- /.container -->
</section>

<div class="footer-wrapper">
  <div class="container">
    <footer>
      <small>FLISoL 2016 CEARÁ - Festival Latino Americano de Instalação De Software Livre</small>
    </footer>
  </div>
  <!-- ./container -->
</div>


<div id="myModal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>FLISOL 2016 - Ceará - Inscrição</h3>
  </div>
  <div id="myModal-msg" class="modal-body">

  </div>
</div>


<!-- Loading the javaScript at the end of the page -->

<script type="text/javascript" src="flisol2016/public/js/bootstrap.js"></script>
<script type="text/javascript" src="flisol2016/public/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="flisol2016/public/js/site.js"></script>
<script type="text/javascript" src="flisol2016/public/js/jquery.mask.js"></script>
</body>
</html>