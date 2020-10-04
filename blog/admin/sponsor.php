<?php
//include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['deluser'])){ 

	//if user id is 1 ignore
	if($_GET['deluser'] !='1'){

		$stmt = $db->prepare('DELETE FROM sponsor WHERE id_sp = :id_sp') ;
		$stmt->execute(array(':id_sp' => $_GET['deluser']));

		header('Location: sponsor.php?action=deleted');
		exit;

	}
} 

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Sponsors</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <script language="JavaScript" type="text/javascript">
  function deluser(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = 'sponsor.php?deluser=' + id;
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
		<th>Nama Sponsor</th>
		<th>Contact Person</th>
		<th>No. Hp</th>
		<th>Email</th>
		<th>Action</th>
	</tr>
	<?php
		try {

			$stmt = $db->query('SELECT id_sp, nama_perusahaan_sp, nama_pj_sp, hp_sp, email_sp FROM sponsor ORDER BY id_sp');
			while($row = $stmt->fetch()){
				
				echo '<tr>';
				echo '<td>'.$row['nama_perusahaan_sp'].'</td>';
				echo '<td>'.$row['nama_pj_sp'].'</td>';
				echo '<td>'.$row['hp_sp'].'</td>';
				echo '<td>'.$row['email_sp'].'</td>';
				?>

				<td>
					<a href="edit-sponsor.php?id=<?php echo $row['id_sp'];?>">Edit</a> 
					<?php if($row['id_sp'] != 1){?>
						| <a href="javascript:deluser('<?php echo $row['id_sp'];?>','<?php echo $row['nama_perusahaan_sp'];?>')">Delete</a>
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

	<p><a href='add-sponsor.php'>Add Sponsor</a></p>

</div>

</body>
</html>
