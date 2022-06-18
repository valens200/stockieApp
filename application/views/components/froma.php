                   <div class="form  text-center p-5 w-50 mx-auto" id="myDiv">
                           <div class="">
                              <div class="">
                              <p><span class="h3 text-warning fw-bolder">Stocki</span></p>
                            <p class="text-secondary lead fw-bolder">Enlarge you stock by </p> <p>adding new products</p>
                            <form class="w-75 border boarder-1 border-primary pb-5 mx-auto Main" action="<?php echo base_url('index.php/register/product');?>" method="post">
                                <div class="in w-75 mx-auto  mt-3">
                                    <input type="test" class="border border-1 border-warning w-100" name="productname" placeholder="Product Name">
                                    <small class="text-danger"><?php echo form_error('productname');?></small>
                                </div>
                                <div class="in w-75  mx-auto mt-3">
                                    <input type="text "  class="w-100 border border-1 border-warning" name="brand" placeholder="Brand Name">
                                   <small class="text-danger"><?php echo form_error('brand') ;?></small>
                                </div>
                                <div class="in mt-3  mx-auto w-75">
                                    <input type="text"  class="w-100 border border-1 border-warning" name="supplier" placeholder="supplier Name">
                                    <small class="text-danger"><?php echo form_error('supplier');?></small>
                                </div>
                                <div class="w-75  mx-auto mt-3">
                                    <input type="tel"  class="w-100 border border-1 border-warning" name="supplierphone"  placeholder = "Supplier Phone">
                                    <small class="text-danger"><?php echo form_error('supplierphone');?></small>
                                </div>
                                <!-- <div class="in  mx-auto w-75 mt-3">
                                    <input type="password"  class="w-100 border border-1 border-warning" name="password" placeholder="Your Password">
                                    <small class="text-center"><?php echo form_error('password');?></small>
                                </div> -->
                                <div class="in  mx-auto mt-3 w-75">
                                    <input type="submit" class="btn btn-white boder border-1 navbutton border-warning text-center text-dark fw-bolder w-100" value="Add product">
                                </div>
                            </form>
                    
                              </div>
                           </div>
                        </div>