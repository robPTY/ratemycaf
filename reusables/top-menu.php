<nav id="navbar">
    <a id="menu-anchor" href="/ratemycaf/index.php"><p id="title" class="banner"><span class='main-title'>RateMy<strong class='bold-part'>Caf</strong><span></p></a>
    <?php 
    if($_SESSION['logged_in']){
        echo "<form action='/ratemycaf/logout.php'>";
        echo "<input id='SignedInButton' class ='banner, topButtons' type='submit' value='Welcome, $_SESSION[name]'/>";
    }
    else{
        echo "<form action='/ratemycaf/login.php'>";
        echo "<input id='LogInButton' class ='banner, topButtons' type='submit' value='Sign In'/>";
    }
    ?>
    </form>
</nav>