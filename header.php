<header class="header" style="background-image:linear-gradient(45deg, red, blue);">

   <div class="flex">

      <a href="#" class="logo" style="font-family:cursive;font-syle:bold;">Sari-Sari Spot</a>

      <nav class="navbar">
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>
