<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SIMPEL CRUD</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container my-5">
            <h2>List of Clients</h2>
            <a class="btn btn-primary" href="/crud/create.php" role="button">New Client</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "mydb";

                        //create connection
                        $connection = new mysqli($servername, $username, $password, $dbname);   
                        //check connection
                        if ($connection->connect_error) {
                            die("Connection Failed". $connection->connect_error);
                        }
                        //read all row
                        $sql = "SELECT * FROM client";
                        $result = $connection->query($sql);

                        if  (!$result) {
                            die("Invalid query" . $connection->error); {
                            }
                        } while($row = $result->fetch_assoc()) {
                            echo 
                            "<tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[address]</td>
                        <td>$row[created_at]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='/CRUD/edit.php?id=$row[id]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='/CRUD/delete.php?id=$row[id]'>Delete</a>
                        </td> 
                      </tr>";
                        }
                    ?>
                    <tr>
                        
                    </tr>                    
                </tbody>
            </table>
        </div>
    </body>
</html>