<html>
    <head>
        <script>
            function schieten(q){
                document.getElementById("square"+q).style.backgroundColor = 'red';
            }
        </script>
    </head>
    <body>
        <table border="1">
            <?php
                for($x = 0; $x < 10; $x++){   
                    echo "<tr>";
                    for($y = 0; $y < 10; $y++){
                        echo "<td onclick='schieten($x$y)' id=square$x$y >Text</td>\n";                    
                    }
                    echo "</tr>\n";
                }

                
            
            ?>
            
        </table>
        <hr>
        <table border="1">
            <tr>
                <td>q</td><td>q</td>
            </tr>
            <tr>
                <td>q</td><td>q</td>
            </tr>
        </table>
        
    </body>    
</html>