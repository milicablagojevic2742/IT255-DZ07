<?php
    $type = $_GET['type'];
    
    if($type == "json"){
        header("Content-type: application/json");
        $test_array = array (
            'ime' => 'Kad jaganjci utihnu',
            'zanr' => 'Horor',
            'godina' => '1991',
            'vremeTrajanja' => '2h 18min',
        );
        echo json_encode($test_array);
    }
    else {
        header("Content-type: text/xml");
        $test_array = array (
            'Kad jaganjci utihnu' => 'ime',
            'Horor' => 'zanr',
            '1991' => 'godina',
            '2h 18min' => 'vremeTrajanja',
        );
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($test_array, array ($xml, 'addChild'));
        print $xml->asXML();
    }
?>