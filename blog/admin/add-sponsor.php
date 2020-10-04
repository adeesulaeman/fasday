<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Add Sponsor</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
</head>
<body>

<div id="wrapper">

	<?php include('menu.php');?>
	<p><a href="sponsor.php">Sponsors Index</a></p>

	<h2>Add Sponsor Manual</h2>

	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		//collect form data
		extract($_POST);

		//very basic validation
		if($nama_perusahaan_sp ==''){
			$error[] = 'Masukan Nama Perusahaan Sponsor.';
		}

		if($nama_pj_sp ==''){
			$error[] = 'Masukan Nama Contact Person Sponsor.';
		}

		if($hp_sp ==''){
			$error[] = 'Masukan Nomer Hp Sponsor.';
		}

		if($email_sp ==''){
			$error[] = 'Please enter the email address.';
		}

		if(!isset($error)){

			try {

				//insert into database
				$stmt = $db->prepare('INSERT INTO sponsor (nama_perusahaan_sp,nama_pj_sp,hp_sp,email_sp) VALUES (:nama_perusahaan_sp, :nama_pj_sp, :hp_sp, :email_sp)') ;
				$stmt->execute(array(
					':nama_perusahaan_sp' => $nama_perusahaan_sp,
					':nama_pj_sp' => $nama_pj_sp,
					':hp_sp' => $hp_sp,
					':email_sp' => $email_sp
				));

				//redirect to index page
				header('Location: sponsor.php?action=added');
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

		<p><label>Nama Sponsor</label><br />
		<input type='text' name='nama_perusahaan_sp' value='<?php if(isset($error)){ echo $_POST['nama_perusahaan_sp'];}?>'></p>

		<p><label>Nama Contact Person</label><br />
		<input type='text' name='nama_pj_sp' value='<?php if(isset($error)){ echo $_POST['nama_pj_sp'];}?>'></p>

		<p><label>Nomer Hp Sponsor</label><br />
		<input type='text' name='hp_sp' value='<?php if(isset($error)){ echo $_POST['hp_sp'];}?>'></p>

		<p><label>Email Sponsors</label><br />
		<input type='email' name='email_sp' value='<?php if(isset($error)){ echo $_POST['email_sp'];}?>'></p>
		
		<p><input type='submit' name='submit' value='Add Sponsor'></p>

	</form>

</div>
