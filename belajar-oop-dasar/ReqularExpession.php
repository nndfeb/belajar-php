 <?php

    $arr = [];

    $result = (bool)preg_match_all("/eko|awan|edy/i", "Eko Kurniawan Khandey", $arr);

    var_dump($result);
    var_dump($arr);


    // Prage Replace
    $replace = preg_replace("/anjing|bangsat/i", "***", "dsaar lo anjing banget bangsat!!");
    var_dump($replace);

    $split = preg_split("/[\s,-]/", "Eko kurniawan khandey, jaman-now");
    var_dump($split);
