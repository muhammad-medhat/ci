<?= $this->extend('layouts/main.php')?>

<?= $this->section('body-content')?>

xxxxxxxxxxxxxxxxxxxxxxxxxxx

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputPhone">Phone</label>
    <input type="Phone" class="form-control" id="exampleInputPhone" placeholder="Enter Phone">
  </div>




  <button type="submit" class="btn btn-primary">Submit</button>
</form>






<?= $this->endSection()?>