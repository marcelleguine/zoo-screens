<?php
  if ($handle = opendir('.')) {
    echo "Directory handle: $handle\n";
    echo "Entries:\n";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
      if ($entry == '.' || $entry == '..' || $entry == 'build.php') {
        continue;
      }
      if (is_file($entry) && pathinfo($entry,  PATHINFO_EXTENSION) == 'php'){
        $pathinfo = pathinfo($entry,  PATHINFO_EXTENSION);
        
        //desktop
        $command = "php " . $entry . " > ../" . str_replace(".php", ".html", $entry) . "\n";
        echo $command;
        exec($command);
      }
    }
    closedir($handle);
  }
?>