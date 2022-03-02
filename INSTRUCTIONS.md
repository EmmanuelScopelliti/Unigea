# UniGea

> Consigliato usare Markdown per leggere questo file. 
> Utilizzare l'estensione di preview per Visual Studio Code

### Framework locale
- Per progettare il sito ho utilizzato il framework "Laravel"; è necessario convertire nel framework di moodle
---

### Per cominciare
- il framework "Laravel" utilizza Xampp per accedere al server del database locale. 
- Per scaricare laravel è necessario avere [Composer](https://getcomposer.org/download/). 
- Una volta installato Composer, da terminale lanciare il comando:
``` bash
composer create-project laravel/laravel Unigea

cd Unigea
```

- Sostituire il file php.ini dentro a __Xampp/php__ con il file nel file zip

- Copiare il file [index.blade.php](/resources/views/index.blade.php) nella cartella __resources/views__, il file [login.blade.php](/resources/views/login.blade.php) nella cartella __resources/views/auth__, sovrascrivere il file [web.php](/routes/web.php) nella cartella __routes__, creare le cartelle _css_, _images_ e _js_ nella cartella __public__ e spostare nelle rispetttive cartelle i file:

<table>
    <tbody>
        <tr>
            <td>
                <a href="/public/css/animation.css">animation.css</a>
            </td>
            <td>
                <a href="/public/js/animation.js">animation.js</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="/public/css/arrow.css">arrow.css</a>
            </td>
            <td>
                <a href="/public/js/collapse.js">collapse.js</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="/public/css/login.css">login.css</a>
            </td>
            <td>
                <a href="/public/js/hide-show.js">hide-show.js</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="/public/css/phone-style.css">phone-style.css</a>
            </td>
            <td>
                <a href="/public/js/toTop.js">toTop.js</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="/public/css/style.css">style.css</a>
            </td>
            <td>
                <a href="/public/images/moodle.png">moodle.png</a>
            </td>
        </tr>
    </tbody>
</table>
 
- Per far partire il server locale, scrivere nel terminale:
  ``` bash
  php artisan serve
  ```
### Convertire in Moodle

- Nella directory "__app/Models__" si può trovare il [modello](/app/Models/MoodleAccount.php) per Moodle da implementare nel framework.