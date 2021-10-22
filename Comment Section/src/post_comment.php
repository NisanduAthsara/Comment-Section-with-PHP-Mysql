<?php

	if(isset($_POST['submitbtn'])){
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		$comment = mysqli_real_escape_string($conn,$_POST['comment']);

		$sql = "INSERT INTO final_comments(name,comments) VALUES('$name','$comment')";

		$res = mysqli_query($conn,$sql);

		if(!$res){
			?>
				<script type="text/javascript">
					alert("Oops! Can't post your comment!");
				</script>
			<?php
			exit;
		}
		else{
			?>
			<script type="text/javascript">
				window.location.onload();
				exit();
			</script>
			<?php
			exit;
		}
	}


?>