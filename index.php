<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Authentication Page</title>
</head>

<body class="h-full">
  <?php
  require_once 'logout.php';
  ?>
  <div class="flex justify-center items-center h-screen">
    <!-- Container for both signup and login forms -->
    <div class="flex space-x-10">
      <!-- Sign up form -->
      <?php
      require_once 'signup.php';
      ?>

      <!-- Login form -->
      <?php
      require_once 'login.php';
      ?>

    </div>
  </div>
</body>

</html>