<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 23.02.2018
 * Time: 18:05
 */

?>


<!doctype html>
<html lang="ru">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link href="https://fonts.googleapis.com/css?family=Anton|Inconsolata" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="../style/style.css" />
	<title>admin</title>
</head>
<body>

<div class="container">

	<div class="row">
		<div id="logo" class="col-sm-12">
			<a href="<?=$_SERVER["home"]?>">
				<h1>/\/\/\/\/\</h1>
			</a>
			<hr>
		</div>
	</div>
	<div class="row">



		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
		добавить
		</button>

		<!-- Modal -->
		<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="createform" method="post">
							<div class="form-group">
								<label for="title">Заголовок</label>
								<input type="text" class="form-control" id="title"  placeholder="Заголовок" required="true">
							</div>
							<div class="form-group">
								<label for="title">Текст</label>
								<textarea class="form-control" id="content" rows="6" ></textarea>
							</div>
							<button id="createbtn" type="submit" class="btn btn-primary">отправить</button>
						</form>

					</div>

				</div>
			</div>
		</div>


		<!-- Modal -->
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="edtiModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="editeform" action="" method="post">
							<div class="form-group">
								<label for="title">Редактировать</label>
								<input type="text" class="form-control" id="title"  placeholder="Заголовок" required="true">
							</div>
							<div class="form-group">
								<label for="title">Текст</label>
								<textarea class="form-control" id="content" rows="6"></textarea>
							</div>
							<button id="editbtn" type="submit" class="btn btn-primary" >отправить</button>
						</form>

					</div>

				</div>
			</div>
		</div>



		<table class="table" >
			<thead>
			<tr>
				<th>#</th>
				<th>title</th>
				<th>#</th>
			</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>

</div>


<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../js/admin.js"></script>
</body>
</html>

