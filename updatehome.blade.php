<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script>
        $(document).ready(function() {
            $('#tablegg').DataTable();
        });

    </script>
</head>
<body>
<form action="updatehome/{{ $table->id}}" method="post">
	@csrf
                   <div class="mb-3">
                      <label for="logo" style="margin-right: 370px;font-weight: bold;">Insert Logo </label>
                      <input type="file" class="form-control-file" id="logo" name="logo" >
                    </div>
                    <div class="mb-3">
                      <label for="head" class="form-label"  style="margin-right: 380px;font-weight: bold;">Head Title</label>
                      <input type="text" class="form-control" name="head" placeholder="Input Header Here..." id="head" >
                    </div>
                    <div class="mb-3">
                      <label for="des" class="form-label" style="margin-right: 380px;font-weight: bold;">Description</label>
                      <input type="text" class="form-control" id="des" name="description" placeholder="Type Here...">
                    </div>
                    <button type="submit" class="btn btn-dark">Update Information</button>
</form>
</body>
</html>