<?php
########## aca defino mis funciones de uso general y mas importantes
define('ENCODE_KEY', 'K7x_29pQ!m');
define('ENCODE_LENGTH', 32);

function encodeValue(string $value): string
{
    // Guardamos la longitud del valor original (1 byte)
    $valLen = chr(strlen($value));

    // Salt aleatorio (7 bytes para completar 8 junto con $valLen)
    $salt = random_bytes(7);

    // Relleno aleatorio
    $paddingLength = ENCODE_LENGTH - strlen($value) - 8;

    if ($paddingLength < 0) {
        throw new InvalidArgumentException('Valor demasiado largo');
    }

    $padding = random_bytes($paddingLength);

    // Estructura de la data: [1 byte Longitud][7 bytes Salt][Valor Real][Padding Aleatorio]
    $data = $valLen . $salt . $value . $padding;

    // XOR con la clave
    $out = '';
    $keyLength = strlen(ENCODE_KEY);

    for ($i = 0, $len = strlen($data); $i < $len; $i++) {
        $out .= chr(
            ord($data[$i]) ^
            ord(ENCODE_KEY[$i % $keyLength])
        );
    }

    // Base64 URL-safe
    return rtrim(strtr(base64_encode($out), '+/', '-_'), '=');
}

function decodeValue(string $value): string
{
    $value = strtr($value, '-_', '+/');
    $value .= str_repeat('=', (4 - strlen($value) % 4) % 4);

    $data = base64_decode($value, true);

    if ($data === false) {
        throw new InvalidArgumentException('Valor inválido');
    }

    $out = '';
    $keyLength = strlen(ENCODE_KEY);

    for ($i = 0, $len = strlen($data); $i < $len; $i++) {
        $out .= chr(
            ord($data[$i]) ^
            ord(ENCODE_KEY[$i % $keyLength])
        );
    }

    // Leemos el primer byte que nos indica cuántos caracteres mide el valor real
    $originalLength = ord($out[0]);

    // Extraemos EXACTAMENTE el valor original saltándonos los primeros 8 bytes de cabecera
    return substr($out, 8, $originalLength);
}
function nivel($nivel){
    $nivel_desc="";
     switch ($nivel) {
        case 'A':
            $nivel_desc="Administrador";
            break;

        case 'O':
            $nivel_desc="Operador";
            break;

        case 'V':
            $nivel_desc= "Visualizador";
            break;
        
        default:
            $nivel_desc= "Sin Rol";
            break;
        }
    return $nivel_desc;
              
}
function num($valor){
return number_format($valor,2,',','.');
}
function fecha($fecha){
return date('d/m/Y' ,strtotime($fecha));
}
?>