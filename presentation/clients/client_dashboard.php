<?php
require_once __DIR__ . '/../../bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <link rel="stylesheet" href="<?= CSS_URL ?>topbar.css">

</head>
<body>

    <div class="main-container">
        <div class="sidebar-container">
            <?php include __DIR__ . '/../../includes/sidebar.php'; ?>
        </div>
        <div class="topbar-container">
            <?php include __DIR__ . '/../../includes/topbar.php'; ?>
        </div>
    </div>
</body>

</html>