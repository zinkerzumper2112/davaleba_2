<?php
    function build_table($array){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
    $html .= '</tr>';

    // data rows
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}

$array = array(
    array('id'=>'1', 'name'=>'Giorgi', 'lastname'=>'Amashukeli', 'country'=>'Georgia', 'skills'=>"html, css, js", 'available'=>"true"),
    array('id'=>'2', 'name'=>'Mariam', 'lastname'=>'Abashidze', 'country'=>'Georgia', 'skills'=>"html", 'available'=>"true"),
    array('id'=>'3', 'name'=>'Andria', 'lastname'=>'Beridze', 'country'=>'USA', 'skills'=>"usless", 'available'=>"false"),
    array('id'=>'4', 'name'=>'Nino', 'lastname'=>'Nozadze', 'country'=>'Germany', 'skills'=>"Js, css", 'available'=>"false")

);

    echo build_table($array);
?>


        
    
