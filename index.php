<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        class decrypting{
           
            
            /* if($index!=0){
                base64_decode($data);
                return decrypt($index-1,$data);

                }
                return $data;
            }
            */
           
            function decrypt($index,$data){
          
                while($index!=0){
              
                    $data=base64_decode($data);
                    
                }
                return $data;
            }
        }
        
        
        ?>
       
    </body>
</html>
