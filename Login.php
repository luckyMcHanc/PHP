<html>
<style>
.the-form{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
</style>
<div class = "the-form">
    <form method = "POST" action = "log.php">
     
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <hr>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="Password" required><hr>
    
    <button type = "Submit" action = "submit" name = "submit">
    </form>
</div>
</html>