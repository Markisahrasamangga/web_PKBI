<?php include "navbar.php"; ?>

<div class="wrapper">
  <main class="content">
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    if ($page == 'about') {
        include "about.php";
    } else if ($page == 'home') {
        include "home.php";
    } else if ($page == 'mentor') {
        include "mentor.php";
    } else if ($page == 'contact') {
        include "contact.php";
    } else if ($page == 'news') {
        include "news.php";
    } else if ($page == 'partner') {
        include "partner-collaboration.php";
    } else {
        include "home.php";
    }
    ?>
  </main>
</div>

<?php include "footer.php"; ?>
