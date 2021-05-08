
					<div>
						<h1>Assignment 2.1 </h1>
						<table>
						<thead>
							<tr><th>Name</th><th>Password</th><th>Gender</th><th>Email</th><th>Phone No</th></tr>
						</thead>

<tbody>
<?php
	include("dbconn.php");
  	$ref_table="megna-form";
	$fetchdata = $database->getReference($ref_table)->getValue();
	if($fetchdata > 0){
		foreach($fetchdata as $key => $row){
			?>
			<tr>
			<td><?= $row['name']  ?></td>
			<td><?= $row['password']  ?></td>
			<td><?= $row['gender']  ?></td>
			<td><?= $row['email']  ?></td>
			<td><?= $row['phone']  ?></td>

			</tr><?php
		}
	}else{
		?>
		<h1>Data Not Found<a href="form.php">add data</a></h1>
		<?php
	}

?>
</tbody>






</table>
					</div>
				</div>
                        </div>
                </div>
        </div>
<a href="form.php">Form</a>
