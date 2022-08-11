<?php

/**
 * InfileFEL package config file
 */
return [

    /*
    |--------------------------------------------------------------------------
    | Default configuration for Infile FEL
    |--------------------------------------------------------------------------
    |
    | Specify the default values for creating a PDF with FEL
    |
    */

    'fel_route_sign'            => env('FEL_PATH_SIGN', 'https://signer-emisores.feel.com.gt/sign_solicitud_firmas/firma_xml'),
    'fel_route_certify'         => env('FEL_PATH_CERTIFY', 'https://certificador.feel.com.gt/fel/certificacion/v2/dte/'),
    'fel_nit_emitter'           => env('FEL_NIT_EMITTER', '22640290'),
    'fel_email_copy'            => env('FEL_EMAIL_COPY', 'mi.correo@correo.com'),
    'fel_user_prefix_ws'     => env('FEL_USER_PREFIX_WS', '106675273523454235'),
    'fel_key_ws'        => env('FEL_KEY_WS', 'B49CE9C8552894655D768E1082EDB718GR34GTTTT423432'),
    'fel_prefix_unique_identifier' => env('FEL_PREFIX_UNIQUE_IDENTIFIER', 'MI-TIENDA-GUATE'),
    
    'unit'              => 'mm',
    'size'              => 'A4',
    'font_path'         => env('FEL_FONTPATH'),

    /*
    |--------------------------------------------------------------------------
    | With Laravel Vapor hosting
    |--------------------------------------------------------------------------
    |
    | If the application is to be hosted in the Laravel Vapor hosting platform,
    | a special header needs to be attached to each download response.
    |
    */
    'useVaporHeaders'  => env('FEL_VAPOR_HEADERS', false),

];
