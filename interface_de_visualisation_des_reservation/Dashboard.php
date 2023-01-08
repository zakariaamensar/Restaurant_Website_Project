<?php 
  session_start();
  $con= mysqli_connect("localhost", "root", "","table_reservation");
  //$con = mysqli_connect("localhost", "id20052388_root", "_0n~q+U9QXHfnk9)", "id20052388_restaurant");

  $sql = "SELECT * FROM reservation ORDER BY id DESC ";
  $result = mysqli_query($con, $sql);
  function checkLogin($con){
    if(isset($_SESSION['username'])){
      $user = $_SESSION['username'];
      $sql = "SELECT * FROM user_admin WHERE username='$user' LIMIT 1";
      $result = mysqli_query($con, $sql);
      if($result && mysqli_num_rows($result)>0){
        return true;
      }
      header("location: login_php.php");
    }
    header("location: login_php.php");
  }
  checkLogin($con);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="3">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="media/favicon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body></body>
</html>

<body>
      <div class="power">
        
        <a href="logout_dash.php" ><i class="fa fa-power-off" style="font-size:48px;color:rgba(58, 58, 58, 0.781)"></i></a>
      </div>
  <table>
    <thead>
      <tr>
        <th>Reservation ID</th>
        <th>Name</th>
        <th>Reservation Date</th>
        <th>Reservation time</th>
        <th>Number of People</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
        while($data = mysqli_fetch_assoc($result))
        {
      ?>
      
            <tr>
              <td><?php echo $data["id"]; ?></td>
              <td><?php echo $data["fullName"];?></td>
              <td><?php echo $data["reservatioinDate"];?></td>
              <td>
                <p class="status status-unpaid"><?php echo $data["reservationTime"]; ?></p>
              </td>
              <td class="amount"><?php echo $data["numberOfPeople"]; ?></td>
            </tr>
      <?php 
        }
      ?>
    </tbody>
  </table>
</body>
