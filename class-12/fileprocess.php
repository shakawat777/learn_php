<?php
/*
$path_parts = pathinfo('/www/htdocs/inc/photos.png');

echo $path_parts['dirname'], "\n";
echo $path_parts['basename'], "\n";
echo $path_parts['extension'], "\n";
echo $path_parts['filename'], "\n";
*/

/*
// Get all path infomations.
$path = "path/to/images/photo.jpg";
$info = pathinfo($path);
print_r($info);
Output:
Array
(
    [dirname] => path/to/images
    [basename] => photo.jpg
    [extension] => jpg
    [filename] => photo
)
    */


    /*
    //Get the specific part of the path:
        $path = "path/to/images/photo.jpg";
        $dirname = pathinfo($path, PATHINFO_DIRNAME);
        echo $dirname; //Output: path/to/images
        echo "\n";
        $basename = pathinfo($path, PATHINFO_BASENAME);
        echo $basename; //Output: photo.jpg
        echo "\n";
        $extension = pathinfo($path, PATHINFO_EXTENSION);
        echo $extension; //Output: jpg
        echo "\n";
        $filename = pathinfo($path, PATHINFO_FILENAME);
        echo $filename; //Output: photo

        */
        // Using time functions for file name extension:
            $path = "photo.jpg";
            $basename = pathinfo($path, PATHINFO_FILENAME);
            $extension = pathinfo($path, PATHINFO_EXTENSION);
            $image = $basename .time(). "_n" ."." . $extension;
            echo $image;
?>