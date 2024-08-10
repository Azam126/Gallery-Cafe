<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .navbar li {
            float: left;
        }
        .navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar li a:hover {
            background-color: #575757;
        }
        .navbar:after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <ul>
            <li><a href="./adminHome.php">Home</a></li>
            <li><a href="./addOffers.php">Add Offers</a></li>
            <li><a href="./addImages.php">Add Images to Gallery</a></li>
            <li><a href="./addMenuItems.php">Add Items to Menu</a></li>
            <li><a href="./viewOrders.php">View Orders</a></li>
            <li><a href="./addAdmin.php">Add Admin Accounts</a></li>
            <li><a href="./viewMessages.php">View Messages</a></li>
            <li><a href="./manageFeedbacks.php">Manage Feedback</a></li>
            <li><a href="./manageReservation.php">Manage Reservations</a></li>
        </ul>
    </div>

</body>
</html>
