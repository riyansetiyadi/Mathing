
    <div class="hal-login ms-auto me-auto rounded-3 p-5">
        <img src="img/logo.png" class="logo mb-3" alt="">
        <h2 class="text-center mb-2">Member Register</h2>
        <form action="<?= BASEURL ?>/Register/registerPermission" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username </label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><img/ src="img/user.png" alt=""></span>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password </label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><img/ src="img/key.png" alt=""></span>
                    <input type="text" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <button type="submit" name="register" class="btn btn-primary btn-login">Register</button>
        </form>        
    </div>
    <div class="reg-text mt-3">
        Sudah punya akun? <a href="<?= BASEURL ?>/Login">Login</a>
    </div>
