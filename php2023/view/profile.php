<?php

$output = '<h2>Profil</h2>
<table class="table">
    <thead>
        <tr>
            <th>Intitulé</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>';

if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        if ($key == 'country') {
            $value = getCountry($value);
        }
        $output .= '<tr><th>' . $key . '</th><td>' . $value . '</td></tr>';
    }
}
$output .= '</tbody></table>';

echo $output;