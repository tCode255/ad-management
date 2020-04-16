<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// Manage ads
	'AD_SETTINGS'				=> 'Настройки рекламы',
	'ACTIVE_ADS'				=> 'Активная реклама',
	'EXPIRED_ADS'				=> 'Просроченная реклама',
	'STATUS'					=> 'Статус',
	'AD_NAME'					=> 'Название',
	'AD_NAME_EXPLAIN'			=> 'Данное название используется только для помощи в идентификации рекламы.',
	'AD_ENABLED'				=> 'Включить',
	'AD_ENABLED_EXPLAIN'		=> 'Если отключено, то реклама не будет отображаться.',
	'AD_NOTE'					=> 'Описание',
	'AD_NOTE_EXPLAIN'			=> 'Введите описание рекламы. Данное описание отображается только в панели администратора.',
	'AD_CODE'					=> 'Код рекламы',
	'AD_CODE_EXPLAIN'			=> 'Вставьте код вашей рекламы. BB-коды не поддерживаются, возможно использование HTML.',
	'ANALYSE_AD_CODE'			=> 'Выполнить анализ кода',
	'EVERYTHING_OK'				=> 'Код валидный!.',
	'AD_BANNER'					=> 'Рекламный баннер',
	'BANNER'					=> 'Загрузить баннер',
	'BANNER_EXPLAIN'			=> 'Загрузите изображение в форматах JPG, GIF или PNG. Изображение будет загружено в директорию <samp>images</samp> и баннер будет автоматически вставлен на выбранные места на форуме.',
	'BANNER_UPLOAD'				=> 'Загрузить баннер',
	'AD_PLACEMENT'				=> 'Расположение рекламы',
	'AD_LOCATIONS'				=> 'Место',
	'AD_LOCATIONS_EXPLAIN'		=> 'Выберите места, где вы хотите показывать данную рекламы. Наведите курсор мыши на локацию, чтобы получить краткое описание. Если несколько объявлений используют одно и то же местоположение, одно объявление будет случайным образом выбираться для показа в этом месте каждый раз. Используйте CTRL + CLICK (или CMD + CLICK на Mac), чтобы выбрать/отменить выбор нескольких местоположений.',
	'AD_LOCATIONS_VISUAL_DEMO'	=> 'Начать визуальную демонстрацию мест размещения рекламы',
	'AD_PRIORITY'				=> 'Приоритет',
	'AD_PRIORITY_EXPLAIN'		=> 'Установите число от 1 до 10. Рекламные объявления с более высоким номером будут отображаться чаще, если несколько объявлений используют одно и то же местоположение.',
	'AD_CONTENT_ONLY'			=> 'Отображать только на страницах с содержанием',
	'AD_CONTENT_ONLY_EXPLAIN'	=> 'Это объявление будет отображаться только на страницах с содержанием. Он не будет отображаться на таких страницах, как профиль, страница входа, страница регистрации, публикация, ответы и т.д. Некоторые рекламные платформы (например, Google AdSense) требуют этого.',
	'AD_OPTIONS'				=> 'Варианты рекламы',
	'AD_OWNER'					=> 'Владелец',
	'AD_OWNER_EXPLAIN'			=> 'Назначение владельца объявления даст одному из ваших членов совета разрешение просматривать это объявление и просматривать статистику кликов на его панели управления пользователя. Оставьте это поле пустым, чтобы не назначать владельца объявления.',
	'AD_VIEWS'					=> 'Просмотры',
	'AD_VIEWS_LIMIT'			=> 'Лимит просмотров',
	'AD_VIEWS_LIMIT_EXPLAIN'	=> 'Установите максимальное количество раз, когда объявление будет отображаться, после чего оно больше не будет отображаться. Установите 0 для неограниченных просмотров.',
	'AD_CLICKS'					=> 'Клики',
	'AD_CLICKS_LIMIT'			=> 'Лимит кликов',
	'AD_CLICKS_LIMIT_EXPLAIN'	=> 'Установите максимальное количество кликов по объявлению, после чего оно больше не будет отображаться. Установите 0 для неограниченных кликов.',
	'AD_START_DATE'				=> 'Дата начала',
	'AD_START_DATE_EXPLAIN'		=> 'Установите дату запуска показа рекламы. Оставьте это поле пустым, если вы не хотите, чтобы реклама запускалась автоматически в будущем. Пожалуйста, используйте формат <samp>YYYY-MM-DD</samp>.',
	'AD_END_DATE'				=> 'Дата окончания',
	'AD_END_DATE_EXPLAIN'		=> 'Установите дату окончания показа рекламы. Оставьте это поле пустым, если вы не хотите, чтобы срок действия рекламы истек. Пожалуйста, используйте формат <samp>YYYY-MM-DD</samp>.',
	'AD_CENTERING'				=> 'Выравнивать рекламу по центру автоматически',
	'AD_CENTERING_EXPLAIN'		=> 'Установите <samp>Да</samp>, чтобы разрешить автоматическое выравнивание по центру. Если это приводит к нежелательным результатам, используйте CSS прямо в коде, чтобы соответствующим образом центрировать объявление.',

	'AD_PREVIEW'				=> 'Предпросмотр данной рекламы',
	'AD_ENABLE_TITLE'			=> array( // Plural rule doesn't apply here! Just translate the values.
		0 => 'Click to enable',
		1 => 'Click to disable',
	),
	'AD_EXPIRED_EXPLAIN'		=> 'Срок действия этого объявления истек и был отключен.',
	'ACP_ADS_EMPTY'				=> 'Нет рекламы для отображения. Добавьте рекламу, используя кнопку ниже.',
	'ACP_ADS_ADD'				=> 'Добавить рекламу',
	'ACP_ADS_EDIT'				=> 'Редактировать рекламу',

	'AD_NAME_REQUIRED'			=> 'Название обязательно.',
	'AD_NAME_TOO_LONG'			=> 'Максимальная длина названия может составлять %d символов.',
	'AD_CODE_ILLEGAL_CHARS'		=> 'Рекламный код содержит следующие неподдерживаемые символы: %s',
	'AD_START_DATE_INVALID'		=> 'Дата начала недействительна или уже истекла.',
	'AD_END_DATE_INVALID'		=> 'Дата окончания недействительна или уже истекла.',
	'AD_PRIORITY_INVALID'		=> 'Приоритет недействителен. Пожалуйста, установите число между 1 и 10.',
	'AD_VIEWS_LIMIT_INVALID'	=> 'Ограничение количества просмотров недействительно. Пожалуйста, установите неотрицательное число.',
	'AD_CLICKS_LIMIT_INVALID'	=> 'Лимит кликов недействителен. Пожалуйста, установите неотрицательное число.',
	'AD_OWNER_INVALID'			=> 'Владелец объявления недействителен. Пожалуйста, выберите пользователя, используя ссылку Найти участника.',
	'NO_FILE_SELECTED'			=> 'Файл не выбран.',
	'CANNOT_CREATE_DIRECTORY'	=> 'Каталог <samp>phpbb_ads</samp> не может быть создан. Пожалуйста, убедитесь, что каталог <samp>/images</samp> доступен для записи.',
	'FILE_MOVE_UNSUCCESSFUL'	=> 'Невозможно переместить файл в <samp>images/phpbb_ads</samp>.',
	'END_DATE_TOO_SOON'			=> 'Дата окончания раньше даты начала.',
	'ACP_AD_DOES_NOT_EXIST'		=> 'Реклама не найдена.',
	'ACP_AD_ADD_SUCCESS'		=> 'Объявление успешно добавлено.',
	'ACP_AD_EDIT_SUCCESS'		=> 'Объявление успешно отредактировано.',
	'ACP_AD_DELETE_SUCCESS'		=> 'Объявление успешно удалено.',
	'ACP_AD_DELETE_ERRORED'		=> 'Произошла ошибка при удалении объявления.',
	'ACP_AD_ENABLE_SUCCESS'		=> 'Объялвение успешно включено.',
	'ACP_AD_ENABLE_ERRORED'		=> 'Произошла ошибка при включении объявления.',
	'ACP_AD_DISABLE_SUCCESS'	=> 'Объявление успешно выключено.',
	'ACP_AD_DISABLE_ERRORED'	=> 'Произошла ошибка при выключении объявления.',

	// Analyser tests
	'UNSECURE_CONNECTION'	=> '<strong>Смешанный контент</strong><br />Ваша доска работает на безопасном HTTPS-соединении, однако рекламный код пытается загрузить контент из незащищенного HTTP-соединения. Это может привести к тому, что браузеры сгенерируют предупреждение «Смешанный контент», чтобы пользователи знали, что страница содержит небезопасные ресурсы..',
	'SCRIPT_WITHOUT_ASYNC'	=> '<strong>Не асинхронный JavaScript</strong><br />Этот рекламный код загружает код JavaScript не асинхронным способом. Это означает, что он заблокирует любой другой Javascript от загрузки до завершения загрузки, что может повлиять на производительность загрузки страницы. Используйте атрибут <samp>async</samp> он поможет ускорить загрузку страницы.',
	'ALERT_USAGE'			=> '<strong>Использование <samp>alert()</samp></strong><br />В вашем коде используется функция <samp>alert()</samp>, которая не является хорошей практикой и может отвлекать пользователей. Некоторые браузеры также могут блокировать загрузку страницы и отображать дополнительные предупреждения для пользователя.',
	'LOCATION_CHANGE'		=> '<strong>Перенаправление</strong><br />В вашем коде используется перенаправления, что приведет к перенаправлению пользователя на другую страницу или сайт. Перенаправления могут иногда отправлять пользователей в непреднамеренные, часто вредоносные, сайты. Пожалуйста, проверьте целостность места назначения вашего рекламного кода.',

	// Template location categories
	'CAT_TOP_OF_PAGE'		=> 'Верх страницы',
	'CAT_BOTTOM_OF_PAGE'	=> 'Внизу страницы',
	'CAT_IN_POSTS'			=> 'В сообщениях',
	'CAT_OTHER'				=> 'Другое',
	'CAT_INTERACTIVE'		=> 'Интерактивный',
	'CAT_SPECIAL'			=> 'Специальный',

	// Settings
	'ADBLOCKER_LEGEND'				=> 'Блокировщики рекламы',
	'ADBLOCKER_MESSAGE'				=> 'Выводить сообщение при обнаружении блокировщика',
	'ADBLOCKER_MESSAGE_EXPLAIN'		=> 'Отображать сообщение посетителям использующих блокировщики рекламы, советуя им рассмотреть возможность отключения блокировки рекламы на этом форуме.',
	'CLICKS_VIEWS_LEGEND'			=> 'Статистика и отслеживание',
	'ENABLE_VIEWS'					=> 'Количество просмотров',
	'ENABLE_VIEWS_EXPLAIN'			=> 'Это позволит подсчитать, сколько раз было показано каждое объявление. Обратите внимание, что это добавляет дополнительную нагрузку на сервер, поэтому, если вам не нужна эта функция, отключите ее.',
	'ENABLE_CLICKS'					=> 'Количество кликов',
	'ENABLE_CLICKS_EXPLAIN'			=> 'Это позволит подсчитать, сколько раз было нажано каждое объявление. Обратите внимание, что это добавляет дополнительную нагрузку на сервер, поэтому, если вам не нужна эта функция, отключите ее.',
	'HIDE_GROUPS'					=> 'Скрыть рекламу для выбранных групп',
	'HIDE_GROUPS_EXPLAIN'			=> 'Члены выбранных групп не увидят эту рекламу. Используйте CTRL + CLICK (или CMD + CLICK на Mac), чтобы выбрать / отменить выбор нескольких групп.',

	'ACP_AD_SETTINGS_SAVED'	=> 'Настройки управления рекламой сохранены.',
));