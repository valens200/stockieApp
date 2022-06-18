<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <style>
        table {
        border-spacing: 0px;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 30px;
        }  

    table{
        spacing: 0;
    }
    th, td{
        border: 1px solid black;
        spacing: 0;
    }
        </style>
    <table>
                <tr>
                    <th>Name</th>
                    <th>lastname</th>
                    <th>Id</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
        <?php foreach ($users->result() as $student){?>
            <tr>
                <td><?= $student->firstName;?></td>
                <td><?= $student->lastName;?></td>
                <td><?=$student->telephone?></td>
                <td><a class="bg-primary text-white text-deoation-none  mx-0" href="<?php echo base_url('index.php/update/'.$student->studentId);?>">Update</a></td>
                <td><a class="bg-primary text-white text-decoration-none  mx-0  text-white  float-right " href="<?php echo base_url('index.php/delete/'. $student->studentId);?>">delete</a></td>
        
        </tr>
        <?php }?>
        <!-- <?php echo anchor('Frontend/EmployeeController/register', 'greet')?> -->
        <a class="btn btn-primary p-2 m-3"href="<?php echo base_url('index.php/Frontend/EmployeeController/register'); ?>" >Add user</a>
        </table>    
    </body>
    </html>