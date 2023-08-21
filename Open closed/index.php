<?php
include "inc/header.php";
?>
<!-- The Open-Closed Principle requires that classes should be open for extension and closed to modification. -->

<?php
    class FileDisplay{
        function display($file, $fileType){
            if('mp4'==$fileType){
                return "MP4 file";
            }else if('mp3'==$fileType){
                return 'MP3 file';
            }
        }
    }

    $file = new FileDisplay;
    $file->display('test', 'mp4');

    //* This is Open-Closed Principle

    interface FileInterface{
        function display();
    }
    
    class ImageFile implements FileInterface{
        function display(){
            echo "this is image file";
        }
    }

    class VideoFile implements FileInterface{
        function display(){
            echo "this is video file";
        }
    }

    $video = new VideoFile;
    $video->display();

   


    
?>

<?php include "inc/footer.php"; ?>