<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="pstyle.css" />
</head>
<body>
    <div class="flex-container">
        <?php include 'header.inc.php' ?>
        <?php  echo '<h1>', $greet, '</h1>'  ?> </h1>       
        <?php include 'data.inc.php' ?>
        <?php include 'article.inc.php' ?>  
        <?php include 'footer.inc.php' ?> 
    </div>
</body>
</html>
