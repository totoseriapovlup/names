<?php

/**
 * home controller
 */
function home()
{
    $names = getNames();
    $girlsSize = count($names['girls']);
    $boysSize = count($names['boys']);
    if ($girlsSize > $boysSize) {
        $size = $girlsSize;
    } else {
        $size = $boysSize;
    }
    render('home', [
        'names' => $names,
        'size' => $size,
    ]);
}

/**
 * process controller
 */
function process()
{
    $names = getNames();
    $gender = filter_input(INPUT_POST, 'gender');
    $name = filter_input(INPUT_POST, 'name');
    //TODO validations
    $names[$gender][] = $name;
    setNames($names);
    redirect('/index.php');
}
