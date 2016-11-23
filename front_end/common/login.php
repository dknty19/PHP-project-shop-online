<?php include 'common/header.php'; ?>
<DIV class="container">
    <div class="col-md-3"></div>
    <DIV class="col-md-6">
<form method="post" action="index.php">
    <input type="hidden" name="action" value="login_check"/>
    
    Username:<input type="text" name="username"><br>
    Password: <input type="text" name="password"><br>
    <div class="col-md-4"></DIV>    <input type="submit" value="login">
        
        
</form>
    </DIV>
</DIV>
<?php include 'common/footer.php'; ?>