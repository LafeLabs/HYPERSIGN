<?php
//mkdir.php?dir=[dirname]

$dirname = $_GET["dir"];//get dir
mkdir($dirname);

if(isset($_GET["replicator"])){

    $replicatorurl = $_GET["replicator"];
    copy($replicatorurl,$dirname."/replicator.php");
    
}
else{
    copy("php/replicator.txt",$dirname."/replicator.php");    
}



echo "<a href = \"".$dirname."/replicator.php\">".$dirname."/replicator.php</a>";

?>
<style>
body{
    background-color:#9f8767;
    font-family:Comic Sans MS;
    font-size:3em;
}
    a{
        font-size:3em;
    }
</style>