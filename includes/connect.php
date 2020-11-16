<?php 
    $db = mysql_connect( 
        'host' => 'localhost',
        'dbname' => 'db_favourites',
        'charset' => 'utf8'
    );

    $dsn = 'mysql:'.http_build_query($db, '', ';');

    //This is the DB credentials

    $db_user = 'root';
    $db_pass = '';

    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        // var_dump($pdo);
        // echo (in this case) is almost like console.log
        // echo "you're in! enjoy the show";
    } catch (PDOException $exception){
        echo 'Connection Error:'.$exception->getMessage();
        exit();
    }

    // $db_host='localhost';
    // $db_user='root';
    // $db_pass='';
    // $db_name='db_favourite';

    // $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    // if(!$conn)
    // {
    //     die ('falied to connect to database' . mysqli_connect_error());
    // }

    // $sql = 'SELECT * FROM tbl_favourites';
    // $query = mysqli_query($conn, $sql);

    //     if(!query) {
    //         die ('failed to query table'. mysqli_error($conn));
    //     }

    //     echo "<table class='table'>
    //         <tr>
    //         <th>Name</th>
    //         <th>Description</th>
    //         <th>Image</th>
    //         </tr>";

    //             while ($row = mysqli_fetch_array($query)) 
    //             {
    //                 echo "<tr>
    //                     <td>.$row['ID']</td>
    //                     <td>.$row['Name']</td>
    //                     <td>.$row['Description']</td>
    //                     <td>.$row['Image']</td>
    //                     </tr>";
    //             }
    //     echo "</table>"