<?php
echo "<h3><a href='./adminAddNewTopicForm.php'>Create New Blogpost</a></h3>";
require_once('./config.php');

$sql = "SELECT id, title, blogpost, writer, DATE_FORMAT(timeof, '%H:%i, %d.%m.%Y') AS timeo FROM blogposts ORDER BY timeof DESC LIMIT 100;";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            $id = $row['id']; 
            $title = $row['title'];
            $blogpost = $row['blogpost'];
            $writer = $row['writer'];
            $timeo = $row['timeo'];
                                     
            $title = htmlspecialchars($title);
            $blogpost = htmlspecialchars($blogpost);
            $writer = htmlspecialchars($writer);

            $blogpost = nl2br($blogpost);

            echo "
                <div class='blogPost'>
                    <div class='blogPostPic'>
                        <img src='./images/avatar.png' alt='avatar' />
                    </div> <!-- blogPostPic-->
                    <div class='blogPostText'>
                        <h2>{$title}</h2>
                        <p>{$blogpost}</p>
                        <p>{$writer} - {$timeo}</p>
                        <hr />
                    </div> <!-- blogPostText-->
                    <div class='blogPostButtons'>
                        <a href='./adminTopicDelete.php?del={$id}'>Delete</a> | 
                        <a href='./adminTopicUpdateSecond.php?edit={$id}'>Edit</a>
                    </div> <!-- blogPostButtons -->
                </div> <!-- blogPost-->
            ";
        }

        mysqli_free_result($result);
    } else{
        echo '<div class="alert alert-danger"><em>No records found.</em></div>';
    }
} else{
    echo "Something went wrong. Please try again later.";
}
 
?>