<div id="page_header">
    <a href="./"><img id="page_header_image" src="./img/header_title.png" /></a>
    
    <?php if(Util::validUser()) { ?>
    <span id="login_status">
		Happy tweeting <span id="login_status_name"><?php echo $_SESSION['user']->name; ?></span>!<a id="clearsessions" href="./clearsessions.php">logout</a>
    </span>
    <?php } ?>
    
</div>
