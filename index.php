<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>ThriftX - Home</title>
  <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
  <h1>Welcome to ThriftX</h1>
  <h2>Product Listings</h2>
  <div class="products">
    <?php
      $result = mysqli_query($conn, "SELECT * FROM products LIMIT 10");
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='product'>";
          echo "<h3>".$row['name']."</h3>";
          echo "<p>R".$row['price']."</p>";
          echo "</div>";
      }
    ?>
  </div>
</body>
</html>