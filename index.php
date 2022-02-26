<?php

require_once "includes/session_include.php";
$_SESSION["page_title"]="Index Page";
$_SESSION["current_page"] = "index";
// including the header
include "includes/header.php";


?>

<main class="px-3">
  <h1>In-Class Exercise</h1>
  <p class="lead">Building a PHP Site</p>
  <p class="lead">
    <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
  </p>
</main>



<?php

include "includes/footer.php";

?>