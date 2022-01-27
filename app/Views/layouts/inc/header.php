<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item"><?= anchor(base_url('/'),'Show Contacts', 'class="nav-link"'  )?>
        <li class="nav-item"><?= anchor(base_url('contacts/insert'), 'Add', 'class="nav-link"' )?>
        <li class="nav-item"><?= anchor(base_url('contacts/add_new'), 'Add New', 'class="nav-link"' )?>
    </ul>
  </div>
</nav>

<?php if(isset($alert) and $alert != '') { ?>
    <div class="alert <?= $alert->class?>" role="alert">
        <?= $alert->message?>
    </div>
<?php } ?>
<?php if(session()->get('success')){ ?>
    <div class="alert alert-success">
        <?= session()->get('success')?>
    </div>
<?php } ?>
<?php if(session()->get('error')){ ?>
    <div class="alert alert-danger">
        <?= session()->get('error')?>
    </div>
<?php } ?>
<h1 class='text-center text-capitalize'>    
    <?=isset($title)?$title: 'untitled '?>
</h1>
