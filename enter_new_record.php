<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Dream City - Enter </title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Monofett&family=Roboto:wght@900&display=swap" rel="stylesheet">
</head>
<body>
<div id="container">
  <section class="hero-tall">

  	<div class="stars"></div>
  	<div class="clouds">

<h1>Enter a New City</h1>
<p class="link"><a href="inventory_update.php">View full inventory</a></p>
<div  class= "smalltext" id="cities">
<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="citiesform" method="post" action="" autocomplete="off">
  <label for="city">City </label>
	<input type="text" name="city" id="city" maxlength="30" required>
  <label for="stateorcountry">State or Country </label>
	<input type="text" name="stateorcountry" id="stateorcountry" maxlength="30" required>
  <label for="whymovethere">Why Move There?</label>
	<input type="text" name="whymovethere" id="whymovethere" maxlength="140" required>
  <label for="dreamjob"> Dream Life or Job </label>
	<input type="text" name="dreamjob" id="dreamjob" maxlength="140" required>
  <label for="starsign">Sign </label>
  <select name="starsign" id="starsign" required>
      <option value=""></option>
      <option value="Capricorn">Capricorn</option>
      <option value="Aquarius">Aquarius</option>
      <option value="Pisces">Pisces</option>
      <option value="Aries">Aries</option>
      <option value="Taurus">Taurus</option>
      <option value="Gemini">Gemini</option>
      <option value="Cancer">Cancer</option>
      <option value="Leo">Leo</option>
      <option value="Virgo">Virgo</option>
      <option value="Libra">Libra</option>
      <option value="Scorpio">Scorpio</option>
      <option value="Sagittarius">Capricorn</option>
  </select>
	<input type="submit" id="submit" value="Submit">
</form>
<!-- close the form -->
</div> <!-- close #socks -->
<!-- empty div -->
<div class= "smalltext" id="response"> International dreams are more than welcome!</div>
</div>

</section>
</div> <!-- close container -->
<script src="js/enter.js"></script>
</body>
</html>
