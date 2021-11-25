					<!-- user delete modal -->
					<div id="user_delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel"> <?php echo Htmlspecialchars($lang['Delete_Users']); ?> ?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger"> 
					<p>Are you sure you want to delete the user you check?.</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i><?php echo Htmlspecialchars($lang['Close']); ?> </button>
					<button name="delete_user" class="btn btn-danger"><i class="icon-check icon-large"></i><?php echo Htmlspecialchars($lang['Yes']); ?> </button>
					</div>
					</div>
					
					<!-- department delete modal -->
					<div id="department_delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel"> <?php echo Htmlspecialchars($lang['Delete_Department']); ?> ?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger">
					<p>Are you sure you want to delete the department you check?.</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> <?php echo Htmlspecialchars($lang['Close']); ?></button>
					<button name="delete_department" class="btn btn-danger"><i class="icon-check icon-large"></i> <?php echo Htmlspecialchars($lang['Yes']); ?></button>
					</div>
					</div>
					
								<!-- class delete modal -->
					<div id="class_delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel"> <?php echo Htmlspecialchars($lang['Delete_Class']); ?> ?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger">
					<p>Are you sure you want to delete the class you check?.</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> <?php echo Htmlspecialchars($lang['Close']); ?></button>
					<button name="delete_class" class="btn btn-danger"><i class="icon-check icon-large"></i>  <?php echo Htmlspecialchars($lang['Yes']); ?></button>
					</div>
					</div>
					
											<!-- student delete modal -->
					<div id="student_delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel"><?php echo Htmlspecialchars($lang['Delete_Student']); ?>?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger">
					<p>Are you sure you want to delete the student you check?.</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> <?php echo Htmlspecialchars($lang['Close']); ?></button>
					<button name="delete_student" class="btn btn-danger"><i class="icon-check icon-large"></i>  <?php echo Htmlspecialchars($lang['Yes']); ?></button>
					</div>
					</div>
					
					
											<!-- student delete modal -->
					<div id="teacher_delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel"><?php echo Htmlspecialchars($lang['Delete_Teacher']); ?> ?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger">
					<p>Are you sure you want to delete the comment you check?.</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> <?php echo Htmlspecialchars($lang['Close']); ?></button>
					<button name="delete_comment" class="btn btn-danger"><i class="icon-check icon-large"></i>  <?php echo Htmlspecialchars($lang['Yes']); ?></button>
					</div>
					</div>
					
					
					                 	<!-- Content delete modal -->
					<div id="content_delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel"><?php echo Htmlspecialchars($lang['Delete_Content']); ?> ?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger">
					<p>Are you sure you want to delete the Content you check?.</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> <?php echo Htmlspecialchars($lang['Close']); ?></button>
					<button name="delete_content" class="btn btn-danger"><i class="icon-check icon-large"></i>  <?php echo Htmlspecialchars($lang['Yes']); ?></button>
					</div>
					</div>
					
					
					
					<!-- Content delete modal -->
					<div id="subject_delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel"><?php echo Htmlspecialchars($lang['Delete_Subject']); ?> ?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger">
					<p>Are you sure you want to delete the subject you check?.</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> <?php echo Htmlspecialchars($lang['Close']); ?></button>
					<button name="delete_subject" class="btn btn-danger"><i class="icon-check icon-large"></i>  <?php echo Htmlspecialchars($lang['Yes']); ?></button>
					</div>
					</div>