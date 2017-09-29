<?php

foreach($lesFormation as $form){
    echo "<input onclick='AfficherAgent(this.value)' id='lol'  name='rdoFrom' type='radio' value='".$form->code."'>".$form->intitule."<br>";
}