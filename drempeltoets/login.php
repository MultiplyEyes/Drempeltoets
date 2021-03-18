<title>login</title>
<?php 
    include_once 'header.php';
?>
    <section>
        <div class="form">       
            <h2>login</h2>
            <img src="https://yt3.ggpht.com/ytc/AAUvwnjJweUODqBTuuLMPwI1TOoZ7d1t1rd0bTVAZub0RQ=s900-c-k-c0x00ffffff-no-rj" width="100" height="100">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username/email..." required>
                <input type="password" name="pwd" placeholder="Password..."required><br>
                <button type="submit" name="submit">Login</button>
            </form>
        <div>
    </section>
<?php 
    include_once 'footer.php';
?>