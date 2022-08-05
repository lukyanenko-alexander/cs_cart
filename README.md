# cs_cart

1. docker-compose up -d
2. Восстанавлиаем дамп бд:
   CONTAINER заменить на id контейнера бд (docker ps)
   
   cat backup/db.sql | docker exec -i CONTAINER /usr/bin/mysql -u root --password='secret' db 
3. в index.php проверить текущий ip, например закомментировав все и вставив < echo $_SERVER['REMOTE_ADDR']; >
   открыть в браузере http://127.0.0.1/ и посмотреть ip
   заменить db_host на ip полученый выше в файле config.local.php
4. Учетка от админа: lirasxxx@yandex.ru/1234
   
