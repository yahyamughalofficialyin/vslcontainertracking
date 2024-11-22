<?php

session_start();
if (!isset($_SESSION['admin_id'])) {
    header("location: login.php");
    exit();
}

include "config.php";

$allpages= false;
$analytics= false;
$chat=false;
$calendar=false;
$container = true;
if($container){
    $tracking = true;
}
$crm=false;
$documentation=false;
$ecommerce = false;
$education = false;
$email = false;
$employee = false;
$events=false;
$kanban=false;
$lms=false;
$social = false;
$management=false;
$supportdesk = false;
$saas=false;
$superadmin=false;

?>

<?php

if (isset($_SESSION['admin_id'])) {
    // Prepare and execute the SQL query to fetch admin details
    $adminId = $_SESSION['admin_id'];
    $stmt = $conn->prepare("SELECT name, email, phone, AddedBy, image FROM admin WHERE id = ?");
    $stmt->bind_param("s", $adminId);
    $stmt->execute();
    $stmt->bind_result($name, $email, $phone, $addedBy, $image);
    $stmt->fetch();
    $stmt->close();
}

if($addedBy=='Admin'){
    $superadmin = true;
}

function generateRandomId($length = 8)
    {
        return substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $length);
    }

?>