<?php    
require_once('movietableController.php');
$us = new movietableController();
$res = $us->getMovietable($id);

echo "<table>
        <tr>
            <td>GENRE</td>
            <td>{$res['movieGenre']}</td>
        </tr>
        <tr>
            <td>DURATION</td>
            <td>{$res['movieDuration']}</td>
        </tr>
        <tr>
            <td>RELEASE DATE</td>
            <td>{$res['movieRelDate']}</td>
        </tr>
        <tr>
            <td>DIRECTOR</td>
            <td>{$res['movieDirector']}</td>
        </tr>
        <tr>
            <td>ACTORS</td>
            <td>{$res['movieActors']}</td>
        </tr>
    </table>";


?>