<?php

require_once "includes/session_include.php";
$_SESSION["page_title"]="About Page";
$_SESSION["current_page"] = "about";
// including the header
include "includes/header.php";

?>



<main class="px-3">

    <h1>Colors</h1>

    <?php

    $CodeArray = ["Blue", "White", "Black", "Cyan", "Purple", "Red"];
    for ($i = 0; $i < count($CodeArray); $i++) {
        echo $CodeArray[$i] . "<br />";
    }

    ?>

    <p class="lead">Thank you</p>
    <p class="lead">
        <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
    </p>

</main>



<?php

// including the footer
include "includes/footer.php";

?>