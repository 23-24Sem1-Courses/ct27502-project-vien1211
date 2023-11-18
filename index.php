 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PVCooking</title>
    <link rel="icon" type ="image/x-icon" href="/public/img/logo.png">
</head>
<body>
     
    
        <?php

        
            
            // require_once __DIR__  . '../vendor/autoload.php';

            
           

            spl_autoload_register(function($class){
                 include_once 'system/libs/'.$class.'.php';
            });
            
            include_once 'app/config/config.php';
       
            $main = new Main();
          ?> 
</body>
</html>