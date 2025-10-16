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


									<table id="example" class="table table-striped table-hover table-bordered" style="width:100%">
										<thead class="thead-dark">
											<tr>
												<th>Sl.</th>
												<th>Image</th>
												<th>Title</th>
												<th>Category</th>
												<th>Author</th>
												<th>Meta Tags</th>
												<th>Status</th>
												<th>Post Date</th>
											</tr>
										</thead>

										<tbody>
											<?php  
											if (isset($_SESSION['user_id'])) {
												$us_id = $_SESSION['user_id'];

												$readPost_sql = "SELECT * FROM post WHERE author_id='$us_id' ORDER BY post_id DESC";
												$readPost_query = mysqli_query( $db, $readPost_sql );
												$countData = mysqli_num_rows($readPost_query);

												if ($countData == 0) { ?>
													<div class="alert alert-warning text-center" role="alert">
													  Sorry! No Post Found into the Database!
													</div>
												<?php }

												else{
													$i = 0;

													while ( $row = mysqli_fetch_assoc($readPost_query) ) {
															$post_id 		= $row['post_id'];
															$title 			= $row['title'];
															$post_desc 		= $row['post_desc'];
															$image 			= $row['image'];
															$category_id 	= $row['category_id'];
															$author_id 		= $row['author_id'];
															$tags 			= $row['tags'];
															$status 		= $row['status'];
															$post_date 		= $row['post_date'];
															$i++;
															?>
															<tr>
														      <th scope="row"><?php echo $i; ?></th>	
															  <td>
																<?php 
																	if (!empty($image)) {
																		echo '<img src="admin/assets/images/posts/' . $image . '" style="width: 40px;">';
																	}
																	else {
																		echo '<img src="admin/assets/images/posts/default.png" style="width: 40px; ">';
																	}
																?>
															  </td>
															  <td><?php echo $title; ?></td>
														      <td>
														      	<?php  
														      		$readCat_Sql = "SELECT * FROM category WHERE cat_id='$category_id'";
														      		$readCat_Quary = mysqli_query($db, $readCat_Sql);

														      		while( $row = mysqli_fetch_assoc($readCat_Quary) ){
														      			$cc_id 	 = $row['cat_id'];
														      			$cc_name = $row['cat_name'];

														      			echo $cc_name;
														      		}

														      	?>
														      </td>
														      <td>
														      	<?php  
														      		$readUser_Sql = "SELECT * FROM users WHERE user_id='$author_id'";
														      		$readUser_Quary = mysqli_query($db, $readUser_Sql);

														      		while( $row = mysqli_fetch_assoc($readUser_Quary) ){
														      			$auth_id 	 = $row['user_id'];
														      			$auth_name = $row['fullname'];

														      			echo $auth_name;
														      		}

														      	?>
														      </td>
														      <td><?php echo $tags; ?></td>
														      <td>
														      	<?php  
																		if ($status == 1) { ?>
																			<span class="badge badge-success">Active</span>
																		<?php }
																		else if ($status == 0) { ?>
																			<span class="badge badge-danger">InActive</span>
																		<?php }
																		else if ($status == 3) { ?>
																			<span class="badge badge-info">Pending</span>
																		<?php }
																	?>
														      </td>
														      <td><?php echo $post_date; ?></td>
														    </tr>
															<?php
													}
												}
											}

												
												

											?>										    
										</tbody>
									</table>

									<a href="addBlogPost.php" class="btn btn-primary btn-lg btn-block">Add New Blog</a>

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