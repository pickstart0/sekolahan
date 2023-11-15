<?php
$array = [
    ['A', 'B', 'E'],
    ['C', 'D', 'F']
];
echo $array[0][0];
echo $array[0][1];
echo $array[1][0];
echo $array[1][1];
echo $array[0][2];
echo $array[1][2];


echo "
    <table>
        <tr>
            <td>" . $array[0][0] . "</td>
            <td>" . $array[0][1] . "</td>
            <td>" . $array[0][2] . "</td>
        </tr>
        <tr>
            <td>" . $array[1][0] . "</td>
            <td>" . $array[1][1] . "</td>
            <td>" . $array[1][2] . "</td>
        </tr>
    </table>
";
