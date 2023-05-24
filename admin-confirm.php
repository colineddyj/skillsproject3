<?php include 'header.php'?>

<main>

<h1>Admin - Confirm</h1>
<hr>

<?php
if(isset($_POST['submit']))
{    
     $heading = $_POST['heading'];
     $tripDate = $_POST['tripDate'];
     $duration = $_POST['duration'];
     $summary = $_POST['summary'];
     
     $sql = "INSERT INTO tbl_adventures (heading, tripDate, duration, summary)
     VALUES ('$heading', '$tripDate', '$duration', '$summary')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<br>
<h3><a href="all-adventures.php">View All Adventures</a></h3>
<h3><a href="admin-add.php">Add Another Adventure</a></h3>

</main>

<?php include "footer.php" ?>