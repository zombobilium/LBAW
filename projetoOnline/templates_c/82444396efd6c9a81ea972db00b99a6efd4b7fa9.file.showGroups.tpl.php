<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 11:23:54
         compiled from "/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/showGroups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1755978662575692aa172ac6-05970486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82444396efd6c9a81ea972db00b99a6efd4b7fa9' => 
    array (
      0 => '/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/showGroups.tpl',
      1 => 1465291070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1755978662575692aa172ac6-05970486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'createdCommunities' => 0,
    'community' => 0,
    'joinedCommunities' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575692aa255fd3_98690944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575692aa255fd3_98690944')) {function content_575692aa255fd3_98690944($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/groups_page.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>

    <title>Pawz - Groups</title>
  </head>
  <?php echo $_smarty_tpl->getSubTemplate ('common/headerAndNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid main">
		<div class="row">
			<div class="created">
				<div class="col-lg-12 panel panel-default">
					<h2 class="panel-heading"> Groups I Created <a href="../pages/groupCreationPage.php"> <input type="button" value="Create Group" /></a></h2>
					<?php  $_smarty_tpl->tpl_vars['community'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['community']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['createdCommunities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['community']->key => $_smarty_tpl->tpl_vars['community']->value) {
$_smarty_tpl->tpl_vars['community']->_loop = true;
?>
					<div class="col-lg-9 group-row">        
						<div class="col-lg-9 group-information">
							<div class="col-lg-12 group-name">
								<h3><a href="../pages/showJoinedGroupPage.php?id=<?php echo $_smarty_tpl->tpl_vars['community']->value['communityid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['community']->value['name'];?>
 </a></h3>
								<p> <?php echo $_smarty_tpl->tpl_vars['community']->value['description'];?>
 </p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="joined">
				<div class="col-lg-12 panel panel-default">
					<h2 class="panel-heading"> Groups I Joined </h2>
					<?php  $_smarty_tpl->tpl_vars['community'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['community']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['joinedCommunities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['community']->key => $_smarty_tpl->tpl_vars['community']->value) {
$_smarty_tpl->tpl_vars['community']->_loop = true;
?>
					<div class="col-lg-9 group-row">        
						<div class="col-lg-9 group-information">
							<div class="col-lg-12 group-name">
								<h3><a href="../pages/showJoinedGroupPage.php?id=<?php echo $_smarty_tpl->tpl_vars['community']->value['communityid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['community']->value['name'];?>
 </a></h3>
								<p> <?php echo $_smarty_tpl->tpl_vars['community']->value['description'];?>
 </p>
								<p> Creator: <a href="../pages/showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['community']->value['username'];?>
"> <?php echo $_smarty_tpl->tpl_vars['community']->value['username'];?>
 </a></p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php }} ?>
