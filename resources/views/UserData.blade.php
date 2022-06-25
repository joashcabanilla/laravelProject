<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="{{url('css/user.css')}}">
</head>
<body>
    <h1>Add User Data</h1>
    <div class="error">
        <p class="error-text"></p>
    </div>
    <div class="main-container">

        <form class="row g-3 userform">
            <div class="col-auto div-input name">
                <label for="firstname">First Name: </label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter Your First Name" required>
            </div>
            <div class="col-auto div-input name">
                <label for="middlename">Middle Name: </label>
                <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter Your Middle Name" required>
            </div>
            <div class="col-auto div-input name">
              <label for="lastname">Last Name: </label>
              <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Your Last Name" required>
            </div>
            <div class="col-auto div-input birthdate">
                <label for="birthdate">Birtdate: </label>
                <input type="date" class="form-control" id="birthdate" required>
            </div>
            <div class="col-auto div-input age">    
                <label for="age">Age: </label>
                <input type="text" class="form-control" id="age" readonly>
            </div>
            <div class="col-auto div-input name">
                <label for="birthplace">Birthplace: </label>
                <input type="text" class="form-control" id="birthplace" name="birthplace" required>
              </div>
            <div class="col-auto phone">
                <label for="phone">Phone Number: </label>
                <div>
                    <p>+63</p> 
                    <input type="text" class="form-control" id="phone" name="phone" maxlength="10" required>
                </div>
            </div>
            <div class="col-auto div-input address">
                <label for="address">Address: </label>
                <textarea class="form-control" id="address" rows="3" required></textarea>
            </div>
            <div class="col-auto div-input email">
                <label for="email">Email Address: </label>
                <input type="email" class="form-control" id="email" placeholder="user@example.com" required>
            </div>
            <div class="col-auto div-input username">
                <label for="username">Username: </label>
                <input type="text" class="form-control" id="username" minlength="4" required>
            </div>
            <div class="col-auto div-input password">
                <label for="password">Password: </label>
                <input type="password" class="form-control" id="password" minlength="6" required>
            </div>
            <div class="col-auto div-input confirmpassword">
                <label for="confirmpassword">Confirm Password: </label>
                <input type="password" class="form-control" id="confirmpassword" minlength="6" required>
            </div>
            <div class="col-auto div-button">
              <button type="submit" class="btn btn-primary mb-3">Submit</button>
              <a class="btn btn-primary mb-3" href="home">Back to User Table</a>
            </div>
          </form>   

    </div>

    <script src="js/user.js"></script>
</body>
</html>