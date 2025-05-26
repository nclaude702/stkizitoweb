<?PHP
// connect to the database
//$conn = mysqli_connect('localhost', 'root', '', 'st_kizito');
include('../../code/connection.php');
// $id=$_POST['id'];
$id=$_POST['id'];
$trainer=$_POST['tainer'];
$level=$_POST['level'];
$trade=$_POST['trade'];
$title=$_POST['title'];
$now=date("Y,d,m");
// Uploads files
if (isset($_POST['book_upload'])) { // if save button on the form is clicked
   //$_FILES=$_POST['myfile']['name'];
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../../uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['txt','jpeg','xls','xlsx','zip','jpg','jpeg','sql','png', 'pdf', 'docx','doc','sql','sql'])) {
        echo "You file extension must be .jpg .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 3000000) { // file shouldn't be larger than 3Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            //$sql = "insert into books values('','$filename','$tname','$tid')";
            
            $sql="UPDATE `book` SET `trade` = '$trade',`level` = '$level',`book_title` = '$title' ,`book` = '$filename',`trainer` = '$trainer' WHERE `book_id` = '$id'";
            //UPDATE `book` SET `trade` = '$trade',`level` = '$level',`book_title` = '$title' ,`book` = '$filename',`trainer` = '$trainer' WHERE `book_id` = '$id';
            if (mysqli_query($conn, $sql)) {
                
                echo "<script>window.alert('success and Thank you  to Update book ');window.location='../view_book.php'</script>'";
            }else{ echo "<script>window.alert(' Fail  try again');window.location='../view_book.php'</script>'";}
        } else {
            echo "Failed to upload file.";
        }
    }
}
?>