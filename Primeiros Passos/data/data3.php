<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
//LC_ALL muda todas as configurações de localização para portugues

echo ucwords(strftime("%A %B"));
//apresenta as informações conforme os parametros passados no setlocale
