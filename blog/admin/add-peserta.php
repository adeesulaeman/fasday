<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Add Peserta</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
</head>
<body>

<div id="wrapper">

	<?php include('menu.php');?>
	<p><a href="peserta.php">Peserta Index</a></p>

	<h2>Add Peserta Manual</h2>

	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		//collect form data
		extract($_POST);

		//very basic validation
		if($namaPeserta ==''){
			$error[] = 'Masukan Nama peserta.';
		}

		if($nimPeserta ==''){
			$error[] = 'Masukan NIM peserta.';
		}

		if($hpPeserta ==''){
			$error[] = 'Masukan Nomer Hp peserta.';
		}

		if($emailPeserta ==''){
			$error[] = 'Please enter the email address.';
		}

		if(!isset($error)){

			try {

				//insert into database
				$stmt = $db->prepare('INSERT INTO peserta (namaPeserta,nimPeserta,hpPeserta,emailPeserta, jenisPeserta) VALUES (:namaPeserta, :nimPeserta, :hpPeserta, :emailPeserta, :jenisPeserta)') ;
				$stmt->execute(array(
					':namaPeserta' => $namaPeserta,
					':nimPeserta' => $nimPeserta,
					':hpPeserta' => $hpPeserta,
					':emailPeserta' => $emailPeserta,
					':jenisPeserta' => $jenisPeserta
				));

				//redirect to index page
				header('Location: peserta.php?action=added');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>

	<form action='' method='post'>

		<p><label>NIM Peserta</label><br />
		<input type='text' name='nimPeserta' value='<?php if(isset($error)){ echo $_POST['nimPeserta'];}?>'></p>

		<p><label>Nama Peserta</label><br />
		<input type='text' name='namaPeserta' value='<?php if(isset($error)){ echo $_POST['namaPeserta'];}?>'></p>

		<p><label>Nomer Hp Peserta</label><br />
		<input type='text' name='hpPeserta' value='<?php if(isset($error)){ echo $_POST['hpPeserta'];}?>'></p>

		<p><label>Email Peserta</label><br />
		<input type='email' name='emailPeserta' value='<?php if(isset($error)){ echo $_POST['emailPeserta'];}?>'></p>

		<p><label>Jenis Peserta</label><br />
		<select name="jenisPeserta">
  			<option value="Seminar">Seminar</option>
  			<option value="Workshop">Workshop</option>
  			<option value="Networking">Lomba Networking</option>
  			<option value="Futsal">Lomba Futsal</option>
  			<option value="Dota2">Lomba Dota2</option>
  			<option value="Pes">Lomba PES</option>
		</select></p>
		
		<p><input type='submit' name='submit' value='Add Peserta'></p>

	</form>

</div>
