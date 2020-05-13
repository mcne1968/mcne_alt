<?php
//Step1
 $db = mysqli_connect('db5000297056.hosting-data.io','dbu513178','2Nebras47#i','dbs290275')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>

 </head>
 <body>
 <h3>  Preise & Leistungen </h3>

<?php
//Step2
$query = "SELECT * FROM Zugriff";
mysqli_query($db, $query) or die('Error querying database.');

//Step3
$sql = "INSERT INTO Zugriff VALUES(CURRENT_TIMESTAMP,'PREISE','1','2')";
if(mysqli_query($db, $sql)){
    echo " ";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

//Step 4
mysqli_close($db);

?>
            <table width="100%" style="border: medium; width: 100%; background-color: #9FB817;">
                <colgroup>
                <col width="300" />
                <col width="10" />
                <col width="50" />
                <col width="50" />
                <col width="50" /> </colgroup>
                <tbody>
                <tr>
                    <td style="color: rgb(0, 0, 0);"><strong>Damen</strong></td>
                    <td style="text-align: right; color:midnightblue">&nbsp;</td>
                    <td style="text-align: right; color: rgb(39, 1, 1);">Kurz</td>
                    <td style="text-align: right; color: rgb(39, 1, 1);">Mittel</td>
                    <td style="text-align: right; color: rgb(39, 1, 1);">Lang</td>
                </tr>
                <tr>
                    <td><strong>&nbsp;</strong></td>
                    <td style="text-align: right; color:midnightblue">&nbsp;</td>
                    <td style="text-align: right; color:midnightblue">&nbsp;</td>
                    <td style="text-align: right; color:midnightblue">&nbsp;</td>
                    <td style="text-align: right; color:midnightblue">&nbsp;</td>
                </tr>
                <tr>
                    <td style="color: rgb(0, 0, 0);">Waschen/Fönen oder Legen inkl. Material</td>
                    <td style="color: rgb(0, 0, 0);">ab</td>
                    <td style="text-align: right; color:midnightblue"> 15€</td>
                    <td style="text-align: right; color:midnightblue"> 25€</td>
                    <td style="text-align: right; color:midnightblue"> 35€</td>
                </tr>
                <tr>
                    <td style="color: rgb(0, 0, 0);">Waschen/Schneiden/Föhnen oder Legen inkl. Material</td>
                    <td style="color: rgb(0, 0, 0);">ab</td>
                    <td style="text-align: right; color:midnightblue">25€</td>
                    <td style="text-align: right; color:midnightblue">35€</td>
                    <td style="text-align: right; color:midnightblue">40€</td>
                </tr>
                <tr>
                    <td style="color: rgb(0, 0, 0);">Farbbehandlung ohne Farbmaterial inkl. Spülung</td>
                    <td style="color: rgb(0, 0, 0);">ab</td>
                    <td style="text-align: right; color:midnightblue">25€</td>
                    <td style="text-align: right; color:midnightblue">35€</td>
                    <td style="text-align: right; color:midnightblue">40€</td>
                </tr>
                <tr>
                    <td style="color: rgb(0, 0, 0);">Strähnen mit Blondiermaterial inkl. Spülung</td>
                    <td style="color: rgb(0, 0, 0);">ab</td>
                    <td style="text-align: right; color:midnightblue">25€</td>
                    <td style="text-align: right; color:midnightblue">55€</td>
                    <td style="text-align: right; color:midnightblue">65€</td>
                </tr>
                <tr>
                    <td style="color: rgb(0, 0, 0);">Dauerwelle mit Material  inkl. Spülung</td>
                    <td style="color: rgb(0, 0, 0);">ab</td>
                    <td style="text-align: right; color:midnightblue">60€</td>
                    <td style="text-align: right; color:midnightblue">70€</td>
                    <td style="text-align: right; color:midnightblue">80€</td>
                </tr>
                </tbody>
            </table>
            <p></p>
            <table width="100%" style="border: medium; width: 100%; background-color: #9FB817;">
                <colgroup>
                    <col width="300" />
                    <col width="10" />
                    <col width="50" />
                    <col width="50" />
                    <col width="50" /> 
                </colgroup>
                    <tbody>
                    <tr>
                        <td style="color: rgb(0, 0, 0);"><strong>Weitere Leistungen</strong></td>
                        <td style="text-align: right; color:midnightblue">&nbsp;</td>
                        <td style="text-align: right; color:midnightblue">&nbsp;</td>
                        <td style="text-align: right; color:midnightblue">&nbsp;</td>
                        <td style="text-align: right; color:midnightblue">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0);">Hochsteckfrisur / Brautfrisur (ohne Steckmaterial)</td>
                        <td style="color: rgb(0, 0, 0);">ab</td>
                        <td style="text-align: right; color:midnightblue"> 60€</td>
                        <td style="text-align: right; color:midnightblue">&nbsp;</td>
                        <td style="text-align: right; color:midnightblue">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0);">Make-up  für jeden Anlass (je nach Aufwand)</td>
                        <td style="color: rgb(0, 0, 0);">ab</td>
                        <td style="text-align: right; color:midnightblue"> 25€</td>
                        <td style="text-align: right; color:midnightblue">bis</td>
                        <td style="text-align: right; color:midnightblue"> 45€</td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0);">Maniküre (je nach Aufwand) ohne Lack </td>
                        <td style="color: rgb(0, 0, 0);">ab</td>
                        <td style="text-align: right; color:midnightblue"> 25€</td>
                        <td style="text-align: right; color:midnightblue"></td>
                        <td style="text-align: right; color:midnightblue"></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0);">Maniküre mit Lack und Nageldesign </td>
                        <td style="color: rgb(0, 0, 0);">ab</td>
                        <td style="text-align: right; color:midnightblue"> 35€</td>
                        <td style="text-align: right; color:midnightblue"></td>
                        <td style="text-align: right; color:midnightblue"></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0);">Augenbrauen zupfen</td>
                        <td style="color: rgb(0, 0, 0);">ab</td>
                        <td style="text-align: right; color:midnightblue"> 8€</td>
                        <td style="text-align: right; color:midnightblue"></td>
                        <td style="text-align: right; color:midnightblue"></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0);">Zupfen mit Fadentechnik</td>
                        <td style="color: rgb(0, 0, 0);">ab</td>
                        <td style="text-align: right; color:midnightblue"> 10€</td>
                        <td style="text-align: right; color:midnightblue"></td>
                        <td style="text-align: right; color:midnightblue"></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0);">Augenbrauen färben</td>
                        <td style="color: rgb(0, 0, 0);">ab</td>
                        <td style="text-align: right; color:midnightblue"> 8€</td>
                        <td style="text-align: right; color:midnightblue"></td>
                        <td style="text-align: right; color:midnightblue"></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0);">Wimpern färben</td>
                        <td style="color: rgb(0, 0, 0);">ab</td>
                        <td style="text-align: right; color:midnightblue"> 8€</td>
                        <td style="text-align: right; color:midnightblue"></td>
                        <td style="text-align: right; color:midnightblue"></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0);">Haarentfernung mit Wax</td>
                        <td style="color: rgb(0, 0, 0);">ab</td>
                        <td style="text-align: right; color:midnightblue"> 25€</td>
                        <td style="text-align: right; color:midnightblue"></td>
                        <td style="text-align: right; color:midnightblue"></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0);">Haarkur</td>
                        <td style="color: rgb(0, 0, 0);">ab</td>
                        <td style="text-align: right; color:midnightblue"> 5€</td>
                        <td style="text-align: right; color:midnightblue"></td>
                        <td style="text-align: right; color:midnightblue"></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0);">Make-up Seminare</td>
                        <td style="color: rgb(0, 0, 0);">ab</td>
                        <td style="text-align: right; color:midnightblue"> 50€</td>
                        <td style="text-align: right; color:midnightblue"></td>
                        <td style="text-align: right; color:midnightblue"></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0);">Gesichtsreinigung mit kleinem Make-Up</td>
                        <td style="color: rgb(0, 0, 0);">ab</td>
                        <td style="text-align: right; color:midnightblue"> 20€</td>
                        <td style="text-align: right; color:midnightblue"></td>
                        <td style="text-align: right; color:midnightblue"></td>
                    </tr>
            </tbody>
            </table>

            <p></p>
            <table width="100%" style="border: medium; width: 100%; background-color: #9FB817;">
            <colgroup>
            <col width="200" />
            <col width="50" />
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="color: rgb(0, 0, 0);"><strong>Herren</strong></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="color: rgb(0, 0, 0);">Trockenschnitt</td>
                    <td style="text-align: right; color:midnightblue"> 18€</td>
                    <td></td>
                </tr>
                <tr>
                    <td style="color: rgb(0, 0, 0);">Bartpflege</td>
                    <td style="text-align: right; color:midnightblue"> 8€</td>
                </tr>	
            </tbody>
            </table>

</body>
</html>
