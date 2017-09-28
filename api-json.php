<?php
    $person=[
                "name"=>"Sadekul",
                "gender"=>"male",
                "mobile"=>"01727752626",
                "Address"=>[
                            "District"=>"Naogaon",
                            "Divition"=>"Rajshahi",
                        ]
              
              ];
        $api = json_encode($person);

    echo '<pre>', print_r($api,true),'</pre>';
?>