<style>
  .form{
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items:center;
  }
  .form input{
    width: 350px;
  }

</style>

<h2 class="text-center mt-3">Create Account</h2>
<hr width="40%" class="text-center">

<form action="includes/form-handler/create.php" method="post" role="form" class="form">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Username" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="E-mail" class="form-control">
  </div>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" name="pwd" placeholder="Enter strong password" class="form-control">
    <i>Suggested paaswords:<br><span><?php echo uniqid();?></span><br><span><?php echo uniqid();?></span><br></i>
  </div>
  <div class="form-group">
    <input type="submit" name="create_submit" value="continue" class="btn btn-sm btn-dark">
  </div>
</form>