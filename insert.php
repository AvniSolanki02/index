<?php require_once "./conn.php";

if (isset($_POST['submit'])) {

  $name = $_FILES['pic']['name'];
  $tmp_name = $_FILES['pic']['tmp_name'];
  $error = $_FILES['pic']['error'];
  $type = $_FILES['pic']['type']; 

  if ($error == 0) {
    $filename = time() . $name;
    $path = "./uploads/" . $filename;
    move_uploaded_file($tmp_name, $path);

    $fname = $_POST['fname'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $Email = $_POST['Email'];
    $phnumber = $_POST['codepno'].$_POST['phnumber'];
    $password = $_POST['password'];
    $confirmpassword= $_POST['confirmpassword'];
    //$pic = $_POST['pic'];


    $query = "INSERT INTO `avni1`(`fname`,`username`,`gender`,`state`,`city`,`Email`,`phnumber`,`pass`,`confirmpassword`,`iname`) VALUES('$fname','$username','$gender','$state','$city','$Email','$phnumber','$password','$confirmpassword','$filename')";
    $result = mysqli_query($conn, $query);

    if ($result) {
      ?>
      <script>
        alert("data saved successfully");
        window.location.href = "table.php";
      </script>

      <?php
    } else {
      echo " error";
    }
  }
}
?>