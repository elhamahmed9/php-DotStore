<?php 
if(!isset($_SESSION['admin_email'])){
    echo "<script> window.open('login.php','_self')</script>";
} else{


?>


<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Insert Product Category
			</li>
		</ol>
	</div>
</div>

 <div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">

					<i class="fa fa-money fa-fw"></i> Insert Product Category
					
				</h3>
			</div>

			<div class="panel-body">
				<form action="" class="form-horizontal" method="post">
					<div class="form-group">
						<label class="col-md-3 control-label ">
							Product Category Title
							
						</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="p_cat_title">
							
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">
							Product Category Description
							
						</label>
						<div class="col-md-6">
							<textarea type="text" name="p_cat_desc" class="form-control" cols="30" rows="16"></textarea>
							
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-md-3">
						
							
						</label>
						<div class="col-md-6">
							<input type="submit" name="submit" value="Submit" class="form-control btn btn-primary">
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 
if (isset($_POST['submit'])) {
	$p_category_title=$_POST['p_cat_title'];
	$p_category_desc=$_POST['p_cat_desc'];

	$insert_p_cat=" insert into product_categories ( p_cat_title , p_cat_desc ) values ( '$p_category_title' , '$p_category_desc')";
	$run_p_cat=mysqli_query($con,$insert_p_cat);


	if ($run_p_cat) {
		echo "<script>alert('your new product Category has been inserted ') </script>";
		echo "<script>window.open('index.php?view_p_cats','_self') </script>";
	}
	
} 

?>

<?php } ?>