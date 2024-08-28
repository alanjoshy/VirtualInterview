
<?php
session_start();
 include 'employerheader.php';

$conn=mysqli_connect("localhost","root","","virtual_db");
if(!$conn){
	echo "database error";
}
$uname=$_SESSION["username"];
$query="select * from application where jobid in (select jobid from postjob where company_name='$uname')";
//$query="select postjob.*,candidate.* from postjob join application on postjob.jobid=application.jobid join candidate on candidate.username=application.cuername where postjob.company_name='$uname'";
echo "<table id='customers'>
<tr><th>Jobid</th><th>Applicant</th><th>Applied Date</th></tr>";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
    echo "<tr><td><a href='applications.php?jobid=".$row['jobid']."'>". $row['jobid'] ."</a></td>
    <td><a href='applications.php?u=".$row['cuername']."'>".$row['cuername']."</a></td><td>".$row['dateofapplication']."</td>
    <td><a href='applications.php?msg=".$row['cuername']."'>Send Link</a></td>";
    
}
if(isset($_GET['jobid']))
{
    $query="select * from postjob where jobid='".$_GET['jobid']."'";

    $result=mysqli_query($conn,$query);

    $row=mysqli_fetch_assoc($result);
    

    ?>
        <div class="alert" style="text-align:center">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>  Job description</strong><br>
             
          <strong> Designation     </strong>   <?php echo $row['designation'] ?>  <br>   
          <strong> Requirement     </strong>   <?php echo $row['requirements'] ?> <br>    
          <strong> Salary          </strong>   <?php echo $row['salary'] ?>       <br>
          <strong> Skill           </strong>   <?php echo $row['skillsrequired'] ?><br>
          <strong> Qualification   </strong>   <?php echo $row['qualification'] ?> 
         
        </div>

    <?php

}

if(isset($_GET['u']))
{
    $query="select * from candidate where username='".$_GET['u']."'";

    $result=mysqli_query($conn,$query);

    $row=mysqli_fetch_assoc($result);
    // echo "<script>alert('Position:".$row['designation']."\nPosition:".$row['designation']."')</script>";

    ?>
        <div class="alert" style="text-align:center">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>  Job description</strong><br>
             
          <strong> Designation     </strong>   <?php echo $row['expirence'] ?>  <br>   
          <strong> Email     </strong>   <?php echo $row['emailid'] ?> <br>    
          <strong> Photo          </strong>   <img src='photo/<?php echo $row["photo"]   ?>' width="80px" height="100px">      <br>
          <strong> Resume     </strong>   <a href='resume/<?php echo $row['resume']; ?>'>Download</a> <br>  
        </div>

    <?php

}
if(isset($_GET['msg']))
{
    $randomid = mt_rand(100000,999999); 
    
    $from=$_SESSION['username'];
    $to=$_GET['msg'];
    $applicant_reg=$to.$randomid;
    $sub="use username and email as $applicant_reg@gmail.com";
    $link="onlineexam/account.php?q=1";
    $query="insert into mailbox(touser,fromuser,subject,message) values('$to','$from','$sub','$link')";
    mysqli_query($conn,$query);

    echo "<script>alert('Link sent succesfully');</script>";

}




?>
