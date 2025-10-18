<?php include"inc/header.php"; ?>

	<div class="page-wrapper">
		<div class="page-content">

			<div class="row row-cols-1 row-cols-md-12 row-cols-xl-12">

				<?php  
					$do = isset($_GET['do']) ? $_GET['do'] : "Pending";

					if ( $do == "Pending" ) { ?>
						<!-- Top Icon -->
						<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
							<div class="breadcrumb-title pe-3">Tables</div>
							<div class="ps-3">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Data Table</li>
									</ol>
								</nav>
							</div>					
						</div>
						<!-- Top Icon -->

						<h6 class="mb-3 text-uppercase">DataTable Example</h6><hr>

						<!-- ########## START: MAIN BODY ########## -->
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-hover table-bordered" style="width:100%">
										<thead class="table-dark">
											<tr>
												<th>Sl.</th>
												<th>Image</th>
												<th>Title</th>
												<th>Category</th>
												<th>Author</th>
												<th>Meta Tags</th>
												<th>Status</th>
												<th>Post Date</th>
												<th>Action</th>
											</tr>
										</thead>

										<tbody>
											<?php  
												$readPost_sql = "SELECT * FROM post WHERE status=3 ORDER BY post_id DESC";
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
																		echo '<img src="assets/images/posts/' . $image . '" style="width: 40px;">';
																	}
																	else {
																		echo '<img src="assets/images/posts/default.png" style="width: 40px; ">';
																	}
																?>
															  </td>
															  <td><?php echo substr($title, 0, 50) ?>...</td>
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
																			<span class="badge text-bg-success">Active</span>
																		<?php }
																		else if ($status == 0) { ?>
																			<span class="badge text-bg-danger">InActive</span>
																		<?php }
																		else if ($status == 3) { ?>
																			<span class="badge text-bg-info">Pending</span>
																		<?php }
																	?>
														      </td>
														      <td><?php echo $post_date; ?></td>
														      <td>
																	<div class="action-btn">
																	  <ul>
																	    <li>
																	      <a href="pendingPost.php?do=Edit&u_id=<?php echo $post_id; ?>"><i class="fa-regular fa-pen-to-square edit"></i></a>
																	    </li>
																	    <li>
																	      <a href="" data-bs-toggle="modal" data-bs-target="#postDel<?php echo $post_id; ?>"><i class="fa-regular fa-trash-can trush"></i></a>
																	    </li>
																	  </ul>
																	</div>

																	<!-- Modal Start -->
																	<!-- ########## START: MODAL PART ########## -->
										                        <div class="modal fade" id="postDel<?php echo $post_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										                          <div class="modal-dialog">
										                            <div class="modal-content">

										                              <div class="modal-header">
										                                <h1 class="modal-title fs-5" id="exampleModalLabel">Do You Sure?? To Move <i class="fa-regular fa-face-frown"></i><br> <span style="color: green;"><?php echo $title; ?></span> Trash folder!!</h1>

										                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										                              </div>

										                              <div class="modal-body">
										                                <div class="modal-btn">
										                                  <a href="pendingPost.php?do=Delete&delPostId=<?php echo $post_id; ?>" class="btn btn-danger me-3">Trash</a>
										                                  <a href="" class="btn btn-success" data-bs-dismiss="modal">Cancel</a>     
										                                </div>
										                              </div>

										                            </div>
										                          </div>
										                        </div>
										                        <!-- ########## END: MODAL PART ########## -->
																	<!-- Modal End -->
																</td>
														    </tr>
															<?php
													}
												}
												

											?>										    
										</tbody>
									</table>
							</div>
						</div>				
						<!-- ########## END: MAIN BODY ########## -->
					<?php }

					else  if ( $do == "Edit" ) {
						if (isset($_GET['u_id'])) {
							$up_id =  $_GET['u_id'];
							$up_idSql = "SELECT * FROM post WHERE post_id='$up_id'";
							$up_idQuery = mysqli_query($db, $up_idSql);

							while ($row = mysqli_fetch_assoc($up_idQuery)) {
								$post_id 		= $row['post_id'];
								$category_id 	= $row['category_id'];
								$author_id 		= $row['author_id'];
								$status 		= $row['status'];
								$post_date 		= $row['post_date'];
								$title 			= $row['title'];
								$tags 			= $row['tags'];
								$post_desc 		= $row['post_desc'];
								?>
								<!-- Top Icon -->
						<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
							<div class="breadcrumb-title pe-3">Tables</div>
							<div class="ps-3">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="post.php?do=Manage"><i class="bx bx-home-alt"></i></a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Data Table</li>
									</ol>
								</nav>
							</div>					
						</div>
						<!-- Top Icon -->

						<h6 class="mb-3 text-uppercase">Update Post Information</h6><hr>

						<!-- ########## START: MAIN BODY ########## -->
						<div class="card">
							<div class="card-body">
								<form action="post.php?do=Update" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-lg-4">

											<div class="mb-3">
												<label for="">Category Name</label>
												<select class="form-select" name="cate_id">
												  <option value="">Please Select the Category</option>
												  <?php  
												  	$sql = "SELECT * FROM category WHERE is_parent=0 AND status=1";
												  	$read = mysqli_query($db, $sql);

													while ($row = mysqli_fetch_assoc($read)) {
														$pcat_id 	= $row['cat_id'];
														$pcat_name 	= $row['cat_name'];
														?>
														<option value="<?php echo $pcat_id; ?>"
															<?php if ( $category_id == $pcat_id ){ echo 'selected'; } ?>
														><?php echo $pcat_name; ?></option>
														<?php
														// for sub Category
														$sub_sql = "SELECT * FROM category WHERE is_parent=$pcat_id AND status=1";
													  	$read_sub = mysqli_query($db, $sub_sql);

													  	while ($row = mysqli_fetch_assoc($read_sub)){
													  		$ccat_id 	= $row['cat_id'];
															$ccat_name 	= $row['cat_name'];
																?>
															<option value="<?php echo $ccat_id; ?>"
																<?php if ( $category_id == $ccat_id ){ echo 'selected'; } ?>
															><?php echo " -- " . $ccat_name; ?></option>
																<?php 
													  	}
													}
												  ?>
												  
												</select>
											</div>											

											<div class="mb-3">
												<label for="">Status</label>
												<select class="form-select" name="status" aria-label="">
												  <option value="3">Please Select the User Status</option>
												  <option value="1" <?php if($status == 1){echo "selected";} ?>>Active</option>
												  <option value="3" <?php if($status == 3){echo "selected";} ?>>Pending</option>
												  <option value="0" <?php if($status == 0){echo "selected";} ?>>InActive</option>
												</select>
											</div>

											<div class="mb-3">
												<div class="d-grid gap-2">
													<input type="hidden" name="postId" value="<?php echo $post_id; ?>">
													<input type="hidden" name="title" value="<?php echo $title; ?>">
													<input type="hidden" name="tags" value="<?php echo $tags; ?>">
													<input type="hidden" name="post_desc" value="<?php echo $post_desc; ?>">
													<input type="submit" name="updatePost" class="btn btn-primary" value="Save Changes">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>				
						<!-- ########## END: MAIN BODY ########## -->
							<?php }
						}
					}

					else if ( $do == "Update" ) {
						if (isset($_GET['user_id'])) {
							if (isset($_POST['updatePost'])) {
							$postId 	= mysqli_real_escape_string($db, $_POST['postId']);
							$title 		= mysqli_real_escape_string($db, $_POST['title']);
							$cate_id 	= mysqli_real_escape_string($db, $_POST['cate_id']);
							$author_id 	= mysqli_real_escape_string($db, $_POST['author_id']);;
							$tags 		= mysqli_real_escape_string($db, $_POST['tags']);
							$status 	= mysqli_real_escape_string($db, $_POST['status']);
							$post_desc 	= mysqli_real_escape_string($db, $_POST['post_desc']);

							$postupdate_sql = "UPDATE post SET title='$title', tags='$tags', post_desc='$post_desc', category_id='$cate_id', author_id='', status='$status' WHERE post_id='$postId' ";
								$postUpdate_query = mysqli_query($db, $postupdate_sql);

								if ($postUpdate_query) {
									header("Location: pendingPost.php?do=Pending");
								}
								else {
									die("mysqli Error!" . mysqli_error($db));
								}
						}
						}
						
					}

					else if ( $do == "Delete" ) {
						if (isset($_GET['delPostId'])) {
							$deletePostData = $_GET['delPostId'];
							$delete_Sql = "DELETE FROM post WHERE post_id='$deletePostData'";
							$delete_query = mysqli_query($db, $delete_Sql);

							if ($delete_query) {
								header("Location: pendingPost.php?do=Pending");
							}
							else {
								die("mysqli Error!" . mysqli_error($db));
							}
						}
					}

					else { ?>
						<div class="alert alert-info" role="alert">
						  404 Page Not Found. Sorry!! You are trying to wrong access.
						</div>
					<?php }
				?>

			</div>
		</div>
	</div>
	<!--end page wrapper -->
		
<?php include"inc/footer.php"; ?>	