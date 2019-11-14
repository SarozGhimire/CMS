
<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">CMS Admin</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Posts <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="./posts.php">View All Posts</a></li>
          <li><a href="posts.php?source=add_post">Add Posts</a></li>
        </ul>
      </li>
      <li><a href="./categories.php"><i class="fa fa-wrench"></i> Categories</a></li>
      <li><a href="blank-page.html"><i class="fa fa-file"></i> Comments</a></li>
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i>  Users <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown Item</a></li>
          <li><a href="#">Another Item</a></li>
        </ul>
      </li>
      <li><a href="typography.html"><i class="fa fa-font"></i> Profile</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right navbar-user">
      <li><a href="../index.php">HOME SITE</a></li>
      


      <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
          <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>