<?php
echo '<h1>Page édition</h1>';
$id = $_GET['id'] ?? null;
if ($id) {
    echo '<p>L\'id est :' . $id . '</p>';
}
