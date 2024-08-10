<?php
include("../PHP/reservation.php");
include("../PHP/CheckOutFunction.php");


$countOrders=CheckOut::GetOrderCount();
$countPendingOrders=CheckOut::GetOrderPendingCount();
$countReservation=Reservations::GetReservationCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery Cafe |Staff Dashboard</title>
    <link rel="stylesheet" href="../Css/adminHome.css">
</head>
<body>
    <header>
        <img src="Images/menu-btn.png" alt="menu-button" class="menu-btn">
        <h1>Staff Dashboard</h1>
    </header>

    <main>

        <aside class="sidebar">
            <ul>
                <li><a href="../viewOrders.php">View Orders</a></li>
                <li><a href="../manageReservation.php">Manage Reservations</a></li>

            </ul>
        </aside>


        <section class="dashboard">

            <div class="card">
                <h2>Completed Orders</h2>
                <p style="color: white; padding:10px; background-color:green;text-align:center"><?php echo $countOrders; ?></p>

                <h2>Pending Orders</h2>
                <p style="color: white; padding:10px; background-color:red;text-align:center"><?php echo $countPendingOrders; ?></p>
            </div>
            
            <div class="card">
                <h2>Reservation Count</h2>
                <p><?php echo $countReservation; ?></p>
                
            </div>

        </section>
    </main>

    <footer>
        <div class="footer-container" id="copyright">
            <p>Copyright &copy; 2024 The Gallery Cafe</p>
        </div>
    </footer>

    <script>
        let iconMenu = document.querySelector('.menu-btn');
        let body = document.querySelector('body');

        iconMenu.addEventListener('click', () => {
            body.classList.toggle('showsideBar')
        })
    </script>
</body>
</html>

