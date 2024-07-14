<?php
// a test of the HTTP verbs  
$debugit = false;
try {
    header("Content-Type: application/json");
    deebug("Starting http verb test...");

    $method = $_SERVER['REQUEST_METHOD'];
    $path = explode('/', trim($_SERVER['PATH_INFO'], '/'));
    $tag = isset($path[1]) ? $path[1] : null;
    
    deebug("Verb Test:");
    
    switch ($method) {
        case 'GET':        
            deebug("GET Start");
            echo json_encode(array("message" => "GET: The verb you used was: [".$method."]"));
            deebug("GET DONE");
            break;
        case 'POST':
            deebug("POST Start");
            echo json_encode(array("message" => "POST The verb you used was: [".$method."]"));
            deebug("POST END");
            break;
        case 'PUT':
            deebug("PUT Start");
            echo json_encode(array("message" => "PUT The verb you used was: [".$method."]"));
            deebug("PUT End");
            break;
        case 'DELETE':
            deebug("DELETE Start");
            echo json_encode(array("message" => "DELETE The verb you used was: [".$method."]"));
            deebug("DELETE End");
            break;
        default:
            deebug("UNKNOWN Start");
            echo json_encode(array("message" => "UNKNOWN The verb you used was: [".$method."]"));
            deebug("UNKNOWN End");
            break;
    }
} catch (Exception $e) {
    echo "Some error:[".$e."]";
}
deebug("End Verb Test");

// ----------------------- end main

function deebug($givenString) {
    global $debugit;
    if ($debugit) { 
        echo "\n ".$givenString; 
    }
}

//
// -------------------- stub testing using Curl:
// curl --header "Content-Type: application/json" --request GET https://yourdomain.abc
// curl --header "Content-Type: application/json" --request POST --data '{"message":"whatever"}' https://yourdomain.abc
// curl --header "Content-Type: application/json" --request PUT --data '{"message":"whatever"}' https://yourdomain.abc
// curl --header "Content-Type: application/json" --request DELETE https://yourdomain.abc
// bonus: does it "handle" in anyway non standard HTTP verbs? Let's try:
// curl --header "Content-Type: application/json" --request XYZ --data '{"message":"whatever"}' https://yourdomain.abc
// 

?>

