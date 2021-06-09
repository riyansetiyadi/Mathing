<form action="<?= BASEURL; ?>/Profile/saveEdit" method="post">
    <input type="hidden" name="id" value="<?= $data['user']['accountID'] ?>">
    <label for="username">Username </label>
    <input type="text" name="username" value="<?= $data['user']['username'] ?>">
    <label for="password">Password </label>
    <input type="password" name="password" value="<?= $data['user']['password'] ?>">
    <button type="submit" name="edit">Edit</button>
</form>