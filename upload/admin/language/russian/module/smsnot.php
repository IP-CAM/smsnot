<?php
$_['heading_title']          = 'Smsnot for SMS.RU';
$_['button_save']            = 'Сохранить';
$_['button_cancel']          = 'Отмена';
$_['button_test']            = 'Отправить тестовое сообщение';
$_['button_send']            = 'Отправить';
$_['button_refer']           = 'Создать учётную запись';
$_['button_name']            = 'Имя';
$_['button_lastname']        = 'Фамилия';
$_['button_address']         = 'Адрес';
$_['button_city']            = 'Город';
$_['button_phone']           = 'Телефон';
$_['button_comment']         = 'Комментарий';
$_['button_storename']       = 'Название магазина';
$_['button_orderid']         = 'Номер заказа';
$_['button_total']           = 'Сумма заказа';
$_['button_status']          = 'Статус';
$_['button_download']        = 'Скачать журнал';
$_['button_clear']           = 'Очистить журнал';
$_['button_filter']          = 'Фильтровать';

$_['tab_sending']            = 'Рассылка';
$_['tab_notice']             = 'Уведомления';
$_['tab_gate']               = 'Настройки шлюза';
$_['tab_log']                = 'Журнал';

$_['entry_to']               = 'Кому:';
$_['entry_sender']           = 'Отправитель:';
$_['entry_message']          = 'Текст сообщения:';
$_['entry_enabled']          = 'Включить:';
$_['entry_message_template'] = 'Шаблон сообщения:';
$_['entry_message_customer'] = 'Шаблон сообщения покупателю:';
$_['entry_message_admin']    = 'Шаблон сообщения владельцу:';
$_['entry_api_key']          = 'API key:';
$_['entry_phone']            = 'Номер владельца магазина:';
$_['entry_balance']          = 'Баланс:';
$_['entry_characters']       = 'Количество символов:';
$_['entry_date_start']       = 'С';
$_['entry_date_stop']        = 'По';
$_['entry_status']           = 'Статус';
$_['entry_phone']            = 'Телефон';
$_['entry_text']             = 'Текст';
$_['entry_smsnot_log']       = 'Включить журнал: ';

$_['text_enable']           = 'Включено';
$_['text_disable']          = 'Выключено';
$_['text_description']      = 'SMS-уведомления';
$_['text_newsletter']       = 'Подписаным на новости';
$_['text_all']              = 'Всем';
$_['text_all_group']        = 'Всем из группы';
$_['text_newsletter_group'] = 'Всем подписанным на новости из группы ';
$_['text_module']           = 'Smsnot';
$_['text_refresh']          = 'Обновить';
$_['text_money_add']        = 'Пополнить баланс';
$_['text_new_order']        = 'Новый заказ (покупателю)';
$_['text_order_change']     = 'Изменён статус заказа (покупателю)';
$_['text_owner']            = 'Уведомление владельца о новом заказе';
$_['text_send_success']     = 'Сообщение отправлено';
$_['text_send_error']       = 'Ошибка отправки';
$_['text_no_result']        = 'Нет записей';
$_['text_log_disabled']     = 'Ведение журнала отключено в настройках';

$_['column_text']           = 'Текст';
$_['column_phone']          = 'Телефон';
$_['column_date']           = 'Дата';
$_['column_status']         = 'Статус';
$_['column_sms_id']         = 'SMS id';

$_['help_message_template'] = 'Сообщение, которое будет получать покупатель при изменении статуса заказа. {OrderID} - номер заказа, {Status} - текущий статус заказа, {StoreName} - название магазина.';
$_['help_message_customer'] = 'Сообщение, которое будет получать покупатель при создании заказа. {OrderID} - номер заказа, {StoreName} - название магазина.';
$_['help_message_admin']    = 'Сообщение, которое будет получать администратор при создании нового заказа. {OrderID} - номер заказа, {StoreName} - название магазина, {Total} - сумма заказа.';
$_['help_message']          = 'Текст рассылаемого сообщения. {Name} - имя покупателя, {LastName} - фамилия покупателя, {StoreName} - название магазина.';
$_['help_sure']             = 'Вы уверены?';
$_['help_callback']         = 'Укажите этот адрес в поле "URL обработчика" на сайте <a href="https://svmidi.sms.ru/?panel=apps&subpanel=cb" target="_blank">sms.ru</a> для обновления статусов сообщений';
?>