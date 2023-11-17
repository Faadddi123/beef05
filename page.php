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
    
    if ($result->num_rows > 0) {
        echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <!-- Add more columns as needed -->
            </tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['price'] . "</td>
                <!-- Add more cells as needed -->
            </tr>";
        }
    
        echo "</table>";
    } else {
        echo "0 results";
    }
    
    $conn->close(); 
  

  ?>

    <section>
        <div class="mini_titre">OurOrder</div>
        <div class="jma3a">
            
            
            
            
            <div class="container">
                <div class="overlay">
                  <div class = "items"></div>
                  <div class = "items head">
                    <p>Flower Embroidery Hoop Art</p>
                    <hr>
                  </div>
                  <div class = "items price">
                    <p class="old">$699</p>
                    <p class="new">$345</p>
                  </div>
                  <div class="items cart">
                    <i class="fa fa-shopping-cart"></i>
                    <span>ADD TO CART</span>
                </div>
              </div>
            </div>
            
            
        </div>
    </section>
</body>
</html>