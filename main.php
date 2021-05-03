<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="/css/style.css"/>
</head>
<body>
    
    <div class="flex-container">
        <div class="header">     
            <?php include './includes/logo.php' ?>         
            <?php include './includes/menu.php' ?>	   
        </div>       
     
        <div class="main_wrapper">
            <div class="about_me">

                <div class="data">
                    <div class="fullname">
                        <h1>
                            <?php  echo $p;  ?>
                        </h1>
                        <p>Добро пожаловать на сайт посвещенный web разработки и тестированию на проникновение.</p>
                        <p> Меня зовут 
                            <?php
                                echo $name, ' ', $surname; 
                                echo ', город', ' ', $city;
                                echo ', ' . $age . 'лет';
                            ?>                                      
                        </p> 
               
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                            Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                        </p>
                        <p> Мы научились создавать переменные </p>
                        <p> Изучили простые операции с ними </p>
                        
                        <div class="knowledge">
                            <?php include './includes/knowledge.php'; ?>
                            <?php echo $a, ' ', $b, ' ', $c; ?><br>
                                               
                            <?php
                                $a = 10;
                                $b = 20;
                                $c = $a + $b;
                                echo $c;
                            ?><br>                
                            
                            <?php
                                echo $d;
                            ?> 
        
                        </div>
                    </div>

                    <div class="myImg">
                        <?php echo '<img src="/img/me.jpg">'; ?>                    
                    </div>
                </div>
            </div>
        </div>

        <?php include './includes/footer.php' ?>

    </div>
</body>
</html>
