<nav id="navbar">
    <a id="menu-anchor" href="index.php"><p id="title" class="banner">RateMy<strong>Caf</strong></p></a>
    <?php if($_SESSION['logged_in']){
        echo "<form action='logout.php'>";
        echo "<input id='SignedInButton' class ='banner, topButtons' type='submit' value='Welcome, $_SESSION[name]'/>";
    }
    else{
        echo "<form action='login.php'>";
        echo "<input id='LogInButton' class ='banner, topButtons' type='submit' value='Sign In'/>";
    }
    ?>

    </form>
</nav>