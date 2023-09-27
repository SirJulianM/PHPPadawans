<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <?php 
        for ($i=1; $i <=31 ; $i++) { 
            echo "<option>$i</option>";
        }        
        ?>
    </select>
    <select name="" id="">
        <?php 
        for ($i=1; $i <=12; $i++) { 
            echo "<option>$i</option>";
        }
        ?>
    </select>
    <select name="" id="">
        <?php 
        for ($i=1950; $i<2024 ; $i++) { 
            echo "<option>$i</option>";
        }
        ?>
    </select>
</body>
</html>