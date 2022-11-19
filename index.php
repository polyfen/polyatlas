<!DOCTYPE html>
<html lang="en">

<!-- INCLUDE HEAD.PHP start -->
  <?php include 'sections/head.php';?>
<!-- INCLUDE HEAD.PHP end -->

  <body id="home">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKN32JZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- INCLUDE HEADER.PHP start -->
      <?php include 'sections/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <!-- INCLUDE SIDEBAR.PHP start -->
      <?php include 'sections/sidebar.php';?>
    <!-- INCLUDE SIDEBAR.PHP end -->

    <!-- INCLUDE HEADER.PHP start -->
      <?php include 'sections/version-banner.php';?>
      <?php include 'sections/about-banner.php';?>
      <?php include 'sections/poly-forum-banner.php';?>
      <?php include 'sections/donations.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <?php include 'sections/resolution-disclaimer.php';?>

    <div class="container-fluid">
      <div class="row">
        <div id="content" style="width:100%; max-width: 750px;">

          <!-- INCLUDE CONTENT.PHP start -->
            <?php include 'content.php';?>
          <!-- INCLUDE CONTENT.PHP end -->

        </div>
      </div>
    </div>

    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

  </body>
</html>
