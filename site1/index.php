<?php
include_once 'inc/header.php';
?>
<main>
    <div class="icon">
        <?php
        if ($cur_time >=8 & $cur_time < 20 ) {
            $images1 = 'images/sun.jpg';
            echo "<img src='$images1' >";

        }
        else {
            $images2 = 'images/moon.jpg';
            echo "<img src='$images2' >";
        }
        ?>

    </div>

    <div class="frame">
    </div>

<section class="grid_blok3">
    <div class="photo">
        <img src="images/804A0047.png" width=100%>
    </div>
    <div class="name">
        <h1>Бикулов Руслан</h1>
    </div>

    <div class="information">
        <h2><em>Всем привет! Меня зовут Руслан, мне 31 год. Я работаю инженером по автоматизации
            на производстве. Увлекаюсь программированием и 3Д-печатью. Уменя есть
            небольшая мастерская, где я создаю разные разные крутые штуки. А еще
            я хочу сменить сферу деятельности и углубиться в WEB программирование,
            так как это может дать мне больше свободы.</em></h2>
    </div>

    <div class="like">
        <h2><em>За несколько уроков освоил больше, чем за время обучения в универе.
            Приходится постоянно гуглить, что позволят паралельно запоминать еще
            какую-то полезную информацию.</em></h2>
    </div>
</section>
    <div class="flex_blok0">

        <div class="flex_blok11">

        <div class="flex_blok01">
            <div class="img1"><img src="images2/11.jpeg" width=100% ></div>
            <div class="text1"><h2>Начнем с 3Д принтера</h2>
                Объемная печать невозможна без использования уникального оборудования.
                Классический 3D-принтер печатает изделия по принципу моделирования послойным наплавлением (FDM).
                Устройство позволяет создавать объекты различных форм с выпуклыми поверхностями и изгибами.</div>
        </div>

        <div class="flex_blok02">
            <div class="img2"><img src="images2/22.jpg" width=100% ></div>
            <div class="text2"><h2>Преимущества 3Д-печати</h2>

                Востребованность и популярность трехмерного создания объектов обязана следующим достоинствам технологии:
                <ul>
                    <li>Ресурсоэффективность. Все объекты создаются с нуля и не теряют материалы, как это случается в 85% случаев
                        при традиционной печати.</li>
                    <li>Экономия времени. Передать макеты для создания объектов можно в онлайн-режиме,
                        что значительно сокращает траты временных ресурсов.</li>
                    <li>Повышенная прочность. Изделия по качеству прочнее на 25-30% в отличие от объектов, созданных путем литья или ковки.</li>
                </ul>
            </div>
        </div>

    </div>

        <div class="flex_blok22">
        <div class="flex_blok03">
            <div class="img3"><img src="images2/33.jpg" width=100% ></div>
            <div class="text3"><h2>3D-печать — полностью безотходная технология </h2>
                Благодаря тому, что разработка макета для 3Д-печати занимает минимум времени, а передать его в работу можно
                в дистанционном режиме, подобная технология часто используется в бизнесе.
                Создавая уникальные трехмерные модели владельцам компаний, удается на несколько шагов
                превзойти конкурентов и привлечь большее количество клиентов.
                <br>
                Производители оборудования для 3D-печати постоянно совершенствуют технологии,
                поэтому мы должны быть готовы к новым разработкам и внедрениям, всегда шагать в ногу со временем</div>

        </div>

        <div class="flex_blok04">
            <div class="img4"><img src="images2/44.jpg" width=100% ></div>
            <div class="text4"><h2> Сфера использования</h2>
                3D-принтеры пока еще не проникли в каждый дом, но во всех ключевых сферах жизнедеятельности человека они уже присутствуют.
                3D-печать востребована в автомобилестроении, энергетике, медицине, пищевой промышленности, строительстве/дизайне, фешен-индустрии.
            </div>

        </div>

    </div>
    </div>

    <section class="grid_blok">
        <div class="grid1">
            <div class="img5"><img src="images2/img5.jpg" width=80% height="80%">

            </div>
            <div class="text5"><h2>SLA печать</h2>Лазерная стереолитография (SLA) — технология 3D-печати,
                основанная на послойном отверждении жидкого материала под действием луча лазера.
                Используется в промышленных 3D-принтерах компаний 3D Systems и Uniontech.
                <br>
                В емкость с жидким фотополимером помещается сетчатая платформа, на которой будет происходить выращивание прототипа.
                Изначально платформа устанавливается на такой глубине, чтобы ее покрывал тончайший слой вещества, толщиной всего
                0.05-0.13 мм — по сути это и есть толщина слоя в лазерной стереолитографии. Далее включается лазер, воздействующий на те участки полимера,
                которые соответствуют стенкам заданного объекта, вызывая их затвердевание. После этого вся платформа погружается ровно на один слой,
                то есть на глубину 0.05-0.13 мм.

            </div>
        </div>
        <div class="grid2">
            <div class="img6"><img src="images2/img6.jpg" width= "65%" height="100%">

            </div>
            <div class="text6"><h2>FDM печать</h2>
                FDM — самая распространенная технология 3D-печати в мире.
                С ее помощью выращивают изделия как дешевые домашние принтеры, так и промышленные системы
                высокоточной 3D-печати. Принцип построения по технологии FDM заключается в послойном выращивании
                изделия из предварительно расплавленной пластиковой нити.
                Что лучше печатать: крупные изделия, которые должны обладать надежными механическими свойствами
                (прочность, износостойкость, гибкость).
                Преимущества: прочные износостойкие изделия, низкая стоимость материалов, широкие возможности
                пост-обработки.

            </div>
        </div>
        <div class="grid3">
            <div class="img7"><img src="images2/img7.jpg" width=60% height="100%" >

            </div>
            <div class="text7"><h2>SLS печать</h2>
                Селективное лазерное спекание (SLS) — это технология аддитивного производства, в которой используется
                мощный лазер для спекания мелких частиц полимерного порошка в прочную структуру на основе 3D-модели.
                3D-печать по технологии SLS была популярна среди инженеров и производителей на протяжении десятилетий.

            </div>
        </div>
        <div class="grid4">
            <div class="img8"><img src="images2/img8.jpg" width=70% height="70%">

            </div>
            <div class="text8">
                <h2>БИО печать</h2>Биопечать — это новый раздел медицины, образовавшийся в ходе стремительного развития аддитивных технологий
                (они же — 3D-печать). От научной фантастики до научных фактов, 3D печатные органы пробиваются в мир медицины.
                Сначала идея 3D-печати органов для трансплантации «по требованию» звучит как нечто из фильмов

            </div>
        </div>
    </section>
</main>
<?php
include_once 'inc/footer.php';
?>


