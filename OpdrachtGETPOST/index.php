<DOCTYPE html>
    <html>

    <head>
        <title>Opdracht4 GET</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <article>
            <form action="index.php" method="GET">
                <select name="car">
                    <option value="bmw" >BMW</option>
                    <option value="lexus" >Lexus</option>
                    <option value="mercedes">Mercedes</option>
                </select>
                <select name="color">
                    <option value="red" >Red</option>
                    <option value="black">Black</option>
                    <option value="blue">Blue</option>
                </select>
                <button type="submit" name="submit">Verstuur</button>
            </form>
            <?php

            if (isset($_GET["submit"])) {

                echo '<img style="height: 600px;" src="'.$_GET["color"].$_GET["car"].'.jpg"></img>' ;
            }

            /*
            POST
            
            if (isset($_POST["submit"])) {

                echo '<img style="height: 600px;" src="'.$_POST["color"].$_POST["car"].'.jpg"></img>' ;
            }
            */

            ?>
        </article>
    </body>

    </html>