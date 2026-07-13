<?php
$db = new PDO('sqlite:database/database.sqlite');
$stmt = $db->query('SELECT * FROM articles LIMIT 1');
$row = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($row);
