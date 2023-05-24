<?php include 'header.php'?>

<main>
  <section class="heroImage">
    <div class="heroText">
        <h1>Come Experience Canada</h1>
    </div>
  </section>

<section class="adventures-preview">
  <div id="adventure">
    <h2>Upcoming Adventures</h2>
    <a href="all-adventures.php"><button class="btn">SEE MORE</button></a>
    </div>
      <div class="previews">
        <?php
          $sql = "SELECT * FROM tbl_adventures ORDER BY tripDate LIMIT 3";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {

              while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='index-adventures2'><div><h3>" . $row["heading"] . "</h3></div><br><div><p>Date: " . $row["tripDate"] . "</p></div><div><p>Duration: " . $row["duration"] . " days</p></div></div>";
              }
          } else {
              echo "There are no upcoming adventures. Please check again later!";
          }
        ?>
      </div>
  </section>

</main>

<?php include "footer.php" ?>