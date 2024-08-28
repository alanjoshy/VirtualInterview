<?php include 'candidateheader.php' ?>

	<div class="content">
		
		</div>
		<div style="margin-left:10px;margin-right:10px;">
		<table id="customers">
		<tr>
			<th>Company</th>			
			<th>Subject</th>
			<th>LINK</th>
		</tr>
		
		<?php 
		
	
		 
			$query="SELECT * FROM `mailbox` where touser='".$_SESSION['username']."'";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					echo '<tr>
					<td>'.$row['fromuser'].'</td>
					<td>'.$row['subject'].'</td>
					
					
					<td><a href="'.$row['message'].'"><b>Apply</b></a></td>
					
				  </tr>';
				}
			}

			
		
		
		
		
		
		?>
		</table>


	</div>
	<div>
	
	&nbsp;
	</div>