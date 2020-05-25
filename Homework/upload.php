<form  class="form-signin" action="upload.php" enctype="multipart/form-data" method="post">

    Select image :<br>

    <input type="file" name="UploadFile"> <br>


    <input type="submit"  value="Upload" name="Enter">

</form>

<input type="button" value="Logout" onClick="document.location.href='OUT.php'">
<?php
session_start();
if(isset($_POST['Enter']))
{

    $Fileupload= "Image/" . $_FILES["UploadFile"]["name"];

    $check=getimagesize($_FILES['UploadFile']['tmp_name']);

    if($check!==false){

    }
    else { $error = 'file is not an image.';
    }

    if($_FILES['UploadFile']['size']>100000000) {
        $error = 'Your file is large.';}



    if(!empty($error)){
        $error = 'sorry,your file was not uploaded.';
    }


    if(empty($error)) {
        if(move_uploaded_file($_FILES["UploadFile"]["tmp_name"], $Fileupload))
        {
            $_SESSION['Image']=$Fileupload;
        }
        else
        {
            echo $error;
        }
    }}
?>


<?php if(isset($_SESSION['Image'])):?>
    <img src="<?php print $_SESSION['Image'];?>" alt="sad"><br>
<?php endif?>
