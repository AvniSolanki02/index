<?php require_once "./conn.php";

if (isset($_POST['submit'])) {

$old_image=$_POST['old_pic'];
$new_image=$old_image;

if(isset($_FILES['pic'])){
   
  echo $name;

  $name = $_FILES['pic']['name'];
  $tmp_name = $_FILES['pic']['tmp_name'];
  $error = $_FILES['pic']['error'];
  $type = $_FILES['pic']['type']; 

  if ($error == 0) {
$filename = time() . $name;
    $path = "./uploads/" . $filename;
    if(move_uploaded_file($tmp_name, $path)){

      unlink("./uploads/".$old_image);
      $new_image=$filename;
    } 
    
  }

}

    $id=$_POST['id'];
    $fname = $_POST['fname'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $Email = $_POST['Email'];
    $phnumber = $_POST['codepno'].$_POST['phnumber'];
    $password = $_POST['password'];
    $confirmpassword= $_POST['password'];
    // $pic = $_POST['pic'];

    $query="UPDATE `avni1` SET `fname`='$fname',`username`='$username',`gender`='$gender',`state`='$state',
     `city`='$city',`Email`='$Email',`phnumber`='$phnumber',`pass`='$password',`confirmpassword`='$confirmpassword',`iname`='$new_image'  WHERE `id`='$id'";


  //  $query = "INSERT INTO `avni1`(`fname`,`username`,`gender`,`state`,`city`,`Email`,`phnumber`,`pass`,`confirmpassword`,`iname`)
 //    VALUES('$fname','$username','$gender','$state','$city','$Email','$phnumber','$password','$confirmpassword','$filename')";
    $result = mysqli_query($conn,$query);

    if ($result) {
      ?>
      <script>
        alert("data updated successfully");
      window.location.href = "table.php";
      </script>

      <?php
    } else {
      echo " error";
    }
  }

?>