<?php

if (!function_exists('generate_random_username')) {
    function generate_random_username($lang = "en") {
        $adjectives = file("protected/humhub/modules/user/models/forms/random-username-generator/langs/" . $lang . "/adjectives.txt", FILE_IGNORE_NEW_LINES);
        $nouns = file("protected/humhub/modules/user/models/forms/random-username-generator/langs/" . $lang . "/nouns.txt", FILE_IGNORE_NEW_LINES);

        $adjective = $adjectives[rand(0, count($adjectives) - 1)];
        $noun = $nouns[rand(0, count($nouns) - 1)];
        
        return $adjective . $noun;
    }
}

// echo generate_random_username("en")."\n";

?>