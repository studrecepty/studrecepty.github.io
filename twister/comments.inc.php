<?php

function setComments($conn){
    if(isset($_POST['commentSubmit'])){
        if(!empty($_POST['uid']) && !empty($_POST['message'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
       
        $stranka = "stranka3";
        $sql = "INSERT INTO komentare_$stranka (uid, date, message)
        VALUES ('$uid', '$date', '$message')";
        $result = $conn->query($sql);
        //header("Location:index.php");

        } elseif(empty($_POST['uid']) && !empty($_POST['message'])) {
            $uid = "Anonymous";
            $date = $_POST['date'];
            $message = $_POST['message'];
       
            $stranka = "stranka3";
            $sql = "INSERT INTO komentare_$stranka (uid, date, message)
            VALUES ('$uid', '$date', '$message')";
            $result = $conn->query($sql);
           //header("Location:index.php");

        } elseif(!empty($_POST['uid']) && empty($_POST['message'])) {
            echo "Nenapísal si žiadnu správu.";
            return;

        } else {
            echo "Nevyplnil si meno ani správu.";
            return;
        }}}
function getComments($conn){
    $stranka = "stranka3";
    $sql = "SELECT * FROM komentare_$stranka";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<div class='comment-box'><p>";
        echo "<h5>" . $row['uid'] . "</h5><br>";
        echo "<h6>" . $row['date'] . "</h6><br>";
        echo nl2br($row['message']);
        echo "</p></div>";
    }
}
?>