<?php include "connect.php"?>

<html>
    <head><meta chaset="utf-8"></head>
    <body>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();

            while($row = $stmt->fetch()){  ?>
                ชื่อสมาชิก: <?=$row["name"]?><br>
                ที่อยู่: <?=$row["address"]?><br>
                อีเมล: <?=$row["email"]?><br>    
                <div>
                <img src='member_photo/<?=$row["username"]?>.jpg'><br>
                </div> <hr>
                    <?php
            } ?>
    </body>
</html>