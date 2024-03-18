<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="/Users/aj/Documents/edoc-doctor-appointment-system-main/css/signup.css">

    <title>Sign Up</title>
</head>
<body>
<?php
// Start the session
session_start();

// Unset all the server side variables
$_SESSION["user"] = "";
$_SESSION["usertype"] = "";

// Set the new timezone
date_default_timezone_set('Europe/London');
$date = date('d-m-Y');
$_SESSION["date"] = $date;

if(isset($_POST['submit'])) {
    // Sanitize and store form data in session
    $_SESSION["personal"] = array(
        'fname' => htmlspecialchars($_POST['fname']),
        'lname' => htmlspecialchars($_POST['lname']),
        'address' => htmlspecialchars($_POST['address']),
        'nic' => htmlspecialchars($_POST['nic']),
        'dob' => htmlspecialchars($_POST['dob'])
    );

    // Redirect to create-account.php
    header("Location: create-account.php");
    exit; // Ensure script execution stops after redirection
}
?>
    <center>
        <div class="container">
            <form action="" method="POST">
                <table border="0">
                    <tr>
                        <td colspan="2">
                            <p class="header-text">Let's Get Started</p>
                            <p class="sub-text">Add Your Personal Details to Continue</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <label for="name" class="form-label">Name: </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td">
                            <input type="text" name="fname" class="input-text" placeholder="First Name" required>
                        </td>
                        <td class="label-td">
                            <input type="text" name="lname" class="input-text" placeholder="Last Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <label for="address" class="form-label">Address: </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <input type="text" name="address" class="input-text" placeholder="Address" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <label for="nic" class="form-label">NIC: </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <input type="text" name="nic" class="input-text" placeholder="NIC Number" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <label for="dob" class="form-label">Date of Birth: </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <input type="date" name="dob" class="input-text" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="reset" value="Reset" class="login-btn btn-primary-soft btn">
                        </td>
                        <td>
                            <input type="submit" name="submit" value="Next" class="login-btn btn-primary btn">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <br>
                            <label for="" class="sub-text" style="font-weight: 280;">Already have an account? </label>
                            <a href="login.php" class="hover-link1 non-style-link">Login</a>
                            <br><br><br>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
</html>
