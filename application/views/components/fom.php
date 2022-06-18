
   <div class="form border  text-center  w-50 mx-auto" id="myDiva">
                           <div class="">
                              <div class="">
                              <p><span class="h3 text-warning fw-bolder">Stocki</span></p>
                            <p class="text-secondary lead fw-bolder">Update your user</p>
                            <form class="w-75  pb-5 mx-auto Main" action="<?php echo base_url('index.php/updatebyID/'. $users->userId);?>"method="post">
                                <div class="in w-96 mx-auto  mt-3">
                                    <input type="test" class="border border-1 border-warning w-100" value=" <?php echo $users->firstName?>" name="firstname" placeholder="First Name">
                                    <small class="text-danger"><?php echo form_error('firstname');?></small>
                                </div>
                                <div class="in w-96  mx-auto mt-3">
                                    <input type="text "  class="w-100 border border-1 border-warning" value="<?php echo $users->lastName?>" name="lastname" placeholder="Last Name">
                                    <small class="text-danger"><?php echo form_error('lastname');?></small>
                                </div>
                                <div class="in mt-3  mx-auto w-96">
                                    <input type="text"  class="w-100 border border-1 border-warning" value="<?php echo $users->username?>" name="username" placeholder="User Name">
                                    <small class="text-danger"><?php echo form_error('username');?></small>
                                </div>
                                <div class="in mt-3  mx-auto w-96">
                                    <select class="w-100 border border-1 border-warning" name="nationality" >
                                        <option value="<?php echo $users->nationality;?>">Rwanda</option>
                                        <option value="DRc">Drc</option>
                                    </select>
                                </div>
                                <div class="in mt-3  mx-auto w-96">
                                    <input type="tel" value="<?php echo $users->telephone; ?>"  class="w-100 border border-1 border-warning" name="telephone" placeholder="User Telephone">
                                    <small class="text-danger"><?php echo form_error('telephone');?></small>
                                </div>

                                <div class="w-96  mx-auto mt-3">
                                    <input type="email" value="<?php echo $users->email; ?>"  class="w-100 border border-1 border-warning" name="email"  placeholder = "Email address">
                                    <small class="text-danger"><?php echo form_error('email');?></small>
                                </div>
                                <div class="in  mx-auto w-96 mt-3">
                                    <input type="password" value="<?php echo $users->password;?>"  class="w-100 border border-1 border-warning" name="password" placeholder="Secret Password">
                                    <small class="text-danger"><?php echo form_error('password');?></small>
                                </div>
                                <div class="in  mx-auto w-96 mt-3">
                                    <input type="password" value = "<?php echo $users->password;?>"  class="w-100 border border-1 border-warning" name="confirm" placeholder="Confirm password">
                                    <small class="text-danger"><?php echo form_error('password');?></small>
                                </div>
                                <div class="in  mx-auto mt-3 w-96">
                                    <input type="submit" class="btn btn-white boder border-1 navbutton border-warning text-center text-dark fw-bolder w-100" value="Add user">
                                </div>
                            </form>
                    
                              </div>
                           </div>
                        </div>
                        
