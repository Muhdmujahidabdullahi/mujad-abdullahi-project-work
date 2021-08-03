<?php require_once('connection.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Chat App</title>
        <link rel="stylesheet" href="adorn/chartstyle.css" media="all" />

        <script>
        function chat_ajax(){
        var req = new XMLHttpRequest();
        req.onreadystatechange = function() {
            if(req.readyState == 4 && req.status == 20){
                document.getElementById('chat_box').innerHTML = req.responseText;
            }
        }
        req.open('GET', 'chartpage.php', true);
        req.send(); 
        }
    
        setInterval(function(){chat_ajax()}, 1000)
        </script>

    </head>
    
    <body>
        <div id="container">
            <div id="chat_box">
                
            <?php
                    $query = "SELECT * FROM chart ORDER BY id";
                    $run = $dbfound->query($query);

                    while($row = $run->fetch_array()):

                ?>
             <div id="chat_data">
             <span style="color:green;"><?php echo $row['name']; ?> : </span> 
             <span style="color:brown;"><?php echo $row['msg']; ?></span>
             <!--<span style="float:right;"><?php //echo $row['date']; ?></span>-->
             </div>
        <?php endwhile; ?>
               
            </div>
            
            <form method="post" action="chartpage.php">
            <?php
            if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $msg = $_POST['enter_message'];
            $query = "INSERT INTO chart (name,msg) VALUES ('$name','$msg')";
            $run = $dbfound->query($query);
            }  
            ?>
                <input type="text" id="chat" name="name" placeholder="Enter Name: " />
                <textarea name="enter_message" placeholder="Enter Message"></textarea>
                <input type="submit" name="submit" value="Send!" />
            </form>
        </div>
    </body>
</html>