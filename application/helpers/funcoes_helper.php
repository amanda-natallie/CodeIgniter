<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function limpar($str, $replace = array(), $delimiter = '-') {
    setlocale(LC_ALL, 'en_US.UTF8');

    if (!empty($replace)) {
        $str = str_replace((array) $replace, ' ', $str);
    }

    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
    $clean = strtolower(trim($clean, '-'));
    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

    return $clean;
}

function limita_caracteres($var, $limite) {
    if (strlen($var) > $limite) {
        $var = substr($var, 0, $limite);
        $var = trim($var) . "...";
    }
    return $var;
}

function gerarData($data) {

    $data = explode('-', $data);

    switch ($data[1]) {
        case 1: $mes = 'Janeiro';
            break;
        case 2: $mes = 'Fevereiro';
            break;
        case 3: $mes = 'Março';
            break;
        case 4: $mes = 'Abril';
            break;
        case 5: $mes = 'Maio';
            break;
        case 6: $mes = 'Junho';
            break;
        case 7: $mes = 'Julho';
            break;
        case 8: $mes = 'Agosto';
            break;
        case 9: $mes = 'Setembro';
            break;
        case 10: $mes = 'Outubro';
            break;
        case 11: $mes = 'Novembro';
            break;
        case 12: $mes = 'Dezembro';
            break;
    }

    $data2 = $data[2] . ' de ' . $mes . ' de ' . $data[0];

    return $data2;
}

function verificaPermissao($logado, $permissao, $acesso) {
    if (!$logado) {
        redirect(base_url('admin/login'));
        return false;
    } else if (($acesso == 1 && $permissao != 1) | ($acesso == 2 && $permissao != 1 && $permissao != 2)) {
        redirect(base_url('admin/'));
        return false;
    } else {
        return true;
    }
}

function apenasADM($permissao, $rota, $nomeMenu, $icon) {
    if ($permissao != 1) {
        return false;
    } else {
        echo '<li><a href="' . base_url($rota) . '"><i class="fa ' . $icon . '"></i>' . $nomeMenu . '</a></li>';
    }
}

function apenasGESTOR($permissao, $rota, $nomeMenu, $icon) {
    if ($permissao == 1 | $permissao == 2) {
        echo '<li><a href="' . base_url($rota) . '"><i class="fa ' . $icon . '"></i>' . $nomeMenu . '</a></li>';
    } else {
        return false;
    }
}

function tipoUsuario($p) {
    switch ($p) {
        case 1:
            return "Administrador Geral";
            break;
        case 2:
            return "Gerente de Conteudo";
            break;
        case 2:
            return "Autor do Blog";
            break;
    }
}

