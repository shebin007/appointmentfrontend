<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />

</head>
<body>
<div class="bg">
<div class="header">
    <div class="logo" >
        <img src="img/logo.png">
    </div>
    <h2>Appointment</h2>
    <h4><a href="login.php">Admin</a></h4>
</div>
<form method="post" action="index.php">
<!-- display validation errors here -->
<?php include("errors.php"); ?>
<div class="input-group">
    <label>Student Name:</label>
    <input type="text" name="username" value="<?php echo $username; ?>">
</div>
<div class="input-group">
    <label>Department:</label>
    <input type="text" name="department" value="<?php echo $department; ?>">
</div>
<div class="input-group">
    <label>Semester:</label>
    <input type="text" name="semester" value="<?php echo $semester; ?>">
</div>
<div class="input-group">
    <label>E-mail</label>
    <input type="text" name="email" value="<?php echo $email; ?>">
</div>
<div class="input-group">
    <label>Subject:</label>
    <input type="text" name="subject" value="<?php echo $subject; ?>">
</div>
<div class="input-group">
    <label>Date sought:</label>
    <input type="date" name="date" value="<?php echo $date; ?>">
</div>


<div class="input-group">
    <button type="submit" name="appoint" class="btn">Book Appointment</button>
</div>

</form>
</div>
<div class="footer">
    <p>NSS COLLEGE OF ENGINEERING PALAKKAD</p>
</div>
</body>
</html>