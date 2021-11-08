<?php
include "db.php";
if($_POST['StateName'])
{
$id=$_POST['StateName'];
//$sql="select * from appointment where ow_name='$id'";
$sql="SELECT s4.sname,s4.sid,ap.ow_name FROM service_master sm , image_s4 s4,appoinment_type apt,appointment ap
				where s4.sid=sm.sid and s4.sname='$id' and apt.sid=sm.smid and ap.aid=apt.aid";
				echo '<div id="HTMLtoPDF">';
					
				echo'<div class="table-responsive table-no-card m-b-30"><table class="table table-borderless table-striped table-earning"> <br>';
				echo '<tr>
						<th>Service id</th>
						<th>Service name</th>
						<th>Owner name</th>			
					</tr>';
					$res=(mysqli_query($con,$sql));
					$res1=(mysqli_query($con,$sql));
					$row=mysqli_fetch_array($res);
						echo "<tr><td>".$row['sid']."</td>";
						echo "<td>".$row['sname']."</td>";
					while($row1=mysqli_fetch_array($res1))
					{
						echo "<td>".$row1['ow_name']."</td>";
					}
					echo "</tr>";
					echo'</table> </div>';
					echo '</div>';
					echo '<button class="btn btn-warning"><a href="#" onclick="HTMLtoPDF()">Download PDF</a></button>';
}

?>