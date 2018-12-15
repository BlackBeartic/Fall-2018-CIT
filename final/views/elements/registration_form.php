<form id="registration_form" action="<?php echo BASE_URL;?>register/<?php echo $task?>"  onsubmit="return validateForm()" method="post">

<fieldset>
<legend>Register Today!</legend>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" maxlength="20"  />
<br />

<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" maxlength="20"  />
<br />

<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" maxlength="100" required = "email" />
<br />

<label for="password">Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password" name="password" value="<?php echo $password;?>" maxlength="100"  />

<br />

<label for="cpassword">Confirm Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="cpassword" name="cpassword" value="<?php echo $password;?>" maxlength="100"  />

<br />

<input type="hidden" name="uID" value="<?php echo $uID ?>"/>

<button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
</fieldset>
</form>

<script>

function validateForm() {
  var x = document.forms["registration_form"]["first_name"].value;
  if (x == "") {
    alert("First Name must be filled out");
    return false;
  }
  var y = document.forms["registration_form"]["last_name"].value;
  if (y == "") {
    alert("Last Name must be filled out");
    return false;
  }
  var z = document.forms["registration_form"]["email"].value;
  if (z == "") {
    alert("Email must be filled out");
    return false;
  }
  var a = document.forms["registration_form"]["password"].value;
  if (a == "") {
    alert("Please enter a password");
    return false;
  }
  var b = document.forms["registration_form"]["cpassword"].value;
  if (b == "") {
    alert("Enter your password again");
    return false;
  }
  var pass1 = document.getElementById("password").value;
  var pass2 = document.getElementById("cpassword").value;

  if (pass1 != pass2) {
    alert("Passwords don't match")
    return false;
  }
}
</script>
