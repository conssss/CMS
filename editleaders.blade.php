<!DOCTYPE html>
<html>
<head>
  <title>Update Leader</title>
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
</head>
<body>
      <!-- Modal -->
          <div class="modal fade" id="editleader{{$table->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">UPDATE LEADERS INFORMATION</h5>
                    
                </div>
                <div class="modal-body">

                 <form action="leaderupdate/{{$table->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                   <div class="mb-3">
                      <label for="pic" style="margin-right: 350px;font-weight: bold;">Insert Picture </label>
                      <input type="file" class="form-control-file" id="pic" name="picture"  value="{{$table->pictureleader}}" required>
                    </div>
                    <div class="mb-3">
                      <label for="head" class="form-label"  style="margin-right: 380px;font-weight: bold;">Header</label>
                      <input type="text" class="form-control" name="header" placeholder="Input Header Here..." id="head" value="{{$table->headerleader}}" required>
                    </div>
                    <div class="mb-3">
                      <label for="title" class="form-label" style="margin-right: 320px;font-weight: bold;">Description Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Type Here..." value="{{$table->titleleader}}" required>
                    </div>
                    <div class="mb-3">
                      <label for="des" class="form-label" style="margin-right: 350px;font-weight: bold;">Description</label>
                      <input type="text" class="form-control" id="des" name="description" placeholder="Type Here..." value="{{$table->descriptiontitle}}" required>
                    </div>
                    
                 
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-dark">Update Details</button>
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </form>
</body>
</html>