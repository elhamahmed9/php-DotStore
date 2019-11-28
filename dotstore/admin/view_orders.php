<?php 
if(!isset($_SESSION['admin_email'])){
    echo "<script> window.open('login.php','_self')</script>";
} else{


?>  

<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / View_Orders
				
			</li>
		</ol>
	</div>
</div>



<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
				<i class="fa fa-tags"></i> View Orders
				</h3>
			</div>

			<div class="panel-body" >
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th> Order ID :</th>
								<th> Customer E-Mail :</th>
								<th> Invoice No :</th>
								<th> Product Name :</th>
								<th>  Product QTY :</th>
                               
                                <th>  Order Date :</th>
								<th> Total Amount :</th>
                                <th> Status :</th>
                                <th> Delete :</th>
							</tr>
						</thead>

						<tbody>
							<?php 
								$i=0;
							  $get_orders=" select * from pending_orders ";
							  $run_orders=mysqli_query($con,$get_orders);
							  while ($row_order=mysqli_fetch_array($run_orders)) {

							  	$order_id=$row_order['order_id'];
							  	$customer_id=$row_order['customer_id'];
							  	$invoice_no=$row_order['invoice_no'];
							  	$product_id=$row_order['product_id'];
							  	$qty=$row_order['qty'];
                               
                                $status=$row_order['order_status'];

                            $get_products=" select * from products where product_id='$product_id'"; 
                            $run_products=mysqli_query($con,$get_products);
                            $row_products=mysqli_fetch_array($run_products);
                            $product_title=$row_products['product_title'];

                            $get_customers=" select * from customers where customer_id='$customer_id'"; 
                            $run_customers=mysqli_query($con,$get_customers);
                            $row_customers=mysqli_fetch_array($run_customers);
                            $customer_email=$row_customers['customer_email'];  

                            $get_customer_order=" select * from customer_orders where customer_id='$customer_id'"; 
                            $run_customer_order=mysqli_query($con,$get_customer_order);
                            $row_customer_order=mysqli_fetch_array($run_customer_order);
                            $order_date=$row_customer_order['order_date']; 
                            $total_amount=$row_customer_order['due_amount']; 

                               $i++ ;

							
							?>

							<tr>
								<td> <?php echo $order_id ; ?></td>
								<td> <?php  echo $customer_email ; ?></td>
								<td><?php echo 	$invoice_no; ?> </td>
								<td> <?php echo $product_title ; ?></td>
								<td> <?php echo $qty; ?></td>
								
                                <td> <?php  echo $order_date;  ?></td>
                                <td><?php echo  $total_amount ; ?> </td>
                                <td><?php echo $status ; ?> </td>
                                
                              
								<td> <a href="index.php?delete_order=<?php echo $order_id; ?>">
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