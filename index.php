<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8" />

	<title>SimpleBB</title>
	
	<link rel="stylesheet" href="style.css" />

</head>
<body>

	<div id="header">
	
		SimpleBB
	
	</div>

	<table id="table_style">
	
		<div id="area">
	
		Welcome, <strong>Andreas</strong>
		
		<div style="float: right;"><strong>Inbox (0) - User CP - Admin CP - Logout</strong></div>
	
		</div>
	
		<?php
		
			$category = mysql_query("SELECT * FROM `category` ORDER BY `id` ASC");
			
			while( $crow = mysql_fetch_array($category) ) {
			
				echo '<tr id="table_top">
						<td id="table_category">'.$crow['name'].'</td>
					</tr>';
					
					?>
					
					<tr id="table_top">
			<td id="table_text">Forum</td>
		</tr>
		
			<?php
			
			$forum = mysql_query("SELECT * FROM `forum` WHERE `category_id` = '{$crow['id']}' ORDER BY `id` ASC");
			
			while( $cfor = mysql_fetch_array($forum) ) {
			
				echo '<tr><td id="table_text">
			
				<a href="forum.php?for='.$cfor['id'].'">'.$cfor['name'].'</a><br />
				'.$cfor['description'].'
			
			</td></tr>';
		
			}
			

			}
		
		?>
	</table>

</body>
</html>