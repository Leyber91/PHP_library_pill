<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php project</title>
</head>
<body>
<?php
        
        
        /* Define array using index */
        $pokemonGameBoyAdvance[0] = "Ruby";
        $pokemonGameBoyAdvance[1] = "Sapphire";
        $pokemonGameBoyAdvance[2] = "FireRed";
        $pokemonGameBoyAdvance[3] = "LeafGreen";
        $pokemonGameBoyAdvance[4] = "Emerald";
        echo '<br/><strong>Third Generation Pokemon Editions:</strong> <br/>';
        foreach($pokemonGameBoyAdvance as $version ) {
            echo "Pokemon $version version <br />";
        }
        
                /*Define array using array structure */
        $pokemonGameBoy = ['Yellow', 'Blue', 'Red', 'Green'];
        echo '<br/><strong>First pokemon editions:</strong> <br/>';
        foreach( $pokemonGameBoy as $version ) {
            echo "Pokemon $version version <br />";
        }
        
               		/*Define array using array method */
        $pokemonGameBoyColor = array('Gold','Silver','Cristal');
        echo '<br/><strong>Second Generation Pokemon Editions:</strong> <br/>';
        foreach( $pokemonGameBoyColor as $version ) {
            echo "Pokemon $version version <br />";
        }

?>
</body>
</html>