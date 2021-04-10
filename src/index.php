<html>
    <head>
        <title>Connect to MariaDB Server</title>
    </head>
 
    <body>
        #<header>
        #<ul>
        #<li>Interview Website</li>
        #<li>Testing Code Update</li>
        #<li>unautomated</li>
        #</ul>
        #</header>

    <?php
        $dbhost = '192.168.4.103:3306';
        $dbuser = 'dbuser';
        $dbpass = 'password';
        $dbname = 'test';
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        echo 'Connected successfully';

        $query = "SELECT NAME FROM testtable";

        $result = $conn->query($query);


        while($row = $result -> fetch_assoc())
        {
            echo "<br>" . "Name: " . $row["NAME"]. "<br>";
        }

        $conn->close();
    ?>


    </body>
</html>
