<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:slnt,wght@-11..11,300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update |تعديل منتج   </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
     include('config.php');
     $ID = $_GET['id']; 
     $up = mysqli_query($con,"select * from prod where id =$ID");
     $data = mysqli_fetch_array($up);

    ?>
    <div >
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>  تعديل المنتجات</h2>
                <img src="strom.png" alt="logo" width="250px">
                <br>
                <input type="text" id="ID" name='id' value='<?php echo $data['id']?>'>
                <label for="ID">المعرف</label>
                <br>
                <input type="text" id="name"  name='name' value='<?php echo $data['name']?>'>
                <label for="name">اسم المنتج</label>                
                <br>
                <input type="text" id="prix" name='price' value='<?php echo $data['price']?>'>
                <label for="prix">سعر المنتج</label>
                <br>
                <input type="text" id="class" name="class" value='<?php echo $data['class']?>'>
                <label for="class">قسم المنتج</label>
                <br>
                <input type="file" id="file" name='image' style="display:none;">
                <label for="file" id="image">تحديث صورة المنتج</label>
                <button name="update" type="submit">تعديل المنتج ✅</button>
                <br>
                <a href="admin.php">عرض كل المنتجات </a> 
            </form>
        </div>

    </center>
    </div>        
    
</body>
</html>
