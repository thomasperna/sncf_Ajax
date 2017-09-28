<?php

foreach($lesFormation as $form){
    echo "<input type='radio' value='".$form->code."'>".$form->intitule."";
}