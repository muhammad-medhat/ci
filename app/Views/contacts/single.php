
<img src=" <?= isset($photo)? $photo: ''?>" alt="" >
<h2>Name: <?= isset($name)? $name: 'Unkown'?></h2>
<h3>Num:  <?= isset($phone)? $phone: 'XXX'?></h3>

<div class="text-center col-lg-3 col-md-6 col-sm-12">
    <img src="<?=$key['photo'] ?> " alt="<?= $key['name'] ?>">
    <h5>
        <?=  $key['name'] ?>
    </h5>
    <h6>
        <?=  $key['phone'] ?>
    </h6>
</div>
