<?php include 'header.php'?>

<main>

  <section class="heroImage">
    <div class="heroText">
        <h1>Come Experience Canada</h1>
    </div>
  </section>

<h1>All Adventures</h1>
<hr>

<div class="all-adventures">
<?php
	$sql = "SELECT * FROM tbl_adventures ORDER BY tripDate";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {

	    while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='adventure'><div class='adventure-heading'><h2>" . $row["heading"] . "</h2></div><br><p>Date: " . $row["tripDate"] . "<br>Duration: " . $row["duration"] . " days</p></div><h4>Summary</h4>" . $row["summary"];
	    }
	} else {
	    echo "There are no upcoming adventures. Please check again later!";
	}
?>
</div>


</main>

<?php include "footer.php" ?>