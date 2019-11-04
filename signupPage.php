<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Silakan Daftar</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="boxSignUp">
        <div class="containerSignUp">
            <a href="index.php"><img src="/icon/ic_arrow_forward_24px.png" alt=""></a>
            <div class="emptySpaceSignUp">

            </div>
            <div class="isiSignUp">
                <h1>Registration</h1>
                <div class="SignUp">
                    <div class="su1">
                        <form action="POST">
                            <h1>Username</h1>
                            <input type="text" name="username" placeholder="Enter Your Username">
                            <h1>Password</h1>
                            <input type="password" name="password" placeholder="Enter Your Password">
                            <h1>Confirm Password</h1>
                            <input type="password" name="password" placeholder="Confirm Paswword"> 
                        </form>
                    </div>
                    <div class="su2">
                        <form action="POST">
                            <h1>Full Name</h1>
                            <input type="text" name="name" placeholder="Enter Your Full Name">
                            <h1>Place of Birth</h1>
                            <input type="text" name="tempatLahir" placeholder="Enter Your Place of Birth">
                            <h1>Date of Birth</h1>
                            <input type="date" name="tanggalLahir">
                        </form>
                    </div>
                    <div class="su3">
                        <form action="POST">
                            <h1>Gender</h1>
                            <label class="containerRadio">
                                <input type="radio" name="gender" value="Male"><span>Male</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="containerRadio">
                                <input type="radio" name="gender" value="Female"><span>Female</span>
                                <span class="checkmark"></span>
                            </label>
                            <h1>Address</h1>
                            <input type="text" name="address" placeholder="Enter Your Address">
                            <h1>Phone Number</h1>
                            <input type="text" name="phoneNumber" placeholder="Enter Your Phone Number" id="">
                        </form>
                       
                    </div>
                    
                </div>
                <div class="buttonSu">
                    <button>Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>