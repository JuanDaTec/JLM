<?php

    //define("BASE_URL", "http://localhost/jlm/");
    const BASE_URL = "https://jlmworks.herokuapp.com";

    //Zona horaria de Bogotá
    date_default_timezone_set('America/Bogota');


    //Datos de conexión a Bases de datos
    const DB_HOST = "r1bsyfx4gbowdsis.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    const DB_NAME = "s54kondnnt9xh1u9";
    const DB_USER = "pko1xn2l8f7qoldm";
    const DB_PASSWORD = "ougur9lptzcg5bgc";
    const DB_CHARSET = "utf8";

    //Separadores decimal y millar
    const SPD = ".";
    const SPM = ".";

    //Simbolo de la moneda
    const SMONEY = "COP ";

    //Datos envio de correo
	const NOMBRE_REMITENTE = "JLM WorkShop";
	const EMAIL_REMITENTE = "no-reply@jlmworkshop.com";
	const NOMBRE_EMPRESA = "JLM WorkSHop";
	const WEB_EMPRESA = "https://jlmworks.herokuapp.com/";


?>