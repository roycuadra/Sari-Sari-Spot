<header class="header" style="background-image:linear-gradient(45deg, red, blue);">

   <div class="flex">

      <a href="#" class="logo" style="font-family:cursive;">Roy Online Store</a>

      <nav class="navbar">
         <a href="logout.php" class="logout-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>


      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>
