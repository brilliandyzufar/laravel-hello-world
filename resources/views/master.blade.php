<!DOCTYPE html>
<head>
<title>Bigshot</title>
<meta charset="utf-8">
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="assets/menu/css/simple_menu.css">
<!--JS FILES -->
<script src="js/jquery.tools.min.js"></script>
<script>
$(function () {
    $("#prod_nav ul").tabs("#panes > div", {
        effect: 'fade',
        fadeOutSpeed: 400
    });
});
</script>
<script>
$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
</script>
</head>
<body>
<div class="header">
  <!-- Logo/Title -->
  <div id="site_title"><a href="index.blade.php"> <img src="assets/img/logo.png" alt=""></a> </div>
  <!-- Main Menu -->
  <ol id="menu">
    <li class="active_menu_item"><a href="index.blade.php" style="color:#FFF">Home</a>
      <!-- sub menu -->
      <ol>
        <li><a href="nivo.blade.php">Nivo Slider</a></li>
        <li><a href="ei-slider.blade.php">EI Slider</a></li>
        <li><a href="fullscreen-gallery.blade.php">Fullscreen Slider</a></li>
        <li><a href="image-frontpage.blade.php">Static Image</a></li>
      </ol>
    </li>
    <!-- end sub menu -->
      <!-- sub menu -->
      <ol>
        <li><a href="magazine.blade.php">Magazine</a></li>
        <li><a href="blog.blade.php">Blog</a></li>
        <li><a href="full-width.blade.php">Full Width Page</a></li>
        <li><a href="columns.blade.php">Columns</a></li>
      </ol>
    </li>
    <!-- end sub menu -->
    <li><a href="elements.blade.php">Elements</a></li>
      <!-- sub menu -->
      <ol>
        <li><a href="gallery-simple.blade.php">Simple</a></li>
        <li><a href="portfolio.blade.php">Filterable</a></li>
        <li><a href="gallery-fader.blade.php">Fade Scroll</a></li>
        <li><a href="video.blade.php">Video</a></li>
        <li class="last"><a href="photogrid.blade.php">PhotoGrid</a></li>
      </ol>
    </li>
    <!-- end sub menu -->
    <li><a href="contact.blade.php">Contact</a></li>
  </ol>
</div>
<!-- END header -->
<!-- konten -->
@yield('konten')
<!-- ENF konten -->
<div id="footer">
  <!-- First Column -->
  <div class="one-fourth">
    <h3>Useful Links</h3>
    <ul class="footer_links">
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Ellem Ciet</a></li>
      <li><a href="#">Currivitas</a></li>
      <li><a href="#">Salim Aritu</a></li>
    </ul>
  </div>
  <!-- Second Column -->
  <div class="one-fourth">
    <h3>Terms</h3>
    <ul class="footer_links">
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Ellem Ciet</a></li>
      <li><a href="#">Currivitas</a></li>
      <li><a href="#">Salim Aritu</a></li>
    </ul>
  </div>
  <!-- Third Column -->
  <div class="one-fourth">
    <h3>Information</h3>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet enim id dui tincidunt vestibulum rhoncus a felis.
    <div id="social_icons"> Theme by <a href="http://www.csstemplateheaven.com">CssTemplateHeaven</a><br>
      Photos © <a href="http://dieterschneider.net">Dieter Schneider</a> </div>
  </div>
  <!-- Fourth Column -->
  <div class="one-fourth last">
    <h3>Socialize</h3>
    <img src="assets/img/icon_fb.png" alt=""> <img src="assets/img/icon_twitter.png" alt=""> <img src="assets/img/icon_in.png" alt=""> </div>
  <div style="clear:both"></div>
</div>
<!-- END footer -->
</body>
</html>