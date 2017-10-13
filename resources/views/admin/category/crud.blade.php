<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-body">
          <form method="post" action="/admin/category/create" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="eg. Food">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description" id="description" placeholder="">
            </div>
            <button type="submit" class="btn btn-default">Create</button>
          </form>
        </div>
      </div>
    </div>

    <table class="table">
      <tr>
        <th>#</th>
        <th>name</th>
        <th>description</th>
        <th>action</th>
      </tr>
      @foreach ($categories as $category)
      <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
        <td>
          <a class="btn btn-default btn-xs" href="/admin/category/{{ $category->id }}/edit" role="button">EDIT</a>
          <a class="btn btn-danger btn-xs" href="/admin/category/{{ $category->id }}/delete" role="button">DELETE</a>
        </td>
      </tr>
      @endforeach
    </table>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>