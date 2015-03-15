<?php

return array(
  'title' => 'Русский (Russian)',
  'direction' => 'ltr',
  'author' => 'Mike Sakhonenko <hello@imike.ru>',
  'version' => '1.0.2',
  'data' => array(

    // global
    'cancel' => 'Отмена',
    'add' => 'Добавить',
    'save' => 'Сохранить',
    'saved' => 'Сохранено',
    'delete' => 'Удалить',
    'insert' => 'Вставить',
    'ok' => 'Ок',

    // options (sidebar)
    'options.show' => 'Показать опции',
    'options.hide' => 'Скрыть опции',

    // installation
    'installation' => 'Установка',
    'installation.check.headline' => 'Установка панели Kirby',
    'installation.check.text' => 'Во время установки Kirby возникли следующие проблемы…',
    'installation.check.retry' => 'Повторить',
    'installation.check.error' => 'Не все прошло так гладко :(',
    'installation.check.error.accounts' => '/site/accounts не доступно для записи',
    'installation.check.error.avatars' => '/assets/avatars не доступно для записи',
    'installation.check.error.blueprints' => 'Пожалуйста, создайте папку /site/blueprints',
    'installation.check.error.content' => 'Папка content в все вложенные папки и файлы должны быть доступны для записи.',
    'installation.check.error.thumbs' => 'Папка thumbs должна быть доступна для записи.',
    'installation.signup.username.label' => 'Создайте первый аккаунт пользователя',
    'installation.signup.username.placeholder' => 'Логин',
    'installation.signup.email.label' => 'Эл.почта',
    'installation.signup.email.placeholder' => 'pochta@domen.com',
    'installation.signup.password.label' => 'Пароль',
    'installation.signup.language.label' => 'Язык',
    'installation.signup.button' => 'Создать аккаунт',

    // login
    'login' => 'Вход',
    'login.welcome' => 'Пожалуйста, войдите под своими учетными данными',
    'login.username.label' => 'Логин',
    'login.password.label' => 'Пароль',
    'login.error' => 'Неправильная пара логин-пароль',
    'login.button' => 'Вход',

    // logout
    'logout' => 'Выход',

    // dashboard
    'dashboard' => 'Панель управления',
    'dashboard.index.pages.title' => 'Страницы',
    'dashboard.index.pages.edit' => 'Настроить',
    'dashboard.index.pages.add' => 'Добавить',
    'dashboard.index.site.title' => 'Адрес вашего сайта',
    'dashboard.index.account.title' => 'Ваш аккаунт',
    'dashboard.index.account.edit' => 'Настроить',
    'dashboard.index.metatags.title' => 'Переменные сайта',
    'dashboard.index.metatags.edit' => 'Настроить',
    'dashboard.index.history.title' => 'Ваши последние правки',
    'dashboard.index.history.text' => 'Последние измененные вами страницы будут показаны здесь для быстрого доступа к ним.',

    // metatags
    'metatags' => 'Переменные сайта',
    'metatags.back' => 'Назад в панель управления',

    // pages
    'pages.show.settings' => 'Настройки страницы',
    'pages.show.preview' => 'Предпросмотр',
    'pages.show.changeurl' => 'Изменить ссылку (ЧПУ)',
    'pages.show.delete' => 'Удалить эту страницу',
    'pages.show.subpages.title' => 'Страницы',
    'pages.show.subpages.edit' => 'Настроить',
    'pages.show.subpages.add' => 'Добавить',
    'pages.show.subpages.empty' => 'Для этой страницы нет подстраниц',
    'pages.show.files.title' => 'Файлы',
    'pages.show.files.edit' => 'Настроить',
    'pages.show.files.add' => 'Добавить',
    'pages.show.files.empty' => 'Для этой страницы нет файлов',
    'pages.show.error.permissions.title' => 'Эта страница не доступна для записи',
    'pages.show.error.permissions.text'  => 'Пожалуйста, проверьте права для папки content и всех файлов.',
    'pages.show.error.permissions.retry'  => 'Повторить',
    'pages.show.error.notitle.title' => 'В этом фаблоне формы должно быть поле для названия',
    'pages.show.error.notitle.text' => 'Пожалуйста, заполните название и повторите снова',
    'pages.show.error.notitle.retry' => 'Повторить',
    'pages.show.error.form'  => 'Пожалуйста, заполните все необходимые поля корректно',

    'pages.add.title.label' => 'Создать новую страницу',
    'pages.add.title.placeholder' => 'Название',
    'pages.add.url.label' => 'понятная ссылка (ЧПУ)',
    'pages.add.url.enter' => '(введите название страницы)',
    'pages.add.url.close' => 'Закрыть',
    'pages.add.url.help' => 'Формат: нижние латинские буквы, цифры и дефисы',
    'pages.add.template.label' => 'Шаблон',
    'pages.add.error.title' => 'Отсутствует название',
    'pages.add.error.template' => 'Отсутствует шаблон',
    'pages.add.error.max.headline' => 'Предельное количество страниц',
    'pages.add.error.max.text' => 'Для данной страницы достигнут максимальный предел подстраниц.',
    'pages.url.uid.label' => 'ссылка (ЧПУ)',
    'pages.url.uid.label.option' => 'сформировать',
    'pages.url.error.exists' => 'Страница с такой же понятной ссылкой (ЧПУ) уже существует',
    'pages.url.error.move' => 'Понятная ссылка (ЧПУ) не может быть изменена',
    'pages.delete.headline' => 'Вы действительно хотите удалить эту страницу?',
    'pages.delete.error.home.headline' => 'Индексная (домашняя) страница не может быть удалена',
    'pages.delete.error.home.text' => 'Вы пытаетесь удалить индексную (домашнюю) страницу. Это невозможно, так как может привести к непредсказуемым результатам.',
    'pages.delete.error.error.headline' => 'Страница ошибок (404) не может быть удалена',
    'pages.delete.error.error.text' => 'Вы пытаетесь удалить страницу ошибок (Error 404 Page). Это невозможно, так как может привести к непредсказуемым результатам.',
    'pages.delete.error.children.headline' => 'Страница не может быть удалена',
    'pages.delete.error.children.text' => 'Для этой страницы существуют подстраницы. Пожалуйста, удалите сначала подстраницы.',
    'pages.delete.error.blocked.headline' => 'Эта страница не может быть удалена',
    'pages.delete.error.blocked.text' => 'Эта страница заблокирована и не может быть удалена в настоящий момент.',
    'pages.search.help' => 'Поиск страниц по ссылкам. Для перемещения по результатам поиска используйте стрелки на клавиатуре ВВЕРХ и ВНИЗ. Для открытия страницы, нажмите ВВОД.',
    'pages.search.noresults' => 'Нет результатов по вашему запросу. Пожалуйста, проверьте строку поиска.',
    'pages.error.missing' => 'Страница не найдена',

    // subpages
    'subpages' => 'Страницы',
    'subpages.index.headline' => 'Страниц для',
    'subpages.index.back' => 'Назад',
    'subpages.index.add' => 'Добавить новую страницу',
    'subpages.index.add.first.text' => 'Для этой страницы пока нет подстраниц',
    'subpages.index.add.first.button' => 'Добавить первую страницу',
    'subpages.index.visible' => 'Видимые страницы',
    'subpages.index.visible.help' => 'Перетащите невидимые страницы сюда для их публикации (сортировки в меню).',
    'subpages.index.invisible' => 'Невидимые страницы',
    'subpages.index.invisible.help' => 'Перетащите видимые страницы сюда для их сокрытия (удаления из меню).',
    'subpages.error.missing' => 'Страница не найдена',

    // files
    'files' => 'Файлы',
    'files.index.headline' => 'Файлов для',
    'files.index.back' => 'назад',
    'files.index.upload' => 'Закачать новый файл',
    'files.index.upload.first.text' => 'Для этой страницы пока нет файлов',
    'files.index.upload.first.button' => 'Закачать первый файл',
    'files.index.edit' => 'Настроить',
    'files.index.delete' => 'Удалить',
    'files.show.name.label' => 'Имя файла',
    'files.show.info.label' => 'Тип / размер / Разрешение',
    'files.show.link.label' => 'Публичная ссылка',
    'files.show.open' => 'Показать/скачать файл',
    'files.show.back' => 'Назад',
    'files.show.replace' => 'Заменить',
    'files.show.delete' => 'Удалить',
    'files.show.error.rename' => 'Файл не может быть переименован',
    'files.show.error.form' => 'Пожалуйста, заполните все необходимые поля корректно',
    'files.upload.drop' => 'Перетащите файлы сюда…',
    'files.upload.click' => '…или кликните для выбора',
    'files.replace.drop' => 'Перетащите файлы сюда…',
    'files.replace.click' => '…или кликните для выбора',
    'files.replace.error.type' => 'Закачиваемый файл должен иметь такое же расширение (тип)',
    'files.delete.headline' => 'Вы действительно хотите удалить файл?',
    'files.error.missing.page' => 'Страница не найдена',
    'files.error.missing.file' => 'Файл не найден',

    // users
    'users' => 'Пользователи',
    'users.index.headline' => 'Все пользователи',
    'users.index.add' => 'Добавить нового пользователя',
    'users.index.edit' => 'Настроить',
    'users.index.delete' => 'Удалить',
    'users.form.username.label' => 'Логин',
    'users.form.username.placeholder' => 'Ваш логин',
    'users.form.username.help' => 'Формат: нижние латинские буквы, цифры и дефисы',
    'users.form.username.readonly' => 'Логин не может быть изменен',
    'users.form.firstname.label' => 'Имя',
    'users.form.lastname.label' => 'Фамилия',
    'users.form.email.label' => 'Эл.почта',
    'users.form.email.placeholder' => 'pochta@domen.com',
    'users.form.password.label' => 'Пароль',
    'users.form.password.confirm.label' => 'Подтвердите пароль',
    'users.form.password.new.label' => 'Новый пароль',
    'users.form.password.new.confirm.label' => 'Подтвердите новый пароль',
    'users.form.password.new.help' => 'Оставьте пустым, чтобы не менять пароль',
    'users.form.language.label' => 'Язык',
    'users.form.role.label' => 'Роль',
    'users.form.options.headline' => 'Опции аккаунта',
    'users.form.options.message' => 'Отправить эл.почту',
    'users.form.options.delete' => 'Удалить аккаунт',
    'users.form.avatar.headline' => 'Аватар (фото)',
    'users.form.avatar.upload' => 'Закачать картинку для аккаунта',
    'users.form.avatar.replace' => 'Заменить картинку для аккаунта',
    'users.form.avatar.delete' => 'Удалить картинку для аккаунта',
    'users.form.back' => 'назад к аккаунтам',
    'users.form.error.password.confirm' => 'Пожалуйста, подтвердите пароль',
    'users.form.error.update' => 'Аккаунт не может быть изменен',
    'users.form.error.create' => 'Аккаунт не может быть создан',
    'users.form.error.permissions.title' => 'Папка account не доступна для записи',
    'users.form.error.permissions.text' => 'Пожалуйста, убедитесь, что папка /site/accounts существует и доступна для записи.',
    'users.delete.headline' => 'Вы действительно хотите удалить аккаунт?',
    'users.delete.error' => 'Аккаунт не может быть удален',
    'users.avatar.drop' => 'Перетащите картинку для аккаунта сюда…',
    'users.avatar.click' => '…или кликните для выбора',
    'users.avatar.error.type' => 'Формат файлов картинок может быть JPG, PNG или GIF',
    'users.avatar.error.folder.headline' => 'Папка avatar не доступна для записи',
    'users.avatar.error.folder.text' => 'Пожалуйста, убедитесь, что папка <strong>/assets/avatars</strong> существует и доступна для записи перед добавлением аватаров (фото) к аккаунтам.',
    'users.avatar.delete.error' => 'Аватар (фото) к аккаунту не может быть удален',
    'users.avatar.delete.success' => 'Аватар (фото) к аккаунту удален',
    'users.error.missing' => 'Аккаунт не найден',

    // form fields
    'fields.required' => 'Необходимо',
    'fields.date.label' => 'Дата',
    'fields.date.months' => array(
      'Январь',
      'Февраль',
      'Март',
      'Апрель',
      'Май',
      'Июнь',
      'Июль',
      'Август',
      'Сентябрь',
      'Октябрь',
      'Ноябрь',
      'Декабрь'
    ),
    'fields.date.weekdays' => array(
      'Воскресенье',
      'Понедельник',
      'Вторник',
      'Среда',
      'Четверг',
      'Пятница',
      'Суббота'
    ),
    'fields.date.weekdays.short' => array(
      'Вс',
      'Пн',
      'Вт',
      'Ср',
      'Чт',
      'Пт',
      'Сб'
    ),
    'fields.email.label' => 'Эл.почта',
    'fields.email.placeholder' => 'pochta@domen.com',
    'fields.number.label' => 'Номер',
    'fields.number.placeholder' => '#',
    'fields.page.label' => 'Страница',
    'fields.page.placeholder' => 'путь/к/странице',
    'fields.password.label' => 'Пароль',
    'fields.structure.add' => 'Добавить',
    'fields.structure.add.first' => 'Добавить первую запись',
    'fields.structure.empty' => 'Пока нет записей.',
    'fields.structure.cancel' => 'Отмена',
    'fields.structure.save' => 'Сохранить',
    'fields.structure.edit' => 'Настроить',
    'fields.structure.delete' => 'Удалить',
    'fields.tags.label' => 'Тэги',
    'fields.tel.label' => 'Телефон',
    'fields.textarea.buttons.bold.label' => 'Жирный шрифт',
    'fields.textarea.buttons.bold.text' => 'Жирный шрифт',
    'fields.textarea.buttons.italic.label' => 'Наклонный шрифт',
    'fields.textarea.buttons.italic.text' => 'Наклонный шрифт',
    'fields.textarea.buttons.link.label' => 'Ссылка',
    'fields.textarea.buttons.email.label' => 'Эл.почта',
    'fields.textarea.buttons.image.label' => 'Картинка',
    'fields.textarea.buttons.file.label' => 'Файл',
    'fields.toggle.yes' => 'Да',
    'fields.toggle.no' => 'Нет',
    'fields.toggle.on' => 'Вкл',
    'fields.toggle.off' => 'Выкл',

    // textarea overlays
    'editor.link.url.label' => 'Вставить ссылку',
    'editor.link.text.label' => 'Текст ссылки',
    'editor.link.text.help' => 'Текст ссылки не обязателен',
    'editor.email.address.label' => 'Введите адрес эл.почты',
    'editor.email.address.placeholder' => 'pochta@domen.com',
    'editor.email.text.label' => 'Текст ссылки эл.почты',
    'editor.email.text.help' => 'Текст ссылки эл.почты не обязателен',
    'editor.file.empty' => 'Для этой страницы нет файлов',
    'editor.image.empty' => 'Для этой страницы нет картинок',

    // error page
    'error' => 'Ошибка',
    'error.headline' => 'Ошибка',

  )
);
