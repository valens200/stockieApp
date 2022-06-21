<div class=" w-75 h-25 mt-4 mx-auto row">
        <div class="col-3  border border-2 border-danger  h-50 border">
            <p>Tatal products: <span class="fw-bolder text-danger">127645</span></p>
        </div>
        <div class="col-2  h-50  ms-2 border">
           <p> Outgoing: <span  class="fw-bolder text-dark">455849</span></p>
        </div>
        <div class="col-2 h-50 ms-2 ">
            <p>Ingoing:<span  class="fw-bolder text-dark"> 4545849</span></p>
        </div>
        <div class="col-3 h-50 ms-2 border">
            <p>Rest: <span  class="fw-bolder text-dark">3453245234</span></p>
        </div>

    </div>
    <div class="card mt-5 p-4">
        <div class="card-title ms-5" >
            <h4 class="ms-5">All registered Products <span class="text-dark fw-bolder h6 border border-1 border-dark p-2 rounded" >View All</span></h4>
        </div>
        <div class="cardbody">
            <table>
              <thead>
              <tr>
                    <th>Product Name</th>
                    <th>Product Brand</th>
                    <th>Product supplier</th>
                    <th>Supplier Phone</th>
                    <th>Date added</th>
                    <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($products->result() as $product){?>
                <tr>
                    <td><?=$product->product_Name?></td>
                    <td><?=$product->brand?></td>
                    <td><?=$product->supplier?></td>
                    <td><?=$product->supplier_phone?></td>
                    <td><?=$product->added_date?></td>
                    <td class="text-center">
                        <a href="<?php echo base_url('index.php/delete/product/'. $product->productId);?>"><button class="btn btn-danger mx-2"><i class="fa-solid fa-trash-can"></i></button></a>
                        <a href="<?php echo base_url('index.php/update/product/'. $product->productId);?>"><button class="btn btn-primary"><i class="fa-solid fa-pen"></i></button></a>
                    </td>
                </tr>
            <?php }?>
              </tbody>

            </table>
        </div>
    </div>