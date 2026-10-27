<?php

function mostrarRegimen($valor) {
    if ($valor == 0) {
        return 'NACIONAL';
    } else {
        return 'INTERNACIONAL';
    }
}

function mostrarRubro($valor) {
    switch ($valor) {
        case 'E':
            return 'Energia';
        case 'EL':
            return 'Electromecanica';
        case 'M':
            return 'Mecanica';
        default:
            return 'Sin definir';
    }
}