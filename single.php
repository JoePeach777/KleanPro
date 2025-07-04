<?php require 'db.php'; 
setlocale(LC_TIME, 'ru_RU.UTF-8');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Klean - Cleaning Services Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   <!-- Начало шапки -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-3 text-primary">КлинПро</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-dark d-none d-lg-flex">
                    <div class="col-lg-7 text-left text-white">
                        <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>romanovdaniil676@gmail.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+7 988 098 49 72</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center pr-2">
                            <a class="text-primary p-2" href="https://web.whatsapp.com/">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a class="text-primary p-2" href="https://vk.com/">
                                <i class="fab fa-vk"></i>
                            </a>
                            <a class="text-primary p-2" href="https://ok.ru/">
                                <i class="fab fa-odnoklassniki"></i>
                            </a>
                            <a class="text-primary p-2" href="https://web.telegram.org/"> 
                                <i class="fab fa-telegram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary">КлинПро</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Главная</a>
                            <a href="about.html" class="nav-item nav-link">О сайте</a>
                            <a href="service.html" class="nav-item nav-link">Услуги</a>
                            <a href="project.html" class="nav-item nav-link">Доп.Услуги</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Новости</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="blog.html" class="dropdown-item">Последние новости</a>
                                    <a href="http://clean/single.php" class="dropdown-item">Деталь блога</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Контакты</a>
                        </div>
                        <a href="#" class="btn btn-primary mr-3 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#priceModal">
    Узнать цену
</a>

<!-- Модальное окно -->
<div class="modal fade" id="priceModal" tabindex="-1" aria-labelledby="priceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="priceModalLabel">Цены на клининговые услуги</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        Вот популярные услуги:
        <ul>
            <li>Химчистка мебели - от 3 500 ₽</li>
            <li>Мытье окон - 300 ₽ / окно</li>
            <li>Чистка ковров - от 500 ₽</li>
            <li>Уборка квартир - от 5 000 ₽</li>
            <li>Уборка офисов - от 6 000 ₽</li>
             
        </ul>
        Если хотите узнать цены на другие услуги, нажмите на Доп.Услуги.
      </div>
      <div class="modal-footer">
        <a href="project.html" class="btn btn-primary">Доп.Услуги</a>
      </div>
    </div>
  </div>
