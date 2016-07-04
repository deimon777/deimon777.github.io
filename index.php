<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>.: Deimon :.</title>
  <!--Meta tags-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta name="author" content="Damian Blanco - www.damianblanco.com.ar"/>
  <meta name="copyright" content="2016" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- MIO -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" type="text/css" rel="stylesheet" />
  <link href="assets/css/deimonStyles.css" rel="stylesheet" />
  <link href="assets/css/bootstrapValidator.min.css" rel="stylesheet" />

  <script src="assets/js/jquery.shuffleLetters.js"></script>
  <script src="assets/js/bootstrapValidator.min.js"></script>
  <script src="assets/js/deimonScript.js"></script>
</head>

<body>
  <div class="container">
    <div class="row text-center">
      <div class="jumbotron">
        <div id="texto">Próximamente!</div>
      </div>
      <div class="col-xs-12">
        <button id="contacto" class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseContact" aria-expanded="false" aria-controls="collapseExample">
          Abrir Contacto
        </button>
      </div>
    </div><!-- "row" -->
  </div><!-- "contain" -->
  <? include("contacto.php"); ?>
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12">
          <?php echo $result; ?>
      </div><!-- "row" -->
    </div><!-- "contain" -->
  </div>
</body>
</html>
