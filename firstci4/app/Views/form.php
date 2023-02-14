<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Validation</title>
  </head>
  
  <body>
      <div class="container">
          <h1>Form Validation</h1>
          <?php if(isset($validation)) : ?>
            <div class="text-danger">
              <?= $validation->listErrors()?>
            <?php endif; ?>
            <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" value="<?= set_value('email')?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" value="<?= set_value('password')?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>        
        <div class="form-group">
                <label for="exampleInputSelectCategory">Category</label>
                <select name="category" class="form-control">
                    <?php foreach ($categories as $cat) : ?>
                        <option <?= set_select('category', $cat) ?> value="<?= $cat ?>"><?= $cat ?></option>
                    <?php endforeach; ?>
                </select>
        </div>

        <div class="form-group">
                <label for="date">Date</label>
                <input name="date" type="date" value="<?= set_value('date')?>" class="form-control" id="date">
        </div>
        <div class="form-group">
              <label for="exampleFormControlFile1">Upload File</label>
              <input type="file" multiple name="theFile[]" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <?php
          echo'<pre>';
          print_r($_POST);
          echo'</pre>';
          ?>
  
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>

      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
                    -->
  </body>
</html>