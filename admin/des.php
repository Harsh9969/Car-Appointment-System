<div class="modal center-modal fade" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title">Add Iteams</h2>
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
						</button>
				</div>
				<div class="modal-body">
					<div class="p-30 content-bottom rounded box-shadowed">
						
							<?php 
								include "db.php";
										$sql="select * from service_detail";
											$res=mysqli_query($con,$sql);
											
											while($row=mysqli_fetch_array($res))
												
											{
												echo "<tr>";
												$scode=$row[0];
												echo "<td>".$row["description"]."</td>";
												echo "</tr>";
											}
							?>
					</div>		
				</div>
			</div>					
		</div>
	</div>
  
			
			