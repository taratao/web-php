<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List user</title>
</head>
<body>
<div class='container'>
    <div class='menu'><?php include 'menu.php'?></div>
    <div class='content'>
            <?php 
              $connect = new mysqli('localhost', 'admin', '1234', 'QL_user');
              if($connect->connect_error){
                  die("Connection failed: " . $conn->connect_error);
              }

              $sql = 'SELECT * FROM user';
              $result = $connect->query($sql);

              if($result->num_rows > 0){
                  echo '<table>';
                  echo '<tr><th>user name<th><th>Password</th></tr>';
                  while($result=$result->fetch_assoc()){
                      echo '<tr><td>'. $result['username'] . '</td><td>'. $result['password'] . '</td></tr>';
                  }
                  echo '</table>';
              }
              else{
                  echo '<span class="msg">Empty</span>';
              }
              ?>
    </div>
</body>
</html>

