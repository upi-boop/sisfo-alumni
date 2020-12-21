
<?php
  include "koneksi.php";
  include "assets/footer.php";
  include "assets/header.php";
?>
	


<body >


    <div class="container" style="margin-top: 100px;">
        <h3 align="center">User Login form</h3>
           <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form method="post" name="">
                     <div class="form-group">
                        <label>Username</label>
                                <input id="username" name=
                            "username" type="text" class="form-control">
                        </div>
                          
                           
                          <div class="form-group">
                            <lable>Password</lable>
                            
                            <input id="password" name="password" type=
                            "password" class="form-control">
                        
                           </div>
                           <div class="form-group">
                            <input name="submit" type="submit" value=
                            "Login" class="btn btn-info"> <input name="reset" type="reset" value=
                            "reset" class="btn btn-success">
                        </div>
                        
                    
                </form>
            </div>     
        </div>
      </div>
</body>
  


