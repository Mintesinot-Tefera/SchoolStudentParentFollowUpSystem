 <?php
 include('dbcon.php');
 include('session.php');
 
 
                            if (isset($_POST['change'])) {
                               

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], $_FILES["image"]["name"]);
                                $location = $_FILES["image"]["name"];
								
			mysqli_query($link,"update  users set location = '$location' where user_id  = '$session_id' ")or die(mysqli_error());
								
								?>
 
								<script>
								window.location = "home.php";  
								</script>

                       <?php     }  ?>