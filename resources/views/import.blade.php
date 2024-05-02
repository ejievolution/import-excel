<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! url('css/bootstrap.min.css') !!}" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  	<div class="row" style="margin-top:100px;">
  		<div class="col-md-4"></div>
  		<div class="col-md-4">
  			
	  		<form action="{{ url('save') }}" method="POST" enctype="multipart/form-data">
					@csrf
			  <div class="form-group">
			     <input type="file" name="import_file" accept=".xlsx, .xls, .csv" class="custom-file-input" id="import_file" required>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
  		</div>
  		<div class="col-md-4"></div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{!! url('js/bootstrap.min.js') !!}" crossorigin="anonymous"></script>
  </body>
</html>