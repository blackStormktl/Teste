    <?php
        $Menu =array (
            array(

            "icon" =>"fa fa-home",
            "url" => "index.php",
            "name" => "Home",
            "icons" =>"fa fa-angle-right",

            
        ),
        array(
                "icon"  => "",
                "url"   => "#",
                "name" => "Dashboard",
                "icons" => ""
        ),


        array(
                "icon"  => "",
                "url"   => "#",
                "name" => "Cadastro > Produtos",
                "icons" => ""
        ),


         array(
            "icon"  => "",
            "url"   => "#",
            "name" => "Cadastro > Perfil de acesso",
            "icons" => ""
        ),


        array(
            "icon"  => "",
            "url"   => "#",
            "name" => "Relatório > Produtos ",
            "icons" => ""
            )
        );

        usort($Menu, function($a, $b) {
        return strcmp($a['name'], $b['name']);
});

    ?>


 <?php foreach($Menu as $item): ?>
    
    <li>
        <i class="<?php echo $item['icon'];?>"></i>
        
        <a href="<?php echo $item['url']?>"> <?php echo $item['name']?></a>
        <i class="<?php echo $item['icons'];?>"></i>

    </li>



    <?php endforeach;?>

