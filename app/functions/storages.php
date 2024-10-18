<?php

/**
 * Read storage and return names array
 * @return array
 */
function getNames()
{
    $namesArray = [
        'girls' => [],
        'boys' => [],
    ];
    if (file_exists(STORAGE_NAMES_FILE)) {
        $jsonNames = file_get_contents(STORAGE_NAMES_FILE);
        if (!$jsonNames) {
            //TODO log
        }
        $names = json_decode($jsonNames, true);
        if (!$names) {
            //TODO log
        } else {
            $namesArray = $names;
        }
    }
    return $namesArray;
}

/**
 * Write names to the storage
 * @param array $names
 */
function setNames(array $names){
    $jsonNames = json_encode($names);
    if(!file_put_contents(STORAGE_NAMES_FILE, $jsonNames)){
        //TODO log
    }
}