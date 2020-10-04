<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Edit Post</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
</head>
<body>

<div id="wrapper">

	<?php include('menu.php'); ?>
	<p><a href="peserta.php">Peserta Index</a></p>

	<h2>Edit Peserta</h2>

	<?php
	if(isset($_POST['submit'])){

		//collect form data
		extract($_POST);

		try {
					//update database
					$stmt = $db->prepare('UPDATE peserta SET namaPeserta = :namaPeserta, nimPeserta = :nimPeserta, hpPeserta = :hpPeserta, emailPeserta = :emailPeserta WHERE idPeserta = :idPeserta') ;
					$stmt->execute(array(
						':namaPeserta' => $namaPeserta,
						':nimPeserta' => $nimPeserta,
						':hpPeserta' => $hpPeserta,
						':emailPeserta' => $emailPeserta,
						':jenisPeserta' => $jenisPeserta,
						':idPeserta' => $idPeserta
					));
				

				//redirect to index page
				header('Location: peserta.php?action=updated');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}


		try {

			$stmt = $db->prepare('SELECT * FROM peserta WHERE idPeserta = :idPeserta') ;
			$stmt->execute(array(':idPeserta' => $_GET['id']));
			$row = $stmt->fetch(); 

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	}
	?>


	<form action='' method='post'>
		<input type='hidden' name='idPeserta' value='<?php echo $row['idPeserta'];?>'>

		<p><label>NIM Peserta</label><br />
		<input type='text' name='nimPeserta' value='<?php echo $row['nimPeserta'];?>'></p>

		<p><label>Nama Peserta</label><br />
		<input type='text' name='namaPeserta' value='<?php echo $row['namaPeserta'];?>'></p>

		<p><label>Nomer Hp Peserta</label><br />
		<input type='text' name='hpPeserta' value='<?php echo $row['hpPeserta'];?>'></p>

		<p><label>Email Peserta</label><br />
		<input type='email' name='emailPeserta' value='<?php echo $row['emailPeserta'];?>'></p>

		<p><label>Jenis Peserta</label><br />
		<select name="jenisPeserta">
  			<option value="Seminar">Seminar</option>
  			<option value="Workshop">Workshop</option>
  			<option value="Networking">Lomba Networking</option>
  			<option value="Futsal">Lomba Futsal</option>
  			<option value="Dota2">Lomba Dota2</option>
  			<option value="Pes">Lomba PES</option>
		</select></p>
		
		<p><input type='submit' name='submit' value='Update Peserta'></p>

	</form>

</div>

</body>
</html>	
