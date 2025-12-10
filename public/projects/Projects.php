<?php
  
  


    function displayFiles($path)
    {
        
        $dirs = glob( $path .'[!.]*');

        foreach ($dirs as $dir) {
            echo "<button >$dir</button>";
        }
       
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <link rel="stylesheet" href="../index.css">
    <!-- <script type="module" src="index.js" async></script> -->
</head>
<body>
<header>
    <img  src="../assets/title.png">
</header>
<main>

<?php
    displayFiles("");
?>    
</main>








</body>
</html>