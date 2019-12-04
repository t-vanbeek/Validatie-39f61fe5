<!doctype html>
<html>
    <head>
        <meta charset="UTF8">
        <title>form.php</title>
    </head>
    <body>
        <form method="POST" target="_blank">
            <input type="email" filter_var name="email" id="mail" placeholder="Voer je e-mailadres in" required>
            <input type="submit">
            
        </form>
        <h1>
            <?php
            if (isset($_POST["email"])) {
                if((filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))) {
                    echo "Geldig e-mailadres!";
                } else {
                    echo "Voer een GELDIG e-mailadres in!";
                }
            }
            ?>
        </h1>
    </body>
</html>