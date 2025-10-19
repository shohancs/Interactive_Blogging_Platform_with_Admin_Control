<?php 
	include "inc/header.php";
?>

	<div role="main" class="main">
		<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
			<div class="container">
				<div class="row">

					<div class="col-md-12 align-self-center p-static order-2 text-center">

						<h1 class="text-dark font-weight-bold text-8">User All Blog</h1>
						<span class="sub-title text-dark">Check out our Latest News!</span>
					</div>

					<div class="col-md-12 align-self-center order-1">

						<ul class="breadcrumb d-block text-center">
							<li><a href="index.php">Home</a></li>
							<li class="active">Update</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- ########## START: MAIN BODY ########## -->
						<div class="card">
							<div class="card-body" style="box-shadow: 1px 10px 15px #ccc; border-top: 4px solid #08c;; border-radius: 5px; color: #000; background: #F7F7F7; font-size: 16px;">


									<form action="" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-lg-4">
											<div class="form-group">
												<label for="">Post Title</label>
												<input type="text" name="title" class="form-control" required autocomplete="off" autofocus placeholder="full name..">
											</div>

											<div class="form-group">
												<label for="">Meta Tags [ Use Comma (,) For Each Tag ]</label>
												<input type="text" name="tags" class="form-control" required autocomplete="off" autofocus placeholder="meta tag..">
											</div>

											<div class="form-group">
												<label for="">Category Name [ Must Select ]</label>
												<select class="form-control" name="cate_id">
												  <option value="">Please Select the Category</option>
												  <?php  
												  	$sql = "SELECT * FROM category WHERE is_parent=0 AND status=1";
												  	$read = mysqli_query($db, $sql);

												  	while ($row = mysqli_fetch_assoc($read)) {
												  		$pcat_id 	= $row['cat_id'];
												  		$pcat_name 	= $row['cat_name'];
												  		?>
														<option value="<?php echo $pcat_id; ?>"><?php echo $pcat_name; ?></option>
												  		<?php
												  		// for sub Category
												  		$sub_sql = "SELECT * FROM category WHERE is_parent=$pcat_id AND status=1";
													  	$read_sub = mysqli_query($db, $sub_sql);

													  	while ($row = mysqli_fetch_assoc($read_sub)){
													  		$ccat_id 	= $row['cat_id'];
												  			$ccat_name 	= $row['cat_name'];
												  			?>
												  			<option value="<?php echo $ccat_id; ?>"><?php echo " -- " . $ccat_name; ?></option>
												  			<?php 
													  	}
												  	}
												  ?>
												  
												</select>
											</div>	

											<div class="form-group">
												<label for="">Image</label>
												<input type="file" name="image" class="form-control-file" >
											</div>
										</div>

										<div class="col-lg-8">
											
											<div class="form-group">
												<label for="">Description</label>
												<textarea name="post_desc" class="form-control"  autocomplete="off" autofocus id="editor1" placeholder="category description.."></textarea>
											</div>											

											<div class="form-group">
												<div class="d-grid gap-2">
													<input type="submit" name="addPost" class="btn btn-primary btn-lg btn-block" value="Add New Post">
												</div>
											</div>
										</div>
									</div>
								</form>

								<?php  
									if (isset($_POST['addPost'])) {
										$title 		= mysqli_real_escape_string($db, $_POST['title']);
										$cate_id 	= mysqli_real_escape_string($db, $_POST['cate_id']);
										$author_id 	= $_SESSION['user_id'];
										$tags 		= mysqli_real_escape_string($db, $_POST['tags']);
										$status 	= mysqli_real_escape_string($db, $_POST['status']);
										$post_desc 	= mysqli_real_escape_string($db, $_POST['post_desc']);

										$image 		= $_FILES['image']['name'];
										$temp_image = $_FILES['image']['tmp_name'];

										if (!empty($image)) {
											$img = rand(0, 9999999) . "-" . $image;
											move_uploaded_file($temp_image, 'admin/assets/images/posts/' . $img);

											$postAdd_sql = "INSERT INTO post (title, post_desc, image, category_id, author_id, tags, status, post_date) VALUES ('$title', '$post_desc','$img', '$cate_id', '$author_id', '$tags', 3, now() ) ";
											$postAdd_query = mysqli_query($db, $postAdd_sql);

											if ($postAdd_query) {
												header("Location: userpost.php");
											}
											else {
												die("mysqli Error!" . mysqli_error($db));
											}
										}
										else {
											$img = '';
										}

										
									}
								?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>




	</div>

<?php 
	include "inc/footer.php";
?>