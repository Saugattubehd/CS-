<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neo Wallet - Balance Toggle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.css" integrity="sha512-GmZYQ9SKTnOea030Tbiat0Y+jhnYLIpsGAe6QTnToi8hI2nNbVMETHeK4wm4MuYMQdrc38x+sX77+kVD01eNsQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            
            background-color: #f4f4f4;
            flex-direction: column;
            margin: 0;
        }
        .navbar {
            width: 100%;
            background-color:rgb(255, 255, 255);
            padding: 10px;
            display: flex;
            justify-content: flex-end;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            margin-left: 20px;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .balance-container {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .toggle-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 24px;
            color: #007bff;
        }
        .btn-primary {
            background-color: #5469d4;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #4353a3;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="logout.php" class="btn-primary">Logout</a>
    </div>
    <br>
    <div class="card">
        <h2>Neo Wallet</h2>
        <div class="balance-container">
            <h3>Hi, <?php echo $_SESSION['user_name']; ?></h3>
            Balance: <span id="balance">XXXXX</span>
            <button class="toggle-btn" onclick="toggleBalance()">
                <i id="eyeIcon" class="fas fa-eye"></i>
            </button>
        </div>
    </div>
    <script>
        let isHidden = true;
        let actualBalance = '<?php echo $_SESSION['user_balance']; ?>';

        function toggleBalance() {
            let balanceSpan = document.getElementById('balance');
            let eyeIcon = document.getElementById('eyeIcon');

            if (isHidden) {
                balanceSpan.textContent = actualBalance;
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                balanceSpan.textContent = 'XXXXX';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }

            isHidden = !isHidden;
        }
    </script>
</body>
</html>
