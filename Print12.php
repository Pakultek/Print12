<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шаблоны</title>
</head>
</html>

<?php

$address = '***.***.***.***'; //Адрес принтера
$port = 9100; 
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$result = socket_connect($socket, $address, $port);
$msg='';
if ($result === false) {
  echo "Ошибка при подключении к сокету";
} else {
$msg='^XA

^DFE:Horizont_Kronsh_New^FS
^CWA,E:TT0003.TTF
^PON
^CI28


^FO550,20^GFA,4125,4125,11,,:::W03E,::V01IF,:V07IFC,::3FFER07IFC,:3KFEO07IFC,::OF8L07IFC,:3PFEJ07IFC,::3SF807IFC,:07XFC,::01XFC,:K0UFC,::M03RFC,:P0PFC,::R03MFC,:U0KFC,::V07IFC,::::::::::::::V01IFC,::::I01JFO03FFC,:003NF8L018,::01QFE,:07TF8,::07VFE,:3XF8,::3YF,:3JFCI07PFC,::3JFL01NFC,:KFO07KFC,::3IF8Q01IF,:3IF8,::::3JF,::::07IFC,::07JF8,:01KFC,::003MF,:I0OFC,::I0RFC,:J07SF,::K0TF8,:L07SF,::N0RFC,:P03OFC,::S01LFC,:3IF8Q07IF,::3LFC,:3OF,::3QFC,:3TF,::3VFC,:3XF8,::3YF,:3IF8003RFC,::3IF8I0RFC,:3IF8I0JFCMFC,::3IF8I0JFC003JFC,:3IF8I0JFCI07IFC,::JF8I0JFCI07IFC,:3IF8I0JFCI07IFC,::::3JFI0JFCI07IFC,::3JFI0KFI07IFC,:07JF9LFE03JFC,::07XFC,:01XFC,::003WF,:I0WF,::I01MF9MF8,:K0KF003KFE,::T07FFC,:,::::N01FFE,::L01MF8,:K03OFC,::J07QF8,:I01SFC,::I0UF,:003UFE,::01LFEI03KFE,:01KFCK01KF8,::07JF8M07JF8,:07IFCO0KF,::3JFCO03JF,:3JFP03JF,::3JFQ07IFC,:3IF8Q07IFC,::JF8Q07IFC,::::3IF8Q07IFC,::::3JFQ07IFC,:3JFP03JF,::3JFCO03JF,:07IFCO0KF,::07JF8M07JF8,:01KFCK01KF8,::01LFEI03KFE,:003UF,::I0UF,:I01SFC,::J07QF8,:K03OFC,::L01MF8,:P0F8,::,::::N0KF,:L07MF8,::K0PFC,:J07QFE,::I0TFC,:003UF,::003UFE,:01LFJ03KFE,::07JFEL01KF8,:07JF8M07JF8,::3JFCO0KF,:3JFCO03JF,::3JFP03JF,:3JFQ07IFC,::3IF8J07FEJ07IFC,:JF8I01IFCI07IFC,::3IF8I0JFCI07IFC,::::3JFI0JFCI07IFC,::::3JFI0JFC003JF,:3JFC00JFC00KF,::07JF80JFC00KF,:07JFE0JFC07JF8,::01KFCJFC1KF8,:01PFCKFE,::003OFCKF,:I0OFCJFC,::I01NFC1FFE,:J07MFC1FF8,::K03LFC,:L01JFE,::,:::::::^FS

^FO580,430
^A0R,40,40
^FDНАСТЕННЫЕ КРОНШТЕЙНЫ^FS

^FO530,400
^A0R,40,40
^FDДЛЯ ТРУБЧАТЫХ РАДИАТОРОВ^FS

^FO460,40
^A0R,40,40
^FDЦВЕТ:^FS

^FO460,150
^A0R,40,40
^FN1^FS

^FO150,50
^A0R,40,40
^FDОТК-^FS

^FO150,160
^A0R,40,40
^FN4^FS

^FO250,40
^FWN
^BXN,13,200
^FN2^FS

^FO210,50
^A0R,30,30
^FN3^FS

^FO370,580
^GE150,150,5,B^FS

^FO385,625
^A0R,100,100
^FDH^FS

^FO90,30
^A0R,24,24
^FDСДЕЛАНО В РОССИИ^FS

^FO60,30
^A0R,24,24
^FDОренбургская обл.,г.Гай,^FS

^FO30,30
^A0R,24,24
^FDТехнологический проезд 18.^FS

^FO420,250
^A0R,30,30
^FDКорпус кронштейна^FS

^FO420,750
^A0R,30,30
^FD-2 шт.^FS

^FO380,250
^A0R,30,30
^FDКрюк кронштейна^FS

^FO380,750
^A0R,30,30
^FD-2 шт.^FS

^FO340,250
^A0R,30,30
^FDСаморез 5,5*70^FS

^FO340,750
^A0R,30,30
^FD-2 шт.^FS

^FO300,250
^A0R,30,30
^FDШайба^FS

^FO300,750
^A0R,30,30
^FD-2 шт.^FS

^FO260,250
^A0R,30,30
^FDДюбель^FS

^FO260,750
^A0R,30,30
^FD-2 шт.^FS

^FO220,250
^A0R,30,30
^FDВинт М6^FS

^FO220,750
^A0R,30,30
^FD-2 шт.^FS

^FO180,250
^A0R,30,30
^FDКрышка корпуса нижнего кронштейна^FS

^FO180,750
^A0R,30,30
^FD-1 шт.^FS

^FO140,250
^A0R,30,30
^FDПружина нижнего кронштейна^FS

^FO140,750
^A0R,30,30
^FD-1 шт.^FS

^FO100,250
^A0R,30,30
^FDКлюч для воздухоспускного клапана^FS

^FO100,750
^A0R,30,30
^FD-1 шт.^FS

^FO130,890
^BY3.5,3
^BEN,80,N,N,N 
^FN5^FS

^FO190,990
^A0.5N,20,40
^FN5^FS 

^FO130,860
^A0N,25,25
^FDАрт.:^FS

^FO190,860
^A0N,25,25
^FN6^FS


^XZ

^XA
^XFE:Horizont_Kronsh_New^FS
^FN1^FDBM^FS
^FN2^FDH1234567890^FS
^FN3^FDH1234567890^FS
^FN4^FD55^FS
^FN5^FD4640208806217^FS
^FN6^FDH-123^FS
^PQ1
^XZ';

  socket_write($socket, $msg, strlen($msg));
  
  if (isset($socket)) {
    socket_close($socket);
  //  echo "Сокет успешно закрыт";
  
    
  }
}

?>
