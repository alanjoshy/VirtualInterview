<?php include 'candidateheader.php' ?>

	<div class="content">
		<form method="POST">
		<select name="job">
		<?php
			$query="SELECT * FROM `postjob`";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					echo '<option value='.$row["jobid"].'>'.$row['designation'].'</option>';
				}
			}

		?>
			
			</select>
			<input type="submit" value="Search" name='Search'>
		</form>
		</div>
		<div style="margin-left:10px;margin-right:10px;">
		<table id="customers">
		<tr>
			<th>Company</th>
			<th>Designation</th>
			<th>Requirement</th>
			<th>Salary</th>
			<th>Place</th>
			<th>Qualification</th>
			<th>Last date</th>
			<th>Number of Post</th>
		</tr>
		
		<?php 
		
		if(isset($_POST['Search']))
		{
			$jobid=$_POST['job']; 
			$query="SELECT * FROM `postjob` where jobid=$jobid";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					echo '<tr>
					<td>'.$row['company_name'].'</td>
					<td>'.$row['designation'].'</td>
					<td>'.$row['requirements'].'</td>
					<td>'.$row['salary'].'</td>
					<td>'.$row['place'].'</td>
					<td>'.$row['qualification'].'</td>
					<td>'.$row['lastdate'].'</td>
					<td>'.$row['noofposts'].'</td>
					<td><a href="searchjob.php?jobid='.$row['jobid'].'&user='.$_SESSION["username"].'"><b>Apply</b></a></td>
					
				  </tr>';
				}
			}

			
		}
		
		
		if(isset($_GET['user'])&isset($_GET['jobid']))
		{
			$id=$_GET['jobid'];
			$user=$_GET['user'];
			$date=date("Y/m/d") ;


			$qu="select * from application where jobid='$id' and cuername='$user'";
			$resu=mysqli_query($conn,$qu);
			if(mysqli_num_rows($resu)<1)
			{
			
			$query="insert into application(jobid,cuername,dateofapplication) values('$id','$user','$date')";
			mysqli_query($conn,$query);
			echo "<script>alert('Successfully updated');</script>";
			}
			else{
				
			echo "<script>alert('Alredy applied for this job wait for employers replay');</script>";
			

			}
			echo "<script>window.location.href = 'searchjob.php';</script>";
			// header("location:searchjob.php");

		}
		
		?>
		</table>


	</div>
	<div>
	
	&nbsp;
	</div>