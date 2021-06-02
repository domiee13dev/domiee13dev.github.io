<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Rancho&family=Satisfy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/login.css">

  <title>Login Image Contest</title>
</head>
<body>
  <h2 id="login">Login</h2>
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
      <form style="width: 400px;" class="mx-auto">
    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form1Example1">Email address</label>
      <input type="email" id="form1Example1" class="form-control" />
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form1Example2">Password</label>
      <input type="password" id="form1Example2" class="form-control" />
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="form1Example3"
            checked
          />
          <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
      </div>

      <div class="col">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
      </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
  </form>
      </div>
    </div>
  </div>
  
</body>
</html>