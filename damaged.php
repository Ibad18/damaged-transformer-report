<?php
if (isset($_GET['damaged_or_under_warranty']) && isset($_GET['capacity']) && isset($_GET['sub_division']) 
&& isset($_GET['location']) && isset($_GET['letter_no']) && 
isset($_GET['date'])) {
    $damagedOrUnderWarranty = htmlspecialchars($_GET['damaged_or_under_warranty']);
    $capacity = htmlspecialchars($_GET['capacity']);
    $subDivision = htmlspecialchars($_GET['sub_division']);
    $location = htmlspecialchars($_GET['location']);
    $letterNo = htmlspecialchars($_GET['letter_no']);
    $date = htmlspecialchars($_GET['date']);

} else {
    echo "<p>No values found in the URL</p>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformer Allocation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="letter">
            <div id="letter_paid">
                <div id="img">
                    <img src="assets/logo.jpeg" alt="" id="img">
                </div>
                <div id="paid_text">
                    <h2>PESHAWAR ELECTRIC SUPPLY COMPANY</h2>
                    <div class="content">
                        <p>Office of Addl: S.E PESCO Rural Cantt Division Peshawar</p>
                        <p>Salwan Building Saddar Road Peshawar Cantt Peshawar</p>
                        <p>Email: div2616pesco@gmail.com</p>
                        <p>Phone: 091-9212776</p><br>
                    </div>
                </div>
            </div>
            <div class="NoDate">
                <pre>No.____________________                                             Dated:______/______/2024</pre>
            </div>

            <!-- letter paid closed -->

            To

            <div class="address">
                <p>The Field Store PESCO</p>
                <p>Peshawar Cantt</p>
            </div>
            <div class="subject">
                <p>Subject:</p>
                <p style="margin-left: 50px; font-weight: bold; text-decoration: underline">ALLOCATION OF <?php echo $capacity?> KVA
                    TRANSFORMER AGAINST <?php echo $damagedOrUnderWarranty?>.</p>
            </div>

            <p class="paragraph">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kindly
                issue 01 No.<?php echo $capacity?>
                KVA transformer (reclaimed) to SDO PESCO <?php echo $subDivision?> Sub Division Peshawar against the <?php echo strtolower($damagedOrUnderWarranty)?> on emergent
                basis for restoration of Electric Supply at <?php echo $location?> Peshawar after observing all codal formalities,
                ensure before issue that the transformer not issued/drawn previously.</p>

        </div>
        <div class="stamp"
            style="line-height: 0px; text-align: center; margin-top: 100px; margin-left: 400px; margin-bottom: 20px;">
            <p>Addl: S.E (Opr) PESCO</p>
            <p>Rural Cantt Division</p>
            <p>Peshawar</p>
        </div>
        Copy to:
            <ul>
                <li>S.E PESCO Peshawar Circle Peshawar for information please.</li>
                <li>Manager (MM) PESCO Peshawar for information please.</li>
                <li>SDO PESCO <?php echo $subDivision?> Sub Division Peshawar for information w.r.to his No.<?php echo $letterNo?> dated:<?php echo $date?>. He is
                directed to boost up the recovery and made necessary maintenance on the said T/F in future if the same
                transformer damaged again the responsibility will rest upon your shoulders.</li>
            </ul>
    </div>
</body>

</html>