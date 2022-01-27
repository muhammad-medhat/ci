<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('layouts/inc/head')?>

</head>
<body>
    <div class="container">
        <header>
            <h1 class='header'>
                <?= $APPNAME ?>
            </h1>        
            <?= $this->include('layouts/inc/header')?>
        </header>

        <h2>Method: <?= isset($method)? $method: 'XXX'?></h2>
        <div class="content">
            <?= $this->renderSection('body-content')?>
        </div>


        <footer>
            <?= $this->include('layouts/inc/footer')?>
        </footer>
    </div>
</body>
</html>