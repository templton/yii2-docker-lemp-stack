# LEMP стек для YII2

Стек для yii basic:

- Nginx
- php 7.3
- MySQL
- phpmyadmin

Данные mysql будут лежать в корне проекта в папке mysql_project_data (p.s. пока что создать вручную)

Код проекта примонтирован в папку project_code

Nginx домен для примера настроен megaparser.ru, поэтому

*sudo nano /etc/hosts*

Добавить 
```
127.0.0.1 megaparser.ru
```

Далее *docker-compose up* и все сразу работает. Для примера в папку web положен единственный файл index.php которые проверяет соединение с БД

Располагать склонированную папку только по пути, в котором нет киррилицы. Иначе может случиться ошибка
```
UnicodeDecodeError: 'ascii' codec can't decode byte 0xd0 in position 11: ordinal not in range(128)
```
Если ругается, что контейнеры уже имеются, то:

Остановить все контейнеры:

```
 docker stop $(docker ps -a -q)
 ```
 
 Удалить все контейнеры
 ```
 docker rm $(docker ps -a -q)
 ```


Если внес изменения в имя домена и появилось file not found, то пересобрать образ

```
docker-compose up --build
```

Exception 'yii\db\Exception' with message 'could not find driver' и прочие ошибки при работе в консоли - все консольные команды надо запускать внутри контейнера php-fpm

```
docker exec -it container_id sh
```

Далее переходим в папку проекта и работаем в консольном режиме
