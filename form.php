<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="row container"> 
        <form action="insert.php" method="POST" enctype="multipart/form-data">
        <!-- <form> -->
        <center>
            <h1>Registration Form</h1>
        </center>
        <div class="mt-2 col-md-12">
            <label for="Firststudent" class="form-label"><b>First name:- <span class="star">*</span></b></label>  
            <input onkeyup="fnvalidation()" name="fname" type="text" class="form-control form-control-sm form" value="" id="Firststudent" placeholder="Enter First name">
            <label class="error-input">Required</label>
        </div>

        <div class="mt-2 col-md-12">
            <label for="username" class="form-label"><b>username <span class="star">*</span></b></label>
            <input onkeyup="uvalidation()" type="text" name="username" class="form-control form-control-sm form" value="" id="username" placeholder="Enter username">
            <label class="error-input">Required</label>
        </div>
        <div class="mt-2 col-md-12">
            <label class="form-label"><b>Gender:- <span class="star">*</span></b></label><br>
            <div class="form-check form-check-inline">
           
            <input onchange="gendervalidation()" type="radio" class="form-check-input form" value="Male" id="Male" name="gender" checked>
                <label for="Male" class="form-check-label">
                    <b>Male</b>
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input onchange="gendervalidation()" type="radio" class="form-check-input form" value="Female" id="Female" name="gender" checked>
                <label for="female" class="form-check-label">
                    <b>Female</b>
                </label>
            </div>
            <label class="error-input">Required</label>
        </div>
        
    <div class="row mt-2">
        <div class="col-sm-6">
            <label for="State" class="form-label"><b>state:- </b></label>    
                <select onchange="statevalidation()" class="form-select" name="state" value="" id="state" aria-label="Default select example">
                    <option value="0">Select Your City</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Gujarat">panjab</option>
                    <option value="Gujarat">bihar</option>
                    <option value="Gujarat">tamil</option>
                </select>
        </div>
        <div class="col-sm-6">
        <label for="City" class="form-label"><b>city:- </b></label>    
        <select onchange="cityvalidation()" class="form-select" name="city" value="" id="city" aria-label="Default select example">
            <option value="0">Select Your City</option>
            <option value="Surat">Surat</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Vadodra">Vadodra</option>
            <option value="Ahemdabad">Ahemdabad</option>
            <option value="Bhavnagar">Bhavnagar</option>
            <option value="Delhi">Delhi</option>
            <option value="Pune">Pune</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Gandhinagar">Gandhinagar</option>
        </select>
        </div>
        
    </div>
    <div class="row">
        <div class="col-sm-6">
            <label class="error-input">City Required.</label>
        </div>
        <div class="col-sm-6">
            <label class="error-input">State Required.</label>
        </div>
    </div>

    <div class="mt-2 col-md-12">
        <label for="Email" class="form-label"><b>Email:- <span class="star">*</span></b></label>
        <input onkeyup="emailvalidation()" type="email" class="form-control form-control-sm form" name="Email" value="" id="Email" placeholder="Enter your Email">
        <label class="error-input">Email Required.</label>
    </div>

    <div class="mt-2 col-md-12">
            
            <label for="phone" class="form-label"><b>phone no:- <span class="star">*</span></b></label>
            <div class="row">
                <div class="col-md-2">
                    <select class="form-select" id="city" name="codepno" aria-label="default select example" required>
                        <option>+1</option> 
                        <option>+52</option> 
                        <option>+61</option> 
                        <option selected>+91</option> 
                        <option>+81</option> 
                        <option>+92</option> 
                        <option>+64</option> 
                    </select>
                </div>
            <div class="col-md-10">
            <input onkeyup="phnvalidation()"type="phnumber" name="phnumber" value="" class="form-control" id="phone"  placeholder="phone number" required>
            <label class="error-input">phone number is required</label>
        </div> 
        
        
        <div class="row">
        <div class="col-sm-6">
            <label for="password"><b>password:-<span class="star">*</span></b></label>
            <input onkeyup="passwordvalidation()" type="password" class="form-control" name="password" value="" id="password" placeholder="password">
            <label class="error-input">password required</label>
        </div>

        <div class="col-sm-6">
            <label for="confirm-password"><b>confirm-password:-<span class="star">*</span></b></label>
            <input onkeyup="confirmpasswordvalidation()" type="password" class="form-control" name="confirmpassword" value="" id="confirmpassword" placeholder="confirmpassword">
            <label class="error-input">confirmpassword required</label>
        </div>

        </div>

        <div class="row">
        <div class="input-box col-sm-8">
            <label class="form-lable"><b>upload an image</b>
            <span class="star">*</span>
            <input class="form-control" id="formfield" type="file" name="pic">
            <br />
            </label>

        </div>
        </div>

        <div class="submit mt-4">
        
            <button type="submit" style="display: none;" name="submit" id="studentbtn"></button>

            <button id="submit" name="submit" type="submit" class="btn btn-success"  id="studentbtn" onclick="formvalidation()" value="submit">submit</button>
        <button id="btn1" type="cancle" class="btn btn-danger" name="cancle">cancle</button>


        </div>
    </form>
