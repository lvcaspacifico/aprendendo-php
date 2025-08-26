# Require e Include

Require => Quando o arquivo é requerido para rodar. Se eu der um `require "arquivo-que-nao-existe.php` o código vai explodir.
Include => Quando o arquivo é usado mas não requerido para rodar. Se eu der um `include "arquivo-que-nao-existe.php` o código NÃO vai explodir.