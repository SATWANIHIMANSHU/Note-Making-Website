<?php
$insert=false;
$update=false;
$delete=false;
//INSERT INTO `notes` (`Sr.no`, `title`, `Description`, `tstamp`) VALUES (NULL, 'Complete one vedio', 'Complete the one vedio of php course by code with harry', current_timestamp());
$servername="localhost";
$username="root";
$password="";
$database="inotes";

$conn=mysqli_connect($servername,$username,$password,$database);


if(!$conn){
    die ("sorry we failed to connect:".mysqli_connect_error());
        }

if(isset($_GET['delete'])){
    $sno=$_GET['delete'];
   
    $sql="DELETE FROM `notes` WHERE `Sr.no` = $sno ";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo"Record inserted Successfully";
        $delete=true;
    }else{
        echo"The record has not been deleted successfuly in table because of this error-->".mysqli_error($conn);
    }
    
}

    if($_SERVER["REQUEST_METHOD"]=="POST"){ 
        
        if(isset($_POST['snoEdit'])){
            $sno=$_POST['snoEdit'];
            $tit=$_POST["titleEdit"];
            $descript=$_POST["descriptionEdit"];
            
        $sql="UPDATE `notes` SET `title` = '$tit', `description`='$descript' WHERE `Sr.no` = $sno";
            $result=mysqli_query($conn,$sql);
            if($result){
                // echo"Record inserted Successfully";
                $update = true;
            }else{
                echo"The record has not been updated successfuly in table because of this error-->".mysqli_error($conn);
            }
        }

     else{
        $tit=$_POST["title"];
        $descript=$_POST["description"];
        
    $sql="INSERT INTO `notes` ( `title`, `description`) VALUES ('$tit', '$descript')";
        $result=mysqli_query($conn,$sql);
        
        if($result){
            // echo"Record inserted Successfully";
            $insert = true;
        }else{
            echo"The record has not been inserted successfuly in table because of this error-->".mysqli_error($conn);
        }
    }   
}   
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Alert</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css">
    <title>Project OF To Do List</title>
</head>

<body>
    <!-- Edit modal
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
  Edit modal
</button> -->

    <!--Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit this note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="my-2" action="/Project/inotes.php" method="Post">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Note Title</label>
                            <input type="title" class="form-control" name="titleEdit" id="titleEdit">

                        </div>
                        <div class="form-group my-2">
                            <label for="exampleFormControlTextarea1">Note Description</label>
                            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit"
                                rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Note</button>
                    </form>

                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">iNotes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </nav>

    <?php
if($insert){
    
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your note has been inserted successfully.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";

}

?>   
 <?php
if($update){
    
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your note has been updated successfully.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";

}

?>
    <?php
if($delete){
    
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your note has been deleted successfully.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";

}

?>


    <div class="container my-5">
        <h2>Add Note</h2>
        <form class="my-2" action="/Project/inotes.php" method="Post">
            <div class="form-group">
                <label for="exampleInputEmail1">Note Title</label>
                <input type="title" class="form-control" name="title" id="title">

            </div>
            <div class="form-group my-2">
                <label for="exampleFormControlTextarea1">Note Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>




    <div class="container my-5">


        <table class="table " id="myTable">
            <thead>
                <tr>
                    <th scope="col">Sr.no</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
      $sno=0;
    $sql="SELECT * FROM `notes`";
$result=mysqli_query($conn,$sql);
while ($fetch=mysqli_fetch_assoc($result)) {
    $sno=$sno+1;
    echo"<tr>
    <th scope='row'>".$sno."</th>
    <td>".$fetch['title']."</td>
    <td>".$fetch['Description']."</td>
    <td> <button class= ' edit btn btn-sm btn-primary' id=".$fetch['Sr.no'].">Edit</button> <button class= 'delete btn btn-sm btn-primary' id=".$fetch['Sr.no'].">Delete</button></td>
    </tr>";
 
}
?>


            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>
    <script>
       $(document).ready(function () {
      $('#myTable').DataTable();

    });
    </script>
    <script>
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ",);
                tr = e.target.parentNode.parentNode;
                title = tr.getElementsByTagName("td")[0].innerText;
                description = tr.getElementsByTagName("td")[1].innerText;
                console.log(title, description);
                titleEdit.value = title;
                descriptionEdit.value = description;
                snoEdit.value = e.target.id;
                console.log(e.target.id);
                $('#editModal').modal('toggle');
            })
        })

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ",);
                sno = e.target.id.substr(1);
                
                if(confirm("Are you sure you want to delete this note!")){
                    console.log("Yes")
                    window.location=`/Project/inotes.php?delete=${sno}`;
                }
                else{
                    console.log("No")       
                }
            })
        })
    </script>
</body>

</html>