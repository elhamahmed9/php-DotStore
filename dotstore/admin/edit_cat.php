<?php 
if(!isset($_SESSION['admin_email'])){
    echo "<script> window.open('login.php','_self')</script>";
} else{


?>

<?php 
if (isset($_GET['edit_cat'])) {
	$edit_cat_id=$_GET['edit_cat'];
	$edit_cat_query="select * from categories where cat_id='$edit_cat_id'";
	$run_edit_cat_query=mysqli_query($con,$edit_cat_query);
	$row_edit_cat=mysqli_fetch_array($run_edit_cat_query);
	$cat_id=$row_edit_cat['cat_id'];
	$cat_title=$row_edit_cat['cat_title'];
	$cat_desc=$row_edit_cat['cat_desc'];
	

}
?>


<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Edit Category
			</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">

					<i class="fa fa-pencil fa-fw"></i> Edit Category
					
				</h3>
			</div>

			<div class="panel-body">
				<form action="" class="form-horizontal" method="post">
					<div class="form-group">
						<label class="col-md-3 control-label ">
							 Category Title
							
						</label>
						<div class="col-md-6">
							<input value="<?php echo $cat_title; ?>" type="text" class="form-control" name="cat_title">
							
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">
							Product Category Description
							
						</label>
						<div class="col-md-6">
							<textarea  type="text" name="cat_desc" class="form-control" cols="30" rows="16"><?php echo $cat_desc; ?></textarea>
							
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-md-3">
						
							
						</label>
						<div class="col-md-6">
							<input type="submit" name="update" value="update" class="form-control btn btn-primary">
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 
if (isset($_POST['update'])) {
	$category_title=$_POST['cat_title'];
	$category_desc=$_POST['cat_desc'];
	$update_cat=" update categories set cat_title='$category_title', cat_desc='$category_desc' where cat_id='$cat_id' ";
	$run_update=mysqli_query($con,$update_cat);
	if($run_update){
		echo "<script>alert('your Category has been updated')</script>";
		echo "<script>window.open('index.php?view_cats','_self')</script>";
	}

} 
else{
	echo "string";
} 
?>

<?php } ?>