<!-- dealing with the form using php -->
            <?php
                require 'index.php';

                $link = mysqli_connect("localhost", "id20052388_root", "_0n~q+U9QXHfnk9)", "id20052388_restaurant");
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
                mysqli_close($link);
            }
            ?>
<!-- Sending email verification>
            <?php
             if (isset($_POST['submit'])) {
                $url = "https://script.google.com/macros/s/AKfycbwUV2z7CzbtTPs7mfy2mGz1zTqBNG4W2PR8Z3mQiPNnATIGJwz2Mnqq8jQ4NjszIuUg/exec";
                $ch = curl_init($url);
                $name = $_POST['name'];
                $people = $_POST['people'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_POSTFIELDS => http_build_query([

                    "recipient" => $_POST['email'],
                    "subject" => "Reservation",
                    "body" => "Hey $name, You've reserved a table for $people people, On $date at $time, I hope you'll enjoy you time here in Royat Burger."
        ])
    ]);
    $result = curl_exec($ch);

}
?>