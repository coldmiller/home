<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html>
        <Title>Movie List</Title>
    </head>
    <body>


    <?php
        $select = $_POST["select"]; 
    
        $query = 'SELECT'. $select. "FROM MovieTitle"; 
        //connect to the server 
        if (!($database = mysqli_connect("localhost","cxm7682_User", "Roxanna/2021","cxm7682_MovieTable")))
        die("Connection failed: ".mysqli_connect_error()."</body></html>"); 
        else if (!($result=mysqli_queary($database, $query))) {
            print("<p> Could not connect to queary!</p>"); 
            die(mysqli_error."</body></html>"); 
        } //end if 
        mysqli_close($database); 
        ?>
        <table>
            <caption>
                Results of "SELECT <?php print("$select")?> FROM MovieTitle"
            </caption>
            <?php
            //fetch each row from the sql table and post it 
            while($row = mysqli_fetch_row($result)) {
                //build table to display result
                print("<tr>"); 
                foreach($row as $value) print("<td>$value</td>");
                print("</tr>"); 
            } // end while loop 
            ?><!-- end the PHP script--> 

        </table>
            <p> Your seach yeild <?php print(mysqli_num_rows($result)) ?> results.</p>

     </body>
</html>
