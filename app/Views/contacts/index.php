<?= $this->extend('layouts/main.php')?>

<?= $this->section('body-content')?>
<div class="row">

        <?php foreach ($contacts as $key) { ?>
            <?php  //view_cell('App\Libraries\Contactslib::single', $key)?>


            <div class="text-center col-lg-3 col-md-6 col-sm-12">
                <img src="<?=$key['photo'] ?> " alt="<?= $key['name'] ?>">
                <h5>
                    <?=  $key['name'] ?>
                </h5>
                <h6>
                    <?=  $key['phone'] ?>
                </h6>
            </div>
        <?php } ?>
</div>
<hr>
<hr>
<hr>
<hr>
        <div class="text-center1">


            <table class="table table-sm table-striped">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Photo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $key) { ?>
                    <tr>
                        <th scope="row"><?=$key['id']?></th>
                        <td>
                            <?= anchor(base_url('contacts/single'), $key['name'], 'class="nav-link"' )?>
                        </td>
                        <td><?=$key['phone']?></td>
                        <td>
                            <img src="<?=$key['photo']?>" alt="" srcset="">
                        </td>
                    </tr>
                <?php } ?>


            </tbody>
            </table>
        </div>
<?= $this->endSection()?>