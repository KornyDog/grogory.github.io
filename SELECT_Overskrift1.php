<?php

    //tilbkoblingsinformasjon
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "root";
    $database = "mydb";

    //Opprette en kobling
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);


        //sjekk om koblingen virker
        if ($kobling->connect_error) {
        die ("Noe gikk galt: " . $kobling->connect_error);
    }
        //else {
        //echo "Koblingen virker";}

    //Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");



$sql = "SELECT K.idForfatter, K.Fornavn, K.Etternavn, B.Kilde, B.idArtikler, B.Beskrivelse, P.Dato

FROM mydb.Forfatter K, mydb.Artikler B, mydb.Forfatter_has_Artikler P

WHERE K.idForfatter=P.Forfatter_idForfatter
AND B.idArtikler=P.Artikler_idArtikler
ORDER BY B.Beskrivelse, B.idArtikler, K.Etternavn, P.Dato";

$resultat = $kobling->query($sql);


echo "<table>"; //starter tabellen
echo "<tr>"; //Lager en rad med overskrifter
    echo "<th>Beskrivelse</th>";
    echo "<th>Kilde</th>";
    echo "<th>Fornavn</th>";
    echo "<th>Etternavn</th>";
    echo "<th>Dato</th>";
    echo "<th>idForfatter</th>";
    echo "<th>idArtikler</th>";


echo "</tr>";
while($rad = $resultat->fetch_assoc()) {
    $Dato = $rad["Dato"];
    $FID = $rad["idForfatter"];
    $FF = $rad["Fornavn"];
    $FE = $rad["Etternavn"];
    $AID = $rad["idArtikler"];
    $Kilde = $rad["Kilde"];
    $ABeskrivelse = $rad["Beskrivelse"];

    echo "<tr>";
        echo "<td>$ABeskrivelse</td>";
        echo "<td>$Kilde</td>";
        echo "<td>$FF</td>";
        echo "<td>$FE</td>";
        echo "<td>$Dato</td>";
        echo "<td>$AID</td>";
        echo "<td>$FID</td>";

    echo "</tr>";
}

echo "</table>"; //Avslutter tabellen


?>