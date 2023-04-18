<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?><section class="press-center" data-controller="view-more">
  <header class="press-center__header">
    <h1 class="light">Новости</h1>
  </header>
  <div class="press-center__articles press-center__articles--wide-list" data-target="view-more.container">

    <article class="news-important" style="background-image: url(<?=ASSET_PATH?>stub/1.jpg)">
      <a href="/article.html" class="news-important__link">
  <a href="/novosti/detail.php" class="news__link">
        <h2 class="news-important__title">
          Стартовал прием заявок на I конкурс президентских
          грантов 2020 года! Желающие уже с 1 марта
          2020 года получить грант Президента
        </h2>
      </a>
      <time class="news-important__publication-date" datetime="2019-10-15">15 октября 2019</time>
    </article>
    <article class="news news--wide">
      <div class="news__publication-info">
         <a href="/novosti/detail.php" class="news__link">
          <h3 class="news__title content-block">
            <mark>
              Общественная палата РФ будет продвигать методические
              указания по госзакупкам услуг в сфере отлова
              и содержания животных без владельцев.
            </mark>
            <span>
               15 ноября поговорили о проблемах
              правоприменения закона «Об ответственном обращении
              с животными»
            </span>
          </h3>
        </a>
        <time class="news__publication-date" datetime="2019-11-08">8 ноября 2019</time>
      </div>
      <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/7.jpg)"></div>
    </article>
    <article class="news news--wide">
      <div class="news__publication-info">
        <a href="/novosti/detail.php" class="news__link">
          <h3 class="news__title content-block">
            <mark>
              #ЩедрыйВторник пройдет 3 декабря.
            </mark>
            <span>
              В 100 странах, включая Россию, в четвертый раз
              пройдет Международный день благотворительности
              #ЩедрыйВторник. Миллионы людей объединяются для проведения
              благотворительных мероприятий, вдохновляют других
              на добрые дела.
            </span>
          </h3>
        </a>
        <time class="news__publication-date" datetime="2019-10-24">24 октября 2019</time>
      </div>
      <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/8.jpg)"></div>
    </article>
    <article class="news news--wide">
      <div class="news__publication-info">
        <a href="/article.html" class="news__link content-block">
          <h3 class="news__title">
            Заседание рабочей группы Общественной палаты Ямала
            по формированию системы гуманного обращения
            с животными
          </h3>
        </a>
        <time class="news__publication-date" datetime="2019-09-27">27 сентября 2019</time>
      </div>
      <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/9.jpg)"></div>
    </article>
    <article class="news news--wide">
      <div class="news__publication-info">
        <a href="/article.html" class="news__link content-block">
          <h3 class="news__title content-block">
            <mark>
              На Ямале реализуется общественно-образовательный проект
              «Ямальские молодёжные инициативы».
            </mark>
            <span>
              Его участники могут получить гранты в размере 200, 150
              и 100 тыс. рублей на реализацию своего
              социально-ориентированного проекта
            </span>
          </h3>
        </a>
        <time class="news__publication-date" datetime="2019-11-14">14 ноября 2019</time>
      </div>
      <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/10.jpg)"></div>
    </article>
    <article class="news news--wide">
      <div class="news__publication-info">
        <a href="/article.html" class="news__link content-block">
          <h3 class="news__title content-block">
            <mark>
              Форум добровольцев Ямала соберет более 300 участников.
            </mark>
            <span>
              В Новом Уренгое 13 и 14 декабря пройдет
              форум добровольцев Ямала. Это долгожданное событие для
              волонтерского движения автономного округа
            </span>
          </h3>
        </a>
        <time class="news__publication-date" datetime="2019-11-14">14 ноября 2019</time>
      </div>
      <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/4.jpg)"></div>
    </article>
  </div>
  <div class="grid-container">
    <a class="press-center__view-more button button--inverted" href="press-center.html" data-target="view-more.button"
      data-action="view-more#load">Показать более ранние материалы</a>
  </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>