<?php


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
    <link rel="stylesheet" href="../style/style.css" />
    <title>blog</title>
  </head>
  <body>

		<div class="container">
            <div class="row">
                <div id="logo" class="col-sm-6">
                    <a href="<?=$_SERVER["home"]?>">
                    <h1>BloG</h1>
                    </a>
                    <hr>
                </div>
            </div>
			<div class="row">
				<div class="col-8 col-xs-12">

                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link loadlink lb" href="#">предыдущая</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link loadlink rb" href="#">следующая</a>
                        </li>
                    </ul>
                    <hr>
                    <div class="main"></div>
                    <hr >
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link loadlink lb" href="#">предыдущая</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link loadlink rb" href="#">следующая</a>
                        </li>
                    </ul>

                </div>
				<div class="col-sm-4 hidden-xs-down">
                    <div class="panel">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">caption</h5>
                                <p class="card-text"><img src="/pen.png" class=" "/>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad beatae corporis cumque cupiditate eum facilis illum minus, neque nisi ratione sunt temporibus vel. Ad harum modi nam nulla quod.
                                </p>

                            </div>
                        </div>

                    </div>
				</div>
			</div>

		</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/blog.js"></script>
  </body>
</html>