</div>

<script>




    function formvalidation() 
    {
        fnvalidation();
        uvalidation();
        gendervalidation();
        cityvalidation();
        statevalidation();
        emailvalidation();
        passwordvalidation();
        confirmpasswordvalidation();
        phnvalidation();
    
        
        if(fnvalidation() && uvalidation() && gendervalidation() && cityvalidation() && statevalidation() && emailvalidation() && 
        passwordvalidation() &&confirmpasswordvalidation() && phnvalidation())
        {
            document.getElementById("studentbtn").click();
        }    
    }
 
    function fnvalidation()
    {
        let fname = document.getElementById("Firststudent").value;
        let ferror = document.getElementsByClassName("error-input");
       

        if(fname == '')
        {
            ferror[0].style = "display:block";
            return false;
        }
        else
        {
            ferror[0].style = "display:none";
            return true;
        }
    }

    function uvalidation()
    {
        let username = document.getElementById("username").value;
        let ferror = document.getElementsByClassName("error-input");
        

        if(username == '')
        {
            ferror[1].style = "display:block";
            return false;
        }
        else
        {
            ferror[1].style = "display:none";
            return true;
        }
    }

    function gendervalidation()
    {
        let male = document.getElementById("male");
        let female = document.getElementById("female");
        let ferror = document.getElementsByClassName("error-input");
        

        if(Male.checked || Female.checked)
        {
            ferror[2].style = "display:none";
            return true;
        }
        else
        {
            ferror[2].style = "display:block";
            return false;
        }
    }

    function cityvalidation()
    {
        let city = document.getElementById("city").value;
        let ferror = document.getElementsByClassName("error-input");
    

        if(city == 0)
        {
            ferror[3].style = "display:block";
            return false;
        }
        else
        {
            ferror[3].style = "display:none";
            return true;
        }
    }

    function statevalidation()
    {
        let state = document.getElementById("state").value;
        let ferror = document.getElementsByClassName("error-input");
        

        if(state == 0)
        {
            ferror[4].style = "display:block";
            return false;
        }
        else
        {
            ferror[4].style = "display:none";
            return true;
        }
    }

   function  emailvalidation()
    {
        let email = document.getElementById("Email").value;
        let ferror = document.getElementsByClassName("error-input");
        

        if(email == '')
        {
            ferror[5].style = "display:block";
            return false;
        }
        else
        {
            ferror[5].style = "display:none";
            return true;
        }
    }

    function phnvalidation()
    {
        let phonenumber = document.getElementById("phone").value;
        let ferror = document.getElementsByClassName("error-input");
        

        if(phonenumber == '')
        {
            ferror[6].style = "display:block";
            return false;
        }
        else
        {
            ferror[6].style = "display:none";
            return true;
        }
    }

    function passwordvalidation()
    {
        let password = document.getElementById("password").value;
        let ferror =document.getElementsByClassName("error-input"); 
        
        if (password == '') {
            ferror[7].style = "display:block";
            return false;
            
        } 
        else {
            ferror[7].style = "display:none";
            return true;
            
        }
    }

    function confirmpasswordvalidation()
    {
        let confirmpassword = document.getElementById("confirmpassword").value;
        let ferror =document.getElementsByClassName("error-input");
        
        if (confirmpassword == '') {
            ferror[8].style = "display:block";
            return false;
            
        } 
        else {
            ferror[8].style = "display:none";
            return true;
            
        }
    }

</script>

</body>
</html>