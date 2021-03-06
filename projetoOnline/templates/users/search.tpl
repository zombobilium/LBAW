<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/friend_list.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>

    <title>Pawz</title>
  </head>
  {include file='common/headerAndNav.tpl'}
    <div class="container-fluid main">
      <div class="row">
        <div class="col-lg-12 panel panel-default">
          <h2 class="panel-heading"> Users </h2>
          <div class="row">
            <div class="col-lg-12 panel-content">
              <div class="row">
                {foreach $users as $user}
                <div class="col-lg-3">
                  <div class="col-lg-5 vcenter">
                    <img src="../uploads/profile-picture/{$user.username}" style="height:100px; width:100px;" onerror="this.src='../images/defaultProfilePicture.png'" alt="Profile Picture"/>
                  </div>
                  <div class="col-lg-6 vcenter">
                    <p><a href="showProfilePage.php?username={$user.username}"> {$user.username} </p>
                  </div>
                </div>
                {/foreach}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 panel panel-default">
          <h2 class="panel-heading"> Events </h2>
          <div class="row">
            <div class="col-lg-12 panel-content">
              <div class="row">
                {foreach $events as $event}
                <div class="col-lg-3 vcenter">
                  <p><a href="showEventPage.php?id={$event.eventid}"> {$event.name} </a></p>
                  <p> {$event.description} </p>
                </div>
                {/foreach}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 panel panel-default">
          <h2 class="panel-heading"> Groups </h2>
          <div class="row">
            <div class="col-lg-12 panel-content">
              <div class="row">
                {foreach $groups as $group}
                <div class="col-lg-3 vcenter">
                  <p><a href="showGroupPage.php?id={$group.communityid}"> {$group.name} </a></p>
                  <p> {$group.description} </p>
                </div>
                {/foreach}
              </div>
            </div>
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
