        <script src="css/bootstrap/js/bootstrap.min.js"></script>
        <script src="css/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="css/assets/scripts.js"></script>
				<script>
				$(function() {
					// Easy pie charts
					$('.chart').easyPieChart({animate: 1000});
				});
				</script>
			<!-- data table -->
		<script src="css/vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="css/assets/DT_bootstrap.js"></script>		
			<!-- jgrowl -->
		<script src="css/vendors/jGrowl/jquery.jgrowl.js"></script>   
				<script>
				$(function() {
					$('.tooltip').tooltip();	
					$('.tooltip-left').tooltip({ placement: 'left' });	
					$('.tooltip-right').tooltip({ placement: 'right' });	
					$('.tooltip-top').tooltip({ placement: 'top' });	
					$('.tooltip-bottom').tooltip({ placement: 'bottom' });
					$('.popover-left').popover({placement: 'left', trigger: 'hover'});
					$('.popover-right').popover({placement: 'right', trigger: 'hover'});
					$('.popover-top').popover({placement: 'top', trigger: 'hover'});
					$('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});
					$('.notification').click(function() {
						var $id = $(this).attr('id');
						switch($id) {
							case 'notification-sticky':
								$.jGrowl("Stick this!", { sticky: true });
							break;
							case 'notification-header':
								$.jGrowl("A message with a header", { header: 'Important' });
							break;
							default:
								$.jGrowl("Hello users!");
							break;
						}
					});
				});
				</script>
			<link href="css/vendors/datepicker.css" rel="stylesheet" media="screen">
			<link href="css/vendors/uniform.default.css" rel="stylesheet" media="screen">
			<link href="css/vendors/chosen.min.css" rel="stylesheet" media="screen">
		<!--  -->
		<script src="css/vendors/jquery.uniform.min.js"></script>
        <script src="css/vendors/chosen.jquery.min.js"></script>
        <script src="css/vendors/bootstrap-datepicker.js"></script>
		<!--  -->
			<script src="css/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
			<script src="css/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
			<script src="css/vendors/ckeditor/ckeditor.js"></script>
			<script src="css/vendors/ckeditor/adapters/jquery.js"></script>
			<script type="text/javascript" src="css/vendors/tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
        $(function() {
            // Ckeditor standard
            $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
				{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
				[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
				{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
			]});
            $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
        });
        </script>
		<!-- <script type="text/javascript" src="admin/assets/modernizr.custom.86080.js"></script> -->
		<script src="css/assets/jquery.hoverdir.js"></script>
		<link rel="stylesheet" type="text/css" href="css/assets//style.css" />
			<script type="text/javascript">
			$(function() {
				$('#da-thumbs > li').hoverdir();
			});
			</script>
			<script src="css/vendors/fullcalendar/fullcalendar.js"></script>
			<script src="css/vendors/fullcalendar/gcal.js"></script>
			<link href="css/vendors/datepicker.css" rel="stylesheet" media="screen">
			<script src="css/vendors/bootstrap-datepicker.js"></script>
						<script>
						$(function() {
							$(".datepicker").datepicker();
							$(".uniform_on").uniform();
							$(".chzn-select").chosen();
							$('#rootwizard .finish').click(function() {
								alert('Finished!, Starting over!');
								$('#rootwizard').find("a[href*='tab1']").trigger('click');
							});
						});
						</script>