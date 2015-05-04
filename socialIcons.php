<?php if (isset($_SESSION['username'])): ?>

  <div class="shadowbox" style="text-align: center">

   <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#profile"> Hello <?php echo $_SESSION['username']; ?>

   </button>
   <br/> <br/>

   <a class="btn btn-primary btn-lg" data-toggle="modal" href="logout.php">
    Log Out
    <a/>
    <br/>

  </div>

<?php else: ?>

  <div style="text-align: center; ">

    <br/>

    <button class="Login" data-toggle="modal" data-target="#login" style="width:100%">
      Login
    </button><br/><br/>
    <button class="Register" data-toggle = "modal" data-target="#register" style="width:100%">
      Register</button>
      <br/>

    </div>

  <?php endif; ?>

<!--
  <br/>
  <?php 

  /*if (isset($_SESSION['username'])){
    echo('<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#profile"> Hello '. $_SESSION['username'] .' </button><br/><br/><a class="btn btn-primary btn-lg" data-toggle="modal" href="logout.php">
      Log Out
      <a/><br/>');

  }else{echo('
    <button class="Login" data-toggle="modal" data-target="#login">
    Login
    </button><br/><br/>
    <button class="Register" data-toggle = "modal" data-target="#register">
    Register</button>
    <br/>');} */
    ?>

  -->


  <!-- Modal -->
  <div class="modal fade" id="login" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Login</h4>
        </div>
        <div class="modal-body">

          <p> Sorry, this facility is currently unavailable. Please visit the website again to update your travel details.</p>

          <!-- <form action="login.php">
           Username:<input type="text" name="username"/><br/><br/>
           Password:<input type="password" name="password" /><br/><br/>

         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <input type="submit" class="btn btn-primary" value="Login" /><br/>
         </form> -->
       </div>
     </div>
   </div>
 </div>
 <div class="modal fade" id="register" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width:850px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Register</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://docs.google.com/forms/d/1LH4rj458udltL0gtZ6RjCuwsiRHmQP-uHeA3g5s7DEE/viewform?embedded=true" width="760" height="760" style="margin-top: 50px" frameborder="0" marginheight="0" marginwidth="0">
          Loading...
        </iframe>
        <br/><br/>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
<div>
  <br/>