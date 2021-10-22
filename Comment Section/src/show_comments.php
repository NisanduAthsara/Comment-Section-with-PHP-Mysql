<?php

	$sql = "SELECT * FROM final_comments";

	$result =  mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0){
		echo "<div class='show_comment_section'>";
		while($row = mysqli_fetch_assoc($result)){
			echo "<div class='comment_name'>".$row['name']."</div>";
			echo "<div class='comment_comment'>".$row['comments']."</div>";
		}
		echo "</div>";
	}
?>