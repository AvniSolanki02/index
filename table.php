<?php require_once "./conn.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="table.css">
    <title>table</title>
</head>
<body><center>
<h2>students data</h2>
</center>
    <div class="d-flex justify-content-end">
        <a href="./form.php" class="btn btn-primary">Add new</a>
</div>
     

<div class="table-responsive">
<table class="table">
                <thead>
                    <tr class="table-primary">
                        <th></th>
                        <th>image</th>
                        <th>username</th>
                        <th>fname</th>
                        <th>gender</th>
                        <th>state</th>
                        <th>city</th>
                        <th>email</th>
                        <th>phone number</th>
                     
                        <th colspan="2">action</th>

                    </tr>
                </thead>
<tbody class="table-info">
<?php

    $query="SELECT * FROM `avni1`";
    $result=mysqli_query($conn,$query);

    if($result)
{
    $i=1;
    while($data=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$i. "</td>";
        echo "<td><img class='index' src='./uploads/".$data['iname']."' /></td>";
        echo "<td>".$data['fname']."</td>";
        echo "<td>".$data['username']."</td>";
        echo "<td>".$data['gender']. "</td>";
        echo "<td>".$data['state']. "</td>";
        echo "<td>".$data['city']." </td>";
        echo "<td>".$data['email']. "</td>";
        echo "<td>".$data['phnumber']. "</td>";
        echo "<td> <a href='update.php?id=".$data['id']."' class=''><i class='bi bi-pencil-square'></i></a></td>";
        echo "<td> <a href='javascript:void(0)' onclick=deletedata('".$data['id']."') class='btn btn-danger'><i class='bi bi-trash-fill'></i></a></td>";

        echo "</tr>";

        $i++;
    }
}
?>

</tbody>
            </table>
        </div>   


        <script>
            function deletedata(id){
                if(confirm("Do You Want to delete ?")){
                    window.location.href="delete.php?id="+id;                
                }
            }
        </script>
</body>
</html>
