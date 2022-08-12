# Infile FEL

**Infile FEL** es un paquete para uso con el lenguaje PHP v8.x o posterior por medio del Framework Laravel a partir de su versión v9.x, el cual nos permite hacer el proceso de firma/certificación del los _**documentos tributarios electrónicos**_ (**DTE**) requeridos en la **República de Guatemala** por la _**Superintendencia de Administración Tributaría**_ (**SAT**) usando como **Ente** certificador a **Infile S. A.**

> Entiendase que cada **Ente** certificador tiene una manera distinta para tratar los procesos de firma/certificación de los DTE, por lo que este paquete solo aplica segun la logica de Infile, S. A.

## Instalación de Infile FEL

Si desea instalar este paquete ejecute el siguiente comando:

```bash
$ composer require realsoftgt/infile-fel

```

Luego de haberse instalado, debe ejecutar las siguientes instrucciones para poder configurar de una mejor manera el paquete:

1. Publique los assets que acompañan el paquete en su proyecto de Laravel por medio del siguiente comando:

```bash
# aca va el comando para publicarlos
php artisan vendor:publish --provider="RealSoft\InfileFEL\InfileFELServiceProvider"

```

2. Dicho paquete requiere que en su archivo `.env` tenga las siguientes varibles de configuración:

```bash
# ...
FEL_PATH_SIGN='https://signer-emisores.feel.com.gt/sign_solicitud_firmas/firma_xml'
FEL_PATH_CERTIFY='https://certificador.feel.com.gt/fel/certificacion/v2/dte/'
FEL_NIT_EMITTER=NIT_EMISOR
FEL_EMAIL_COPY='correo.del.emisor@correo.com'
FEL_USER_PREFIX_WS='106675273523454235'
FEL_KEY_WS='B49CE9C8552894655D768E1082EDB718GR34GTTTT423432'
FEL_PREFIX_UNIQUE_IDENTIFIER='MI-TIENDA-GUATE'
# y muchas variables más...
# ...

```

3. Otros pasos faltantes...

## Uso de Infile FEL

Aca va la forma de usar el paquete en nuestro proyecto Laravel.

## Descargo de responsabilidad

Los creadores, comunidad y/o entidad que le da mantenimienta a este paquete no se hacen resposables del mal uso o uso erroneo que se le de al mismo, ya sea por desconocimiento o intencional, por lo que el uso queda bajo la responsabilidad de quien lo instala.

## Contribuciones

Este paquete ha sido desarrollado para uso en proyectos personales, asi como comerciales relacionados a Real Software Solutions, por lo que se agradece el aporte de las siguientes personas:

- [Henry Díaz Gutiérrez](https://github.com/intelguasoft)
- [Tomás Eduardo Jimenez](https://github.com/devThms)
- [Freddy Edgardo Marroquín](https://github.com/newtella)

## Licencia

Infile FEL es un software de código abierto con licencia [MIT](https://opensource.org/licenses/MIT)