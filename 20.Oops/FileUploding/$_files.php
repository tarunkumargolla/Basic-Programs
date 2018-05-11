<?php
echo "we can uploade the file from client to server","<br>";
if(isset($_POST["s1"]))
{
    if(is_file($_FILES["files"]["tmp_name"]))
    {
        $filename=$_FILES["files"]["name"];
        //create uploads folder in E:drive (or)locatio
        if(move_uploaded_file($_FILES["files"]["tmp_name"],"E:\uploads\.$filename"))
        {
            echo "file is moved";
        }
        else 
        {
            echo "file is Not Moved";
        }
    }
}
?>
<html>
    <body>
        <form method="POST"enctype="multipart/form-data">
         SelectedFile:<input type="file"name="files"/>
         <input type="submit"name="s1"value="upload"/>
        </form>
    </body>
</html>