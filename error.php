<?php

$image = $_FILES['image'];
if ($image['name'] !== '' && $image[error] === 0) {
  $type = mime_content_type($image['temp_name']);
  if ($type !== 'image/png' && $type !== 'image/jpeg') {
    $error['image'] = 'type';
  }
}

$image = $_FILES['image'];
    if ($image['name'] !== '' && $image['error'] === 0) {
        $type = mime_content_type($image['tmp_name']);
        if ($type !== 'image/png' && $type !== 'image/jpeg') {
            $error['image'] = 'type';
        }
    }

?>