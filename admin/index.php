<?php
include_once 'header.php';
    switch (@$_GET['menu']) {
          case 'surat-masuk':
            include 'view_masuk.php';
            break;
          case 'input-masuk':
            include 'create_masuk.php';
            break;
          case 'edit-masuk':
            include 'update_masuk.php';
            break;
          case 'surat-keluar':
            include 'view_keluar.php';
            break;
          case 'input-keluar':
            include 'create_keluar.php';
            break;
          case 'edit-keluar':
            include 'update_keluar.php';
            break;
          case 'user':
            include 'view_user.php';
            break;
          case 'input-user':
            include 'create_user.php';
            break;
          case 'edit-user':
            include 'update_user.php';
            break;
          case 'log':
            include 'view_log.php';
            break;
          case 'input-log':
            include 'create_log.php';
            break;
          case 'edit-log':
            include 'update_log.php';
            break;
      default:
        echo "";
        break;
    }
include_once 'footer.php';
 ?>
