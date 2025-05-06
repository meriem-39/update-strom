<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:slnt,wght@-11..11,300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope online | اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div >
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>متجر الكتروني اونلاين</h2>
                <img src="strom.jpg" alt="logo" width="250px">
                <br>
                <input type="text" id="name"  name='name'>
                <label for="name">اسم المنتج</label>                
                <br>
                <input type="text" id="prix" name='price'>
                <label for="prix">سعر المنتج</label>
                <br>
                <input type="text" id="class" name="class">
                <label for="class">قسم المنتج</label>
                <br>
                <input type="file" id="file" name='image' style="display:none;">
                <label for="file" id="image">اختيار صورة للمنتج</label>
                <button name="upload">رفع المنتج ✅</button>
                <br>
                <a href="admin.php">عرض كل المنتجات </a> 
            </form>
        </div>

    </center>
    </div>        
    
</body>
</html>
