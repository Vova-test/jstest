<?php   
    require_once("config.php"); 
    //var_dump(ROOT_PATH); 
    if (!empty($_POST)) {
            $url = "https://restcountries.eu/rest/v2/"; 
        if (!empty($_POST['full-name'])) {
            $url = $url . 'name/';
            $url = $url .$_POST['full-name'] . '?fullText=true';
        } elseif (!empty($_POST['code'])) {
            $url = $url . 'alpha/';
             $url = $url . $_POST['code'];
        } elseif (!empty($_POST['capital-city'])) {
            $url = $url . 'capital/';
            $url = $url . $_POST['capital-city'];
        }
        //var_dump($url);die();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $returned = curl_exec($ch);
        curl_close ($ch);
        echo '<pre>';
        var_dump(json_decode($returned, true));die();
    }
    //die();
    require_once(ROOT_PATH."/rest_api_page.php");   

    /*$ch = curl_init("http://www.example.com/");
    $fp = fopen("example_homepage.txt", "w");

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_exec($ch);
    if(curl_error($ch)) {
        fwrite($fp, curl_error($ch));
    }
    curl_close($ch);
    fclose($fp);*/

    
           