<?php

/**
 * @version 1.1
 */

// Evita que este script cause redirecionamento quando incluído na própria página 404
if (basename($_SERVER['SCRIPT_FILENAME']) === '404.php') {
    return;
}

// Função principal de detecção 404
function detectar_e_redirecionar_404()
{
    // Verifica se já estamos em uma página de erro
    if (
        http_response_code() === 404 ||
        strpos($_SERVER['REQUEST_URI'], '404.php') !== false
    ) {
        return;
    }

    // Critérios de detecção de erro 404
    $indicadores_erro = [
        // Verifica o código de resposta HTTP
        http_response_code() === 404,

        // Verifica o título da página
        isset($GLOBALS['title']) && stripos($GLOBALS['title'], '404') !== false,

        // Verifica cabeçalhos (para APIs)
        headers_sent() && stripos(implode(',', headers_list()), '404') !== false,

        // Verifica conteúdo da página
        ob_get_length() > 0 && stripos(ob_get_contents(), '404 Not Found') !== false
    ];

    // Se qualquer indicador for verdadeiro, redireciona
    if (in_array(true, $indicadores_erro, true)) {
        // Limpa qualquer saída anterior
        if (ob_get_level() > 0) ob_end_clean();

        // Redireciona mantendo a URL original como parâmetro
        $url_original = urlencode($_SERVER['REQUEST_URI']);
        header("Location: /404.php?from=$url_original", true, 302);
        exit;
    }
}

// Registra a função para execução antecipada
register_shutdown_function('detectar_e_redirecionar_404');

// Verificação inicial (para casos onde o erro é imediato)
if (http_response_code() === 404) {
    detectar_e_redirecionar_404();
}
