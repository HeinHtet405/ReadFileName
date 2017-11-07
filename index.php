<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $files = glob("images/*.*");
        for ($i = 0; $i < count($files); $i++) {
            $image = $files[$i];
            $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
            );

            $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_file)) {
                echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
                echo '<img src="' . $image . '" alt="Random image" width="150px"; height="150px"; />' . "<br /><br />";
            } else {
                continue;
            }
        }
        ?>
    </body>
</html>
