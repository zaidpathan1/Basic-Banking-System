<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <script src="./bootstrap-4.3.1-dist/js/bootstrap.min.js">
  </script>

  <title></title>
</head>

<body>
  <?php
    $conn = include_once('config.php');
    $sql = "SELECT * FROM users";
    $res = mysqli_query($conn, $sql);
       
	
   ?>
   <div class="row-md-12" style="background-color: #f08a5d; height: 51px;"
  style="height:100">
    <div class="col-md-12">
      <div class="col-md-6" style="float: RIGHT; text-align:right; ">
        <a href="#"><strong>HOME</a> | <a href="#">About us</a> | <a href="#">Contact us</strong></a>
      </div>
      <div class="col-md-6">

        <h2>GRIP Bank</h2>

      </div>

    </div>
  </div>

  <div class="container">
    <h1 class="text-center pt-4">Transfer Money</h1>
    <div class="row">
      <div class="col">
        <div class="table-responsive-sm">
          <table class="table table-hover table-sm table-striped table-condensed table-bordered">
            <thead>
              <tr>
                <th scope="col" class="text-center py-2">ID</th>
                <th scope="col" class="text-center py-2">Name</th>
                <th scope="col" class="text-center py-2">Email</th>
                <th scope="col" class="text-center py-2">Balance</th>
                <th scope="col" class="text-center py-2">Operation</th>
              </tr>
            </thead>
            <tbody>
              <?php
                    while($result=mysqli_fetch_assoc($res)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $result['id'] ?></td>
                        <td class="py-2"><?php echo $result['name']?></td>
                        <td class="py-2"><?php echo $result['email']?></td>
                        <td class="py-2"><?php echo $result['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $result['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
