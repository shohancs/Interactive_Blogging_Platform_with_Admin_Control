	<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
			
	<footer class="page-footer">
				<p class="mb-0">Copyright © 2025. All right reserved.</p>
			</footer>
		</div>
		<!--end wrapper-->
		
		<!-- Bootstrap JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<!--plugins-->
		<script src="assets/js/jquery.min.js"></script>			
		<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
		<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
		<script src="assets/plugins/chartjs/chart.min.js"></script>
		<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
		<script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
		<script src="assets/plugins/jquery-knob/excanvas.js"></script>
		<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
		<script type="text/javaScript">
			$(document).ready(function() {
				$('#example').DataTable();
			  } );
		</script>
		
		  <script>
			  $(function() {
				  $(".knob").knob();
			  });
		  </script>
		  <script src="assets/js/index.js"></script>
		<!--app JS-->
		<script src="assets/js/app.js"></script>

		<!-- ########## START: CK EDITOR ########## -->
		<script>
            CKEDITOR.replace( 'editor1' );
        </script>
		<!-- ########## END: CK EDITOR ########## -->
	</body>
	<?php 
			ob_end_flush();
		?>
</html>