</div>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Детали Блога</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.html">Главная</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">Детали </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="d-flex mb-2">
                            <a class="text-secondary text-uppercase font-weight-medium" href="">КЛИНПРО</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href="">01 Марта, 2025</a>
                        </div>
                        <h1 class="section-title mb-3">Почему заказ клининга — это удобно и практично</h1>
                    </div>

                    <div class="mb-5">
                        <img class="img-fluid rounded w-100 mb-4" src="img/carousel-1.jpg" alt="Image">
                        <p>Регулярная уборка дает возможность поддерживать чистоту и уют в квартире. В убранном доме снижается риск развития инфекционных заболеваний, появления аллергической реакции.
                            Порядок в помещении настраивает на продуктивную работу, улучшает эмоциональное состояние и качество сна, снижает уровень стресса. 
                        Частота проведения уборки зависит от разных факторов: площади помещения, наличия домашних животных, 
                        района проживания, расположения квартиры. В среднем, наводить чистоту необходимо как минимум 1-3 раза в неделю. 
                        Заказ клининга у профессионалов может стать удобной альтернативой самостоятельной уборке. </p>
                        <p>Частота проведения уборки зависит от разных факторов: площади помещения, наличия домашних животных, 
                        района проживания, расположения квартиры. В среднем, наводить чистоту необходимо как минимум 1-3 раза в неделю. 
                        Заказ клининга у профессионалов может стать удобной альтернативой самостоятельной уборке. </p>
                        

                        <h2 class="mb-4">Преимущества клининг-сервиса</h2>

                        <img class="img-fluid rounded w-50 float-left mr-4 mb-3" src="img/blog-1.jpg" alt="Image">
                        <p>В 21 веке профессиональная уборка не роскошь, а повседневная необходимость. Распорядок дня человека насыщен приоритетными задачами: 
                            учебой, работой, развитием бизнеса, воспитанием детей. Оставшееся время хочется посвящать не рутинной уборке, 
                            а любимому хобби, интересным поездкам, релаксу в SPA-салоне или на уютном диване с книгой. </p>
                        <br>
                        <br>
                        <p>Заказ клининга в квартиру помогает сделать жизнь проще, рационально выстроить повседневный график и даже исключить лишние затраты денег:</p>
                    <form>
                        <li>Клининг-сервис экономит время. Согласно результатам исследования института Dynata (по заказу Karcher), 
                        россияне тратят на поддерживающую уборку в доме около 4 часов 49 минут в неделю. Если делегировать наведение чистоты профессионалам, 
                        можно освободить достаточно много времени на работу, саморазвитие, общение с близкими, спорт и отдых. </li>
                        <br>
                        <li>Помещение дольше остается чистым. Заказ клининга в квартиру дает возможность провести более глубокую и тщательную уборку.
                        Исполнители используют профессиональные средства: концентраты, пятновыводители, дезодоранты, которые работают эффективнее обычной бытовой химии.
                        Сотрудники клининга умеют справляться с самыми сложными загрязнениями и застарелыми пятнами, уничтожать неприятные запахи. 
                        С помощью парогенераторов и другой профессиональной техники устраняется пыль даже в труднодоступных местах. </li>
                        <br>
                        <li>Услуги клининга помещений экономят деньги. В перспективе профессиональная уборка увеличивает срок службы мебели и отделочных материалов.
                        Благодаря правильной чистке предметы интерьера дольше сохраняют аккуратный и свежий вид. </li>
                        <br>
                        <li>Услуги клининга квартир защищают вас и ваших членов семьи. Глубокая чистка предотвращает распространение опасного пылевого клеща и других микроорганизмов.
                        Результат — минимальный риск аллергии, проблем в работе дыхательной системы, инфекционных заболеваний. 
                        Новейшие исследования показывают, что в чистом помещении нормализуется эмоциональное состояние, повышается концентрация внимания,
                        улучшается память, снижается вероятность расстройства пищевого поведения.</li>
                    </form>
                        <br>
                        <p>Заказ клининга в квартиру в Ставрополе выручит, если нужно срочно подготовиться к встрече гостей, проведению праздничного мероприятия. 
                        Можно воспользоваться услугой срочной уборки, и сотрудники клинингового сервиса за 1-3 часа приведут квартиру в порядок. </p>
                    <br>
                        <h3 class="mb-4">Сервис заказа уборки «КлинПро» — экономим время и обеспечиваем комфорт</h3>
                        <img class="img-fluid rounded w-50 float-right ml-4 mb-3" src="img/blog-2.jpg" alt="Image">
                        <p>Приняли решение поручить наведение чистоты профессионалам? Следующий шаг — выбор сервиса для оказания услуг клининга. 
                        Важно, чтобы исполнители работали по договору, в котором прописаны права и обязанности сторон, материальная ответственность перед заказчиком.
                        Профессионалы должны использовать безопасные моющие средства, которые не навредят здоровью членов семьи и домашних животных.</p>
                        <br>
                        <p>Предлагаем сделать заказ уборки в клининговом сервисе «КлинПро». Наши исполнители:</p>
                        <br>
                    <frome>
                        <li>прошли инструктаж и практическую подготовку — легко справятся с задачей любой сложности;</li>
                        <br>
                        <li>приступают к работе после заключения договора — гарантируем материальную ответственность и качество клининга;</li>
                        <br>
                        <li>разбираются в тонкостях поддерживающего, комплексного, генерального, послестроительного клининга — выполним любой запрос клиента;</li>
                        <br>
                        <li>применяют чистящие составы с международными эко-сертификатами — без агрессивных химических компонентов и резкого запаха;</li>
                        <br>
                        <li>могут предложить услуги клининга (уборки) даже в отсутствие клиента — просто заранее передайте ключ от дома в наш офис для хранения в сейфе;</li>
                        <br>
                        <li>по запросу клиента оказывают дополнительные услуги — химчистку, мытье окон и балконов, стирку и глажку белья.</li>
                    </frome>
                    </div>

                    <div class="mb-5">
    <h3 class="mb-4 section-title">Комментарии</h3>
    <?php
    function rus_date($datetime) {
            $months = [
                'January' => 'января', 'February' => 'февраля', 'March' => 'марта',
                'April' => 'апреля', 'May' => 'мая', 'June' => 'июня',
                'July' => 'июля', 'August' => 'августа', 'September' => 'сентября',
                'October' => 'октября', 'November' => 'ноября', 'December' => 'декабря'
            ];
            $date = date('d F Y в H:i', strtotime($datetime));
            return strtr($date, $months);
        }
        $stmt = $pdo->query("SELECT * FROM comments ORDER BY created_at DESC");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="media mb-4">';
            echo '  <img src="img/profil.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">';
            echo '  <div class="media-body">';
            echo '  <h6>' . htmlspecialchars($row['name']) . ' <small><i>' . rus_date($row['created_at']) . '</i></small></h6>';
            echo '    <p>' . nl2br(htmlspecialchars($row['message'])) . '</p>';
            echo '  </div>';
            echo '</div>';
        }
        ?>
