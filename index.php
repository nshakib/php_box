<?php 
    include_once "classes/Shoutbox.php";
    $shout = new Shout();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Basic Shout Box</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
      <div class="wrrapper clr container">
        <header class="headersection clr">
            <h2>Basic Shout Box</h2>
        </header>
          <section class="content clr">
              <div class="box">
                  <ul class="">
                      <?php
                        $getData = $shout->getAllData();
                        if($getData){
                            while($data=$getData->fetch_assoc()){?>
                                <li class="">
                                <span><?php echo $data['time']?></span> - <b><?php echo $data['name']?> </b><?php echo $data['body']?>
                                </li>
                        
                      <?php }} ?>
                      
                  </ul>
              </div>
              <?php
                if($_SERVER['REQUEST_METHOD'] =='POST')
                {
                    $shoutdata = $shout->insertData($_POST);
                }
              ?>
              <div class="shoutform clr">
                  <form action="" method="POST">
                      <table>
                          <tr>
                              <td>Name</td>
                              <td>:</td>
                              <td><input type="text" name="name" required placeholder="Please Enter Your Name"</td>
                          </tr>
                          <tr>
                              <td>Body</td>
                              <td>:</td>
                              <td><input type="text" name="body" required placeholder="Please Enter Your Text"></td>
                          </tr>
                          <tr>
                              <td></td>
                              <td></td>
                              <td><input type="submit" value="Shout It"></td>
                          </tr>
                      </table>
                  </form>
              </div>
          </section>

          <footer class="footersection clr">
              <h2>&copy; Copyright by nshakib</h2>
          </footer>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>