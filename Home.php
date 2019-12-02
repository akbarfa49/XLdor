<?php
session_start();
if(!isset($_SESSION['msisdn'])){
	header("location: index.php");
}

$msisdn = $_SESSION['msisdn'];

?>
<html lang="en">

<head>
	
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<meta name="author" content="Rumina"/>
<title>Pemilihan Umum OSIS</title>

  <!-- Custom styles for this template -->

  <link href="css/simple.css" rel="stylesheet">
</head>
<body>
<nav class="navbar">
	<div class="logo">Rumina</div>
	<ul class="main-nav">
		<li ><a class="nav-links" href="#home">Pulsa</a></li>
		<li><a href="#stos" class="nav-links">NOMINAL PLACE HERE</a></li>
	</ul>
</nav>	
<div id="response">
<p id="response-txt">TEST</p>
</div>

<div class="row parallax" id="stos">
<div class="container">
		<div class="loginbox">
		<h2>DOR PAKET XL</h2>
		<form id="formlog" name="formlog" action="jedor.php" method="POST">
			<label class="label-number">No. <?php echo $msisdn?></label>
			<label class="label-login">Pilih Paket</label>
			<select class="select-style" name="dor">
			<option value="1">Waze Chat 1Hari 500</option>
			<option value="2">Waze Chat 3Hari 1000</option>
			<option value="3">Waze Chat 7Hari 2500</option>
			<option disabled="">Test</option>
			</select>
			<button type="button" class="btn-pink" id="exit" >Keluar</button>
			<button type="submit" class="btn-primary" id="dor">DOR</button>
		</form>

	</div></div>
</div>



      
       <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/simplejs.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    
  </script>
</body>

</html>