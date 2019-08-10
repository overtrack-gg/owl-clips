# owl-clips
Overwatch League automatic clips

## API

The API endpoint is `https://api2.overtrack.gg/owl/clips`, and there is documentation provided [here](API.md).

## Running locally

The owl-clips-frontend requires a PHP server with the following requirements:

- PHP >= 7.1.1
- BCMath PHP Extension
- CType PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

Set this up in your production environment, with requests routed to `site/public`. You will need to do a `composer install --optimize-autoloader --prefer-dist --no-dev && npm i && npm run gulp` as part of your build process, and you should generate a `.env` file with the parameters from `.env.example`. To automatically generate a secure key use `php artisan key:generate`.

Any issues please raise a PR.
