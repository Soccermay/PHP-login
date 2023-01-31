<?php 
include_once('functions/validations.php');
include_once('functions/authentication.php');

$data = filter_input_array(INPUT_POST  ,[
    "username" => validateLengthRange(1,15),
    "password" => validateLengthRange(1,30)
]);

if($_SERVER['REQUEST_METHOD'] == 'POST'
    && $data['username'] && $data['password']){
        echo "ATTEMPTING TO REGISTER ";
        var_dump($data);
    }else{
        echo "Invalid username or password";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for the site!</title>
</head>
<body>
    <form method="POST">
    <label>
        UserName
        <input name="Username"/>
    </label>
    <label>
        Password
        <input name="Password"/>
</label>
<button>Register</button>
</form>
</body>
</html>