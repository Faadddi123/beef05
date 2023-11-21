<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/pagestyle.css">
</head>

<body>
  <?php
  $servername = 'localhost';
  $user = 'root';
  $pass = '123';
  $dbname = 'ELECTRONACER';
  $counter = '0';
  $counter2 = '1';
  // Create connection
  $conn = new mysqli($servername, $user, $pass, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $conn->close();
    session_start();

    $conn = new mysqli($servername, $user, $pass, $dbname);

    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    
  ?>

    <section>
      <!-- ...........kfkb -->
      <form method="post">
    <button type="submit" name="button1">Button 1</button>
    <button type="submit" name="button2">Button 2</button>
    <button type="submit" name="button3">Button 3</button>
</form>
    <div class=". mini_titre .">our products</div>
    
    <?php
    // dddddd
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['button1'])) {
          $variable = 1;
      } elseif (isset($_POST['button2'])) {
          $variable = 2;
      } elseif (isset($_POST['button3'])) {
          $variable = 3;
      }
      echo "Variable assigned: " . $variable;
  }
  // dddddddd
  
    if ($result->num_rows > 0) {
      $counter2 = $result->num_rows;
      while ( $counter2 > 0){
        echo '
        <div class="jma3a">';
      
        while ($counter < 4 && $row = $result->fetch_assoc()) {
          
          if ($row['category'] == $variable){
            echo '
                <div class="container">
                    <div class="overlay">
                      <div class = "items">' . $row['id'] . '</div>
                      <div class = "items head">
                        <p>' . $row['name'] . '</p>
                        <hr>
                      </div>
                      <div class = "items price">
                        <p class="old">' . $row['old_price'] . '$</p>
                        <p class="new">' . $row['new_price'] . '$</p>
                      </div>
                      <div class="items cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>' . $row['category'] . '</span>
                    </div>
                  </div>
                </div>
                
                
            ';
            $counter ++;
            
          }
          $counter2--;
        }
        $counter = 0;
        echo '</div>';
      }
      
  } else {
      echo "0 results";
  }

  
  $conn->close();     
    ?>
    
    </section>
</body>
</html>