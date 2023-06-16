<div class="opcion">
    <?php
        $widthBar = $porcentaje * 5;
        $estilo = "barra";

        if($survey->getOptionSelected() == $lenguaje['name']){
            $estilo = "seleccionado";
        }

        echo $lenguaje['name'];
    ?>
    <div class="<?php echo $estilo; ?>" style="width: <?php echo $widthBar . 'px;' ?>"><?php echo $porcentaje . '%';  ?></div>
   
</div> 