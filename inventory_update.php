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
	<link rel="stylesheet" href="styles/table.css">
</head>

<body>
<div id="container">

<h1>Dream City Inventory</h1>

<p class="middle"><a href="enter_new_record.php">Add a new city.</a></p>


<!--
     the form below is handled by the PHP file named in the action= attribute
-->
<form class="smallform" method="post" action="city_edit.php" autocomplete="off">

<table>
	<!-- table column headings -->
	<tr>
	  <th>City</th>
	  <th>State or Country</th>
	  <th>Why Move There?</th>
	  <th>Dream Life or Job</th>
	  <th>Starsign</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
     Each time it loops, it writes ONE ROW.
	 This code depends on the first 5 lines at the start of this file.
	 $socks comes from that code.
	 NOTE all form controls must have a name= attribute.
     -->
<?php while ($row = mysqli_fetch_assoc($info)) :  ?>

<tr>
  <!-- notice how, above, the database record id becomes
       the id and value of the radio button -->
  <td><?php echo stripslashes($row['city']); ?></td>
  <td><?php echo $row['stateorcountry']; ?></td>
  <td><?php echo $row['whymovethere']; ?></td>
  <td><?php echo $row['dreamjob']; ?></td>
  <td><?php echo $row['starsign']; ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>


<!-- close the form -->
</form>

<p><a href="enter_new_record.php">Add a new city.</a></p>

</div> <!-- close container -->
</body>
</html>
