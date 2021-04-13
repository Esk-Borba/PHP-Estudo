<?php
    require_once("config.php");

    echo session_save_path();
    //mostra o caminho onde a sessão é gravada

    echo "<br>";

    var_dump(session_status());
    //mostra o status da sessão

    switch (session_status()){
        case PHP_SESSION_DISABLED:
            echo  "A sessão está desabilitada";
            break;
        case PHP_SESSION_NONE:
            echo "A sessão está habilitada, mas não possui dados";
            break;
        case PHP_SESSION_ACTIVE:
            echo "A sessão está habilitada e possui dados";
            break;
    }
