<form action="<?= BASEURL; ?>/Login/loginPermission" method="post">
    <label for="username">Username </label>
    <input type="text" name="username">
    <label for="password">Password </label>
    <input type="text" name="password">
    <div class="remember-me input">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label>
    </div>
    <button type="submit" name="login">Login</button>
</form>
<a href="<?= BASEURL ?>/Register">Register</a>