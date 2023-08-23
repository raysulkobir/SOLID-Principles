<?php
include "inc/header.php";
?>
The open-closed principle states that software entities (classes, modules, functions, and so on) should be open for extension, but closed for modification.

You are probably wondering why that statement sounds like a contradiction. Like why would something be opened and be closed at the same time?

Well, in the land of software development, it’s possible for an item to be opened for extension and be closed for modification. It means you or your team members should be able to add new functionalities to an existing software system without changing the existing code.

The open-closed principle encourages software engineers to focus on what’s necessary when it’s time to add new functionalities.

If you want to add new functionality to your existing code and you have to modify it before you add the new functionality, then you are not following the open-closed principle.

<hr>
<h1>O-Open Closed Principle</h1>
<hr>

<?php
class FileDisplay
{
    function display($file, $fileType)
    {
        if ('mp4' == $fileType) {
            return "MP4 file";
        } else if ('mp3' == $fileType) {
            return 'MP3 file';
        }
    }
}

$file = new FileDisplay;
$file->display('test', 'mp4');

//* This is Open-Closed Principle

interface FileInterface
{
    function display();
}

class ImageFile implements FileInterface
{
    function display()
    {
        echo "this is image file";
    }
}

class VideoFile implements FileInterface
{
    function display()
    {
        echo "this is video file";
    }
}

$video = new VideoFile;
$video->display();





?>

<?php include "inc/footer.php"; ?>