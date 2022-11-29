<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Registration</h1>
                <form method="POST">

                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">First Name</label>
                          <input type="text" name="firstname" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name">
                      </div>
                  </div>
                  <div class="col">
                     <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">LastName</label>
                      <input type="text" name="lastname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your LastName">
                  </div>

              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email">
              </div>        
          </div>


      </div>

      <div class="row">

          <div class="col">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Password">
          </div>
      </div>
      <div class="col">
          <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">DOB</label>
              <input type="date" class="form-control" name="dob" >
          </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Income</label>
          <input type="text" class="form-control" name="income" >
      </div>
  </div>
</div>


</div>



<div class="row">




  <div class="col">
    <div class="mb-3">
        <label>Gender</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">Female</label>
      </div>
  </div>

</div>

</div>


<div class="row">
    <div class="col">
        <select class="form-select" aria-label="Default select example">
            <option selected>Select Your Occupation</option>
            <option value="private">Private Job</option>
            <option value="goverment">Govermnet Job</option>
            <option value="business">Busnisess</option>
        </select>
    </div>
    <div class="col">
        <select class="form-select" aria-label="Default select example">
            <option selected>Family Type</option>
            <option value="1">Joint Family </option>
            <option value="2">Nuclear Family</option>

        </select>
    </div>
    <div class="col"> 
        <select class="form-select" aria-label="Default select example">
            <option selected>Manglik </option>
            <option value="1">Yes</option>
            <option value="2">No</option>
            <option value="3">Both</option>
        </select>
    </div>

</div>
<div class="d-grid gap-2 mb-3 mt-4">
    <input type="submit" name="signup" class="btn btn-primary btn-block" value="Signup">    
</div>

<div class="text-center">
    <a href="{{route('login')}}" class="btn btn-danger align-center">Login with Google </a>
</div>

</form>
</div>

</div>
</div>
</div>


</body>

</html>