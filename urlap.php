<?php

if ((isset($_POST['nev'])) && (isset($_POST['mail'])) && (isset($_POST['vendeg'])) && (isset($_POST['hozzaszolas']))) {

    $nev = trim($_POST['nev']);
    //$nev = filter_input(INPUT_POST, 'nev', FILTER_SANITIZE_STRING);
    $mail = trim($_POST['mail']);
    $vendeg = trim($_POST['vendeg']);
    $hozzaszolas = trim($_POST['hozzaszolas']);
    $hiba = false;

    if (preg_match("/^[a-zöüóőúűáé\s.]{5,50}$/i", $nev) == 0) {
        print '<div style="color: red">Add meg a neved!</div>';
        $hiba = true;
    }
   
    /* $nevlength = strlen($nev);
      if (empty($nev)) {
      $hiba = true;
      print "<div style='color:red'>Nem adtál meg nevet.</div>";
      } elseif ($nevlength < 4) {
      $hiba = true;
      print "<div style='color:red'>Túl rövid nevet adtál meg.</div>";
      } elseif ($nevlength > 50) {
      $hiba = true;
      print "<div style='color:red'>Túl hosszú nevet adtál meg.</div>";
      } */

    if (preg_match("/^[0-9a-z\.-]+@([0-9a-z-]+\.)+[a-z]{2,4}$/", $mail) == 0) {
        print '<div style="color: red">Érvénytelen email cím!</div>';
        $hiba = true;
    }


    if ((strlen($hozzaszolas) < 10) || (strlen($hozzaszolas) > 10000)) {
        print '<div style="color: red">A hozzászólás legalább 10 és maximum 100 karakter lehet!</div>';
        $hiba = true;
    }
}
?>




