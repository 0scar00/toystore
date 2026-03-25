<?php 

    /* TO-DO: Include header.php
              Hint: header.php is inside the includes folder and already connects to the database
    */
	include 'includes/header.php';

    /*
	 * Retrieve toy information from the database based on the toy ID.
	 * 
	 * @param PDO $pdo       An instance of the PDO class.
	 * @param string $id     The ID of the toy to retrieve.
	 * @return array|null    An associative array containing the toy information, or null if no toy is found.
	 */
	function get_toy(PDO $pdo) {
		                                                    // SQL query to retrieve toy information based on the toy ID
		$sql = "SELECT * FROM toy;";	                        // :id is a placeholder for value provided later		                                                    // Execute the SQL query using the pdo function and fetch the result
		$toys = pdo($pdo, $sql, [])->fetchAll();		// Associative array where 'id' is the key and $id is the value. Used to bind the value of $id to the placeholder :id in SQL query.
		return $toys;                                        // Return the toy information (associative array)
	}

	$toys = get_toy($pdo);                          // Retrieve info about toy with ID '0001' from the database using provided PDO connection
?>


<section class="toy-catalog">


    <!-- TOY CARD START -->
    <?php foreach ($toys as $toy) : ?>
        <!-- TOY CARD START -->
        <div class="toy-card">
  	        <a href="toy.php?toynum=<?= $toy['toyID'] ?>">
  			    <img src="<?= $toy['img_src'] ?>" alt="<?= $toy['name'] ?>">
  		    </a>

  		    <h2><?= $toy['name'] ?></h2>

  		    <p>$<?= $toy['price'] ?></p>
  	    </div>
        <!-- TOY CARD END -->
    <?php endforeach; ?>

    <!-- TO-DO: Display the rest of the toys in the database

                Hint 1: You could copy/paste the toy-card block for each toy, but this would be repetitive.

                Hint 2: Instead, how could you modify the get_toy() function so it returns ALL toys
                        from the database instead of just one?

                Hint 3: Once you have an array of toys, how could you use a PHP loop to display
                        each toy inside a toy-card?
    -->
	


</section>

<?php include 'includes/footer.php'; ?>
