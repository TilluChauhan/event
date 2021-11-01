<?php
		if($user_id==null){
		?>
			<div class="modal" id="myModal">
			  <div class="modal-dialog   modal-dialog-centered">
				<div class="modal-content">

				  <!-- Modal Header -->
				  <div class="modal-header">
					<h4 class="modal-title">Booking detail</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				  </div>

				  <!-- Modal body -->
				  <div class="modal-body">
				  Please login 
						</div>

				  <!-- Modal footer -->
				  <div class="modal-footer">
				   <a type="button" id="mop" href="login.php" class="btn btn-danger hj567">Login</a>
				  </div>
						
				</div>
			  </div>
			</div>
	<?php
											}else{
												?>
					<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog   modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Booking detail</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body ">
        <div class="row">
			<div class="col-lg-12">
				<div class="uio">
					<div class="uio1"><p class="uio3"><?php echo $catch['event_name'];?></p>
						<p class="uio4">1 Ticket</p>
					</div>
					<div class="uio2"><p><?php echo $catch['price']?></p></div>
				</div>
			</div>
		</div>
		 <div class="row">
			<div class="col-lg-12">
				<div class="asd">
					<?php $sdate= new Datetime($catch['start_date'])?>
									<?php $edate= new Datetime($catch['end_date'])?>
					<p class="asd1"><?php echo $sdate->format('d M Y');?> To <?php echo $edate->format('d M Y');?></p>
					<p class="asd3"> Venue</p>
					<p class="asd2"><?php echo $catch['location']?></p>
				</div>
			</div>
		</div>
		 <div class="row">
			<div class="col-lg-12">
				<div class="asd5">
					<p class="asd6" >Entry Pass(<?php echo $catch['price']?> ):
					<select name="Ticket" id="cars" >
						<option id="val" value="">Select Ticket</option>
						<option id="va2" value="1">1 Ticket</option>
						<option  id="va3" value="2">2 ticket</option>
						<option id="va4" value="3">3 ticket</option>
						<option id="va5" value="4">4 ticket</option>
					  </select></p>
					  <div class="safs" id="sdg"></div>
				</div>
			</div>
		</div>
		        <div class="row">
					<div class="col-lg-12">
						<div class="fd">
							<div class="fd1">
								Event Price
							</div>
							<div class="fd2" id="event_price">
							
							</div>
					
						</div>
						<div class="fd">
							<div class="fd1">
								
								<p>Integrated GST (IGST)@18%</p>
							</div>
							<div class="fd2" id="gst">
								
								<p></p>
							</div>
						</div>
					
					</div>
				</div>
				 <div class="row">
			<div class="col-lg-12">
				<div class="fd">
							<div class="fd1">
								Total Amount
							</div>
							<div class="fd2" id="total">
								
							</div>
						</div>
			</div>
		</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <button type="button" id="mop"  class="btn btn-danger hj567">Buy</button>
      </div>

    </div>
  </div>
</div>									
												
													<?php
											}
										
										?>