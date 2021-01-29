<?php

    //define("BASE_URL", "http://localhost/jlm/");
    //const BASE_URL = "https://jlmworks.herokuapp.com";
    const BASE_URL = "http://localhost/jlm";

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
    const SMONEY = "$ ";
    const CURRENCY = "USD";

    //Api PayPal
    //Sandbox PayPal
    const IDCLIENTE = "AVHJZZtf2MODNkqeyw-YtwKkrsWTytiJ158ygblNPdvVEbSzj15ihiUWU3G0SC-bVt6UAX-aOtzEJI6m";
    //Live PayPal
    //const IDCLIENTE = "Pegar aqui el ID del Live de PayPal";

    //Datos envio de correo
	const NOMBRE_REMITENTE = "JLM WorkShop";
	const EMAIL_REMITENTE = "no-reply@jlmworkshop.com";
	const NOMBRE_EMPRESA = "JLM WorkShop";
    const WEB_EMPRESA = "https://jlmworks.herokuapp.com/";

    //Datos Empresa
    const DIRECCION = "Calle 143 #46 - 09 - Bogotá, Colombia";
    const TELEMPRESA = "(031) 744 25 10";
    const EMAIL_EMPRESA = "jlmworkshop@gmail.com";
    const EMAIL_PEDIDOS = "jlmworkshop@gmail.com";

    

    const CAT_SLIDER = "13,14,15";
    const CAT_BANNER = "6,7,11";

    //Datos para Encriptar / Desencriptar
	const KEY = 'juandatec';
	const METHODENCRIPT = "AES-128-ECB"; //Extraido de la documentación de PHP

    //Envío
    const COSTOENVIO = 5000;
?>