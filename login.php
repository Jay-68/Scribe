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

<h2 class="text-center mt-3">Login</h2>
<hr width="40%" class="text-center">

<form action="includes/form-handler/login.php" method="post" role="form" class="form">
  <div class="form-group">
    <label for="username">Email</label>
    <input type="email" name="email" placeholder="Admin Email" class="form-control">
  </div>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" name="pwd" placeholder="Enter password" class="form-control">
  </div>
  <div class="form-group">
    <input type="submit" name="login_submit" value="Log in" class="btn btn-sm btn-dark">
  </div>
</form>