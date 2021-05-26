<?php
include('header.php');
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once('register-process.php');
}
?>

<!-- registration area -->
<section id="register">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Register</h1>
                <p class="p-1 m-0 font-ubuntu text-white-50">Register and enjoy additional features</p>
                <span class="font-ubuntu text-white-50">I already have account <a href="login.php">Login</a></span>
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img class="camera-icon" src="./assets/camera-solid.svg" alt="camera">
                    </div>
                    <img src="./assets/profile/profile.jpg" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                    <small class="form-text text-white-50">Choose Image</small>
                    <input type="file" form="reg-form" class="form-control-file" name="profileUpload" id="upload-profile">
                </div>
            </div>


            <div class="d-flex justify-content-center">
                <form action="form.php" method="POST" enctype="multipart/form-data" id="reg-form">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>" name="firstname" id="firstname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col-6">
                            <input type="number" value="<?php if (isset($_POST['number'])) echo $_POST['number']; ?>" name="number" id="number" class="form-control" placeholder="Contact Number">
                        </div>
                        <div class="col-6">
                            <input type="text" value="<?php if (isset($_POST['gender'])) echo $_POST['gender']; ?>" name="gender" id="gender" class="form-control" placeholder="Gender">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" name="email" id="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" name="password" id="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" value="<?php if (isset($_POST['confirm_pwd'])) echo $_POST['confirm_pwd']; ?>" name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirm Password" required>
                            <small id="confirm_error" class="text-danger"></small>
                        </div>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="agreement" class="form-check" required>
                        <label for="agreement" class="form-check-label font-ubuntu text-white-50"> I agree to the <a href="#">terms, conditions & policy</a></label>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Register</button>
                    </div>
                </form>
            </div>
        </div>
</section>

<?php
include('footer.php');
?>