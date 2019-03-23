### Усиленная защита сайта на CMS WordPress
- Полный аудит сервера (Lynis)
- Аудит защищённости веб-сервера
- Сканирование угроз (Blacklisted, Malware, Malicious javascript, Malicious iframes, Drive-By Downloads, Anomaly detection, IE-only attacks, Suspicious redirections, Blackhat SEO Spam, Spam)
- Проверка чёрных списков (Google Safe Browsing, Norton Safe Web, McAfee, Sucuri Labs, ESET, PhishTank, Yandex, Opera, Spamhaus)
#### Операционная система (Linux, FreeBSD)
- Права доступа файлов
- Маскировка веб-сервера (Apache, Nginx)
- Сканирование на вирусы
- Firewall
- fail2ban
#### Защита wp-admin
#### Защита wp-includes
#### Защита /wp-content/, /wp-content/plugins/, /wp-content/themes/, /wp-content/uploads/
#### База данных
- Привилегии пользователя базы данных
#### HTTP-заголовки
- X-Content-Type-Options
- X-Frame-Options
- X-XSS-Protection
- Маскировка дескридитирующих заголовков
#### Плагины WP
- Akismet
- Audit Log
- BBQ: Block Bad Queries
- SSL Insecure Content Fixer
- Stop User Enumeration
- Sucuri Security
- TFA
- WPS Hide Login
- Fullworks Firewall
#### Очистка кода
- Скрытие версий (html, php-файлы, скрипты, стили), в т.ч. из URL'ов.
- Скрытие метатегов (RSD, WLW
- Скрытие сообщений об ошибках (PHP, MySQL)
#### Защита и очистка панели управления
- Замена адреса входа
- Отключение редактирования файлов (style.css, functions.php)
#### Дополнительные настройки
- Настройка Content Security Policy
- Решение проблемы смешанного контента (SSL/TLS)
- Защита управления пользователями /admin/users.php
- Настройка бэкапа
- Парольная политика
#### Маскировка Вордпресса
- скрытие стандартных файлов
- скрытие стандартных директорий
