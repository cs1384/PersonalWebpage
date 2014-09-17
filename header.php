<link rel="stylesheet" type="text/css" href="css/header.css" />
<script src="javascript/header.js"></script>

<div id="controlBar">
    <div id="logo"><a href="index.php"><img src="artwork/logo.jpg"></a></div>
    <div id="navigation">
        <ul>
            <li><a href="about.php">About</a></li>
            <li><a href="project.php">Project</a></li>
        </ul>
    </div>
    <div id="search">
        <form id="searchForm" action="note.php" method="GET">
            Key:
            <input>
            Tag:
            <select>
                <option value="-1" selected>All</option>
                <option value="0">Music</option>
                <option value="1">Operating System</option>
                <option value="2">Programing</option>
                <option value="3">SQL</option>
            </select>
        </form>
        <button id="searchNote">Note</button>
    </div>
    <?
    if(isSet($_SESSION['tinloginemail']) && isSet($_SESSION['tinlogintoken'])){
        echo "<div id=\"admin\"><a href=\"admin.php\"><img src=\"artwork/admin2.jpg\"></a></div>";
    }else{
        echo "<div id=\"admin\"><a href=\"admin.php\"><img src=\"artwork/admin.jpg\"></a></div>";
    }
    ?>
</div>