<?php
if (!isset($_GET['id'])) {
    die('id:n arvoa ei ole asetettu');
}

$id = intval($_GET['id']);

echo "Tehdään jotain taikoja id:llä $id!";
