<?PHP
// connect to the database
include('../../code/connection.php');
//$conn = mysqli_connect('localhost', 'root', '', 'st_kizito');
// $id=$_POST['id'];

$title=$_POST['title'];
$news=$_POST['news'];

$now=date("Y,d,m");
// Uploads files
if (isset($_POST['book_upload'])) { // if save button on the form is clicked
   //$_FILES=$_POST['myfile']['name'];
    // name of the uploaded file
     $filename= $_FILES['myfile']['name'];
    $image ="assets/nimg/".$filename;

    // destination of the file on the server
    $destination = '../../assets/nimg/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['jpeg','png', 'jpg'])) {
        echo "You file extension must be .jpg .png, .jpg ";
    } elseif ($_FILES['myfile']['size'] < 10000) { 
        echo "File too large!";
    } else {
        if (move_uploaded_file($file, $destination)) {
            $sql="INSERT into news VALUES('','$title','$news','$image','$now')";
            //UPDATE `message` SET `message` = 'hello ss' WHERE `message`.`m_id` = 1;
            if (mysqli_query($conn, $sql)) {
                
                echo "<script>window.alert('success and Thank you  to add news ');window.location='../newupdate.php'</script>'";
            }else{ echo "<script>window.alert(' Fail  try again');window.location='../newupdate.php'</script>'";}
        } else {
            echo "Failed to upload file.";
        }
    }
}
?>