<?php

    /* TO-DO: Include header.php
            Hint: header.php is inside the includes folder and already connects to the database
    */
    require_once 'includes/database-connection.php';
    require_once 'includes/session.php';
    
	require_login($logged_in);                              // Redirect user if not logged in
	$username = $_SESSION['username'];                      // Retrieve the username from the session data
    $custID   = $_SESSION['custID'];                        // Retrieve the custID from the session data



    /* TO-DO: Create a function that retrieves ALL order information for the logged-in user 

              Your function should:
                1. Query the appropriate tables to retrieve:
                    - order information
                    - toy name
                    - toy image
                    Make sure to sort the results in descending order (most recent first)
                2. Execute the SQL query using the pdo() helper function and fetch the results
                3. Return orders for the logged-in user only
	*/

function get_orders(PDO $pdo, string $cust_id) {
    $sql = "SELECT
                orders.*,
                toy.name AS toy_name,
                toy.img_src
            FROM orders
            JOIN toy ON orders.toyID = toy.toyID
            WHERE orders.custID = :custID
            ORDER BY orders.date_ordered DESC;";

    return pdo($pdo, $sql, ['custID' => $cust_id])->fetchAll();
}

    /* TO-DO: Call function to retrieve orders for the logged-in user */
$orders = get_orders($pdo, $custID);

include 'includes/header.php';

?>

<h1>Welcome, <?= htmlspecialchars($username) ?>!</h1>

<?php if (!$orders) : ?>
    <div class="no-orders">
        <p>You have no orders yet.</p>
    </div>
<?php else : ?>
    <div class="orders-container">

        <?php foreach ($orders as $order) : ?>
            <div class="order-card">

                <img src="<?= $order['img_src'] ?>" alt="<?= $order['toy_name'] ?>">

                <div class="order-info">
                    <p><strong>Order Number:</strong> <?= $order['orderID'] ?></p>
                    <p><strong>Toy:</strong> <?= $order['toy_name'] ?></p>
                    <p><strong>Quantity:</strong> <?= $order['quantity'] ?></p>
                    <p><strong>Date Ordered:</strong> <?= $order['date_ordered'] ?></p>
                    <p><strong>Delivery Address:</strong> Not Available</p>
                    <p><strong>Delivery Date:</strong> <?= $order['delivery_date'] ?? 'Pending' ?></p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>