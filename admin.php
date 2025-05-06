/*لوحة تحكم الادمن*/
<!DOCTYPE html>
<html lang="en">
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:slnt,wght@-11..11,300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | المنتجات</title>
    <style>
        h3{
            font-family: "Cairo", sans-serif;
            font-weight: bold;
        }
        .card{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width:100%;
            height: 200px;
        }
        main{
            width: 99%;
        }
    </style>
</head>
<body>
    <center>
        <h3>  لوحة تحكم الادمن</h3>
        <p>admin: <span><?php echo $_session['admin']; ?></span></p>
        <a href="index.php"><button>back to the product entry page </button></a>
        <a href="logout.php"><button>logout</button></a>
    </center>
   <?php
      include('config.php');
      $result=mysqli_query($con,"SELECT * FROM prod");
      while($row = mysqli_fetch_array($result)){
           echo"
            <center>
                <main>
                    <div class='card' style='width: 18rem;'>
                        <img src='$row[image]' class='card-img-top'  >
                        <div class='card-body'>
                            <h5 class='card-title'>$row[name]</h5> <!--اسم المنتج -->
                            <p class='card-text'>$row[price]</p><!-- مخصص للسعر-->
                            <p class='card-text'>$row[class]</p><!-- اسم القسم-->
                            <a href='delete.php?id=$row[id]' class='btn btn-danger'>حذف المنتج</a>
                            <a href='update.php?id=$row[id]' class='btn btn-primary'>تعديل المنتج</a>
                        </div>
                    </div>
                </main>
            <center>
           ";

      }
   ?>
  
   
    
    </body>
    </html>
