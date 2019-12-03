<!doctype html>
<html>
    <head>
        <title>form.php</title>
    </head>
    <body>
        <form action="form.php/$email" method="POST" target="_blank">
            <input type="email" filter_var name="email" id="mail" placeholder="Voer je e-mailadres in">
            <input type="submit">
            
        </form>
        <h1>
            <?php
                $email = htmlspecialchars($_POST["email"]);
                if((filter_var($email, FILTER_VALIDATE_EMAIL))) {
                    echo "Geldig e-mailadres!";
                } else {
                    echo "Voer een GELDIG e-mailadres in!";
                }
            ?>
        </h1>
    </body>
</html>