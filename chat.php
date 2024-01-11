<?php
require('data.php');


if(isset($_SESSION['cin'])){
    $cinE = $_SESSION['cin'];
    $table=$pdo->query("SELECT * FROM message ORDER BY id_m  DESC");
    $index=-1;
    while($rows=$table->fetch(PDO::FETCH_ASSOC)){
        $index=1;
        if($cinE == $rows['cin']){
            ?>
            <div class="you">
                <span><i class="fa-sharp fa-solid fa-user"></i>&nbsp; YOU </span>
                <p class='mg'><?=$rows['msg']?></p>
                <p class='dt'><?=$rows['datte']?></p>
            </div>
            <?php
        }
        else{
            ?>
            <div class="them">
            <span class="hm"><i class="fa-sharp fa-solid fa-user"></i>&nbsp;&nbsp; <?=$rows['lname']?> </span>
            <p class='mg'><?=$rows['msg']?></p>
            <p class='dt'><?=$rows['datte']?></p>
            </div>
            <?php
        }
    }
    
    if($index == -1){
        echo "Conversation empty";
    }
    
}
?>
<style>


</style>