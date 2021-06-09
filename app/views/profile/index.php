<div>
    <?php Flasher::flash(); ?>
</div>
<div>
<label for="username">Username </label>
    <?= $data['user']['username'] ?>
</div>
<div>
<label for="level">Level </label>
    <?= $data['level'] ?>
</div>
<div>
<label for="password">Password </label>
    <?= $data['password'] ?>
</div>




<a href="<?= BASEURL ?>/Profile/edit/<?= $data['user']['accountID'] ?>">edit</a>
<a href="<?= BASEURL ?>/Profile/delete/<?= $data['user']['accountID'] ?>" onclick="return confirm('yakin?')">Delete</a>
