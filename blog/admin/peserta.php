<?php
//include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['deluser'])){ 

	//if user id is 1 ignore
	if($_GET['deluser'] !='1'){

		$stmt = $db->prepare('DELETE FROM peserta WHERE idPeserta = :idPeserta') ;
		$stmt->execute(array(':idPeserta' => $_GET['deluser']));

		header('Location: peserta.php?action=deleted');
		exit;

	}
} 

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Users</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <script language="JavaScript" type="text/javascript">
  function deluser(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = 'peserta.php?deluser=' + id;
	  }
  }
  </script>
</head>
<body>

	<div id="wrapper">

	<?php include('menu.php');?>

	<?php 
	//show message from add / edit page
	if(isset($_GET['action'])){ 
		echo '<h3>User '.$_GET['action'].'.</h3>'; 
	} 
	?>

	<table>
	<tr>
		<th>No.</th>
		<th>NIM Peserta</th>
		<th>Nama Peserta</th>
		<th>No. Hp</th>
		<th>Email</th>
		<th>Jenis Peserta</th>
		<th>Action</th>
	</tr>
	<?php
		try {
			$no = 1;
			$stmt = $db->query('SELECT idPeserta, namaPeserta, nimPeserta, hpPeserta, emailPeserta, jenisPeserta FROM peserta ORDER BY jenisPeserta');
			while($row = $stmt->fetch()){
				
				echo '<tr>';
				echo '<td>'.$no++.'</td>';
				echo '<td>'.$row['nimPeserta'].'</td>';
				echo '<td>'.$row['namaPeserta'].'</td>';
				echo '<td>'.$row['hpPeserta'].'</td>';
				echo '<td>'.$row['emailPeserta'].'</td>';
				echo '<td>'.$row['jenisPeserta'].'</td>';
				?>

				<td>
					<a href="edit-peserta.php?id=<?php echo $row['idPeserta'];?>">Edit</a> 
					<?php if($row['idPeserta'] != 1){?>
						| <a href="javascript:deluser('<?php echo $row['idPeserta'];?>','<?php echo $row['namaPeserta'];?>')">Delete</a>
					<?php } ?>
				</td>
				
				<?php 
				echo '</tr>';

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>
	</table>

	<p><a href='add-peserta.php'>Add Peserta</a></p>

</div>

</body>
</html>
