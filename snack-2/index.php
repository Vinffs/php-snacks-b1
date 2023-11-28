<?php
$userInfo = [
  "userName" => "",
  "userEmail" => "",
  "userAge" => "",
];
$errorMessages = [
  "nameError" => "",
  "emailError" => "",
  "ageError" => "",
];
$accessGranted = false;

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['submit'])) {
  # checks if name is empty or contains unallowed characters
  if (!empty($_GET['user_name'])) {
    $userInfo['userName'] = trim($_GET['user_name']);

    if (strlen($userInfo['userName']) < 3) {
      $errorMessages['nameError'] = 'Name must be at least 3 characters';
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $userInfo['userName'])) {
      $errorMessages['nameError'] = 'Please insert a Valid Name';
    }
  } else {
    $errorMessages['nameError'] = 'Please insert a Valid Name';
  }

  #checks if email is empty or contains unallowed characters
  if (!empty($_GET["user_email"])) {
    $userInfo['userEmail'] = trim($_GET["user_email"]);

    if (!filter_var($userInfo['userEmail'], FILTER_VALIDATE_EMAIL)) {
      $errorMessages['emailError'] = "Invalid Email";
    }
  } else {
    $errorMessages['emailError'] = 'Please insert a Valid Email';
  }

  #check if age is empty or different from numbers
  if (!empty($_GET["user_age"])) {
    $userInfo['userAge'] = trim($_GET['user_age']);
    if (!is_numeric($userInfo['userAge'])) {
      $errorMessages['ageError'] = empty($userInfo['userAge']) ? "Please insert a valid age" : "Age must contain only numbers.";
    }
  } else {
    $errorMessages['ageError'] = 'Please insert a Valid Age';
  }

  # Grant access only if there are no error messages
  if (empty($errorMessages['nameError']) && empty($errorMessages['emailError']) && empty($errorMessages['ageError'])) {
    $accessGranted = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- Document Title -->
  <title>User Login</title>
</head>

<body class="bg-info vh-100">
  <div class="container text-center py-5">
    <header class="my-5">
      <h1>Login to Your Account</h1>
    </header>

    <main>
      <form class="w-50 mx-auto" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <div class="mb-3">
          <label for="input_name" class="form-label">Your name</label>
          <input type="text" class="form-control" id="input_name" aria-describedby="nameHelp" name="user_name"
            value="<?php echo $userInfo['userName'] ?>">
          <span class="text-danger">*
            <?php echo $errorMessages['nameError'] ?>
          </span>
        </div>
        <div class="mb-3">
          <label for="input_email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="input_email" aria-describedby="emailHelp" name="user_email"
            value="<?php echo $userInfo['userEmail'] ?>">
          <span class="text-danger">*
            <?php echo $errorMessages['emailError'] ?>
          </span>
        </div>
        <div class="mb-3">
          <label for="input_age" class="form-label">Your age</label>
          <input type="text" class="form-control" id="input_age" name="user_age"
            value="<?php echo $userInfo['userAge'] ?>">
          <span class="text-danger">*
            <?php echo $errorMessages['ageError'] ?>
          </span>
        </div>
        <input type="submit" name="submit" class="btn btn-primary d-block mx-auto"></input>
      </form>

      <?php
      if ($accessGranted) { ?>

        <h2 class="text-success">GRANTED ACCESS</h2>

      <?php } else if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['submit'])) { ?>
          <h2 class="text-danger">ACCESS DENIED</h2>

      <?php } ?>

    </main>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>