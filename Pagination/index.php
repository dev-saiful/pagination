<?php include "Databases/select.php"; ?>
<?php include "Databases/search.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagination</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-info">
	<div class="container mt-5">
		<div class="card">
			<div class="card-header">
				<h2 class="text-center">All People</h2>
			</div> 
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 mx-auto">
						<form class="my-4">
					<div class="input-group">
						<input type="text" class="form-control" name="q" placeholder="Search....">
						<div class="input-group-append">
							<button type="submit" class="btn btn-outline-info">Search</button>
						</div>
					</div>
				</form>
					</div>
				</div>
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($result as $row): ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['Name']; ?></td>
							<td><?php echo $row['Email']; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<ul class="pagination">
						  <li class="page-item <?php echo $page <= 1 ? 'disabled' : '';?>"><a class="page-link" href="?page=<?= $page - 1; ?>">Previous</a></li>
						  <?php for($i=1;$i <= $total_page;$i++): ?>
						  <li class="page-item <?= $i==$page ? 'active' : ''; ?>"><a class="page-link" href="?page=<?=$i; ?>"><?= $i;?></a></li>
						<?php endfor; ?>
						  <li class="page-item <?php echo $page >= $total_page ? 'disabled' : '';?>"><a class="page-link" href="?page=<?= $page + 1; ?>">Next</a></li>
					</ul>
			</div>
		</div>
	</div>
</body>
</html>