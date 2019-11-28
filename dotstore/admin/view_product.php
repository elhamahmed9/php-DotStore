<?php 
if(!isset($_SESSION['admin_email'])){
    echo "<script> window.open('login.php','_self')</script>";
} else{


?>  

<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / View_products
				
			</li>
		</ol>
	</div>
</div>



<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
				<i class="fa fa-tags"></i> View Products
				</h3>
			</div>

			<div class="panel-body" >
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th> product ID :</th>
								<th> product title :</th>
								<th> product Image :</th>
								<th> product Price :</th>
								<th> product sold :</th>
								<th> product Keywords :</th>
								<th> product Date :</th>
								<th> product Delete :</th>
								<th> product Edit :</th>
							</tr>
						</thead>

						<tbody>
							<?php 
								$i=0;
							  $get_pro=" select * from products ";
							  $run_pro=mysqli_query($con,$get_pro);
							  while ($row_pro=mysqli_fetch_array($run_pro)) {

							  	$pro_id=$row_pro['product_id'];
							  	$pro_title=$row_pro['product_title'];
							  	$pro_img1=$row_pro['product_img1'];
							  	$pro_price=$row_pro['product_price'];
							  	$pro_keywords=$row_pro['product_keywords'];
							  	$pro_date=$row_pro['date'];
							   $i++ ;

							
							?>

							<tr>
								<td> <?php echo $pro_id ; ?></td>
								<td> <?php  echo $pro_title ; ?></td>
								<td><img src="product_img/<?php echo $pro_img1 ; ?> " width=60px; height=60px;> </td>
								<td> $<?php echo $pro_price ; ?></td>
								<td> <?php
								$get_sold="select * from pending_orders where product_id='$pro_id'";

								$sold_pro=mysqli_query($con,$get_sold);

								$count=mysqli_num_rows($sold_pro);

								echo $count ;


								 ?></td>
								<td> <?php echo $pro_keywords; ?></td>
								<td> <?php  echo $pro_date;  ?></td>
								<td> <a href="index.php?delete_product=<?php echo $pro_id; ?>">
									<i class="fa fa-trash-o"></i> Delete
								</a>
								</td>
								<td>
								<a href="index.php?edit_product=<?php echo $pro_id; ?>">
									<i class="fa fa-pencil"></i> Edit
								</a>
								 <?php ?></td>
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