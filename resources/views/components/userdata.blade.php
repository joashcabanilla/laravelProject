<div class="error">
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <p class="error-text">{{$error}}</p>
        @endforeach
    @endif
</div>
<div class="main-container">

    <form class="row g-3 userform" action="{{url("createUser")}}" method="POST">
        @csrf
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
            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
        </div>
        <div class="col-auto div-input age">    
            <label for="age">Age: </label>
            <input type="text" class="form-control" id="age" name="age" readonly>
        </div>
        <div class="col-auto div-input name">
            <label for="birthplace">Birthplace: </label>
            <input type="text" class="form-control" id="birthplace" name="birthplace" required>
          </div>
        <div class="col-auto phone">
            <label for="phone">Phone Number: </label>
            <div>
                <p>+63</p> 
                <input type="text" class="form-control" id="phone" name="phone_number" maxlength="10" required>
            </div>
        </div>
        <div class="col-auto div-input address">
            <label for="address">Address: </label>
            <textarea class="form-control" id="address" rows="3" required name="address"></textarea>
        </div>
        <div class="col-auto div-input email">
            <label for="email">Email Address: </label>
            <input type="email" class="form-control" id="email" name="email" placeholder="user@example.com" required>
        </div>
        <div class="col-auto div-input username">
            <label for="username">Username: </label>
            <input type="text" class="form-control" id="username" minlength="4" name="username" required>
        </div>
        <div class="col-auto div-input password">
            <label for="password">Password: </label>
            <input type="password" class="form-control" id="password" minlength="6" name="password" required>
        </div>
        <div class="col-auto div-input confirmpassword">
            <label for="confirmpassword">Confirm Password: </label>
            <input type="password" class="form-control" id="confirmpassword" minlength="6" name="confirmpass" required>
        </div>
        <div class="col-auto div-button">
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
          <a class="btn btn-primary mb-3" href="home">Back to User Table</a>
        </div>
      </form>   
</div>