</div>
<div class="bg-light rounded p-5">
                        <h3 class="mb-4 section-title">Оставить комментарий</h3>
                        <form action="submit_comment.php" method="POST">
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="name">Имя</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group col-sm-6">
            <label for="email">Email </label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    </div>
    <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea id="message" name="message" cols="30" rows="5" class="form-control" required></textarea>
    </div>
    <div class="form-group mb-0">
        <input type="submit" value="Отправить" class="btn btn-primary">
    </div>
</form>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-secondary rounded mb-5 py-5 px-4">
                        <img src="img/daniel.png" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-white mb-3">Даниил</h3>
                        <p class="text-white m-0">Занимается подготовкой аналитических и прикладных материалов в сфере клининговых и бытовых услуг. 
                            Его публикации основаны на актуальных исследованиях и ориентированы на потребности современного потребителя.</p>
                    </div>
                    <div class="mb-5">
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control" style="padding: 25px;" placeholder="Ключевые слова">
                                <div class="input-group-append">
                                    <button class="btn btn-primary px-4">Поиск</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-4 section-title">Категории</h3>
                        <ul class="list-inline m-0">
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>Поддерживающая уборка</a>
                                <span class="badge badge-primary badge-pill">150</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>Генеральная уборка</a>
                                <span class="badge badge-primary badge-pill">131</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>После ремонта / строительства</a>
                                <span class="badge badge-primary badge-pill">78</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>Срочная уборка</a>
                                <span class="badge badge-primary badge-pill">56</span>
                            </li>
                            <li class="py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>Уборка после мероприятий</a>
                                <span class="badge badge-primary badge-pill">98</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-4 section-title">Последние публикации</h3>
                        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                            <img class="img-fluid rounded" src="img/blog-1.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                            <div class="d-flex flex-column pl-3">
                                <a class="text-dark mb-2" href="">Как избежать распространения аллергенов в доме: советы по уборке и профилактике</a>
                                <div class="d-flex">
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">КЛИНПРО</a></small>
                                    <small class="text-primary px-2">|</small>
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                            <img class="img-fluid rounded" src="img/blog-2.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                            <div class="d-flex flex-column pl-3">
                                <a class="text-dark mb-2" href="">С чего начать уборку в квартире: пошаговый план для идеальной чистоты</a>
                                <div class="d-flex">
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">КЛИНПРО</a></small>
                                    <small class="text-primary px-2">|</small>
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                            <img class="img-fluid rounded" src="img/blog-3.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                            <div class="d-flex flex-column pl-3">
                                <a class="text-dark mb-2" href="">Правила уборки офисных помещений</a>
                                <div class="d-flex">
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">КЛИНПРО</a></small>
                                    <small class="text-primary px-2">|</small>
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                            <img class="img-fluid rounded" src="img/blog-1.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                            <div class="d-flex flex-column pl-3">
                                <a class="text-dark mb-2" href="">Как избавиться от пыли в квартире и сохранить чистоту надолго</a>
                                <div class="d-flex">
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">КЛИНПРО</a></small>
                                    <small class="text-primary px-2">|</small>
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded" src="img/blog-2.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                            <div class="d-flex flex-column pl-3">
                                <a class="text-dark mb-2" href="">Что купить для самостоятельной уборки?</a>
                                <div class="d-flex">
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">КЛИНПРО</a></small>
                                    <small class="text-primary px-2">|</small>
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <img src="img/blog-2.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-4 section-title">Тэги</h3>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-outline-secondary m-1">Клининг</a>
                            <a href="" class="btn btn-outline-secondary m-1">Экономия времени</a>
                            <a href="" class="btn btn-outline-secondary m-1">Уборка</a>
                            <a href="" class="btn btn-outline-secondary m-1">Срочная уборка</a>
                            <a href="" class="btn btn-outline-secondary m-1">КлинПро</a>
                            <a href="" class="btn btn-outline-secondary m-1">Комфорт в доме</a>
                        </div>
                    </div>
                    <div class="mb-5">
                        <img src="img/blog-3.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <div>
                        <h3 class="mb-4 section-title">Кратко про статью</h3>
                      Мы расскажимт о преимуществах заказа профессиональной уборки — как способа сэкономить время, сохранить здоровье и поддерживать порядок в доме 
                      без лишних усилий. Автор подробно объясняет, почему клининг стал удобным и разумным решением для современных людей, 
                      а также рекомендует надёжный сервис «КлинПро».
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


 <!-- Начало подвала -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n3 display-4 text-primary">КлинПро</h1>
                </a>
                <p>Идеальная чистота без хлопот. С нами всегда чисто.</p>
                <h5 class="font-weight-semi-bold text-white mb-2">Время работы:</h5>
                <p class="mb-1">ПН - СБ с 8:00 до 19:00</p>
                <p class="mb-0">Воскресенье: Выходной</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Связаться с нами</h4>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>улица Ленина, 273, Город Ставрополь</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+7 988 098 49 72</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>romanovdaniil676@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-light btn-social mr-2" href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="https://vk.com/"><i class="fab fa-vk"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="https://ok.ru/"><i class="fab fa-odnoklassniki"></i></a>
                    <a class="btn btn-light btn-social" href="https://web.telegram.org/"><i class="fab fa-telegram"></i></a>                
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Краткие ссылки</h4> 
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Главная</a>
                    <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>О Сайте</a>
                    <a class="text-white mb-2" href="service.html"><i class="fa fa-angle-right mr-2"></i>Услуги</a>
                    <a class="text-white mb-2" href="blog.html"><i class="fa fa-angle-right mr-2"></i>Наш блог</a>
                    <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Контакты</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Узнавай о лучших предложениях и новинках раньше остальных!</h4>
                <p>© 2025 Cервис ООО "КЛИМПРО". Использование сервиса регулируется Пользовательским соглашением и Политикой конфиденциальности.</p>
                <form id="subscribe-form">
                <div class="w-100">
                    <div class="input-group">
                        <input type="email" name="email" class="form-control border-0" style="padding: 25px;" placeholder="Email" required>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary px-4">Подписаться</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subscribeModalLabel">Подписка оформлена</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body text-dark">
                    ✅ Спасибо за подписку! Теперь вы будете получать лучшие предложения первыми.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Хорошо</button>
                </div>
                </div>
            </div>
        </div>

        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Конфиденциальность</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Условия</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Часто задаваемые вопросы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Помощь</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Конец подвала -->


    <!-- Вернуться к началу -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- Библиотеки JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Контактный файл Javascript -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Шаблоны Javascript -->
    <script src="js/main.js"></script>


 <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script>
  (function() {
    emailjs.init("fYMqi_BJyAuhjNK7W");
  })();

  document.getElementById("subscribe-form").addEventListener("submit", function(event) {
    event.preventDefault();

    emailjs.sendForm("service_72ynga7", "template_bsac0hs", this)
      .then(function() {
        const modal = new bootstrap.Modal(document.getElementById('subscribeModal'));
        modal.show();
      }, function(error) {
        alert("❌ Ошибка отправки: " + JSON.stringify(error));
      });
  });
</script>
</body>

</html>