<!-- pt-br Default navigation bar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php">
        <img src="images/church-logo.png" alt="church logo" class="img-responsive">
      </a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="about.php"><?php echo $lang['about']; ?></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['ministries']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="ministry.html">Childrens Ministry</a></li>
            <li><a href="ministry.html">Students Ministry</a></li>
            <li><a href="ministry.html">Groups</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="video-gallery.php"><?php echo $lang['sermons']; ?></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['pages']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="image-gallery.html">Image Gallery</a></li>
            <li><a href="video-gallery.html">Video Gallery</a></li>
            <li><a href="blog.html">Blog list</a></li>
            <li><a href="blog-single.html">Blog Single</a></li>
            <li><a href="events-programs.html">Events &amp; Programs</a></li>
            <li><a href="event-single.html">Event Single</a></li>
            <li><a href="event-calendar.html">Event Calendar</a></li>
            <li><a href="charity-donation.html">Charity &amp; Donations</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">OTHER PAGES</li>
            <li><a href="prayers.html">Prayers</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="shortcodes.html">Shortcodes</a></li>
            <li><a href="full-width.html">Full Width</a></li>
            <li><a href="left-sidebar.html">Left Sidebar</a></li>
            <li><a href="http://bit.ly/BuyCatholic">Buy this Template</a></li>
          </ul>
        </li>
        <li><a href="contato.php"><?php echo $lang['contact']; ?></a></li>
        <a href="?lang=pt-br" style="margin-left: 5px;"><img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/flags/4x3/br.svg" alt="Brasil" style="width: 24px;"></a>
        <a href="?lang=en"><img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/flags/4x3/us.svg" alt="English" style="width: 24px;"></a>
      </ul>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>