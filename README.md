# cs_cart

1. docker-compose up -d
2. Восстанавлиаем дамп бд:
   <CONTAINER> заменить на id контейнера бд (docker ps)
   cat backup/db.sql | docker exec -i <CONTAINER> /usr/bin/mysql -u root --password='secret' db 
3. в index.php проверить текущий ip, например закомменировав все и вставив < echo $_SERVER['REMOTE_ADDR']; >
   заменить db_host на ip полученый выше в файле config.local.php
   
