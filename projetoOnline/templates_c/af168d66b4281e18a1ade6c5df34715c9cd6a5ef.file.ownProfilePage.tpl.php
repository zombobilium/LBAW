<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 22:42:00
         compiled from "/usr/users2/mieic2013/up201303834/public_html/projetoOnline/templates/users/ownProfilePage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1104821582575056bed1ca91-82262581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af168d66b4281e18a1ade6c5df34715c9cd6a5ef' => 
    array (
      0 => '/usr/users2/mieic2013/up201303834/public_html/projetoOnline/templates/users/ownProfilePage.tpl',
      1 => 1465155513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1104821582575056bed1ca91-82262581',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575056bee80839_38002060',
  'variables' => 
  array (
    'username' => 0,
    'userInfo' => 0,
    'species' => 0,
    'speciesName' => 0,
    'race' => 0,
    'country' => 0,
    'countryName' => 0,
    'city' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575056bee80839_38002060')) {function content_575056bee80839_38002060($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/profile_page.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>

    <title>Pawz</title>

    <style>
      .dropdown-submenu {
          position: relative;
      }

      .dropdown-submenu .dropdown-menu {
          top: 0;
          left: 100%;
          margin-top: -1px;
      }
      .raceButton{
        background-color: white;
        border: none;
        color: black;
      }

      #editProfileButton{

      }

    </style>
  </head>
  <?php echo $_smarty_tpl->getSubTemplate ('common/headerAndNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid main">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 profile-information-space">
          <div class="row">
            <div class="col-lg-12 profile-image">
              <img src="../uploads/profile-picture/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" onerror="this.src='../images/defaultProfilePicture.png'" alt="Profile Picture"/>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 profile-information panel panel-default">
              <p><span class="profile-name"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['user_name'];?>
 </span> </p>
              <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['gender_name']=='Male') {?>
                <p><i class="fa fa-mars fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['gender_name'];?>
 </i></p>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['gender_name']=='Female') {?>
                <p><i class="fa fa-venus fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['gender_name'];?>
 </i></p>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['gender_name']=='Other') {?>
                <p><i class="fa fa-transgender-alt fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['gender_name'];?>
 </i></p>
              <?php }?>
              <p><i class="fa fa-birthday-cake fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['birthday'];?>
 </i></p>
              <p><i class="fa fa-paw fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['species_name'];?>
 </i></p>
              <p><i class="fa fa-paw fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['race_name'];?>
 </i></p>
              <p><i class="fa fa-map-marker fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['city_name'];?>
, <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['country_name'];?>
 </i></p>
            </div>
              <div class="col-lg-12 profile-information panel panel-default">
                <br>
                <p><i class="fa fa-cog fa-lg"><a id="editProfileButton" data-toggle="modal" data-target="#myModal1"> Edit Profile </a></i></p>
                <p><i class="fa fa-cog fa-lg"><a id="ProfilePicButton" data-toggle="modal" data-target="#myModal2"> New Profile Pic </a></i></p>
              </div>
              <!-- Edit profile box -->
              <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Profile</h4>
                    </div>
                    <div class="modal-body">
                      <form method="POST" class ="submitEditProfile" action="#">

                        <p>Gender:</p>
                        <input type="radio" name="gender" value="Male"> Male &nbsp
                        <input type="radio" name="gender" value="Female"> Female &nbsp
                        <input type="radio" name="gender" value="Other"> Other <br><br>
                        <p>Birthday:</p>
                        <input type="date" name="birthday" value=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['birthday'];?>
><br><br>
                        <p>Email:</p>
                        <input type="text" name="email" value=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['email'];?>
><br><br>
                        <p>Species & Race:</p>
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle speciesRace" type="button" data-toggle="dropdown">Select
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['speciesName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['speciesName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['species']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['speciesName']->key => $_smarty_tpl->tpl_vars['speciesName']->value) {
$_smarty_tpl->tpl_vars['speciesName']->_loop = true;
?>
                            <li class="dropdown-submenu">
                              <a class="test-submenu"><?php echo $_smarty_tpl->tpl_vars['speciesName']->value['name'];?>
 <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <?php  $_smarty_tpl->tpl_vars['race'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['race']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speciesName']->value['race']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['race']->key => $_smarty_tpl->tpl_vars['race']->value) {
$_smarty_tpl->tpl_vars['race']->_loop = true;
?>
                                <li><button type="button" class="raceButton" name="race" value ="<?php echo $_smarty_tpl->tpl_vars['race']->value['race_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['race']->value['race_name'];?>
</button></li>
                                <?php } ?>
                                <li class="dropdown-submenu">
                              </ul>
                            </li>
                            <?php } ?>
                          </ul>
                        </div>
                        <br>
                        <p>Country & City:</p>
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle countryCity" type="button" data-toggle="dropdown">Select
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['countryName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['countryName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['country']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['countryName']->key => $_smarty_tpl->tpl_vars['countryName']->value) {
$_smarty_tpl->tpl_vars['countryName']->_loop = true;
?>
                            <li class="dropdown-submenu">
                              <a class="test-submenu"><?php echo $_smarty_tpl->tpl_vars['countryName']->value['name'];?>
 <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countryName']->value['city']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
                                <li><button type="button" class="cityButton" name="city" value ="<?php echo $_smarty_tpl->tpl_vars['city']->value['city_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value['city_name'];?>
</button></li>
                                <?php } ?>
                                <li class="dropdown-submenu">
                              </ul>
                            </li>
                            <?php } ?>
                          </ul>
                        </div>
                          <br><br>
                        <button type="submit" id="submitButtonEditProfile" class="btn btn-default">Save</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- -->
              <!-- New pic box -->
              <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Upload New Profile Picture</h4>
                    </div>
                    <div class="modal-body">
                      <form action="#" method="post" enctype="multipart/form-data" class="upload-image-form">
                        <p>Select image to upload:</p>
                        <input type="file" name="image" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit" class="upload-image-submit">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- -->
          </div>
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-xs-12 feed-space">
          <div class="row">
            <div class="col-lg-12 post-bar panel panel-default">
              <form method="POST" class="submitPost" action="#" role="form">
                <div class="col-lg-10 share">
                  <input type="text" name="description" required class="form-control" placeholder="Share Something...">
                </div>
                <div class="col-lg-2 share-button">
                  <button type="submit" id="submitButton" class="btn btn-info"> Share </button>
                </div>
              </form>
            </div>
          </div>

          <div class="recentlyCreatedPostSpace"></div>
          <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>

          <div class="row post-row">
            <div class="col-lg-3 post-profile-picture">
              <img class="img" src="../images/defaultProfilePicture.png" alt="Profile Picture"/>
            </div>
            <div class="col-lg-9 post-information">
              <div class="row">
                <div class="col-lg-12 post-owner-description">
                  <h3><a href="showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 </a></h3>
                  <p> <?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
 </p>
                  <p style="color: grey;"> <?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
  </p>
                  <div id="pointer"></div>
                </div>
              </div>
              <!--
              <div class="row">
                <div class="col-lg-12 post-image">
                  <img class="img" src="../images/rex_and_bae.png" style="width: 90%;" alt="Image Posted"/>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 post-comments-likes">
                  <p> <i class="fa fa-thumbs-up"></i> 10 <i class="fa fa-comment"></i> 4 </p>
                </div>
              </div>
            -->
            </div>
          </div>

          <?php } ?>

        </div>
        <div class="col-lg-3 col-lg-offset-1 activities-awards-column">
          <div class="row">
            <div class="col-lg-12 activities panel panel-default">
              <h2 class="panel-heading">Recent Activities</h2>
              <ul class="panel-content">
                <li>  Running </li>
                <li> Hunting </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 awards panel panel-default">
              <h2 class="panel-heading">Awards(3)</h2>
              <div class="panel-body">
                <img src="../images/award.png" style="width: 30%" alt="Award"/>
                <img src="../images/award.png" style="width: 30%" alt="Award"/>
                <img src="../images/award.png" style="width: 30%" alt="Award"/>
                <p></p>
                <a href=#>See all</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="../javascript/profilePost.js"></script>
    <script src="../javascript/addFriend.js"></script>
    <script src="../javascript/editProfile.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php }} ?>
