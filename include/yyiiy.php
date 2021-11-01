<?php while($qaz=mysqli_fetch_array($resultq)){
											?>
											 <button type="button" class=" bbhj dropdown-toggle" data-toggle="dropdown">
											<img src="<?php echo 'admin/image/user/'.$qaz['image']?>" style="width:30px; border-radius:80px;">	<?php echo $qaz['name']?>
											  </button>
											
											</div>
											
											<?php
										}
										?>	
											