<?php 
if(!isset($_SESSION['admin_email'])){
    echo "<script> window.open('login.php','_self')</script>";
} else{


?>  

<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / View_Payments
				
			</li>
		</ol>
	</div>
</div>



<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
				<i class="fa fa-tags"></i> View Payments
				</h3>
			</div>

			<div class="panel-body" >
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th> Payment ID :</th>
								<th> Invoice No :</th>
								<th> Amount :</th>
								<th>  Payment_mode :</th>
                                <th>  Referance no  :</th>
                                <th>  Code :</th>
								<th> Payment Date :</th>
                                <th> Delete Payment :</th>
							</tr>
						</thead>

						<tbody>
							<?php 
								$i=0;
							  $get_payments=" select * from Payments ";
							  $run_payments=mysqli_query($con,$get_payments);
							  while ($row_payments=mysqli_fetch_array($run_payments)) {

							  	$payment_id=$row_payments['payment_id'];
							  	$invoice_no=$row_payments['invoice_no'];
							    $amount=$row_payments['amount'];
							    $payment_mode=$row_payments['payment_mode'];
							    $code=$row_payments['code'];
							    $payment_date=$row_payments['payment_date'];
							    $ref=$row_payments['ref_no'];
							  
                               $i++ ;

							?>

							<tr>
								<td> <?php echo $payment_id ; ?></td>
								<td> <?php  echo $invoice_no ; ?></td>
								<td> <?php echo $amount ; ?></td>
								<td> <?php echo $payment_mode; ?></td>
								<td> <?php echo $ref ; ?></td>
								<td> <?php echo  $code; ?></td>
                                <td> <?php  echo $payment_date;  ?></td>
                              
                              
								<td> <a href="index.php?delete_payment=<?php echo $payment_id; ?>">
									<i class="fa fa-trash-o"></i> Delete
								</a>
								</td>
								
							</tr>

							<?php   
							  }
 							?>

						</tbody>
						
					</table>
				</div>
			</div>
		</div>
	</div>
</div>














<?php } ?>