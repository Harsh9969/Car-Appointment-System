<?php
include "db.php";
if($_POST['StateName'])
{
$id=$_POST['StateName'];
//$sql="select * from appointment where ow_name='$id'";
$sql="SELECT ap.aid,s4.sname,ap.ow_name FROM service_master sm , image_s4 s4, appoinment_type ap1,appointment ap
				where sm.smid=ap1.sid and s4.sid=sm.sid and ap.ow_name='$id' and ap.aid=ap1.aid";
				echo '<div id="HTMLtoPDF">';
				echo'<div class="table-responsive table-no-card m-b-30"><table class="table table-borderless table-striped table-earning"> <br>';
				echo '<tr>
									<th>Apponitment id</th>
									<th>Ownername</th>
									<th>Service name</th>
								</tr>
								';
					$res=(mysqli_query($con,$sql));
					$res1=(mysqli_query($con,$sql));
					$row=mysqli_fetch_array($res);
									
						echo"<tr><td>".$row['aid']."</td>";
						echo"<td>".$row['ow_name']."</td>";
					while($row1=mysqli_fetch_array($res1))
					{
						
						echo "<td>".$row1['sname']."</td>";
								
					}
					echo "</tr>";
					echo'</table> </div>';
					echo '</div>';
					echo '<button class="btn btn-warning"><a href="#" onclick="HTMLtoPDF()">Download PDF</a></button>	';
}

?>