<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <form method="post" action="/update">
      <div class="form-group">
        <label class="col-form-label" for="formGroupExampleInput">Book ID</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID">
      </div>
      <div class="form-group">
        <label class="col-form-label" for="formGroupExampleInput">Book name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="name">
      </div>
      <div class="form-group">
        <label class="col-form-label" for="formGroupExampleInput">Book type</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="type">
      </div>
      <div class="form-group">
        <label class="col-form-label" for="formGroupExampleInput">Edition</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="edition">
      </div>
      <div class="form-group">
        <label class="col-form-label" for="formGroupExampleInput">Publisher by</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="name">
      </div>
      <div class="form-group">
        <label class="col-form-label" for="formGroupExampleInput">Published year</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="year">
      </div>
      <div class="form-group">
        <label class="col-form-label" for="formGroupExampleInput">Price</label>
        <input type="text" class="form-control" id="formGroupExampleInput">
      </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</html>
