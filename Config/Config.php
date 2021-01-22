<?php

    //define("BASE_URL", "http://localhost/jlm/");
    const BASE_URL = "https://jlmworks.herokuapp.com";
    //const BASE_URL = "http://localhost/jlm";

    //Zona horaria de Bogotá
    date_default_timezone_set('America/Bogota');


    //Datos de conexión a Bases de datos
    const DB_HOST = "rnr56s6e2uk326pj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    const DB_NAME = "n5xrbu8lg6tkt3uv";
    const DB_USER = "gqp0fet0ijr0t6k4";
    const DB_PASSWORD = "tuq2kdqmuv5umld7";
    const DB_CHARSET = "utf8";

    //Separadores decimal y millar
    const SPD = ".";
    const SPM = ".";

    //Simbolo de la moneda
    const SMONEY = "COP $";

    //Datos envio de correo
	const NOMBRE_REMITENTE = "JLM WorkShop";
	const EMAIL_REMITENTE = "no-reply@jlmworkshop.com";
	const NOMBRE_EMPRESA = "JLM WorkShop";
    const WEB_EMPRESA = "https://jlmworks.herokuapp.com/";
    

    const CAT_SLIDER = "13,14,15";
    const CAT_BANNER = "6,7,11";

    //Datos para Encriptar / Desencriptar
	const KEY = 'juandatec';
	const METHODENCRIPT = "AES-128-ECB"; //Extraido de la documentación de PHP

?>