<?php
 
require_once "../src/Views/Layout.php";
require_once "../src/Views/Users/Listing.php";
require_once "../autoloader.php";
 
 
$lastJoinedUsers = (require "../dic/users.php")->getLastJoined();
 
switch (require "../dic/negotiated_format.php") {
    case "text/html":
        (new Views\Layout(
            "Twitter - Newcomers", new Views\Users\Listing($lastJoinedUsers), true
        ))();
        exit;
 
    case "application/json":
        header("Content-Type: application/json");
        echo json_encode($lastJoinedUsers);
        exit;
}
 
http_response_code(406);
