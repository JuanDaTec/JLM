<?php

    //define("BASE_URL", "http://localhost/jlm/");
    const BASE_URL = "https://jlmworkshop.oaccekrf.lucusvirtual.es";
    //const BASE_URL = "http://localhost/jlm";

    //Zona horaria de Bogotá
    date_default_timezone_set('America/Bogota');


    //Datos de conexión a Bases de datos
    const DB_HOST = "localhost";
    //const DB_HOST = "rnr56s6e2uk326pj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    const DB_NAME = "kflpogmv_jlmworkshop";
    //const DB_NAME = "n5xrbu8lg6tkt3uv";
    const DB_USER = "kflpogmv_juanda";
    //const DB_USER = "gqp0fet0ijr0t6k4";
    const DB_PASSWORD = "Killer56020";
    //const DB_PASSWORD = "tuq2kdqmuv5umld7";
    const DB_CHARSET = "utf8";

    //Separadores decimal y millar
    const SPD = ".";
    const SPM = ".";

    //Simbolo de la moneda
    const SMONEY = "$ ";
    const CURRENCY = "USD";

    //Api PayPal
    //Sandbox PayPal
    const URLPAYPAL = "https://api-m.sandbox.paypal.com";
    const IDCLIENTE = "AVHJZZtf2MODNkqeyw-YtwKkrsWTytiJ158ygblNPdvVEbSzj15ihiUWU3G0SC-bVt6UAX-aOtzEJI6m";
    const SECRET = "EPx0wF7nMC1jWXBldTVQRSEgISRjBmyU7ny5es-vYJ6NwyyyR7iom7IMSruHszMqGp2PCXs0u3aBvjh3";
    //Live PayPal
    //const IDCLIENTE = "Pegar aqui el ID del Live de PayPal";
    //const URLPAYPAL = "https://api-m.paypal.com";
    //const SECRET = "Pegar aqui el secret del Live de Paypal";

    //Datos envio de correo
	const NOMBRE_REMITENTE = "JLM WorkShop";
	const EMAIL_REMITENTE = "clientes@jlmworkshop.oaccekrf.lucusvirtual.es";
	const NOMBRE_EMPRESA = "JLM WorkShop";
    const WEB_EMPRESA = "https://jlmworkshop.oaccekrf.lucusvirtual.es";

    //Datos Empresa
    const DIRECCION = "Calle 143 #46 - 09 - Bogotá, Colombia";
    const TELEMPRESA = "+57 (305) 797-3644";
    const EMAIL_EMPRESA = "clientes@jlmworkshop.oaccekrf.lucusvirtual.es";
    const EMAIL_PEDIDOS = "clientes@jlmworkshop.oaccekrf.lucusvirtual.es";

    

    const CAT_SLIDER = "13,14,15";
    const CAT_BANNER = "6,7,11";

    //Datos para Encriptar / Desencriptar
	const KEY = 'juandatec';
	const METHODENCRIPT = "AES-128-ECB"; //Extraido de la documentación de PHP

    //Envío
    const COSTOENVIO = 5000;

    //Módulos
    const MPEDIDOS = 5;
    const MCLIENTES = 3;

    //Roles
    const RADMINISTRADOR = 1;
    const RCLIENTES = 46;
?>