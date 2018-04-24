<!DOCTYPE html>
<html lang="pt-br">
<head>	
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>DlTools | Dashboard</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_CSS ?>/estilo_rela.css"/>
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_CSS ?>/style.css"/>
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_CSS ?>/bootstrap.min.css">
 
 <link rel="stylesheet" href="<?php echo BASE_URL_BOWER ?>/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="<?php echo BASE_URL_BOWER ?>/Ionicons/css/ionicons.min.css">
 <link rel="stylesheet" href="<?php echo BASE_URL_DIST ?>/css/AdminLTE.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_CSS; ?>/dataTables.bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo BASE_URL_DIST ?>/css/skins/_all-skins.min.css">
 <script src="<?php echo BASE_URL_BOWER ?>/jquery/dist/jquery.min.js"></script>
 <script type="text/javascript" src="<?php echo BASE_URL_JS; ?>/ajax.js"></script>
 <script  src="<?php echo BASE_URL_JS; ?>/jquery.dataTables.min.js"></script>
 <script  src="<?php echo BASE_URL_JS; ?>/dataTables.bootstrap.min.js"></script>
 <script src="<?php echo BASE_URL_JS; ?>/jquery.mask.min.js"></script>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

  <header class="main-header">
     <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CARTÃO</b> SUS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo BASE_URL ?>/assets/images/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo BASE_URL?>/assets/images/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Seu Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo BASE_URL?>/login/logout" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo BASE_URL ?>/assets/images/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="<?php echo BASE_URL?>"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
  <br>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Cartão sus</li>
      <li class="active treeview">
        <a href="<?php echo BASE_URL?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>

      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user-circle"></i>
          <span>Usuário</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo BASE_URL?>/users" ><i class="fa fa-circle-o"></i>  Usuario</a></li>
          <li><a href="<?php echo BASE_URL?>/permissions" ><i class="fa fa-circle-o"></i> Permissôes</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i>
          <span>Cadastro</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo BASE_URL?>/paciente" ><i class="fa fa-circle-o"></i>Paciente - Titular</a></li>
          <li><a href="<?php echo BASE_URL?>/dependentes" ><i class="fa fa-circle-o"></i>Dependentes</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-file-pdf-o"></i>
          <span>Prontuário</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo BASE_URL?>/historico/paciente" ><i class="fa fa-circle-o"></i>Paciente</a></li>
          <li><a href="<?php echo BASE_URL?>/historico/dependente" ><i class="fa fa-circle-o"></i>Dependentes</a></li>
          <li><a href="<?php echo BASE_URL?>/historico" ><i class="fa fa-circle-o"></i>Histórico</a></li>
        </ul>
      </li>
       <li class="treeview">
        <a href="#">
          <i class="fa fa-file-pdf-o"></i>
          <span>Cartão sus</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo BASE_URL?>/cartao/cadastro" ><i class="fa fa-circle-o"></i>Cadastrar</a></li>
          <li><a href="<?php echo BASE_URL?>/cartao" ><i class="fa fa-circle-o"></i>Histórico</a></li>
        </ul>
      </li>
      <li class="header">Controle de Estoque</li>
        <li class="treeview">
        <a href="#">
          <i class="fa fa-file-pdf-o"></i>
          <span>Cadastro</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo BASE_URL?>/cartao" ><i class="fa fa-circle-o"></i>Remedio</a></li>
          <li><a href="<?php echo BASE_URL?>/cartao/cadastro" ><i class="fa fa-circle-o"></i>Beneficiário</a></li>
          <li><a href="<?php echo BASE_URL?>/cartao" ><i class="fa fa-circle-o"></i>Fornecedor</a></li>
          <li><a href="<?php echo BASE_URL?>/cartao" ><i class="fa fa-circle-o"></i>Grupo</a></li>
        </ul>
      </li>
        <li class="treeview">
        <a href="#">
          <i class="fa fa-file-pdf-o"></i>
          <span>Estoque</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo BASE_URL?>/cartao" ><i class="fa fa-circle-o"></i>Estoque</a></li>
          
        </ul>
        
       
      </li>
       <li class="treeview">
        <a href="#">
          <i class="fa fa-file-pdf-o"></i>
          <span>Venda</span>
        
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-file-pdf-o"></i>
          <span>Compra</span>
        </a>
       
      </li>
    </ul>
  </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <div class="row" style="padding: 0px 8px;">
<?php echo $this->loadViewInTemplate($viewName, $viewData); ?>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versão</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">Cartão sus</a>.</strong> 
  </footer>

</div>

<script  src="<?php echo BASE_URL_JS; ?>/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL_DIST ?>/js/adminlte.min.js"></script>
<script src="<?php echo BASE_URL_DIST ?>/js/demo.js"></script> 

</body>
</html>
