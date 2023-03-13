<?php 

function formatLastName($name) {

    if (   (substr((strToLower($name)), 0, 3  ) == "mac" )
        || (substr((strToLower($name)), 0, 2  ) == "mc" )) {   
        return ucfirst($name);
    }
    $formattedName = formatName($name);

    return($formattedName);
};


function formatName($name) {
    $name = strToLower($name);
    $name = ucwords($name, ' ');
    $name = ucwords($name, '-');
    $name = ucwords($name, "'");
    return $name;
}
   
?>