<!-- <h2>DOCTOR`S LOGIN</h2>
                  
                  <h2>PATIENT`S LOGIN</h2>
                  <div class="main-wrapper">
                    <ul>
                      <li><a href="index.php">Home</a></li>
                      
                    </ul>
                    <div class="nav-login">
                      <?php 
                      if (isset($_SESSION['u_id'])) {
                        echo '<form action="includes/logout.inc.php" method="POST">
                        <button type="submit" name="submit">LogOut</button>
                        
                        </form>';
                      } else{
                        echo '<form  id="form" method="POST" action="includes/login.inc.php">  
                        Name: <span class="glyphicon glyphicon-user"></span><br> <input type="text" name="patname" class="form-control br-radius-zero" required="This field is required!">
                        <br><br>   
                        Reg No: <span class="glyphicon glyphicon-user"></span><br> <input type="text" name="regno" class="form-control br-radius-zero"  required="This field is required!">
                        <br><br>
                        Password: <span class="glyphicon glyphicon-asterisk"></span><br> <input type="password" name="pwd" class="form-control br-radius-zero" required="This field is required!"><br><br><br>
                        <input type="reset" name="RESET" value="RESET" class="btn btn-warning">
                        <input type="Submit" name="SUBMIT" value="SUBMIT" class="btn btn-success"><br><br><br>
                        <p>
                        Not yet a member? <a href="#form">Sign-up</a>
                        </p>  
                        </form> ';

                      }
                      ?>
                      
                      
                      
                    </div>
                  </div> -->