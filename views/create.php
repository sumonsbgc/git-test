<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="columnOne">
				<table>
					<form action="store.php" method="post" enctype="multipart/form-data">
						<tr>
							<td><input type="text" id="fname" name="fname" placeholder="Your First Name"></td>
						</tr>
						<tr>
							<td>
								<input type="text" id="lname" name="lname" placeholder="Your Last Name">
							</td>
						</tr>
						<tr>
							<td>
								<input type="email" id="email" name="email" placeholder="Your Email">
							</td>
						</tr>
						<tr>
							<td>
								<input type="date" id="bdate" name="bdate" placeholder="Your Birth Date">
							</td>
						</tr>
						<tr>
							<td>
								<textarea  name="address" id="address" cols="40" rows="3" placeholder="Your Address" style="resize: none; overflow: hidden;">
								</textarea>
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" value="Submit" name="submit" id="submit">
							</td>
 						</tr>
					</form>
				</table>
			</div>
		</div>
	</div>
</body>
</html>