<?php

$themes = array_slice(scandir('./styles'), 2);
echo json_encode( $themes );

?>