<div class="bg-white bg-profile">
    <div class="jarak-navigasi"></div>
    <div class="container">
        <form action="<?= BASEURL; ?>/Profile/saveEdit" method="post">
            <input type="hidden" name="id" value="<?= $data['user']['accountID'] ?>">
            <div class="my-profile  shadow rounded">
                <div class="grid-profile mb-5">
                    <div class="item1">Username</div>
                    <div class="item2">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><img/ src="<?= BASEURL; ?>/img/user.png" alt=""></span>
                            <input type="text" name="username" class="form-control" value="<?= $data['user']['username'] ?>">
                        </div>
                        
                    </div>
                    <div class="item3">Password</div>  
                    <div class="item4">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><img/ src="<?= BASEURL; ?>/img/key.png" alt=""></span>
                            <input type="password" name="password" class="form-control" value="<?= $data['user']['password'] ?>">
                        </div>
                    </div>
                </div>
                <button type="submit" name="edit" class="btn btn-warning me-3">Edit</button>
                <a href="<?= BASEURL; ?>/Profile/index/<?= $_SESSION["id"] ?>" class="btn btn-info me-3">Kembali</a>
            </div>
        </form>
    </div>
</div>