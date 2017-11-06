<html>
    <head>
        <script>
            var ship = ["22", "23", "24"];

            function schieten(q){
                if(q==ship[0] || q ==ship[1] || q ==ship[2] ){
                    document.getElementById("square"+q).style.backgroundColor = 'red';                    
                    if(checkIfShipSunk(ship)){
                        alert("Ship has sunk");
                    }
                }else{
                    document.getElementById("square"+q).style.backgroundColor = 'blue';                    
                   
                }
            }
            function checkIfShipSunk(shipvar){
               for(xvar = 0; xvar < shipvar.length; xvar++ ){
                   var dekleur = document.getElementById('square'+shipvar[xvar]).style.backgroundColor;
                   alert('square'+shipvar[xvar]);
                    if(dekleur != 'red'){
                       return false;
                   }
                } 
                return true;
            }
        </script>
        <style>
            .button{
                background-color : yellow;
                width : 50px;
                height: 50px;
                cursor: crosshair;
            }
            .button:hover{
                background-color :red;
            }
            
            
        </style>
    </head>
    <body>
        <p align='center'>
        <table>
            <?php
                for($x = 1; $x < 11; $x++){   
                    echo "<tr>";
                    for($y = 1; $y < 11; $y++){
                        echo "<td onclick=schieten($x$y) id=square$x$y class=button></td>\n";                    
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
    </p>
    </body>    
</html>