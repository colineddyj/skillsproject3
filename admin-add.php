<?php include 'header.php'?>

<main>
<div class="welcome">
  <div>
    <h2>Add Your Next Adventure!</h2>
    <hr>
</div>


<div class="form1">
    <form action="admin-confirm.php" method="post">
        <input class="input" type="text" name="heading" placeholder="Destination">
        <input class="input" type="date" name="tripDate">
        <input class="input" type="number" name="duration" placeholder="Number of Days">
        <br>
        <textarea class="textarea" type="text" name="summary" placeholder="Description"></textarea>
        <br>
        <input type="submit" class="btn" name="submit" value="submit">
    </form>
</div>
</div>


</main>

<?php include "footer.php" ?>