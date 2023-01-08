<!-- dealing with the form using php -->
<?php
ob_start();
include 'index.php';
include 'conn.php';
//$con = mysqli_connect("localhost", "id20052388_root", "_0n~q+U9QXHfnk9)", "id20052388_restaurant");
// form handler
if ($_POST && isset($_POST['name'], $_POST['date'], $_POST['time'], $_POST['people'])) {

    $full_name = $_POST['name'];
    $reservation_date = $_POST['date'];
    $reservation_time = $_POST['time'];
    $numOfpeople = $_POST['people'];
    $sql = "INSERT INTO reservation (fullName, reservatioinDate, reservationTime, numberOfPeople) VALUES ('$full_name', '$reservation_date', '$reservation_time', '$numOfpeople')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $_SESSION['reservation_state'] = "Reserved Successfully";
        header("location:majestic.php#book");
    }
}
?>

<?php
if (isset($_POST['submit'])) {
    $url = "https://script.google.com/macros/s/AKfycbwUV2z7CzbtTPs7mfy2mGz1zTqBNG4W2PR8Z3mQiPNnATIGJwz2Mnqq8jQ4NjszIuUg/exec";
    $ch = curl_init($url);
    $name = $user_data['name'];
    $people = $_POST['people'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_POSTFIELDS => http_build_query([

            "recipient" => "safwaneguilmi2001@gmail.com",
            "subject" => "Reservation",
            "body" => "Hey $name, You've reserved a table for $people people, On $date at $time, I hope you'll enjoy your time here in Royat Burger."
        ])
    ]);
    $result = curl_exec($ch);
}
?>