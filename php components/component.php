<?php 

function inputElement($icon,$placeholder,$name,$value) {

$ele="



<div class="input-group mb-2">
    <div class="input-group-prepend">
        <div class="input-group-text    bg-warning  "> $icon </div>
    </div>
    <input type=\"text\"  name='$name' value='$value'   autocomplete=\"off\" placeholder='$placeholder'  class="form-control" id="inlineForminputGroup" placeholder="Username">
</div>


 ";
 
 echo $ele


}


?>

function buttonElement()