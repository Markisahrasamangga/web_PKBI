<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Movement Social Environment</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/navbar.css">
  <link rel="stylesheet" href="style/footer.css">
</head>

<body>
  <header>
    <div class="navbar">
      <h3 class="brand">Movement Social<br />Environment</h3>
      <nav>
        <ul>
          <li><a href="index.php?page=home" <?php if (!isset($_GET['page']) || $_GET['page'] == 'home') echo 'class="active"'; ?>>Home</a></li>
          <li><a href="index.php?page=about" <?php if (isset($_GET['page']) && $_GET['page'] == 'about') echo 'class="active"'; ?>>About</a></li>
          <li><a href="index.php?page=contact" <?php if (isset($_GET['page']) && $_GET['page'] == 'contact') echo 'class="active"'; ?>>Contact</a></li>
          <li><a href="index.php?page=mentor" <?php if (isset($_GET['page']) && $_GET['page'] == 'mentor') echo 'class="active"'; ?>>Mentor</a></li>
          <li><a href="index.php?page=news" <?php if (isset($_GET['page']) && $_GET['page'] == 'news') echo 'class="active"'; ?>>News</a></li>
          <li><a href="index.php?page=partner" <?php if (isset($_GET['page']) && $_GET['page'] == 'partner') echo 'class="active"'; ?>>Partner</a></li>
        </ul>
      </nav>
    </div>
    <?php if (!isset($_GET['page']) || $_GET['page'] == 'home'): ?>
      <div class="hero-section">
        <div class="hero-text">
          <h1>Empowering Social Justice for a Better Future</h1>
          <p>
            Movement Social Environment is committed to advancing equal access to education, health,
            culture, economy, legal advocacy, and human rights—shaping a just society and nurturing the
            next golden generation of Indonesia.
          </p>
        </div>
        <div class="hero-logo">
          <img src="logo.png" alt="Movement Social Environment Logo" />
          <p>Movement Social<br />Environment</p>
        </div>
      </div>
    <?php endif; ?>
  </header>