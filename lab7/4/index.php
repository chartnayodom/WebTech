<!doctype html>
<html lang="en">
  <head>
    <title>Lab7_4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'gallery.php'?>
    <div class="container-fluid">
        <div class="row">
            <!-- <img src="https://lh3.googleusercontent.com/F1LUlSm-JMEYFM_qfb9hDQ2KqLVCZp3zQ07prKJurq5p5dGSaMKiSggXLNaK30uvElY_2udXRq5KGWjJ7lSW6x8lbYWZ8IX9WDMhJ6qRDi_bDhXH-a4ttk8SWsiicKB6YX7_8YCF7Fg=w2400"> -->
            <h1>My gallery</h1>
        </div>
        <div class="row">
            <div class="col">
                <?php 
                for($i = 0; $i<5; $i++){
                  echo '<img src="'.$image[$i].'" class="img-fluid">';
                }?>
            </div>
            <div class="col">
            <?php 
                for($i = 5; $i<10; $i++){
                  echo '<img src="'.$image[$i].'" class="img-fluid">';
                }?>
            </div>
            <div class="col">
            <?php 
                for($i = 10; $i<15; $i++){
                  echo '<img src="'.$image[$i].'" class="img-fluid">';
                }?>
            </div>
            <div class="col">
            <?php 
                for($i = 15; $i<20; $i++){
                  echo '<img src="'.$image[$i].'" class="img-fluid">';
                }?>
            </div>
                
        </div>
    </div>
      
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>