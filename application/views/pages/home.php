<header>
    <div class="header container-fluid navbarr shadow-lg">
        <div class="container-fluid p-2 row">
            <div class="col-2">
                <div class="brand w-100">
                    <p class="w-100 Ffw-bolder h2 fw-bolder text-white">Stocki</p>
                </div>

            </div>
            <div class="col-10 text-end">
            <button class="btn px-4 navbutton btn-white border border-2 border-primary text-primary"  data-bs-toggle = "modal" data-bs-target="#myDiva">Login</button>
                
            </div>
        </div>

    </div>
</header>
<section>
<div class="container-fluid myone row">
   <div class="h-100 row">
     <div class="col-5 mydiv row">
          <div class="col-2">
              <img src="views/images/manager.jp" alt="">
           </div>
        <div class="col-10 myContent border border-2 border-primary bg-white my-auto h-75 ">
            
        </div>
        </div>
        <div class="col-7 h-50 my-auto ">
            <div class="container h-100 row  main">
                <div class="col-6">

                </div>
                <div class="col-6">
                    <div class=" text-primary">
                        <h2 class="danger">Stock Management Application</h2>

                        <a href="<?php echo base_url('index.php/dashboard');?>">dashboard</a>
                    </div>
                    <div class="mt-5">
                        <p><span class="h3 text-warning fw-bolder">Stocki</span> <p class="text-black fw-bolder">is an online platform app brought to make sure and help you to manage</p></p>
                        <p class="text-black fw-bolder">all of you stock in all fields</p>
                    </div>
                    <div class="buttons mt-5 row">
                        <div class="col-6 mt-5">
                            <button class="w-75 btn bodybutton btn-primary fw-bolder" data-bs-toggle = "modal" data-bs-target="#myDiv">Get started</button>
                        </div>
                        <div class="col-6 mt-5">
                            <button class="w-75 btn btn-white border border-2 border-primary navbutton text-primary" data-bs-toggle = "modal" data-bs-target="#myDiva">Login</button>
                        </div>

                        <div class="form  text-center p-5 modal w-50 mx-auto" id="myDiv">
                           <div class="modal-dialog-center">
                              <div class="modal-content">
                              <p><span class="h3 text-warning fw-bolder">Stocki</span></p>
                            <p class="text-secondary lead fw-bolder">Register your account</p>
                            <form class="w-75 pb-5 mx-auto Main" action="<?php echo base_url('index.php/registerAccount');?>" method="post">
                                <div class="in w-75 mx-auto  mt-3">
                                    <input type="test" class="border border-1 border-warning w-100" name="firstname" placeholder="First Name">
                                </div>
                                <div class="in w-75  mx-auto mt-3">
                                    <input type="text "  class="w-100 border border-1 border-warning" name="lastname" placeholder="Last Name">
                                </div>
                                <div class="in mt-3  mx-auto w-75">
                                    <input type="text"  class="w-100 border border-1 border-warning" name="username" placeholder="User Name">
                                </div>
                                <div class="w-75  mx-auto mt-3">
                                    <input type="email"  class="w-100 border border-1 border-warning" name="email"  placeholder = "Email address">
                                </div>
                                <div class="in  mx-auto w-75 mt-3">
                                    <input type="tel"  class="w-100 border border-1 border-warning" name="telephone" placeholder="Telephone">
                                </div>
                                <div class="in  mx-auto w-75 mt-3">
                                    <input type="password"  class="w-100 border border-1 border-warning" name="password" placeholder=" password">
                                </div>
                                <div class="in  mx-auto mt-3 w-75">
                                    <input type="submit" class="btn btn-white boder border-1 navbutton border-warning text-center text-dark fw-bolder w-100" value="Sign Up">
                                </div>
                            </form>
                    
                              </div>
                           </div>
                        </div>
                        <div class="form  text-center p-5 modal w-50 mx-auto" id="myDiva">
                           <div class="modal-dialog-center">
                              <div class="modal-content">
                              <p><span class="h3 text-warning fw-bolder">Stocki</span></p>
                            <p class="text-secondary lead fw-bolder">Login to your account</p>
                            <form class="w-75 pb-5 mx-auto Main" action="$" method="post">
                                <div class="w-75  mx-auto mt-3">
                                    <input type="email"  class="w-100 border border-1 border-warning" name="email"  placeholder = "Email address">
                                </div>
                                <div class="in  mx-auto w-75 mt-3">
                                    <input type="password"  class="w-100 border border-1 border-warning" name="password" placeholder=" Password">
                                </div>
                                <div class="in  mx-auto mt-3 w-75">
                                    <input type="submit" class="btn btn-white boder border-1 navbutton border-warning text-center text-dark fw-bolder w-100" value="Login">
                                </div>
                            </form>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>  
</section>