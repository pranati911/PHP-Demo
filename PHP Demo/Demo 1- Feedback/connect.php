<?php
$Teacher = $_POST['Teacher'];
$EmailAddress = $_POST['EmailAddress'];
$Competency = $_POST['Competency'];
$TeachingSkills = $_POST['TeachingSkills'];
$Punctuality = $_POST['Punctuality'];
$PracticalKnowledge = $_POST['PracticalKnowledge'];
$Approachability = $_POST['Approachability'];
$ClassControl = $_POST['ClassControl'];
$Comments = $_POST['Comments'];

//Database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO feedback(Teacher,EmailAddress,Competency, TeachingSkills, Punctuality, PracticalKnowledge, Approachability, ClassControl,Comments) values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssss",$Teacher,$EmailAddress,$Competency,$TeachingSkills,$Punctuality,$PracticalKnowledge,$Approachability,$ClassControl,$Comments);
    $stmt->execute();
    echo "Feedback Submitted";
    header("refresh:2;url=index.php");
    $stmt->close();
    $conn->close();
}
?>
