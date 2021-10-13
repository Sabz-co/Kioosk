<?php


ini_set('allow_url_fopen', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$_GET['theme'] = 'new';

include_once('lib.inc.php');

$books = $Dbase->getAll("
SELECT * FROM $dl_table LIMIT 125");

foreach ($books as $book) {
    $Dbase->execute("INSERT INTO kiooskxyz.books (title, thumb, page_count, description, slug, created_at, updated_at) VALUES (?,?,?,?,?,?,?)", [$book['dltitle'], $book['thumb'], $book['pagenum'], $book['dldesc'], $book['dltitle'], date('Y-m-d H:i:s'), date('Y-m-d H:i:s')]);
    $content = file_get_contents('https://ketabnak.com/images/covers/'.$book['thumb']);
    file_put_contents('/var/www/html/kioosk/public/images/books/'.$book['thumb'], $content);
    echo "Done!";
}

