<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){ 
    $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
    $authorizedExtensions = ['jpg','jpeg','png'];
    $maxFileSize = 2000000;
    

    if(in_array($extension, $authorizedExtensions)){
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . uniqid(). '.' . $extension;

        if( $_FILES['avatar']['size'] > $maxFileSize) {
            $errors[] = "Votre fichier doit faire moins de 1M !";
            echo $errors;
    }

    if (empty($errors)) {
        move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadFile)
            ?>
            <img src="<?php echo $uploadFile; ?>" alt="">
            <?php     
        }
    if(!empty($errors)){
        foreach($errors as $error){
            echo "<p>".$error."</p>";
            }
    }
}
}

?>
<form method="post" enctype="multipart/form-data">
    <label for="imageUpload">Upload an profile image</label>    
    <input type="file" name="avatar" id="imageUpload" />
    <button name="send">Send</button>
</form>