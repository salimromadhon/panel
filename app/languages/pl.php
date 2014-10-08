<?php

return array(
  'title' => 'Polski',
  'author' => 'Piotr Świderek <piotrek@bardzofajny.net>',
  'version' => '1.0.0',
  'data' => array(

    // global
    'cancel' => 'Anuluj',
    'add' => 'Dodaj',
    'save' => 'Zapisz',
    'saved' => 'Zapisano!',
    'delete' => 'Usuń',
    'insert' => 'Wstaw',
    'ok' => 'Ok',

    // options (sidebar)
    'options.show' => 'Pokaż opcje',
    'options.hide' => 'Ukryj opcje',

    // installation
    'installation' => 'Instalacja',
    'installation.check.headline' => 'Instalacja panelu Kirby',
    'installation.check.text' => 'Kirby napotkał następujące problemy podczas instalacji…',
    'installation.check.retry' => 'Ponów próbę',
    'installation.check.error' => 'Wystąpiły jakieś problemy!',
    'installation.check.error.accounts' => '/site/accounts nie ma praw do zapisu',
    'installation.check.error.avatars' => '/assets/avatars nie ma praw do zapisu',
    'installation.check.error.blueprints' => 'Proszę dodać folder /site/blueprints',
    'installation.check.error.content' => 'Folder content oraz wszystkie foldery i pliki wewnątrz muszą mieć ustawione prawa do zapisu.',
    'installation.check.error.thumbs' => 'Folder thumbs musi mieć ustawione prawa do zapisu.',
    'installation.signup.username.label' => 'Utwórz swoje pierwsze konto.',
    'installation.signup.username.placeholder' => 'Nazwa użytkownika',
    'installation.signup.email.label' => 'Email',
    'installation.signup.email.placeholder' => 'mail@example.com',
    'installation.signup.language.label' => 'Język',
    'installation.signup.password.label' => 'Hasło',
    'installation.signup.language.label' => 'Język',
    'installation.signup.button' => 'Utwórz konto',

    // login
    'login' => 'Zaloguj się',
    'login.welcome' => 'Zaloguj się na swoje nowo utworzone konto',
    'login.username.label' => 'Nazwa użytkownika',
    'login.password.label' => 'Hasło',
    'login.error' => 'Niepoprawna nazwa użytkownika lub hasło',
    'login.button' => 'Zaloguj się',

    // logout
    'logout' => 'Wyloguj się',

    // dashboard
    'dashboard' => 'Panel administracyjny',
    'dashboard.index.pages.title' => 'Strony',
    'dashboard.index.pages.add' => 'Dodaj',
    'dashboard.index.site.title' => 'Adres URL Twojej strony',
    'dashboard.index.account.title' => 'Twoje konto',
    'dashboard.index.account.edit' => 'Edytuj',
    'dashboard.index.metatags.title' => 'Metadane strony',
    'dashboard.index.metatags.edit' => 'Edytuj',
    'dashboard.index.history.title' => 'Twoje ostatnie modyfikacje',
    'dashboard.index.history.text' => 'Twoje ostatnio zmodyfikowane strony będą wyświetlane tutaj, aby łatwo je było odnaleźć ponownie później.',

    // metatags
    'metatags' => 'Metadane strony',
    'metatags.back' => 'Powróć do panelu administracyjnego',

    // pages
    'pages.show.settings' => 'Ustawienia strony',
    'pages.show.preview' => 'Otwórz podgląd',
    'pages.show.changeurl' => 'Zmień URL',
    'pages.show.delete' => 'Usuń tę stronę',
    'pages.show.subpages.title' => 'Strony',
    'pages.show.subpages.add' => 'Dodaj',
    'pages.show.subpages.empty' => 'Ta strona nie posiada podstron',
    'pages.show.files.title' => 'Pliki',
    'pages.show.files.add' => 'Dodaj',
    'pages.show.files.empty' => 'Ta strona nie posiada plików',
    'pages.show.error.permissions.title' => 'Nie ma uprawnień do zapisu dla tej strony',
    'pages.show.error.permissions.text'  => 'Sprawdź uprawnienia dla folderu content i plików znajdujących się w tym folderze.',
    'pages.show.error.permissions.retry'  => 'Spróbuj ponownie',
    'pages.show.error.notitle.title' => 'Szablon tej strony nie posiada pola tytułu',
    'pages.show.error.notitle.text' => 'Dodaj pole tytułu i spróbuj ponownie',
    'pages.show.error.notitle.retry' => 'Spróbuj ponownie',
    'pages.show.error.form'  => 'Wypełnij wszystkie pola poprawnie',

    'pages.add.title.label' => 'Dodaj nową stronę',
    'pages.add.title.placeholder' => 'Tytuł',
    'pages.add.url.label' => 'apendyks URL',
    'pages.add.url.enter' => '(wprowadź tytuł)',
    'pages.add.url.close' => 'Zamknij',
    'pages.add.url.help' => 'Formatowanie: małe litery a-z, 0-9 i myślnik',
    'pages.add.template.label' => 'Szablon',
    'pages.add.error.title' => 'Brakuje tytułu',
    'pages.add.error.template' => 'Brakuje szablonu',
    'pages.add.error.max.headline' => 'Nie można dodać nowej strony',
    'pages.add.error.max.text' => 'Maksymalna liczba podstron dla tej strony została już osiągnięta.',
    'pages.url.uid.label' => 'apendyks URL',
    'pages.url.uid.label.option' => 'Utwórz na podstawie tytułu',
    'pages.url.error.exists' => 'Strona z takim apendyksem już istnieje',
    'pages.url.error.move' => 'Apendyks nie mógł zostać zmieniony',
    'pages.delete.headline' => 'Czy na pewno chcesz usunąć tę stronę?',
    'pages.delete.error.home.headline' => 'Strona główna nie może zostać usunięta',
    'pages.delete.error.home.text' => 'Próbujesz skasować stronę główną. To nie jest możliwe i prowadziłoby do niepożądanych skutków.',
    'pages.delete.error.error.headline' => 'Strona błędu nie może zostać usunięta',
    'pages.delete.error.error.text' => 'Próbujesz skasować stronę błędu. To nie jest możliwe i prowadziłoby do niepożądanych skutków.',
    'pages.delete.error.children.headline' => 'Ta strona nie może zostać usunięta',
    'pages.delete.error.children.text' => 'Ta strona posiada podstrony i nie może zostać skasowana. Usuń najpierw wszystkie podstrony.',
    'pages.delete.error.blocked.headline' => 'Ta strona nie może zostać usunięta',
    'pages.delete.error.blocked.text' => 'Ta strona jest zablokowana i nie może zostać usunięta.',
    'pages.search.help' => 'Przeszukaj strony według URL. Nawiguj po wynikach wyszukiwania strzałkami góra/dół i naciśnij enter, by przejść do wybranej strony.',
    'pages.search.noresults' => 'Brak wyników wyszukiwania dla zapytania. Spróbuj ponownie z innym adresem URL.',
    'pages.error.missing' => 'Strona nie została odnaleziona',

    // subpages
    'subpages' => 'Strony',
    'subpages.index.headline' => 'Strony w',
    'subpages.index.back' => 'Wróć',
    'subpages.index.add' => 'Dodaj nową stronę',
    'subpages.index.add.first.text' => 'Ta strona nie posiada jeszcze żadnych podstron',
    'subpages.index.add.first.button' => 'Dodaj pierwszą stronę',
    'subpages.index.visible' => 'Widzialne strony',
    'subpages.index.visible.help' => 'Przeciągnij tutaj niewidzialne strony, by zmienić kolejność/sprawić, żeby były widzialne.',
    'subpages.index.invisible' => 'Niewidzialne strony',
    'subpages.index.invisible.help' => 'Przeciągnij tutaj widzialne strony, aby sprawić, żeby były niewidzialne.',
    'subpages.error.missing' => 'Strona nie została odnaleziona',

    // files
    'files' => 'Pliki',
    'files.index.headline' => 'Pliki dla',
    'files.index.back' => 'Wróć',
    'files.index.upload' => 'Dodaj nowy plik',
    'files.index.upload.first.text' => 'Ta strona nie posiada jeszcze żadnych plików',
    'files.index.upload.first.button' => 'Dodaj pierwszy plik',
    'files.index.edit' => 'Edytuj',
    'files.index.delete' => 'Usuń',
    'files.show.name.label' => 'Nazwa pliku',
    'files.show.info.label' => 'Typ / Rozmiar / Wymiary',
    'files.show.link.label' => 'Publiczny link',
    'files.show.open' => 'Pokaż/pobierz plik',
    'files.show.back' => 'Wróć',
    'files.show.replace' => 'Zamień',
    'files.show.delete' => 'Usuń',
    'files.show.error.rename' => 'Nazwa pliku nie mogła zostać zmieniona',
    'files.show.error.form' => 'Wypełnij poprawnie wszystkie pola',
    'files.upload.drop' => 'Upuść pliki tutaj',
    'files.upload.click' => '…lub kliknij, aby załadować',
    'files.replace.drop' => 'Upuść plik tutaj…',
    'files.replace.click' => '…lub kliknij, aby zastąpić',
    'files.replace.error.type' => 'Przesłany plik musi być plikiem tego samego typu',
    'files.delete.headline' => 'Czy na pewno chcesz usunąć ten plik?',
    'files.error.missing.page' => 'Strona nie została odnaleziona',
    'files.error.missing.file' => 'Plik nie został odnaleziony',

    // users
    'users' => 'Użytkownicy',
    'users.index.headline' => 'Wszyscy użytkownicy',
    'users.index.add' => 'Dodaj nowego użytkownika',
    'users.index.edit' => 'Edytuj',
    'users.index.delete' => 'Usuń',
    'users.form.username.label' => 'Nazwa użytkownika',
    'users.form.username.placeholder' => 'Twoja nazwa użytkownika',
    'users.form.username.help' => 'Dozwolone znaki: małe litery a-z, 0-9 i myślnik',
    'users.form.username.readonly' => 'Nazwa użytkownika nie może zostać zmieniona',
    'users.form.firstname.label' => 'Imię',
    'users.form.lastname.label' => 'Nazwisko',
    'users.form.email.label' => 'Email',
    'users.form.email.placeholder' => 'mail@example.com',
    'users.form.password.label' => 'Hasło',
    'users.form.password.confirm.label' => 'Potwierdź hasło',
    'users.form.password.new.label' => 'Nowe hasło',
    'users.form.password.new.confirm.label' => 'Potwierdź nowe hasło',
    'users.form.password.new.help' => 'Pozostaw puste, aby zachować bieżące hasło',
    'users.form.language.label' => 'Język',
    'users.form.role.label' => 'Rola',
    'users.form.options.headline' => 'Opcje konta',
    'users.form.options.message' => 'Wyślij email',
    'users.form.options.delete' => 'Usuń konto',
    'users.form.avatar.headline' => 'Zdjęcie profilowe',
    'users.form.avatar.upload' => 'Dodaj zdjęcie profilowe',
    'users.form.avatar.replace' => 'Zmień zdjęcie profilowe',
    'users.form.avatar.delete' => 'Usuń zdjęcie profilowe',
    'users.form.back' => 'Wróć do użytkowników',
    'users.form.error.password.confirm' => 'Potwierdź hasło',
    'users.form.error.update' => 'Użytkownik nie mógł zostać zaktualizowany',
    'users.form.error.create' => 'Użytkownik nie mógł zostać utworzony',
    'users.form.error.permissions.title' => 'Folder account nie ma praw do zapisu',
    'users.form.error.permissions.text' => 'Upewnij się, że folder /site/accounts istnieje i posiada prawa do zapisu.',
    'users.delete.headline' => 'Czy na pewno chcesz usunąć tego użytkownika?',
    'users.delete.error' => 'Użytkownik nie mógł zostać usunięty',
    'users.avatar.drop' => 'Upuść zdjęcie profilowe tutaj…',
    'users.avatar.click' => '…lub kliknij, aby załadować',
    'users.avatar.error.type' => 'Możesz wgrać tylko pliki JPG, PNG i GIF',
    'users.avatar.error.folder.headline' => 'Folder avatar nie ma praw do zapisu',
    'users.avatar.error.folder.text' => 'Utwórz folder <strong>/assets/avatars</strong> i nadaj mu prawa do zapisu, by móc dodawać zdjęcia profilowe.',
    'users.avatar.delete.error' => 'Zdjęcie profilowe nie mogło zostać usunięte',
    'users.avatar.delete.success' => 'Zdjęcie profilowe zostało usunięte',
    'users.error.missing' => 'Użytkownik nie został odnaleziony',

    // form fields
    'fields.required' => 'Wymagane',
    'fields.date.label' => 'Data',
    'fields.date.months' => array(
      'Styczeń',
      'Luty',
      'Marzec',
      'Kwiecień',
      'Maj',
      'Czerwiec',
      'Lipiec',
      'Sierpień',
      'Wrzesień',
      'Październik',
      'Listopad',
      'Grudzień'
    ),
    'fields.date.weekdays' => array(
      'Niedziela',
      'Poniedziałek',
      'Wtorek',
      'Środa',
      'Czwartek',
      'Piątek',
      'Sobota'
    ),
    'fields.date.weekdays.short' => array(
      'Nd',
      'Pn',
      'Wt',
      'Śr',
      'Czw',
      'Pt',
      'Sb'
    ),
    'fields.email.label' => 'Email',
    'fields.email.placeholder' => 'mail@example.com',
    'fields.number.label' => 'Numer',
    'fields.number.placeholder' => 'nr',
    'fields.page.label' => 'Strona',
    'fields.page.placeholder' => 'ścieżka/do/strony',
    'fields.password.label' => 'Hasło',
    'fields.structure.add' => 'Dodaj',
    'fields.structure.add.first' => 'Dodaj pierwszy wpis',
    'fields.structure.empty' => 'Nie ma jeszcze żadnych wpisów.',
    'fields.structure.cancel' => 'Anuluj',
    'fields.structure.save' => 'Zapisz',
    'fields.structure.edit' => 'Edytuj',
    'fields.structure.delete' => 'Usuń',
    'fields.tags.label' => 'Tagi',
    'fields.tel.label' => 'Telefon',
    'fields.textarea.buttons.bold.label' => 'Pogrubiony tekst',
    'fields.textarea.buttons.bold.text' => 'Pogrubiony tekst',
    'fields.textarea.buttons.italic.label' => 'Kursywa',
    'fields.textarea.buttons.italic.text' => 'Kursywa',
    'fields.textarea.buttons.link.label' => 'Link',
    'fields.textarea.buttons.email.label' => 'Email',
    'fields.textarea.buttons.image.label' => 'Obrazek',
    'fields.textarea.buttons.file.label' => 'Plik',
    'fields.toggle.yes' => 'Tak',
    'fields.toggle.no' => 'Nie',
    'fields.toggle.on' => 'Włącz',
    'fields.toggle.off' => 'Wyłącz',

    // textarea overlays
    'editor.link.url.label' => 'Wstaw URL',
    'editor.link.text.label' => 'Tekst linku',
    'editor.link.text.help' => 'Tekst linku jest opcjonalny',
    'editor.email.address.label' => 'Wstaw adres email',
    'editor.email.address.placeholder' => 'mail@example.com',
    'editor.email.text.label' => 'Tekst linku',
    'editor.email.text.help' => 'Tekst linku jest opcjonalny',
    'editor.file.empty' => 'Ta strona nie ma plików',
    'editor.image.empty' => 'Ta strona nie ma obrazków',

    // error page
    'error' => 'Błąd',
    'error.headline' => 'Błąd',

  )
);
