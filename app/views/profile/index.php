<div class="bg-white bg-profile">
    <div class="jarak-navigasi"></div>
    <div class="container">
        <div>
            <?php Flasher::flash(); ?>
        </div>
        <div class="my-profile  shadow rounded">
            <div class="grid-profile mb-5">
                <div class="item1">Username</div>
                <div class="item2"><?= $data['user']['username'] ?></div>
                <div class="item3">Level</div>  
                <div class="item4">
                    <?= $data['level']['level'] ?>
                    <div class="progress" data-bs-toggle="tooltip" data-bs-placement="right" title="Membutuhkan <?= $data['level']['limit']-$data['level']['exp'] ?> exp untuk naik ke level berikutnya">
                        <div class="progress-bar" role="progressbar" style="width: <?= $data['level']['exp'] ?>%" aria-valuenow="<?= $data['level']['exp'] ?>" aria-valuemin="0" aria-valuemax="<?= $data['level']['limit'] ?>"></div>
                    </div>
                </div>
                <div class="item5">Password</div>  
                <div class="item6"><?= $data['password'] ?></div>
            </div>
            <a href="<?= BASEURL ?>/Profile/edit/<?= $data['user']['accountID'] ?>" class="btn btn-warning me-3">edit</a>
            <a href="<?= BASEURL ?>/Profile/delete/<?= $data['user']['accountID'] ?>" onclick="return confirm('yakin?')" class="btn btn-danger">Delete</a>
        </div>
    </div>
</div>