<?= $this->extend('layouts/main.php')?>

<?= $this->section('body-content')?>


        <?php //= form_open("/contacts/insert", array('method'=>'get')); ?>
        <?= form_open("/contacts/insert"); ?>

                <?=csrf_field() ?>

                <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" name='name' id="exampleInputName" placeholder="Enter Name">
                </div>


                <div class="form-group">
                <label for="exampleInputPhone">Phone</label>
                <input type="Phone" class="form-control" name='phone'  id="exampleInputPhone" placeholder="Enter Phone">
                </div>


                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->


                <input id='btnInsert' type="submit" name='submit' value='Submit' class="btn btn-primary" />
        <?= form_close(); ?>



<?= $this->endSection()?>