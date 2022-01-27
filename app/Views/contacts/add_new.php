<?= $this->extend('layouts/main.php')?>

<?= $this->section('body-content')?>


        <form method='post' action="/contacts/add_new">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="name" name='name' class="form-control" placeholder="Enter name" id="name">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="phone" name='phone' class="form-control" placeholder="Enter phone" id="phone">
            </div>
            <!-- <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


<?= $this->endSection()?>