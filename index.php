<html>
    <head>
        <script>
            function schieten(){
                alert();
            }
        </script>
    </head>
    <body>
        <table border="1">
            <?php
                for($x = 0; $x < 10; $x++){   
                    echo "<tr>";
                    for($y = 0; $y < 10; $y++){
                        echo "<td onclick='schieten()' >Text</td>\n";                    
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