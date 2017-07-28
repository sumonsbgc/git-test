<?php
include_once('../vendor/autoload.php');
use App\Model\Model;

if ( 'GET' == $_SERVER['REQUEST_METHOD']){
    if ( !empty($_GET['id'] )){
        $id = $_GET['id'];
        $model = new Model();
        $data = $model->select($id);
    }
}

?>
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
					<form action="update.php" method="post" enctype="multipart/form-data">
                        <tr>
                            <td><input type="hidden" id="id" name="id" value="<?php echo $data->id; ?>"></td>
                        </tr>
						<tr>
							<td><input type="text" id="fname" name="fname" value="<?php echo $data->fname; ?>"></td>
						</tr>
						<tr>
							<td>
								<input type="text" id="" name="lname" value="<?php echo $data->lname; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<input type="email" id="email" name="email" value="<?php echo $data->email; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<input type="date" id="bdate" name="bdate" value="<?php echo $data->bdate; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<textarea  name="address" id="address" cols="40" rows="3" style="resize: none; overflow: hidden;">
                                    <?php echo $data->address; ?>
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