<?php
session_start(); // Start the session

// Unset all session variables
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will delete the session on the server, but not on the client.
// The session will be removed when the user closes their browser.
// However, if you want to ensure the session cookie is also deleted, you can uncomment the following lines:
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();

// Redirect to the login page or homepage
header("Location: login.php"); // Change this to your desired redirection page
exit(); // Ensure that no further code is executed
?>
