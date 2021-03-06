<!DOCTYPE html>
<html>
    <head>
        <!-- SEO -->
        <meta charset="utf-8"/>
        <title>SafeLine</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        
        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link type="text/css" rel="stylesheet" href="css/menu.css"/>
        <link type="text/css" rel="stylesheet" href="css/reset.css"/>
        <link type="text/css" rel="stylesheet" href="css/fonts.css"/>
        
        <!-- JS -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/main.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <?php
        if (isset($_GET['q'])) $q=$_GET['q'];
        if ($q==1) echo '<script type="text/javascript"> alert("Спасибо! Ваше сообщение отправлено.")</script>';
        if ($q==2) echo '<script type="text/javascript"> alert("Проверка не пройдена. Пожалуйста, отметьте галочку, подтверждающую, что вы не робот")</script>'
        ?>
    </head>
    <body>
        <div class="contain-fluid">
            <header>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                        <img class="logo" src="img/team/logo.jpg" alt="Логотип">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
                        <nav class="cd-main-nav-wrapper">
                            <ul class="cd-main-nav">
                                <li><a class="slidedown menutext menu-color1" href="#i1">Главное</a></li>
                                <li><a class="slidedown menutext menu-color1" href="#i2">Решения</a></li>
                                <li><a class="slidedown menutext menu-color1" href="#i3">Опыт</a></li>
                                <li><a class="slidedown menutext menu-color1" href="#i4">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <a href="#0" class="cd-nav-trigger"><span></span></a>
            </header>
            <main class="cd-main-content">
               <div id="i1" class="block">
                    <div class="block1">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="GreenHeading">
                                    <h2>Просто!  &nbsp; Полезно!  &nbsp; Позитивно!</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="minihead">
                                    <br/>
                                    <center><b>О нас:</b></center>                            
                                </div>
                                <div class="text">
                                    <b>Компания «Сейфлайн»</b> – бизнес-интегратор нового поколения.
                                    <br/>
                                        Наш опыт позволяет решать задачи на стыке таких областей знания как:
                                    <br/>
                                    <ol class="lines">
                                        <li>Информационные технологии</li>
                                        <li>Маркетинг</li>
                                        <li>Финансы</li>
                                    </ol>
                                    Компания основана в 2007 году.
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1">
                                <hr class="hr2">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="minihead">
                                    <br/>
                                    <center><b>Наши основные принципы:</b></center>
                                </div>
                                <div class="text">
                                    <br/>
                                        <ol class="lines">
                                             <li>Все наши решения должны соответствовать критериям – просто, полезно, позитивно!</li>
                                            <li>Профессионалы денег за диагностику не берут</li>
                                            <li>Готовность разделить с клиентом риски и бонусы наших решений – стоимости наших решений может зависеть от экономического эффекта их внедрения</li>
                                        </ol>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1">
                                <hr class="hr2">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="minihead">
                                    <br/>
                                    <center><b>Наша целевая аудитория:</b></center>
                                </div>
                                <div class="text">
                                    <br/>
                                    <ol class="lines">
                                        <li>ИТ-дистрибуция</li>
                                        <li>Системная интеграция </li>
                                        <li>Облачные провайдеры</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="i2" class="block">
                    <div class="block2">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="WhiteHeading">
                                    <h2>Наши решения</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="minihead img">
                                    <div class="achiv1"></div>
                                    <br/>
                                    <center><b>IT</b></center>                    
                                </div>
                                <div class="text">
                                    <br/>
                                    <ul>
                                        <li>Аутсорсинг управления ИТ- проектами</li>
                                        <li>Рекрутинг временных команд ИТ-разработчиков </li>
                                        <li>Разработка и литературная  правка технической и  организационной  документации </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1">
                                <hr class="hr">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="minihead img">
                                    <div class="achiv2"></div>
                                    <br/>
                                    <center><b>Маркетинг</b></center>
                                </div>
                                <div class="text">
                                    <br/>
                                    <ul>
                                        <li>Интернет-реклама</li>
                                        <li>Web-дизайн</li>
                                        <li>Креатив – формулирование миссии, целей и слоганов</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1">
                                <hr class="hr">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="minihead img">
                                    <div class="achiv3"></div>
                                    <br/>
                                    <center><b>Финансы</b></center>
                                </div>
                                <div class="text">
                                    <br/>
                                    <ul>
                                        <li>Анализ финансовой устойчивости вас и ваших клиентов</li>
                                        <li>Аутсорсинг бухгалтерского и налогового учета</li>
                                        <li>Облачный электронный архив бухгалтерских документов, интегрированный с 1С</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
                <div id="i3" class="block">
                    <div class="block1 block3">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="GreenHeading">
                                    <h2>Опыт</h2>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1"></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                <div class="team">
                                    <ul>
                                        <li>
                                            <a target="_blank" href="https://www.comptek.ru">
                                                <img src="img/team/comptek.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a href ="http://cti.ru/">
                                                <img src="img/team/cti.png">
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href ="http://www.di-house.ru/store/">
                                                <img src="img/team/diHouseLogo.png">
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href ="http://netproject.ru/">
                                                <img src="img/team/5.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href ="http://www.treolan.ru/">
                                                <img src="img/team/4.png">
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href ="http://www.lanit.ru/">
                                                <img src="img/team/logo_lanit_rus.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href ="https://maxiplace.ru/">
                                                <img src="img/team/mpl.png">
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href ="http://www.norbit.ru/">
                                                <img src="img/team/norbit.png">
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href ="http://autoscream.ru/">
                                                <img src="img/team/scream.png">
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href ="http://abcmind.ru/">
                                                <img src="img/team/1.png">
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href ="http://aerodisk.ru/">
                                                <img src="img/team/2.png">
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href ="http://onlanta.ru/">
                                                <img src="img/team/3.png">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1"></div>
                        </div>
                    </div>
                </div>
                <div id="i4" class="block">
                    <div class="block1">
                        <div class="GreenHeading">
                            <h2> Контакты</h2>
                        </div>
                        <div class="text">
                            <div class="row">
                                <div class="col-lg-2 col-md-2"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <b>ООО «Сейфлайн»</b><br/>
                                    <b>ИНН / КПП</b><br/>
                                    7702651292/770201001<br/><br/>
                                    <b>ОГРН</b><br/>
                                    1077759793814<br/><br/>
                                    <b>Телефоны</b><br/>
                                    8 (909) 973-79-02, 8 (495) 967-66-84 доб. 14412<br/><br/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <b>Адрес</b><br/>
                                    129075, Москва, Мурманский проезд, дом 14, корпус 1, офис 1008<br/><br/>
                                    <b>Поделись страницей</b><br/> 
                                    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                    <script src="//yastatic.net/share2/share.js"></script>
                                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter"></div>
                                </div>
                                <div class="col-lg-2 col-md-2"></div>
                           </div> 
                        </div>
                    </div>
                </div>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab1fc570151c5a6899a1c2b1a6586a4ce8b2bfbc3e0be82de45bf5cd7324cd1b9&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </main>
        <footer>
            <div class="foot">
                <label>
                    Хотите знать больше?
                </label>
            </div>
                <form action="php/post.php" method="post">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Имя<b>*</b></label><br>
                                        <input name="name" placeholder="Фамилия Имя Отчество" required class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <p>Предпочитаемый способ связи:</p>
                                        <label>Телефон</label><br>
                                        <input name="phone" placeholder="+79876543210" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label><br>
                                        <input name="email" placeholder="example@mail.ru" class="form-control"/>
                                        <p class="help-block">Отсутствие спама гарантировано</p>
                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Текст обращения<b>*</b></label><br>
                                        <textarea rows="3" placeholder="Опишите здесь Ваши пожелания" name="message" required class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6Lc1HhoUAAAAAFABpYYepV8sj2DCEnY2hYHP46DH"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                            <input type="submit" value="Отправить" class="btn btn-success"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                    </div>
                </form>
            </footer>
        </div>
    </body>
</html>