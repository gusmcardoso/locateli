## Instituto Locatelli – Landing Page

Projeto em Laravel 12 que recria o site institucional do Instituto Locatelli originalmente hospedado em WordPress. A aplicação entrega uma página única com seções de destaque, depoimentos, especialidades e CTA para contato via WhatsApp e Google Maps.

### Stack

- PHP 8.2+ com Laravel 12
- Vite + Tailwind 4 (utilizado apenas para o pipeline de build)
- CSS autoral com tipografias "General Sans" e "Space Grotesk"

### Pré-requisitos

1. PHP 8.2 com as extensões `fileinfo`, `mbstring`, `openssl`, `pdo_sqlite` habilitadas.
2. Composer 2.6+
3. Node.js 20+ e npm 10+

> **Importante:** o Composer foi executado com `--ignore-platform-req=ext-fileinfo` porque a extensão está desabilitada no CLI atual. Antes de implantar em produção, habilite `extension=fileinfo` no `php.ini` para evitar avisos do Flysystem.

### Instalação

```bash
composer install
cp .env.example .env # já existe um .env configurado em português
php artisan key:generate
npm install
```

### Ambiente local

```bash
# terminal 1
php artisan serve

# terminal 2
npm run dev
```

Acesse `http://127.0.0.1:8000`.

### Build de produção

```bash
npm run build
php artisan optimize
```

Os arquivos gerados ficam em `public/build` e são servidos automaticamente pelo Vite plugin.

### Personalização de conteúdo

- Textos e blocos estão em `resources/views/home.blade.php`.
- Estilos globais estão em `resources/css/app.css`.
- As imagens base foram salvas em `public/images`. Substitua-as mantendo os mesmos nomes ou ajuste os caminhos no Blade.
- Atualize números de WhatsApp, endereço e horários na seção `contact` do Blade.

### Deploy

1. Execute `npm run build` e `composer install --no-dev` no ambiente de build.
2. Ajuste `APP_URL` no `.env` de produção e habilite `ext-fileinfo`.
3. Configure o host web para apontar para `public/`.

### Licença

Uso interno do Instituto Locatelli. Baseado no framework [Laravel](https://laravel.com) (MIT).
