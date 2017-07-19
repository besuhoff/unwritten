<?php
  $base = '/';

  $actualLink = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  preg_match('/\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches);
  $index = isset($matches[1]) ? $matches[1] : '1';
  $screenshotLink = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$base" . "screenshots/$index.png";
  $postLink = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$base$index";
?>
<!DOCTYPE html>
<html>
  <head>
    <base href="<?php echo $base; ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url"           content="<?php echo $postLink; ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Из ненаписанного" />
    <meta property="og:image"         content="<?php echo $screenshotLink; ?>" />
    <title>Из ненаписанного</title>
    <link rel="stylesheet" href="style.css?19072017t1711">
  </head>
  <body>
    <nav>
      <a state-ref="first">В начало</a>
      <a state-ref="random">Случайно</a>
      <a state-ref="last">В конец</a>
    </nav>

    <a state-ref="back" class="back"></a>
    <a state-ref="next" class="next"></a>

    <main></main>

    <template id="main">
      <section id="content">
        <span class="index">{{index}}/{{quantity}}</span>

        {{content}}

        <div class="tags">
          {{tags}}
        </div>
      </section>
      <section>
        <div class="social">
          <div class="fb-like"
               data-href="{{shareUri}}"
               data-action="like"
               data-share="true"
               data-layout="button_count"
               data-colorscheme="dark">
          </div>
        </div>
      </section>
    </template>

    <template id="tag">
      <a href="{{tagUri}}" {{active}}><span>{{tag}}</span></a>
    </template>

    <script>
      var data = [
        {
          content: '<p>…и во всяком шаре им видится аллюзия на дюрера</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>он так много смотрел вдаль, что развил в себе клаустрофобию: ему казалось, что небо и земля сходятся на горизонте только затем, чтобы задушить его ничтожное существо</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>…и, завидя в толпе полузнакомое лицо, предусмотрительно переходил на другую сторону.</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>«приходится включать /god, потому что каждый раз прописывать /give all утомляет»</p>',
          tags: ['из_ненаписанного']
        },
        {
          content: '<p>… и перед сном делал зарядку в пустых вагонах безлюдных ночных электричек</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>я женщина, а значит - я актриса<br>' +
          'мой узок лоб, мне несколько за тридцать<br>' +
          'и слоем штукатурки покрываясь,<br>' +
          'я становлюсь похожа на монро<br><br>' +

          'мне каждый день всё хмуро и серо<br>' +
          'я праздную прикованной к постели<br>' +
          'очередным избранником судьбы<br>' +
          'в его глаза гляжу не отрываясь<br><br>' +

          '(глаза его полны немой мольбы -<br>' +
          'так жаждет он любви своей рабы)<br><br>' +

          'вночи я восклицаю - неужели<br>' +
          'я доживу до сорока пяти?<br>' +
          'постыл мне дом, но некуда идти</p>',
          tags: ['из_ненаписанного', 'стихо']
        },
        {
          content: '<p>— Сегодня в Киеве неизвестный ворвался в отделение банка и, угрожая кассиру игрушечным пистолетом, похитил мешок фальшивых денег.</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>каждому, кто пользуется транслитерацией, следует помнить, что это необратимое преобразование.</p>',
          tags: ['из_ненаписанного']
        },
        {
          content: '<p>а счёт вёл, всегда начиная с 256 из-за патологической боязни первого байта.</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>…и разыгрывают идиотов, чтобы не признавать, что в значительной степени стали ими.</p>',
          tags: ['из_ненаписанного', 'котлован']
        },
        {
          content: '<p>— Знаешь, — он бросил в сторону окурок, так что брызнули искры, и трижды выстрелил в упор в спину идущему впереди мужчине с депутатской нашивкой на рукаве. — Жизнь вообще штука забавная.</p>',
          tags: ['из_ненаписанного', 'котлован']
        },
        {
          content: '<p>царь с царицею простился,<br>бух в котел — и там сварился</p>',
          tags: ['из_ненаписанного', 'котлован']
        },
        {
          content: '<p>для дурачеств детских мы уже взрослы,<br>до дурачеств взрослых нам ещё далёко</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>…в годы нищеты варили суп из веревочек, которыми связывают сардельки…</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>…<br>— Да кто чем. Я вот, например, сайты бездельничаю…</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>А когда отключали горячую воду, они ставили машинку стирать и выводили слив на смеситель душевой, экономя заодно и моющее средство.</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>на столе — малый джентльменский набор: стальная кружка горячего чаю с лимоном, перо от планшета и разобранный автоматический предохранитель на шестнадцать ампер.</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры', 'джентльменские_наборы']
        },
        {
          content: '<p>или вот, бывает, смотрит горелая спичка на свой кончик, тот, который целый еще, и думает — вон как все хорошо начиналось, и ровная я там, и светлая, че ж случилось-то теперь, что я такая черная, кривая и обугленная вся.</p>',
          tags: ['из_ненаписанного', 'вспритчнулось']
        },
        {
          content: '<p>они с нею были невероятно близки: однажды он даже сломал диван в её доме</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>он был настолько антижених, что когда шел к очередной возлюбленной с предложением руки и сердца и заранее заготовленным кольцом, у той еще в преддверие встречи начиналось психосоматическое ожирение пальцев рук</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>чувствовал себя настоящим автомобилистом: даже карманное зеркальце у него было не чтоб пудрить носик, а чтобы, закинув голову, наблюдать за подкрадывающимися сзади мерседесами.</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>история всей моей жизни в девяти с половиной главах.</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>о, мессир! я метался по этому интерфейсу, как проклятый! наступал на кнопки, шугался от боксов с птичками, ловил выпадающие отовсюду списки... а потом ещё и пошёл напрямик через поля ввода и затерялся в них... ввод, кстати сказать, в этом сезоне дает невиданно обильные всходы, мессир…</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>— ну хорошо — Профессор посмотрел на меня с ухмылкой. — А почему, например, у людей, регулярно жующих жвачку, коэффициент интеллекта в среднем на два пункта выше, чем у остальных?<br><br>' +

          '— эээ… логично предположить, что жевательные движения улучшают кровообращения головы… — я выжидательно взглянул на него в ответ — …или же это всемирный заговор и они добавляют туда какой-то допинг — закончил я полушутливо.<br><br>' +

          '— милый мой, всё гораздо проще! — воскликнул он, вскакивая из-за стола. — ведь жвачные животные, как известно, травоядны. мудрая природа заботится о выживании вегетарианцев!</p>',
          tags: ['из_ненаписанного', 'котлован']
        },
        {
          content: '<p>на столе — большой джентльменский набор: фарфоровая тарелка холодного борща со сметаной, перо от планшета и разобранный амдшный системник на три ядра.</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры', 'джентльменские_наборы']
        },
        {
          content: '<p>рожа такая, как будто тебя долго и с упоением лупили чем-то промышленным</p>',
          tags: ['из_ненаписанного', 'котлован']
        },
        {
          content: '<p>выхаркивал тоску на мокрых стылых улицах ёжащегося города</p>',
          tags: ['из_ненаписанного', 'котлован']
        },
        {
          content: '<p>он был столь застенчив, что номера телефонов красивых девушек узнавал, подкарауливая последних возле терминалов пополнения счета</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>Санитарный инспектор Олег Борисович так любил детей, что по выходным, вооружившись канистрой повидла и огромным шприцем, бродил по базару, и, подкарауливая отвернувшихся лоточниц, дополнял любимые детьми булочки до положенного ГОСТом соотношения в один к трём.</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>В розовом пакетике с цветочками — сверхкрупный джентльменский набор: свежий теплый батон, бутыль пятновыводителя и второй том собрания сочинений Володи Маяковского</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры', 'джентльменские_наборы']
        },
        {
          content: '<p>Да, товарищи, и я тоже умер —<br>' +
          'С кем не случается, правда?<br>' +
          'Тук-тук в сосновые двери, затрезвонит занудный зуммер —<br>' +
          '«Что вы хотели? Ах, он в восьмом кругу ада.<br>' +
          'Зайдите позже — может быть, через вечность.<br>' +
          'Осторожнее, дверь открывается наружу».<br>' +
          'Тёмные волосы, белеющая конечность,<br>' +
          'Строгий костюм, который теперь не нужен…<br>' +
          'На заросшей тропе подстригает кусты равнодушный Савелий<br>' +
          'Да по насыпи белка бредёт — одинокий шпион,<br>' +
          'И, упругое утро разрезав ванильною трелью,<br>' +
          'Соловей упоённо выводит свой «show must go on».</p>',
          tags: ['из_ненаписанного', 'стихо']
        },
        {
          content: '<p>Монтажник кабельных сетей Геннадий Кириллович может на зуб определить, есть ли на разъеме интернет и правильный ли раздаётся айпи.</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>Добрый дворник Виталий Харитонович поил комаров кровью, которая текла у него из носу по ночам.</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>Гинеколог Семён Никифорович в целом хорошо разделял работу и личное, только вот жену ласкал всегда в резиновых перчатках, а после секса протирал руки спиртом.</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>— Милая, мне тебя так не хватает… похоже, нам нужен кто-то ещё</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>…считал, что недостаточно продвинут для приобретения целого фотоаппарата, поэтому покамест купил себе только светофильтр</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>…и Зинаида Витальевна Тутова, которую ученики так и называли — «Здеся Витальна».</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>Моя жена проста и вместе с тем непостижимо загадочна, подобно Великой теореме Ферма, и именно потому с девяносто пятого года я потерял к ней всяческий интерес.</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>он чертовски неприхотлив<br>' +
          'запираясь в кладовке с половником кислых щей<br>' +
          'он легко проникает в самую суть вещей</p>',
          tags: ['из_ненаписанного', 'стихо']
        },
        {
          content: '<p>Говорят, что у пунктуальных людей часы показывают всегда на пять минут вперед. Он тоже перевёл свои, тешась надеждой попасть в этот круг избранных. С логикой, у него, видимо, было тоже не очень, поэтому он пребывал в блаженном неведении о провале инверсии этой причинно-следственной связи.</p>',
          tags: ['из_ненаписанного', 'записки_анонимного_невротика']
        },
        {
          content: '<p>Папа и мама смотрели телевизор каждый в своей комнате, но это не давало папе никакой дополнительной свободы, как можно было бы ожидать. Мама просто периодически приходила с кухни с указаниями вроде «включай СТБ, икс-фактор пропустишь!» или «сериал барахло пошел, давай „Украину“, там свежие новости». Так и жили они душа в душу</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>…пришла светлая мысль поставить плач любимого сына на звонок. Жена, по крайней мере, почему-то не оценила, проснувшись в три утра в ужасе от звука невинной смс, написанной игривой любовницей</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>Вдруг понимаешь, как ты постарел, когда, приходя домой, ты больше не складываешь сахарные стики в дальний угол ящика стола, а открываешь их и высыпаешь сахар в сахарницу</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        },
        {
          content: '<p>Стандартный джентльменский набор: два двойных безе с бухгалтером железной дороги и один тройной бизе с сыном православного священника</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры', 'джентльменские_наборы']
        },
        {
          content: '<p>По-моему, писать в рекламе презервативов «самолечение может быть вредно для вашего здоровья» — непростительная конъюнктурная глупость</p>',
          tags: ['из_ненаписанного', 'качалочные_заметки']
        },
        {
          content: '<p>Как избавиться от назойливого клиента? Дай ему суперсетик из пяти рабочих подходиков на трех тренажерах, по 20 повторений на каждом, но отдых при этом чтобы подлиннее</p>',
          tags: ['из_ненаписанного', 'качалочные_заметки']
        },
        {
          content: '<p>— О, господи, какой ужас, это у вас что, герпес?<br>' +
          '— Нет, это мои губы</p>',
          tags: ['из_ненаписанного', 'качалочные_заметки']
        },
        {
          content: '<p>Двухслойные утепленные облегающие шорты специально для тех, кто не может понять, лето или зима</p>',
          tags: ['из_ненаписанного', 'качалочные_заметки']
        },
        {
          content: '<p>Постепенно осознал, что в упражнениях, кроме непосредственно времени отдыха, есть еще время, когда я отхожу от тренажера, время, пока я подхожу к тренажеру, время, пока я берусь за ручки, время, пока я усаживаюсь поудобнее, время, пока я выдыхаю перед подходом, чтобы синхронизировать дыхание…</p>',
          tags: ['из_ненаписанного', 'качалочные_заметки']
        },
        {
          content: '<p>Люблю дождь… в нём можно спрятать свой пот…</p>',
          tags: ['из_ненаписанного', 'качалочные_заметки']
        },
        {
          content: '<p>Владимир Львович был человеком очень интеллигентным, поэтому в иные дни, выходя из уборной, сообщал, что у него сегодня просто ужасный pronunciation</p>',
          tags: ['из_ненаписанного', 'хроники_коммунальной_квартиры']
        }
      ]
    </script>

    <script>
      var state = {
        tag: null,
        index: null,
        data: data
      };

      function getBaseUrl() {
        var base = document.querySelector('base');
        return base ? base.getAttribute('href') : '/';
      }

      function renderStateIntoUrl(tag, index) {
        var parts = [];

        if (tag || (tag === undefined && state.tag)) {
          parts.push('tags');
          parts.push(tag ? tag : state.tag);
        }

        if (index || (index === undefined && state.index)) {
          parts.push(index ? index : state.index);
        }

        return getBaseUrl().replace(/\/$/, '') + '/' + parts.join('/');
      }

      function syncUrlState(url) {
        var baseUrl = getBaseUrl();
        // Subtract base from path
        var path = url.split(baseUrl);
        path.shift();
        path = path.join(baseUrl);

        path = path.split('/');
        var i = 0;
        // detect tag
        if (path[i] === 'tags') {
          state.tag = decodeURIComponent(path[i + 1]);
          i += 2;
        } else {
          state.tag = '';
        }

        // detect index
        if (path[i] !== undefined && path[i] !== "") {
          state.index = (Number(path[i]) - 1 + state.data.length) % state.data.length + 1;
          i++;
        }

        if (state.index === null) {
          if (!state.tag) {
            state.index = 1;
          } else {
            var tagData = state.data.filter(function(item) { return item.tags.indexOf(state.tag) !== -1 });

            state.index = state.data.indexOf(tagData[0]);
          }
        }

        history.pushState({}, document.querySelector('title').innerText, renderStateIntoUrl());
        document.querySelector('[property="og:url"]').setAttribute('content', renderStateIntoUrl(null, state.index));
        document.querySelector('[property="og:image"]')
          .setAttribute('content', location.origin + getBaseUrl() + 'screenshots/' + state.index + '.png');
      }

      function getIndex(state, delta) {
        if (!state.tag) {
          return (state.data.length + state.index - 1 + delta) % state.data.length + 1;
        }

        var currentItem = state.data[state.index - 1];
        var tagData = state.data.filter(function(item) { return item.tags.indexOf(state.tag) !== -1 });
        var targetItem = tagData[(tagData.length + tagData.indexOf(currentItem) + delta) % tagData.length];

        return state.data.indexOf(targetItem) + 1;
      }

      function getFirstIndex(state) {
        if (!state.tag) {
          return 1;
        }

        var tagData = state.data.filter(function(item) { return item.tags.indexOf(state.tag) !== -1 });
        return state.data.indexOf(tagData[0]) + 1;
      }

      function getLastIndex(state) {
        if (!state.tag) {
          return state.data.length;
        }

        var tagData = state.data.filter(function(item) { return item.tags.indexOf(state.tag) !== -1 });
        return state.data.indexOf(tagData[tagData.length - 1]) + 1;
      }

      function getNextIndex(state) {
        return getIndex(state, 1);
      }

      function getPreviousIndex(state) {
        return getIndex(state, -1);
      }

      function getRandomIndex(state) {
        var delta = Math.floor(
            Math.random() * (state.data
              .filter(function(item) { return !state.tag || item.tags.indexOf(state.tag) !== -1 }).length - 1)
          ) + 1;

        return getIndex(state, delta);
      }

      function renderTemplate(target) {
        var html = document.querySelector('#main').innerHTML;
        var item = state.data[state.index - 1];
        html = html
          .replace(/\{\{shareUri}}/g, renderStateIntoUrl(null, state.index))
          .replace(/\{\{content}}/g, item.content)
          .replace(/\{\{index}}/g, state.index)
          .replace(/\{\{quantity}}/g, state.data.length);

        var tagHtml = document.querySelector('#tag').innerHTML;
        var tagsHtml = item.tags.map(function(tagText) {
          return tagHtml
            .replace(/\{\{tagUri}}/g, (tagText === state.tag ? '' : '/tags/' + tagText) + '/' + state.index)
            .replace(/\{\{tag}}/g, tagText)
            .replace(/\{\{active}}/g, tagText === state.tag ? 'class="active"' : '');
        });
        html = html.replace(/\{\{tags}}/g, tagsHtml.join(''));
        document.querySelector(target).innerHTML = html;
        if (window.FB) {
          window.FB.XFBML.parse(document.querySelector(target));
        }
      }

      function initNavigation() {
        document.querySelector('[state-ref="first"]').href = renderStateIntoUrl(undefined, getFirstIndex(state));
        document.querySelector('[state-ref="last"]').href = renderStateIntoUrl(undefined, getLastIndex(state));
        document.querySelector('[state-ref="random"]').href = renderStateIntoUrl(undefined, getRandomIndex(state));
        document.querySelector('[state-ref="next"]').href = renderStateIntoUrl(undefined, getNextIndex(state));
        document.querySelector('[state-ref="back"]').href = renderStateIntoUrl(undefined, getPreviousIndex(state));
      }

      function initLinks() {
        document.addEventListener('click', function(e) {
          var target = e.target;
          while (target) {
            if (target.getAttribute && target.getAttribute('href') && target.getAttribute('href').split(getBaseUrl())[0] === '') {
              history.pushState({}, document.querySelector('title').innerText, target.getAttribute('href'));
              bootstrap(target.getAttribute('href'));
              e.preventDefault();
              break;
            }

            target = target.parentNode;
          }
        });
      }

      function bootstrap(url) {
        syncUrlState(url);
        renderTemplate('main');
        initNavigation();
      }

      initLinks();
      bootstrap(location.pathname);
    </script>

    <!-- Load Facebook SDK for JavaScript -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '362452754170916',
          xfbml      : true,
          version    : 'v2.10'
        });
        FB.AppEvents.logPageView();
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/ru_RU/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
  </body>
</html>