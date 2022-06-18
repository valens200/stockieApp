<div class="card mt-5 p-4">
        <div class="card-title ms-5" >
            <h4 class="ms-5">Recently added Users   <span class="text-dark fw-bolder h6 border border-1 border-dark p-2 rounded" >View All</span></h4>
        </div>
        <div class="cardbody">
            <table>
              <thead>
              <tr>
                    <th>User Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Nationality</th>
                    <th>Username </th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>

              <?php foreach ($users->result() as $user){?>  
                <tr>
                    <td><?=$user->userId?></td>
                    <td><?=$user->firstName?></td>
                    <td><?=$user->lastName?></td>
                    <td><?=$user->nationality?></td>
                    <td><?=$user->username?></td>
                    <td><?=$user->telephone?></td>
                    <td><?= $user->email?></td>
                    <td class="text-center">
                       <a href="<?php echo base_url('index.php/delete/'.$user->userId); ?>"> <button class="btn btn-danger mx-2">Delete</button></a>
                       <a href="<?php echo base_url('index.php/update/'. $user->userId); ?>"><button class="btn btn-primary">Update</button></a>
                    </td>
                </tr>
           <?php }?>
              </tbody>

            </table>
        </div>
    </div>