<html>
    <head>
        <script>
            function schieten(q){
                if(q==22 || q ==23){
                    document.getElementById("square"+q).style.backgroundColor = 'red';                    
                }else{
                    document.getElementById("square"+q).style.backgroundColor = 'blue';                    
                   
                }
            }
        </script>
    </head>
    <body>
        <table border="1">
            <?php
                for($x = 1; $x < 11; $x++){   
                    echo "<tr>";
                    for($y = 1; $y < 11; $y++){
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