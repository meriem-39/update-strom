<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>strom shoop</title>
        <meta name="description" content="" /> <!-- ba3den -->
        <link rel="stylesheet" href="P_one.css" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            
    </head>
    <body>
            <header>
                <div class="heder">
                    <img class="logo" src="strom.png" alt="logo" width="200" height="200">
                    
                    <div > 
                        
                        <div class="serh">
                            
                            <button type="submit" class="q"><i class ='bx bx-search'></i> </button>
                            <input type="text" placeholder="search...">
                            <button type="submit"  class="x"><i class='bx bx-x'></i></button>
                            
                        </div>
                        <div class="list">
                            
                            <a href="#"><i class='bx bxs-home-alt-2'></i></a> 
                            <a href="#"><i class='bx bxs-extension' ></i></a>
                            <a href="#"><i class='bx bxs-cart'></i></a>
                            <a href="#"><i class='bx bx-headphone'></i></a>
                        
                        </div>
                        
                    </div>
                
                    <input class="log-in" type="button" value="log/sign in" />
                </div>

                
            </header> 
             <br>
            <div class="part">      <!-- الاقسام --> 
                      <a href="#">Phones</a>  
                      <a href="#">Tablets</a> 
                      <a href="#">Watches</a> 
                      <a href="#">Speakers</a> 
                      <a href="#">Laptops</a> 
                      <a href="#">Smart TVs</a>
                      <a href="#">Consols</a>
            </div>
                <hr>

<!--                 
            <div class="medel">
                <div class="cut">
                       <div class="cut1">

                       </div>
                       <div class="cut2">

                       </div>
                </div>












                <div class="add">
                    <i class='bx bx-left-arrow-alt'></i>
                    
                    <div>
                        <div class="prodoie">
                            <img class="img" src="8GB Spotify Flash Drive_ Flash drive folds into a protective aluminum cover_.jpeg" alt="pro">
                            <div>
                                <p class="name">Flash</p>
                                <p class="cach">5</p>
                            </div>
                        </div> 
                        
                        <div class="prodoie">
                            <img class="img" src="سماعة remax بلوتوث.jpeg" alt="pro">
                            <div>
                                <p class="name">head phon</p>

                                <p class="cach">6</p>
                            </div>   
                                
                        </div>
                        <div class="prodoie">
                            <img  src="Trendy Brand Soft Cartoon Case hp ITEL A70 S23 RS4 Infinix GT 20 Pro Infinix Smart 8 Zero 30 5g Hot 40 Pro Note 30 Pro Hot 30i Hot 20s 11s 20i Hot 12 Play 12 11 10 Fantasy Kasing Hp Infinix Note 12 Doraemo.jpeg" alt="pro">
                            
                            <div>
                                <p class="name">caver</p>
                                <p class="cach">15</p>
                            </div>  
                        </div>
                    </div>
                    
                    <i class='bx bx-right-arrow-alt' ></i>
                </div>
            </div>  -->
         <?php
             include('config.php');
             $result=mysqli_query($con,"SELECT * FROM prod");
             while($row = mysqli_fetch_array($result)){
                  echo"         
 
        <div class="prodoie-part">

            <div class="prodoie">
                <img class="card-img-top" src="..." alt="...">
            
                <p class="name">Flash</p>
                <hr>
                <p class="cach">10$</p>
                 <div>
                    <button class="bay">add to card<i class='bx bxs-card'></i></button>
                    <button class="sey">prodduct vision</button>
                </div>
            </div>
            "; } 
         ?>



            <div class="foter">                       <!-- البلاصة الفضية في الاسفل فيها الخدمة وحسابات الاونلاين وتعريف للستروم (; -->
                <ul>  <h3 id="right">Copyright</h3>
                    <p> © 2025 C_Storm. All rights reserved .
                        <br>All content,including texts,images,logos and <br>
                        designs is protected under copyright and trademark laws </p>
                </ul>

                <ul>  <h3 id="right"> privacy policy</h3>
                <P> Use of this website is subject to our <br> terms of use and privacy policy </P>
                
                </ul>

                <ul>  <h3 id="right">Account and user </h3>
                    <p>. you may be required to create an <br>account to access certain servises </p>
                    <p>. you must keep your login credentials confidential<br> and not share them whith any third party</p>
                    <p>. We reserve the right to suspend or terminate<br> your account if you violate these terms</p>
                </ul>
                <ul>
                    <h3 id="right"> Cantact us </h3>
                    <p>If you have any inquiries about these terms, you can contact us via email at:
                        support@cstorm.com</p>
                </ul>
        </div>
    </body>
</html>
