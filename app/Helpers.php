<?php

function croppedImage($image){
   $explodedPath= pathinfo($image);
    $ImagePathCropped = '\storage\\'.$explodedPath['dirname'].'\\'.$explodedPath['filename'].'-cropped.'.$explodedPath['extension'];
    return $ImagePathCropped;

}
