<html>
  <head>
    <title>Главная</title>
    <link href="./styles.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="keywords" content="Главная, История, Мемы">
    <meta name="description" content="Описание разделов">
  </head>
  <body>
  <!-- Заголовок для навигации -->
    <div class="nav">
        <ul class="sections" style="border-bottom-color: black">
          <li><a href="./Main.php">Главная</a></li>
          <li><a href="./Photo.php">Фото</a></li>
          <li><a href="./Video.php">Видео</a></li>
          <li><a href="./Archive.php">Архив</a></li>
          <li><a href="./Contacts.php">Контакты</a></li>
        </ul>
    </div>

      <!-- Блок с описаниями -->
      <table>
        <tr>
          <td class="empty">
          </td>
          <td class="info">

            <!-- Описание вкладки Главная -->
            <div class="descript" id=Main>
              <h2>Главная</h2>
              <p>
                Данный раздел представляет собой главную вкладку файла,
                рассказывающий про особенности и возможности сайта.<br> Тут можно
                узнать информацию про разделы:
                <ul>
                  <li><a href="#Main">Главная</a></li>
                  <li><a href="#Photo">Фото</a></li>
                  <li><a href="#Video">Видео</a></li>
                  <li><a href="#Archive">Архив</a></li>
                  <li><a href="#Contacts">Контакты</a></li>
                <ul>
              </p>
            </div>

            <!-- Описание вкладки Фото -->
            <div class="descript" id="Photo">
              <h2>Фото</h2>
              <p>
                Раздел <a href="./Photo.php">Фото</a> предназначен для показа всех фотографий,
                загруженных на данный сайт.<br> С помощью него можно легко найти нужную вам фотографию
                и использовать её в нужное время в нужном разговоре. <br>Все картинки являются мемами,
                никакой левой инфомации.
              </p>
            </div>

            <!-- Описание вкладки видео -->
            <div class="descript" id="Video">
              <h2>Видео</h2>
              <p>
                Раздел <a href="./Video.php">Видео</a> предназначен для показа мемов в реальной среде.
                Раздел имеет обзор каждого мема, загруженного на сайт, и, возможно, его историю. Все видео были
                взяты из разрешенных источников.<br>
              </p>
            </div>

            <!-- Описание вкладки Архив -->
            <div class="descript" id="Archive">
              <h2>Архив</h2>
              <p>
                Раздел <a href="./Archive.php">Архив</a> предназначен для вывода всех новостей,
                связанные с данным <span class="bold">сайтом</span>. Благодаря этому можно узнать все интересующие вас моменты
                с этим сайтом.
              </p>
            </div>

            <!-- Описание вкладки Контакты -->
            <div class="descript" id="Contacts">
              <h2>Контакты</h2>
              <p>
                Если в вас горит огонь мемолога, и вы хотите поучавствовать в развитии данного
                сайта, то через раздел <a href="./Contacts.php">Контакты</a> можно предложть ваш мем.
                Через время мы с вами созвонимся.
              </p>
            </div>
          </div>
        </td>

        <td>
          <!-- Первая новость -->
          <a href="./Uganda.php">
            <div class="blockpic">
              <img src="./pic/UgandaKnukle.png" class="pic">
              <p>
                Был добавлен мем <br>Uganda Warrior!
              </p>
            </div>
          </a>

          <!-- Вторая новость -->
          <a href="./Spaghet.php">
            <div class="blockpic">
              <img src="./pic/SmbdSpaget.png" class="pic">
              <p>
                Был добавлен мем <br>Somebody Touch My Spaget!
              </p>
            </div>
          </a>

          <!-- Третья новость -->
          <a href="./CanDo.php">
            <div class="blockpic">
              <img src="./pic/CanDoThis.jpg" class="pic">
              <p>
                Был добавлен мем <br>Can You Do This? !
              </p>
            </div>
          </a>

        </td>
      </tr>
    </table>
  </body>
</html>
