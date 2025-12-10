<!DOCTYPE html>
<html>
<head><title>Solar System Distance Chart</title>
    <link rel="stylesheet" href="/index.css">
    <link rel="stylesheet" href="week2.css">
</head>
<body>
<?php
 define("SUN_KM", 1400000);
 define("SUN_MILES", 865000);
 define("MERCURY_KM", 58);
 define("MERCURY_MILES", 36);
 define("VENUS_KM", 108);
 define("VENUS_MILES", 67);
 define("EARTH_KM", 150);
 define("EARTH_MILES", 93);
 define("MARS_KM", 227);
 define("MARS_MILES", 141);
 define("JUPITER_KM", 779);
 define("JUPITER_MILES", 483);
 define("SATURN_KM", 1428);
 define("SATURN_MILES", 886);
 define("URANUS_KM", 2974);
 define("URANUS_MILES", 1782);
 define("NEPTUNE_KM", 4506);
 define("NEPTUNE_MILES", 2794);
 define("PLUTO_KM", 5913);
 define("PLUTO_MILES", 3666);
?>
<img id="title" src="/assets/title.png">
<h1 id="titleMsg">Welcome!</h1>
<div>
    <h2>Solar System Distance Chart by Brandon Lanoue</h2>
    <table>
    <tr>
    <td><img src="sun.gif" alt="Sun" width="56" height="56" /></td>
    <td>SUN (Diameter of the Sun iss <?php echo number_format(SUN_KM); ?> km or <?php echo number_format(SUN_MILES); ?> miles)</td>
    </tr>
    <tr>
    <td><img src="mercury.gif" alt="Mercury" width="56" height="56" /></td>
    <td>Mercury (<?php echo number_format(MERCURY_KM); ?> million km or <?php echo number_format(MERCURY_MILES); ?> million miles)</td>
    </tr>
    <tr>
    <td><img src="venus.gif" alt="Venus" width="56" height="56" /></td>
    <td>Venus  (<?php echo number_format(VENUS_KM); ?> million km or <?php echo number_format(VENUS_MILES); ?> million miles)</td>
    </tr>
    <tr>
    <td><img src="earth.gif" alt="Earth" width="56" height="56" /></td>
    <td>Earth (<?php echo number_format(EARTH_KM); ?> million km or <?php echo number_format(EARTH_MILES); ?> million miles)</td>
    </tr>
    <tr>
    <td><img src="mars.gif" alt="Mars" width="56" height="56" /></td>
    <td>Mars (<?php echo number_format(MARS_KM); ?> million km or <?php echo number_format(MARS_MILES); ?> million miles)</td>
    </tr>
    <tr>
    <td><img src="jupiter.gif" alt="Jupiter" width="56" height="56" /></td>
    <td>Jupiter (<?php echo number_format(JUPITER_KM); ?> million km or <?php echo number_format(JUPITER_MILES); ?> million miles)</td>
    </tr>
    <tr>
    <td><img src="saturn.gif" alt="Saturn" width="56" height="56" /></td>
    <td>Saturn (<?php echo number_format(SATURN_KM); ?> million km or <?php echo number_format(SATURN_MILES); ?> million miles)</td>
    </tr>
    <tr>
    <td><img src="uranus.gif" alt="Uranus" width="56" height="56" /></td>
    <td>Uranus (<?php echo number_format(URANUS_KM); ?> million km or <?php echo number_format(URANUS_MILES); ?> million miles)</td>
    </tr>
    <tr>
    <td><img src="neptune.gif" alt="Neptune" width="56" height="56" /></td>
    <td>Neptune (<?php echo number_format(NEPTUNE_KM); ?> million km or <?php echo number_format(NEPTUNE_MILES); ?> million miles)</td>
    </tr>
    <tr>
    <td><img src="pluto.gif" alt="Pluto" width="56" height="56" /></td>
    <td>Pluto (<?php echo number_format(PLUTO_KM); ?> million km or <?php echo number_format(PLUTO_MILES); ?> million miles)</td>
    </tr>
    </table>
    <hr />
    <?php
        echo  "\"This chart is out of this world!\"";
    ?>
</div>

</body>
</html>