<?php
    include ('dados/array1.php');
   
    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>index</title>
        
        <link rel="stylesheet" type='text/css' href="css/style.css">
    </head>

    <body>
   

            <header>
            
                <?php
                    include ("dados/menu.php");
                ?>
                   
            </header>
            <section>
                <h2><?php 
                         @$pagina = $_GET['a'];

                         if(isset($pagina)){
                             include $pagina;
                             
                         }
                            else{
                             echo 'Produtos';
                        
                        ?>
                    </h2>
            
                <ul class='vitrine'>
                <?php
                    foreach ($produtos as $produtos){
                ?>
                <li>
                    <h3><?php echo $produtos['nome'];?></h3>
                    
                    <img src='<?php echo $produtos['imagen'];?>'/>
                    <h3><?php echo $produtos['descricao'];?></h3>
                    <h3><?php echo $produtos['valor'];?></h3>
                   
                    </li>
                    <?php   
                }
            }
                ?>
            </ul>
            </section>
              
            <footer>
                    <h4><br>Rodrigo Mariano<br> RA: 20035178-5</h4>
                    
            </footer>
    </body>
</html>
