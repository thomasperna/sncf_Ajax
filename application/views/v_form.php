<?php

foreach($lesFormation as $form){
    echo "<input id='lol'  name='rdoFrom' type='radio' value='".$form->code."'>".$form->intitule."<br>";
}