<?php
	include 'database.php';
	$query = "SELECT * FROM info ORDER BY city";
	$info = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Dream City Inventory </title>
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/tables.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Monofett&family=Roboto:wght@900&display=swap" rel="stylesheet">
</head>

<body>
<div id="container">


	<section class="hero-tall">

  	<div class="stars"></div>
  	<div class="clouds">


<h1>Dream City Inventory</h1>

<p class="link"><a href="enter_new_record.php">Add a new city.</a></p>


<!--
     the form below is handled by the PHP file named in the action= attribute
-->
<form method="post" autocomplete="off">

<table class="tabletable-hover">
	<!-- table column headings -->
	<thread>
	<tr>
	  <th scope="col">City</th>
	  <th scope="col">State or Country</th>
	  <th scope="col">Why Move There?</th>
	  <th scope="col">Dream Life or Job</th>
	  <th scope="col">Starsign</th>
	</tr>
</thread>


<?php while ($row = mysqli_fetch_assoc($info)) :  ?>
<tbody>
<tr>
  <td><?php echo stripslashes($row['city']); ?></td>
  <td><?php echo $row['stateorcountry']; ?></td>
  <td><?php echo $row['whymovethere']; ?></td>
  <td><?php echo $row['dreamjob']; ?></td>
  <td><?php echo $row['starsign']; ?></td>
</tr><!-- end of HTML table row -->
</tbody>
<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>


<!-- close the form -->
</form>

<p class="link"><a href="enter_new_record.php">Add a new city.</a></p>


    </div>

  </section>


</div> <!-- close container -->
</body>
</html>
