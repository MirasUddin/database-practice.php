<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <div class="container my-4 p-4 shadow rounded">
        <h2><a style="text-decoration: none; " href="index.php">Noted It Database</a> </h2>
        <form class="form" action="" method="POST" enctype="multipart/form-data">
            <input class="form-control mb-2" type="text" name="std_name" id="" placeholder="Enter Your Name">
            <input class="form-control mb-2" type="number" name="std_roll" id="" placeholder="Enter Your Roll">
            <label class="ms-1 mb-1" for="image">Upload Your Image</label>
            <input class="form-control mb-2" type="file" name="std_img" id="">
            <input class="form-control btn btn-warning block" type="submit" value="Add Information" name="add_info">
        </form>
    </div>

    <!-- display edit  -->
    <div class="container my-4 p-4 shadow rounded">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Miras</td>
                    <td>2540</td>
                    <td>image</td>
                    <td>
                        <a class="btn btn-success sm-mb-2" href="#">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>