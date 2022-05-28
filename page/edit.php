<main class="main">
    <section class="head">
        <h2 class="head__title"><?= $userInfo["user_login"] ?></h2>
        <p class="head__date"><?= $pageDate ?> </p>
    </section>
    <img class="user-img" src="<?= $userInfo["img_path"] ?>" alt="">
    <br>
    <form action="./includes/user-avatar.php" method="POST" enctype="multipart/form-data" class="userForm">

        <h3>Добавить фотографию</h3>
        <input name="avatar[]" type="file" accept="image/jpg, image/jpeg, image/png,image/svg, image/gfif" multiple>
        <button class="form__btn">Добавить</button>
    </form>
    <br>
    <form action="./includes/user-edit-photos.php" method="POST" class="avatars">
        <? foreach ($getPhotos as $key => $value) : ?>
            <label class="avatars__label">
                <img src="<?= $value['img_path'] ?>" alt="" class="avatars__img">
                <input value="<?= $value['img_id'] ?>" class="avatars__input" type="radio" name="avatars-check"
                <?=$value['img_select']==1 ? 'checked' : ''?>>
                <span class="avatars__span">
                    <i class="far fa-check"></i>
                </span>
                <a class="avatars__trash" href="#">
                    <i class="far fa-trash-alt"></i>
                </a>
            </label>

        <? endforeach; ?>

        <div class="avatars__btn">
            <button class="form__btn">Изменить фoтoгpафию</button>
        </div>
    </form>
</main>