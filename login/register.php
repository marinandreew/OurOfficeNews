<?php
include "../database/db.php";

?>
<h1>Register</h1>
<form method="POST" action="user.php">
    <div class="form-group">
        <label for="firstName">First name</label>
        <input type="text" name="firstName" class="form-control" placeholder="Please enter your First Name" id="firstName"  required>
    </div>
    <div class="form-group">
        <label for="middleName">Middle name</label>
        <input type="text" name="middleName" class="form-control" placeholder="Please enter your Middle Name" id="middleName"  required>
    </div>
    <div class="form-group">
        <label for="lastName">Last name</label>
        <input type="text" name="lastName" class="form-control" placeholder="Please enter your Last Name" id="lastName"  required>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Please enter your Username" id="username"  required>
    </div>
    <div class="form-group">
        <label for="position">Position</label>
        <input type="text" name="position" class="form-control" placeholder="Please enter your position" id="position"  required>
    </div>
    <div class="form-group">
        <label for="phoneNumber">Phone Number</label>
        <input type="text" name="phoneNumber" class="form-control" placeholder="Please enter your Phone Number" id="phoneNumber"  required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Please enter your email" id="email"  required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Please enter your password" id="password"  required>
    </div>
    <div class="form-group">
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control" placeholder="Please enter your password again" id="confirmPassword"  required>
    </div>
    <div class="form-group">
        <label for="department">Department</label>
        <input type="department" name="department" class="form-control" placeholder="Please enter your Department" id="department"  required>
    </div>
    <div class="form-group">
        <input type="submit" value="Register" class="btn btn-primary">
        <input type="hidden" name="action" value="register">
    </div>
</form>