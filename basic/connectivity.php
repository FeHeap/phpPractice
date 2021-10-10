<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
        <form id="entryForm" action="" method="post">
            <input id="person1" type="text" name="person1"> is a friend of <input  id="person2" type="text" name="person2">
            <br>
            <input id="submit" type="submit" value="送出查詢">
        </form>
        <input type="button" id="show">
        <div>
            <p></p>
        </div>
        <?php
            if(isGet()){
                
            }else{
                
                print($_POST["person1"]);  
            }
            function isGet(){
                return $_SERVER['REQUEST_METHOD'] == 'GET' ? true : false;
            }
        ?>
        <script>
            $(".submit").on("click", function() {
                $(".submit").val();
            });
            
            $(".show").on("click", function() {
                $("p").append($(".person1").val());
            });
        </script>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </body>
</html>
