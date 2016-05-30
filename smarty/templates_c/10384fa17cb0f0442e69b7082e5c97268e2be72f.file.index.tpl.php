<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 16:42:46
         compiled from "/home/u418302220/public_html/smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163499846754086b506949a5-61418358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10384fa17cb0f0442e69b7082e5c97268e2be72f' => 
    array (
      0 => '/home/u418302220/public_html/smarty/templates/index.tpl',
      1 => 1412260938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163499846754086b506949a5-61418358',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54086b506e9b98_36314577',
  'variables' => 
  array (
    'img' => 0,
    'a' => 0,
    'items' => 0,
    'item' => 0,
    'profile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54086b506e9b98_36314577')) {function content_54086b506e9b98_36314577($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    
                    <li>
                        <a href="index.php?type=login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sobre la
                    <small>aplicacion</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            
<?php if ($_smarty_tpl->tpl_vars['img']->value) {?>            
            
<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['img']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
    <div class="col-md-8">
      
                <img class="img-responsive portfolio-item" src="files/imgApp/<?php echo $_smarty_tpl->tpl_vars['a']->value->img;?>
"  alt=""> 
                <div style="text-align: center; width: 50%;"><a style="width:250px;" href="<?php echo $_smarty_tpl->tpl_vars['a']->value->url;?>
" class="btn btn-success btn-lg">Descargar</a></div>  
       
            </div>

            <div class="col-md-4">
                <h3><?php echo $_smarty_tpl->tpl_vars['a']->value->name;?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['a']->value->description;?>
</p>
                <h4>Tematica</h4>
                <ul>
                    <li><?php echo $_smarty_tpl->tpl_vars['a']->value->categoria;?>
</li>
                 
                </ul>
            </div>
<?php } ?>

<?php } else { ?>
  <div class="col-md-8">
      <img class="img-responsive portfolio-item" src="http://placehold.it/750x500" width="750" height="500" alt="">
     
            </div>

            <div class="col-md-4">
                <h3><?php echo $_smarty_tpl->tpl_vars['a']->value->name;?>
</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3>Project Details</h3>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                </ul>
            </div>  
<?php }?>
        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Apps</h3>
            </div>

            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            
                <div class="col-sm-3 col-xs-6" style="text-align: center; background-color: #c2bbbb;">
               
                    <img class="img-responsive portfolio-item" src="files/imgApp/<?php echo $_smarty_tpl->tpl_vars['item']->value->img;?>
" alt="" width="500" height="400">
                    <img  style="margin-left:30%;"  class="img-responsive portfolio-item" src="files/imgApp/<?php echo $_smarty_tpl->tpl_vars['item']->value->qr;?>
" alt="" width="100" height="100">
                         
                    
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value) {?> <?php } else { ?>  <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
<p><?php echo $_smarty_tpl->tpl_vars['item']->value->type;?>
</p>  </a><?php }?>
              
            </div>

           <?php } ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
<?php }} ?>
