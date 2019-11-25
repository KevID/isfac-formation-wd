<?php
session_start();

$admin = (isset($_SESSION['auth']) && $_SESSION['auth']) ? true : false;
?>
<!DOCTYPE html>
<html>
<head>
    <meta doctype="UTF-8">
    <title>TP: Links</title>
    <style type="">
        .navigation {
            list-style: none;
            margin: 0;
            background: deepskyblue;
            display: flex;
            flex-flow: row wrap;
            justify-content: flex-end;
        }

        .navigation a {
            text-decoration: none;
            display: block;
            padding: 1em;
            color: white;
        }

        .navigation a:hover {
            background: darken(deepskyblue, 2%);
        }

        @media all and (max-width: 800px) {
            .navigation {
                justify-content: space-around;
            }
        }

        @media all and (max-width: 600px) {
            .navigation {
                -webkit-flex-flow: column wrap;
                flex-flow: column wrap;
                padding: 0;
            }

            .navigation a {
                text-align: center;
                padding: 10px;
                border-top: 1px solid rgba(255, 255, 255, 0.3);
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            }


            .navigation li:last-of-type a {
                border-bottom: none;
            }
        }
    </style>
</head>
<body>
<ul class="navigation">
    <?php if ($admin): ?>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="auth.php">Déconnexion</a></li>
    <?php else: ?>
        <li><a href="auth.php">Connexion</a></li>
    <?php endif; ?>
</ul>


</body>
</html>
