<?php

/* htmlspecialcharsの短縮化 */
function h($value) {
  return htmlspecialchars($value, ENT_QUOTES);
}

/* データベースへの接続 */
function dbconnect() {
  $db = new mysqli('localhost' , 'root', 'root', 'forum');
  if (!$db) {
    die($db->error);
  }
  return $db;
}

?>