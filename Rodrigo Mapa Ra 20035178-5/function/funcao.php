<?php include ('dados/array1.php');?>

<?php
    function produto($array,$id){
        echo "".$array[$id]['descricao']."<br>";
        return null;
    }
?>
<?php 
    function produtos($array){
        $cont = 1;
        for($i =1;$i<=17;){
            echo '
            <div id="contact">
            <address>
                <h1>'.$array[$i]['titulo'].'</h1>
            </address>
            </div>';
            
            for($j=1;$j<4;$j++){
                echo '
                <article class="gallery-card">
                    <a href="paginas/desc_produto.php?id='.$cont.'" target="_blank">
                    <img src="imagens/'.$array[$cont]['img-caminho'].'" width="250" height="190" alt="Torta de Morango">
                    </a>
                    <p class="gallery-title">'.$array[$cont]['nome'].'</p>
                </article>';
                    $cont ++;
                }
                $i +=3;
        }
        return null;   
    }
?>