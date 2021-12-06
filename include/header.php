<?php

define("ROOT", __DIR__ ."/");
define("HTTP", ($_SERVER["SERVER_NAME"] == "localhost")
   ? "http://localhost/dummy/"
   : "http://actualwebsite.ru/"
);


 ?>



    <header>
        
    <nav>
            <div class="logo">
                <a href="<?php echo HTTP;?>index.php" id="logo a"><span>D</span>u<span>M</span>m<span>Y</span>s<span>I</span>te</a>
            </div> 
            
        
            
            
            <ul class="navul">
                <li><a href="<?php echo HTTP;?>about.php">About bank</a></li>
                <li><a href="<?php echo HTTP;?>map/atm_pos.php">ATMs</a></li>
                <li><a href="<?php echo HTTP;?>online_bank.php">Online banking</a></li>
                <!-- <li><input type="checkbox" class="toggle-menu"> <div class="hamburger"></div> </li> -->
            </ul>
        
               
                    <input type='checkbox' class='toggle-menu'/>
                    <div class="hamburger"></div>
                
        </nav>

    </header>