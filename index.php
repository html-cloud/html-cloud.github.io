<!DOCTYPEhtml>
<?php
require "db.html"
{

$data = $_POST;
if ( isset($data[signup]) )

$errors = array();
if(trim($data['Login']) == ' ')
{
	$errors[] = 'Enter Username!';
}

if(trim($data['Email']) == ' ')
{
	$errors[] = 'Enter Email!';
}

if($data['Password'] == ' ')
{
	$errors[] = 'Enter Password!';
}

if($data['password'] == ' ')
{
	$errors[] = 'The second password is not entered!';
}

if($data['Password'] != $data['password'])
{
	$errors[] = 'The Passwords do not pass!';
}

if(trim($data['Phonel']) == ' ')
{
	$errors[] = 'Enter Phone!';
}

if(empty($errors))

else

{
	echo '<div style="color: red;">'.arrayshift($errors).'</div><hr>';
}

}
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="index.css">
        <title>best</title>
    </head>
    <body>
        <form>
        <h1 title="Registration Form">Registration</h1>    
    <div class="group">
        <label>Username</label>
        <input type="text">
    </div>
    <div class="group">
        <label>Password</label>
        <input type="password">
    </div>
    <div class="group">
        <label>Confirm your password</label>
        <input type="password">
    </div>
    <div class="group">
        <label>Email</label>
        <input type="email">
    </div>
    <div class="group">
        <label>Phone</label>
        <input type="phone">
    </div>
    <br>
			<button><a href="normal.html">Registration</a></button>
     	</form>
    </body>
</html>
