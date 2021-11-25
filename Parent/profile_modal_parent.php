<script type="text/javascript">
  function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
</script>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true" >x</button>
		<h3 id="myModalLabel" style="font-family: all;"><b> <?php echo Htmlspecialchars($lang['Change_Profileadmin']); ?>  </b></h3>
	</div>
		<div class="modal-body">
					<form method="post" action="parent_avatar.php" enctype="multipart/form-data">
							<center>	
								<div class="control-group">
								<div class="controls">
									<input name="image" class="input-file uniform_on" id="file" 
									type="file" required onchange="return fileValidation()">
								</div>
								</div>
							</center>			
					
		                   </div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> <?php echo Htmlspecialchars($lang['Closeadmin']); ?></button>
						<button class="btn btn-info" name="change"><i class="icon-save icon-large"></i> <?php echo Htmlspecialchars($lang['savaadmin']); ?></button>
					</div>
					</form>
</div>
<!-- end  Modal -->