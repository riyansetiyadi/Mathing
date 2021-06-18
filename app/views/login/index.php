    <div class="hal-login ms-auto me-auto rounded-3 p-5">
        <img src="img/logo.png" class="logo mb-3" alt="">
        <h2 class="text-center mb-2">Member Login</h2>
        <form action="<?= BASEURL; ?>/Login/loginPermission" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><img/ src="img/user.png" alt=""></span>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><img/ src="img/key.png" alt=""></span>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label">Remember me</label>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-login">Login</button>
        </form>
    </div>
    <div class="reg-text mt-3">
        Tidak punya akun? <a href="<?= BASEURL ?>/Register">Register</a>
    </div>
