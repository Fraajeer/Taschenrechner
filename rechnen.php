<!DOCTYPE html>
<html>
    <head>
        <title>Ergebnis</title>
    </head>
<body>
    <?php
    
        if ($_POST["operator"] == "plus")
            {
                echo $_POST["zahl1"] . " + " . $_POST["zahl2"] . " = " . ($_POST["zahl1"] + $_POST["zahl2"]); 
            }


        if ($_POST["operator"] == "minus")
            {
                echo $_POST["zahl1"] . " - " . $_POST["zahl2"] . " = " . ($_POST["zahl1"] - $_POST["zahl2"]); 
            }

        if ($_POST["operator"] == "mal")
            {
                echo $_POST["zahl1"] . " * " . $_POST["zahl2"] . " = " . ($_POST["zahl1"] * $_POST["zahl2"]); 
            }

        if ($_POST["operator"] == "durch")
            {
                echo $_POST["zahl1"] . " / " . $_POST["zahl2"] . " = " . ($_POST["zahl1"] / $_POST["zahl2"]); 
            }

    ?>

<p><a href="index.html">Zur&uuml;ck</a></p>

</body>
</html>
