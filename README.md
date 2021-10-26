# [motTV.eu](https://github.com/motveu/php-api-sdk) by IXCSoft

Pacote adaptado para funcionamento no ERP IXCProvedor, com compatibilidade para PHP >= 7.0.

## Code Quality

Para verificar compatibilidade de código com o PHP >= 7.0

`./vendor/bin/phpcs -p . --standard=vendor/phpcompatibility/php-compatibility/PHPCompatibility --runtime-set testVersion 7.0 src/ --extensions=php --ignore=*/vendor/*`

Para analisar a qualidade código com Code Sniffer

`php ./vendor/bin/phpcs --extensions=php --standard=rules-cs.xml src/`

Para analisar e corrigir automaticamente com Code Sniffer

`php ./vendor/bin/phpcbf --extensions=php --standard=rules-cs.xml src/`

### Instalação

`composer require ixc-soft/motveu-php-api-sdk`

### Documentação completa do pacote

https://github.com/motveu/php-api-sdk