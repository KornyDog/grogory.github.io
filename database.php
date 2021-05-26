

<?php
    include 'INSERT_Forfatter.php';
    include 'INSERT_Artikler.php';
    include 'INSERT_F_AV_A.php';
    ?>

</p>
<form method="POST">  <!--Her er alle feltene du skriver info om kildene inni til databasen-->

    <input type="number" name="idforfatter">
    Forfatter ID
    </p>

    <input type="text" name="Fornavn">
    Forfatter Fornavn
    </p>

    <input type="text" name="Etternavn">
    Forfatter Etternavn
    </p>

    <input type="number" name="idartikler">
    Artikkel id
    </p>

    <input type="text" name="Kilde">
    Kilde
    </p>

    <input type="text" name="Beskrivelse">
    Beskrivelse
    </p>
    <br>

    <input type="submit" name="leggtil" value="Legg til">
</form

?>