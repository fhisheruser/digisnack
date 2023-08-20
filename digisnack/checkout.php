
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Options</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"], input[type="number"], input[type="date"], input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .container {
            position: relative;
        }

        #homeButton {
            position: absolute;
            top: 10px;
            left: 10px;
           padding-bottom: 5px;
        }
    </style>
</head>
<body>
<button><a href="roommate.php">Back</a></button>
    <!-- <?php
    // Retrieve student_id from the query parameter
    $student_id = $_GET["student_id"];
    
    // Use the $student_id to fetch the student's details from the database and display relevant information
    // Perform your checkout logic here
    ?>
    <p>Checkout information for student with ID <?php echo $student_id; ?></p> -->
    <!-- Add your checkout form or confirmation message here -->
    <div class="container">
        <h2>Payment Options</h2>
        <form id="paymentForm">
            <label for="cardNumber">Card Number</label>
            <input type="text" id="cardNumber" placeholder="1234 5678 9012 3456">

            <label for="cardName">Cardholder Name</label>
            <input type="text" id="cardName" placeholder="John Doe">

            <label for="expiryDate">Expiry Date</label>
            <input type="date" id="expiryDate">

            <label for="cvv">CVV</label>
            <input type="password" id="cvv" placeholder="123">

            <input type="checkbox" id="cashOnDelivery" name="cashOnDelivery">
            <label for="cashOnDelivery">Cash on Delivery</label>

            <button type="submit" id="payButton">Pay Now</button>
            <button type="button" id="confirmButton">Confirm</button>
            <hr href="frontpage.html">
            <button type="button" id="homeButton">Home</button></a>
        </form>
    </div>

    <script>
        const paymentForm = document.getElementById('paymentForm');

        paymentForm.addEventListener('submit', function (event) {
            event.preventDefault();

            // Check if Cash on Delivery is selected
            const cashOnDeliveryCheckbox = document.getElementById('cashOnDelivery');
            const cashOnDeliverySelected = cashOnDeliveryCheckbox.checked;

            if (cashOnDeliverySelected) {
                // Process the order as Cash on Delivery
                alert('Order Placed! You will pay cash upon delivery.');
            } else {
                // Process the order using the selected payment method (e.g., credit card)
                // In a real payment gateway, you would handle payment processing here
                alert('Payment Successful!');
            }
        });

        // Event listener for the Confirm button
        const confirmButton = document.getElementById('confirmButton');
        confirmButton.addEventListener('click', function () {
            alert('Order Placed! You will pay cash upon delivery.');
        });

        // Event listener for the Home button
        const homeButton = document.getElementById('homeButton');
        homeButton.addEventListener('click', function () {
            // Replace 'frontpage.html' with the URL of your home page
            window.location.href = 'frontpage.html';
        });
    </script>
</body>
</html>
