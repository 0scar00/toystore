<?php

    /* TO-DO: Include header.php
              Hint: header.php is inside the includes folder and already connects to the database
    */



    // Retrieve the value of the 'toynum' parameter from the URL query string
	//          Example URL: .../toy.php?toynum=0001
	$toy_id = $_GET['toynum'];



    /* TO-DO: Create a function that retrieves ALL toy and manufacturer information 
              from the database based on the toynum parameter from the URL.

              Your function should:
                1. Query the appropriate database table to retrieve toy and manufacturer info based on toynum
                2. Execute the SQL query using the pdo() helper function and fetch the result
                3. Return toy information
	*/



    /* TO-DO: Call function to retrieve toy information */


?>

<section class="toy-details-page container">
    <div class="toy-details-container">
        <div class="toy-image">

            <!-- TO-DO: Display the toy image and update the alt text to the toy name -->
            <img src="<?= '' ?>" alt="<?= '' ?>">

        </div>

        <div class="toy-details">

            <!-- TO-DO: Display the toy name -->
            <h1><?= '' ?></h1>

            <h3>Toy Information</h3>

            <!-- TO-DO: Display the toy description -->
            <p><strong>Description:</strong> <?= '' ?></p>

            <!-- TO-DO: Display the toy price -->
            <p><strong>Price:</strong> $ <?= '' ?></p>

            <!-- TO-DO: Display the toy age range -->
            <p><strong>Age Range:</strong> <?= '' ?></p>

            <!-- TO-DO: Display stock of toy -->
            <p><strong>Number In Stock:</strong> <?= '' ?></p>

            <br />

            <h3>Manufacturer Information</h3>

            <!-- TO-DO: Display the manufacturer name -->
            <p><strong>Name:</strong> <?= '' ?> </p>

            <!-- TO-DO: Display the manufacturer address -->
            <p><strong>Address:</strong> <?= '' ?>, <?= '' ?>, <?= '' ?> <?= '' ?></p>

            <!-- TO-DO: Display the manufacturer phone -->
            <p><strong>Phone:</strong> <?= '' ?></p>

            <!-- TO-DO: Display the manufacturer contact -->
            <p><strong>Contact:</strong> <?= '' ?></p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>