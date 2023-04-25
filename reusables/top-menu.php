<?php $currentDomain = $_SERVER['REQUEST_URI']; ?>

<nav id="navbar">
    <a id="menu-anchor" href="/ratemycaf/index.php"><p id="title" class="banner"><span class='main-title'>RateMy<strong class='bold-part'>Caf</strong><span></p></a>
    <?php 
    if($currentDomain === "/ratemycaf/cafeterias/$_SESSION[id]"){
        echo "<a class='events-but topButtons' href='../events/".$_SESSION['id']."'<button>Events</button></a>";    
    }
    else if ($currentDomain === "/ratemycaf/events/$_SESSION[id]"){
        echo "<a class='events-but topButtons' href='../cafeterias/".$_SESSION['id']."'<button>Cafeterias</button></a>";    
    }
    else{
        //display nothing
    }

    if($_SESSION['logged_in']){
        echo "<form action='/ratemycaf/logout.php'>";
        echo "<input id='SignedInButton' class ='banner, topButtons' type='submit' value='Welcome, $_SESSION[name]'/>";
    }
    else{
        if($currentDomain === "/ratemycaf/login.php?" || $currentDomain === "/ratemycaf/register.php"){
            //display nothing
        }
        else{
            echo "<form action='/ratemycaf/login.php'>";
            echo "<input id='LogInButton' class ='banner, topButtons' type='submit' value='Sign In'/>";
        }

    }
    
    ?>
    </form>
</nav>