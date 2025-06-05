1) Запрос ***Notification*** приходитв ***routes/web.php***
2) Вызывается контролер ***WebNotificationController*** и его метод ***index***
3) В контролере происходит определение типа уведомления и добавление в очередь заданий – запуск ***job ProcessYandexOrderNotification*** и его метода ***handle***.
4) Метод ***handle*** принимает в качестве аргумента сервис ***YandexMarketService*** (который регистрируется в ***YandexMarketServiceProvider)***, и вызывает его метод ***getOrder***.
5)
