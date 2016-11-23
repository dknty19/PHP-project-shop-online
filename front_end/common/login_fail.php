<?php include 'common/header.php'; ?>
<form method="post" action="index.php">
    <input type="hidden" name="action" value="login_check"/>
    <div class="row">
        
        <div class="col-md-7">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit" value="login">
        <?php echo $msg; ?>
        </div>
    </div>
</form>
<?php include 'common/footer.php'; ?>