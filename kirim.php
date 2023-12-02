<? if($_POST[submit]) { $pesan=urldecode($_POST[FieldData5]); 
$pesan=str_replace('\"','"',$pesan); $pesan=str_replace("\'","'",$pesan); $kirim="Pengirim".":".""." "."$_POST[FieldData0]"."\n\n"; $kirim 
.="$pesan"."\n\n"; $kirim .="Contact : "."\n"; $kirim .="No Tlp".": "."$_POST[FieldData7]"."\n"; $kirim .="Email".": "."$_POST[FieldData1]"."\n"; $kirim .="Website ".": "."$_POST[FieldData2]"."\n\n"; $sendi= 
mail("iklanmassalnusantara@gmail.com","$_POST[FieldData3]","$kirim\n\n", "FROM:\"mutadi\"<iklanmassalnusantara@gmail.com>\n"."X-IP-Address: 
$_SERVER[REMOTE_ADDR]\n"."X-Referer: $_SERVER[HTTP_REFERER]\n"); if($sendi) { header('location:https://iklanmassalnusantara.blogspot.com/'); } else { ?> <script> alert('gagal kirim email'); 
window.location="https://iklanmassalnusantara.blogspot.com/"; </script> <? } } ?>
