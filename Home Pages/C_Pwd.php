
<?php 
session_start();
include('../config.php');
include('includes_G/header.php');

?>



<div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 col-xs-12 main">
                <div class="page-header">
                    <h1>Change Password</h1>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 well">
                        <form id="form" accept-charset="UTF-8" action="/change-password" autocomplete="on" class="form-horizontal" method="post">
                            <div class="form-inputs">
                                <div class="form-group">
                                    <label class="control-label col-sm-3 col-md-4" for="current_password">Current password:*</label>
                                    <div class="col-sm-9 col-md-8">
                                        <input autocomplete="current-password" class="form-control" id="current_password" name="currentPassword" required="" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3 col-md-4" for="new_password">Password:*</label>
                                    <div class="col-sm-9 col-md-8">
                                        <input autocomplete="new-password" class="form-control" id="new_password" name="newPassword" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3 col-md-4" for="password_confirmation">Confirm Password:*</label>
                                    <div class="col-sm-9 col-md-8">
                                        <input autocomplete="new-password" class="form-control" id="confirm_password" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions text-right">
                                <input class="btn btn-primary" id="submit" type="submit" value="Change password">
                            </div>
                        </form>
                        <button type="button" class="btn btn-info" onclick="location.href = './class advisor homepage.php';">Go back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

var newPassword = document.getElementById("new_password");
var confirmPassword = document.getElementById("confirm_password");

function validatePassword() {
    if (newPassword.value != confirmPassword.value) {
        document.getElementById("confirm_password").setCustomValidity("Passwords do not match!");
    } else {
        //empty string means no validation error
        document.getElementById("confirm_password").setCustomValidity('');
    }
}
newPassword.addEventListener("change", validatePassword);
confirmPassword.addEventListener("change", validatePassword);
</script>

<style>
input:invalid {
    border-color: #bf4040;
    background: #f2d9d9;
}
</style>

</div>
<?php
    
    include('includes_G/scripts.php');
    include('includes_G/footer.php');
   ?>