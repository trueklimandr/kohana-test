# Проект тестовго задания

### Инструкция по установке

* Клонируем проект <code>git clone git@github.com:trueklimandr/kohana-test.git</code>
* Переходим в папку проекта <code>cd ./kohana-test</code>
* Устанавливаем зависимости <code>composer install</code>
* Папки с логами и кэшем должны быть доступны <code>sudo chmod -R a+rwx application/cache</code>, <code>sudo chmod -R a+rwx application/logs</code>
* Настраиваем MySQL и заполняем конфиги для phinx <code>cp phinx.yml.example phinx.yml</code> и для /modules/database/config/database.php
* Заполняем базу данных <code>vendor/bin/phinx migrate -e development</code>, <code>vendor/bin/phinx seed:run</code>
* Не забываем настроить веб-сервер
* Если используется apache, копируем htaccess <code>cd ./public</code>, <code>cp example.htaccess .htaccess</code>
