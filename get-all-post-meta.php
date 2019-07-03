<?php 
	// Retrieve all the custom meta data (even the hidden ones) 
	$postCustoms = get_post_custom();
?>

<?php
    foreach($postCustoms as $name=>$metaValue) {
        echo "<b>".$name."</b>"."  =>  ";
        foreach( $metaValue as $na=>$val ){
                echo "<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo $na."  =>  ";
                echo var_dump($val);
        }
        echo "<br /><br />";
    }
?>
