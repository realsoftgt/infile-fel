<?php

/**
 * InfileFEL package config file
 */
return [

    /*
    |--------------------------------------------------------------------------
    | Ruta para la firma Infile FEL
    |--------------------------------------------------------------------------
    |
    | Endpoint del WS que proporciona Infile, el cual se utiliza para hacer
    | la solicitud de firma.
    |
    */
    'fel_route_sign' => env('FEL_PATH_SIGN', 'https://signer-emisores.feel.com.gt/sign_solicitud_firmas/firma_xml'),

    /*
    |--------------------------------------------------------------------------
    | Ruta para la certificación Infile FEL
    |--------------------------------------------------------------------------
    |
    | Endpoint del WS que proporciona Infile, el cual se utiliza para hacer
    | la solicitud de certificación, el proceso de firma debe ser satisfactorio
    | para proceder con esta.
    |
    */
    'fel_route_certify' => env('FEL_PATH_CERTIFY', 'https://certificador.feel.com.gt/fel/certificacion/v2/dte/'),

    /*
    |--------------------------------------------------------------------------
    | NIT del Emisor
    |--------------------------------------------------------------------------
    |
    | Número de identificación tributaria (NIT), en este caso la empresa 
    | registrado ante la SAT.
    |
    */
    'fel_nit_emitter' => env('FEL_NIT_EMITTER', '22640290'),

    /*
    |--------------------------------------------------------------------------
    | Correo electronico del Emisor (No obligatorio)
    |--------------------------------------------------------------------------
    |
    | Correo electrónico de la empresa registrada ante la SAT, al cual se le
    | envia el correo de confirmación con el resultado de la firma/certificación.
    |
    */
    'fel_email_copy' => env('FEL_EMAIL_COPY', 'mi.correo@correo.com'),

    /*
    |--------------------------------------------------------------------------
    | Usuario/Prefijo del Emisor
    |--------------------------------------------------------------------------
    |
    | Valor que se utiliza para identificar al usuario en el sistema de Infile,
    | en este caso el prefijo de la empresa registrada ante la SAT.
    | Comunmente es el NIT del emisor.
    |
    */
    'fel_user_prefix_ws' => env('FEL_USER_PREFIX_WS', '106675273523454235'),

    /*
    |--------------------------------------------------------------------------
    | Clave del Emisor
    |--------------------------------------------------------------------------
    |
    | Clave de acceso del emisor, es una cadena de 32 caracteres que le fue
    | asignada por Infile.
    |
    */
    'fel_key_ws' => env('FEL_KEY_WS', 'B49CE9C8552894655D768E1082EDB718GR34GTTTT423432'),

    /*
    |--------------------------------------------------------------------------
    | ID de la empresa
    |--------------------------------------------------------------------------
    |
    | Identificador de la empresa registrada ante la SAT, este valor se asigna
    | por uno mismo para que los documentos emitidos ante la SAT puedan ser
    | identificados de manera única. Sirve mas cuando una empresa tiene varios
    | establecimientos registradas en la SAT.
    |
    */
    'fel_prefix_unique_identifier' => env('FEL_PREFIX_UNIQUE_IDENTIFIER', 'MI-TIENDA-GUATE'),

    /*
    |--------------------------------------------------------------------------
    | 
    |--------------------------------------------------------------------------
    |
    | If the application is to be hosted in the Laravel Vapor hosting platform,
    | a special header needs to be attached to each download response.
    |
    */
    'useVaporHeaders'  => env('FEL_VAPOR_HEADERS', false),

];
