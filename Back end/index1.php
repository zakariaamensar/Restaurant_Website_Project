<!-- dealing with the form using php -->
            <?php
                require 'index.php';

                $link = mysqli_connect("localhost", "root", "", "table_reservation");
                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                // form handler
                if($_POST && isset($_POST['name'], $_POST['phone'], $_POST['date'], $_POST['time'], $_POST['email'], $_POST['people'])) {

                $full_name = mysqli_real_escape_string($link, $_REQUEST['name']);
                $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
                $reservation_date = mysqli_real_escape_string($link, $_REQUEST['date']);
                $reservation_time = mysqli_real_escape_string($link, $_REQUEST['time']);
                $email = mysqli_real_escape_string($link, $_REQUEST['email']);
                $numOfpeople = mysqli_real_escape_string($link, $_REQUEST['people']);
                $sql = "INSERT INTO reservation (fullName, phone, reservatioinDate, reservationTime, email, numberOfPeople) VALUES ('$full_name', '$phone', '$reservation_date', '$reservation_time', '$email', '$numOfpeople')";
                

                if(mysqli_query($link, $sql)){
                    echo "<p style='color:white'>" ."Reserved successfully." . "</p>";
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                } 
                mysqli_close($link);
            }
            ?>