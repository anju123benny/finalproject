<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <script src="main.js"></script>
</head>
<body>
<form method="post" action="/file" enctype="multipart/form-data">
  {{csrf_field()}}

        <div>
          <input type="file" name="filename" id="filename" >
          
            
          </div>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
</body>
</html>