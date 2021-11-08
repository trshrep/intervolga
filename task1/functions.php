<?php

function linkWords($string, $wordsCount, $link)
{
	$words = wordsFinder($string, $wordsCount);

	$linkTemplate = "<a href={$link}>{$words}</a>";

	return str_replace($words, $linkTemplate, $string);
}



function wordsFinder($string, $wordsCount)
{
	$pattern = "/(([^ ]*)[\s.]){{$wordsCount}}$/";

	preg_match_all($pattern, $string, $matches);

	return $matches[0][0];
}



function dbg(String $title, $data)
{
    if (DEBUG)
    {
        echo "<pre>" . $title . ":\n";
        var_dump($data);
        echo "</pre>";
    }
}

?>