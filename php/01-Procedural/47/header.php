<!doctype html>
<html>
    <head>
        <title><?php echo  $title; ?></title>
        <style type="text/css">
            body {
                margin: 0;
                padding: 0;
                height: 100vh;
            }
            nav {
                width: 100vw;
                height: 20vh;
                background: #dddddd;
            }
            li {
                text-decoration: none;
                display: inline;
            }
            main {
                height: 60vh;
            }
            footer {
                width: 100vw;
                height: 20vh;
                background: #dddddd;
                margin-top: auto;
            }
            nav, main, footer {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <nav>
            <h2> <?=$title?> </h2>
            <ul>

                <!-- Propose le lien que si nous ne sommes pas sur la page -->
                <?php if (basename($_SERVER['SCRIPT_NAME']) === "index.php") { ?>
                    <li>Accueil</li>
                <?php } else { ?>
                    <li><a href="index.php">Accueil</a></li>
                <?php } ?>

                <!-- Autre écriture possible de la fonction if sans les accolades -->
                <?php if (basename($_SERVER['SCRIPT_NAME']) === "contact.php"): ?>
                    <li>Contact</li>
                <?php else: ?>
                    <li><a href="contact.php">Contact</a></li>
                <?php endif; ?>
            </ul>
        </nav>