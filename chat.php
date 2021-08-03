            <?php
            require_once('connection.php');
            if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $msg = $_POST['enter_message'];
            $query = "INSERT INTO chart (name,msg) VALUES ('$name','$msg')";
            $run = $dbfound->query($query);
            }
        ?><script>
        
        window.location.href='chartpage.php';
        </script>?> 

            ?>