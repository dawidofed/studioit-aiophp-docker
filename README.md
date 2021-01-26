# AIOPHP docker #
## All-In-One PHP docker ##

Narzędzie do lokalnego dewelopowania aplikacji PHP.

Zawiera w tej chwili następujące ficzery:
> 1. NGINX
> 2. PHP
> 3. MySQL
> 4. Mailhog
> 5. Redis
> 6. Elasticsearch
> 7. RabbitMQ

### Uruchomienie ###
>       git clone https://github.com/dawidofed/studioit-aiophp-docker new-side
>       cd new-side
>       docker-compose up
Domyślnie powinieneś zobaczyć stronę pod adresem:
>       http://localhost:8080/
Tutaj zobaczysz m.in. zmienne dostępowe, które pomogą Ci się połączyć z MySQL

Są również dostępne inne strony:
>       http://localhost:9200/ - status Elasticsearch
>       http://localhost:8025/ - strona Mailhog

Wszystkie ustawienia dockerów znajdują się w docker-compose.yml - oprócz PHP - proces budowania dockera znajduje się w pliku conf/php/Dockerfile.
<hr />
<b>UWAGA: </b>ustawienia dockerów nie zostały pomyślane z myślą o serwerach produkcyjnych. Zrobione zostały z myślą o szybkim uruchamianiu i developowaniu różnych aplikacji PHP na środowisku developerskim (lokalnym). Jeśli jednak zdecydujesz się skorzystać z tego narzędzia w środowisku produkcyjnym, zrobisz to na własną odpowiedzialność.

<b>UWAGA nr 2: </b>Oczywiście możesz dowolnie modyfikować kod na własne potrzeby. Jak wpadniesz na ciekawy pomysł, jak można go podkręcić, to oczywiście będę wdzięczny za komentarze i pushe. :)

