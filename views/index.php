<?php
    include_once('../vendor/autoload.php');
    use App\Model\Model;
    $model = new Model();
    $data = $model->selectAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List of all</title>
	<link rel="stylesheet" href="style.css">
    <style>
        td,th{
            color: #fff;
            border-right: 1px solid #ddd;
        }
        thead tr:only-child{
            background-color: #000;
        }
        tr:nth-child(odd){
            background-color: #00a6b2;
        }
        tr:nth-child(even){
            background-color: #0b97c4;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="columnOne">
            <a href="create.php">Add New User</a>
        </div>
    </div>
</div>


	<div class="container">
		<div class="row">
			<div class="columnOne">
				<table cellpadding="10" cellspacing="0" align="center">
                    <thead>
						<tr>
							<th>#Sl No.</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email Name</th>
							<th>Birth Date</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                        $sl = 0;
                        foreach($data as $value):
                        $sl++;
                    ?>
						<tr>
							<td><?php echo $sl; ?></td>
							<td><?php echo $value->fname; ?></td>
							<td><?php echo $value->lname; ?></td>
							<td><?php echo $value->email; ?></td>
							<td><?php echo $value->bdate; ?></td>
							<td><?php echo $value->address; ?></td>
							<td>
                                <a href="delete.php?id=<?php echo $value->id; ?>">Delete</a>
                                |
                                <a href="edit.php?id=<?php echo $value->id; ?>">Edit</a>
                            </td>
						</tr>
                    <?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>	
</body>
</html>