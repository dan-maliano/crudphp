<?php 
include_once './connection.php';
$object = new Connection();
$connection = $object->Connect();

$query= "SELECT id,note_name,note_description FROM notesphp";
$result = $connection->prepare($query);
$result->execute();
$data=$result->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Dan's CRUD</title>
</head>
<body>
    <br>
    <div class="container">       
        <br><br>
        <table id="tableNotes" class="table mx-auto ">
  <thead class="thead-dark">
  <tr>
                <th scope="col">Id</th>
                <th scope="col">Note Name</th>
                <th scope="col">Note Description</th>
                <th scope="col">Operation</th>
            </tr>
  </thead>
  <tbody>
  <?php
                    foreach($data as $note){
            ?>
            <tr>
                    <td ><?php echo $note['id'] ?></td>
                    <td><?php echo $note['note_name'] ?></td>
                    <td><?php echo $note['note_description'] ?></td>
                    <td></td>
            </tr>
            <?php
                    }
            ?>
  </tbody>
</table>


       
    </div>

   
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">

      <form id="formNotes">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" id="noteName"  placeholder="Name">
    
  </div>
  <div class="form-group">
    <label >Description</label>
    <input type="text" class="form-control" id="noteDescription"  placeholder="Description">
  </div>
 
  <button   type="submit" class="btn  btn-primary">Send <i class="far fa-paper-plane"></i></button>
</form>
     
      </div>
     
    </div>
  </div>
</div>
    



   

    
    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>
</html>