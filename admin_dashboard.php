<!doctype html>
<html>
<head>
	<title>admindashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-5.0.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-5.0.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: red;
			border: solid 1px black;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
	</style>
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
			
	?>
</head>
<body>
	<div id="header">
		<center><br><strong>SRINIDHI TOWERS MANAGEMENT SYSTEM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>email: <?php echo $_SESSION['email'];?> &nbsp;&nbsp;&nbsp;&nbsp;name: <?php echo $_SESSION['name'];?>
		<a href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee>WELCOME TO SRINIDHI TOWER OWNERS ASSOCIATION</marquee></span>
	<div id="left_side"><br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input type="submit" name="search_owner" value="search owner">
					</td>	
				</tr>	
				<tr>
					<td>
						<input type="submit" name="edit_owner" value="edit owner">
					</td>	
				</tr>
				<tr>
					<td>
						<input type="submit" name="add_new_owner" value="Add new owner">
					</td>	
				</tr>
				<tr>
					<td>
						<input type="submit" name="delete_owner" value="Delete owner">
					</td>	
				</tr>
			</table>	
		</form>

	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
				if(isset($_POST['search_owner']))
				{
					?>
					<center>
						<form action="" method="post">
							Enter flat no:
							<input type="text" name="Flatno">
							<input type="submit" name="search_by_Flatno_for_search"
							value="search">
						</form>
					</center>
					<?php
				}
				if(isset($_POST['search_by_Flatno_for_search']))
				{
					$query = "select * from owners where Flatno = '$_POST[Flatno]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<table>
							<tr>
								<td><b>Flatno:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
								<td>
									<input type="text" value="<?php echo $row['Flatno']
										;?>" disabled>
								</td>
							</tr>
							<tr>
								<td><b>Owner name:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
								<td>
									<input type="text" value="<?php echo $row['Ownername']
										;?>" disabled>
								</td>
							</tr>
							<tr>
								<td><b>Father name:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
								<td>
									<input type="text" value="<?php echo $row['Fathername']
										;?>" disabled>
								</td>
							</tr>
							<tr>
								<td><b>Floor name:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
								<td>
									<input type="text" value="<?php echo $row['Floorname']
										;?>" disabled>
								</td>
							</tr>
							<tr>
								<td><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
								<td>
									<input type="text" value="<?php echo $row['email']
										;?>" disabled>
								</td>
							</tr>
							<tr>
								<td><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
								<td>
									<input type="text" value="<?php echo $row['password']
										;?>" disabled>
								</td>
							</tr>
							<tr>
								<td><b>Contact no:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
								<td>
									<input type="text" value="<?php echo $row['Contactno']
										;?>" disabled>
								</td>
							</tr>
							<tr>
								<td><b>Remarks:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
								<td>
									<textarea rows="9" Cols="90" disabled><?php echo $row['Remarks'];?></textarea>
								</td>
							</tr>							
						</table>
						<?php
					}
				}
			?>
		</div>
	</div>
</body>
</head>		
