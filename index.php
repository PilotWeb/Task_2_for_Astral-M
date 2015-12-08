

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="forms.js"></script> <!-- Конфликтовал с js.js (Надо ставить выше)-->
    <script src="js/js.js"></script>
    <script src="js/modal.js"></script>
    <link rel="stylesheet" href="fonts/icomoon/icomoon.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        (function(){
            if (typeof carrotquest === 'undefined') {
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
                s.src = '//cdn.carrotquest.io/api.min.js';
                var x = document.getElementsByTagName('head')[0]; x.appendChild(s);

                carrotquest = {}; window.carrotquestasync = []; carrotquest.settings = {};
                m = ['connect', 'identify', 'track', 'auth'];
                function Build(name, args){return function(){window.carrotquestasync.push(name, arguments);} }
                for (var i = 0; i < m.length; i++) carrotquest[m[i]] = Build(m[i]);
            }
        })();
        carrotquest.connect('1758-2e30ce1ab118168801855c0305e');
    </script>

</head>
<body>
<div id="wrapper">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="logo col-lg-2 col-md-3 col-sm-3 col-xs-3 hidden-xs">
                    <a href="https://astralm.ru/"> <img src="images/logo.png" alt="logo"></a>
                </div>




                <div id="h-search" class="col-lg-7 col-md-5 col-sm-5 col-xs-5 hidden-xs" >
                    <form action="/search/index.php" id="h-search-form" name="search">
                        <input type="text" id="q" name="q"  value="" placeholder="Поиск по сайту">
                        <input type="submit" id="s" name="s"  value="">
                    </form>
                </div>

                <div class="h-contakt col-lg-3 col-md-4 col-sm-4 col-xs-4 hidden-xs">
                    <div class="h-phone">
                        <p>Телефон в Москве</p>
                        <p>+7 (499) 649-30-42</p>
                    </div>
                    <div class="h-phone">
                        <p>Техподдержка</p>
                        <p>8 (800) 700 86 68</p>
                    </div>
                    <div class="h-phone">
                        <a href="#" class="top-btn" id="top-btn">Заказать звонок</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="row">
        <div class="navbar navbar-inverse" id="menu">
            <div class="container">
                <div class="navbar-header">
                    <a href="https://astralm.ru/" class="navbar-brand hidden-lg hidden-md hidden-sm visible-xs"><img src="images/logo-long.png" height="30" width="100" style="margin-top:-7px;"></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Открыть навигацию</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="/products/">Продукты </a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/esignature/">Электронная подпись</a></li>
                                <li><a href="/products/report/">Астрал Отчет</a></li>
                                <li><a href="/products/1c-accounting/">1С-Отчетность</a></li>
                                <li><a href="/products/security/">Защита информации</a></li>
                                <li><a href="/products/alco/">Росалкоголь регулирование</a></li>
                                <li><a href="/products/otsenka-usloviy-truda_old/">СОУТ</a></li>
                                <li><a href="/products/skrin-astral/">СКРИН.Астрал</a></li>
                                <li><a href="/products/servis-1s-etp/">Сервис 1С-ЭТП</a></li>
                                <li><a href="/bg/">Банковская гарантия</a></li>
                                <li><a href="/sverka_nds/">Сверка НДС</a></li>
                                <li><a href="/1c-navigator/">1С:Бизнес-Навигатор</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/about/partnership/">Партнерам</a>
                        </li>
                        <li class="dropdown">
                            <a href="/news/">Новости</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/news/">Все новости</a></li>
                                <li><a href="/news/electronic-reports/">Электронная отчетность</a></li>
                                <li><a href="/news/certification_center/">Электронная подпись</a></li>
                                <li><a href="/news/astral-report/">1С-Отчетность</a></li>
                                <li><a href="/news/1c-report/">Астрал Отчет</a></li>
                                <li><a href="/news/buh-report/">Бухгалтерская отчетность</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/blog/">Блоги</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/blog/accountant_report/">Бухгалтерская отчетность</a></li>
                                <li><a href="/blog/electronic_reports/">Электронная отчетность</a></li>
                                <li><a href="/blog/astral_report/">Астрал Отчет</a></li>
                                <li><a href="/blog/1c-reports/">1С-Отчетность</a></li>
                                <li><a href="/blog/certification_center/">Электронная подпись</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/about/">О компании</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/about/">О компании</a></li>
                                <li><a href="/about/clients/">Бизнес-партнеры</a></li>
                                <li><a href="/about/reviews/">Отзывы клиентов</a></li>
                                <li><a href="/about/vacancy/">Вакансии</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/contacts/">Контакты</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!--    END MENU    -->


  

    <div class="container">
        <aside class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div id="left-menu-ecp">
                <div class="left-menu-link">
                    <a class="active" href="/esignature/"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/egais"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/voprosy-i-otvety/"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/"><span>1 test</span></a><br>
                    <a href="/esignature/primenenie/dlya-otchetnosti/">2 test</a><br>
                    <a href="/esignature/primenenie/dlya-dokumentooborota/">3 test</a><br>
                    <a href="/esignature/primenenie/dlya-torgov-(auktsiony)/">4 test</a><br>
                    <a href="/esignature/primenenie/dlya-zakupok-(tendery)">4 test</a><br>
                    <a href="/esignature/primenenie/lichnaya-podpis/">5 test</a><br>
                </div>
                <div class="clear"></div>
            </div>
        </aside>











        <div class="open_menu hidden-lg hidden-md">
        </div>
        <aside id="aside-ecp" class="col-lg-3 col-md-3">
            <a class="ac_popap_close close_menu" href="#"></a>
            <div id="left-menu-ecp" class=" modal_menu">
                <div class="left-menu-link">
                    <a class="active" href="/esignature/"><span>ЭЦП</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/egais"><span>ЭЦП для ЕГАИС</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/voprosy-i-otvety/"><span>ВОПРОСЫ И ОТВЕТЫ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/"><span>ПРИМЕНЕНИЕ</span></a><br>
                    <a href="/esignature/primenenie/dlya-otchetnosti/">Отчетность</a><br>
                    <a href="/esignature/primenenie/dlya-dokumentooborota/">Документооборот</a><br>
                    <a href="/esignature/primenenie/dlya-torgov-(auktsiony)/">Торги</a><br>
                    <a href="/esignature/primenenie/dlya-zakupok-(tendery)">Закупки</a><br>
                    <a href="/esignature/primenenie/lichnaya-podpis/">Личная подпись</a><br>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/ceny/"><span>ЦЕНЫ</span></a><br>
                    <a href="/esignature/ceny/tarify/">Тарифы</a><br>
                    <a href="/esignature/ceny/dopolnitelno/">Дополнительно</a><br>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/poryadok-polucheniya/"><span>ПОРЯДОК ПОЛУЧЕНИЯ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/mesta-polucheniya/"><span>МЕСТА ПОЛУЧЕНИЯ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/soprovozhdenie-torgov/"><span>СОПРОВОЖДЕНИЕ ТОРГОВ</span></a>
                    <a href=""></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/spisok-ploshchadok/"><span>СПИСОК ПЛОЩАДОК</span></a>
                </div>
                <div class="clear"></div>

            </div>
        </aside>









  <!-- #WORK AREA# -->
        <section id="right-content" class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Электронная отчетность</a></li>
                <li><a href="#">Предоставление отчетности</a></li>
                <li><a href="#">Налоговый режим</a></li>
                <li class="active">ОСНО</li>
            </ul>
        <div class="report">
            <h2 class="page-title">Отчетность при ОСНО</h2>
            <div class="right-content-head">
                 <h4>Общая система налогообложения</h4>
                 <p>
                     Является наиболее сложной и трудоемкой для ведения и сдачи отчетности.
                     Выбрав в качестве применяемого налогового режима ОСНО, какие отчеты сдавать в ФНС,
                     ФСС, ПФР и другие контролирующие органы?
                 </p>                 
            </div>
            <div class="osno-doc">
             <h5>Отчетность ООО на ОСНО включает в себя следующую документацию:</h5>
                <div class="osno-doc-view clearfix">
                <div>
                    <img src="images/ooo.png" height="147" width="150" alt="Отчетность ООО на ОСНО">
                </div>
                    <ul>
                        <li>Налоговая: декларации по налогу на прибыль организаций, НДС,
                         налогу на имущество предприятий, НДФЛ (на всех сотрудников, находящихся в штате),
                         при наличии объекта налогообложения – декларации по земельному и транспортному налогу;</li>
                        <li>Бухгалтерская: бухгалтерский баланс, отчет о прибылях и убытках,
                         отчет о движении денежных средств;</li>
                        <li>Отчетность в ПФР и ФСС: формы РВС-1/РВС-2,АДВ-6-2, СЗВ-6-2 и 4-ФСС;</li>
                    </ul>
                </div>
                         
            </div>
             <div class="osno-doc">
             <h5>Отчетность ИП на ОСНО:</h5>
                <div class="osno-doc-view clearfix">
                <div>
                 <img src="images/IP.png" height="147" width="150" alt="Отчетность ИП на ОСНО:">
                </div>
                    <p>Сдача отчетности ОСНО для индивидуальных предпринимателей подразумевает
                     представление декларации по НДФЛ самого предпринимателя вместо декларации
                     по налогу на прибыль.</p>
                </div>                         
            </div>
            <p>Для того чтобы определить, какая отчетность на ОСНО в какие сроки должны быть сдана,
             стоит воспользоваться календарем бухгалтера. В нем указаны виды отчетности,
             категории налогоплательщиков, обязанных представлять отчетную документацию,
             и крайние сроки подачи отчетов в контролирующие органы. </p> 
            </div>

            <div class="el-report">
             <div class="el-report-lease">
                <div class="right-content-head">
                    <h3>Электронная отчетность при ОСНО</h3>
                 </div>
                <div class="osno-include clearfix">
                 <h5>Сдаваемая при работе на ОСНО электронная отчетность включает в себя:</h5>
                    <div class="col-md-6">
                        <ul>
                            <li class="nds">Декларацию по НДС;</li>
                            <li>Сведения о страховых взносах в ПФР (если штат предприятия состоит более чем из 25 человек);</li>                           
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>Сведения о страховых взносах в ФСС (если штат предприятия состоит более чем из 25 человек)</li>
                            <li>Справки по форме 2-НДФЛ, если число сотрудников, на которых оформляются такие справки,
                             превышает 10 человек;</li>                        
                        </ul>
                    </div>          
                </div>
                     <div class="right-content-foot hidden-xs star">
                         <p>
                             Выбор порядка сдачи всей остальной отчетности остается за налогоплательщиком.
                             Однако, определяя способ подачи отчетной документации в контролирующие органы,
                             стоит помнить, что отчетность ООО на ОСНО является довольно объемной,
                             и автоматизация процесса ее подготовки и сдачи позволит оптимизировать
                             рабочий процесс и снизить количество временных затрат на работу с документацией.
                         </p>
                    </div>
                </div>
           

            <div class="el-types">
                <h4 class="title text-center">Электронная отчетность при ОСНО</h4>
            <div class="row">
                 <figure class="el-types-item col-md-3">
                     <div >
                       <img src="images/EO_TZ-7_21.png" height="122" width="122" alt="">
                    </div>
                    <figcaption>
                        <h4>В ФНС</h4>
                        <p>Налоговая отчетность при ОСНО включает в себя ряд документов,
                        которые должны быть сданы в ИФНС в электронном виде в обязательном порядке.
                        Этот перечень установлен соответствующими Федеральными законами и не подлежит
                        расширительному толкованию.</p>                                          
                    </figcaption>
                 </figure> 
                 <figure class="el-types-item col-md-3">
                    <div>
                       <img src="images/EO_TZ-7_23.png" height="122" width="122" alt="">
                    </div>
                    <figcaption>
                        <h4>В ПФР</h4>
                        <p>Отчетность в Пенсионный фонд может быть сдана как в бумажном,
                        так и в электронном виде в том случае, если численность сотрудников
                        организации не превышает 25 человек.  В противном случае подавать
                        документацию можно только через интернет.</p>                                          
                    </figcaption>
                 </figure>
                 <figure class="el-types-item col-md-3">
                     <div>
                       <img src="images/EO_TZ-7_25.png" height="122" width="122" alt="">
                     </div>
                    <figcaption>
                        <h4>В ФСС</h4>
                        <p>Отчетность в Фонд социального страхования сдается в электронном
                        виде по форме 4-ФСС, если в организации-налогоплательщике трудится
                        более 25 человек. Такое требование установлено Федеральным законом № 188
                        от 28.06.2014 года.</p>                                          
                    </figcaption>
                 </figure> 
                 <figure class="el-types-item col-md-3">
                     <div>
                       <img src="images/EO_TZ-7_25.png" height="122" width="122" alt="">
                     </div>
                    <figcaption>
                        <h4>В РОССТАТ</h4>
                        <p>Отчетность в Росстат налогоплательщиками по ОСНО сдается в том случае,
                        если они подпадают под одну из соответствующих категорий предприятий, 
                        установленных законодательством, или входят в число организаций,
                        выбранных случайным образом для сдачи отчетности по итогам календарного года.</p>                                          
                    </figcaption>
                 </figure>
            </div>
            </div>
            <div class="right-content-foot  hidden-xs inform">
                 <p>
                     Особенностью представления отчетности организациями,
                     работающими на ОСНО, является ее дифференциация на электронную
                     и бумажную в соответствии с законодательными требованиями.
                     В этом случае целесообразно перевести всю отчетность компании в электронный вид,
                     т.к. приобрести электронную подпись и установить программное обеспечение для отправки
                     документации придется обязательно. 
                 </p>
            </div>
            <div class="right-content-foot hidden-xs warn">
                 <p>
                     Представление отчетности организацией, работающей на ОСНО,
                     осуществляется в сроки, установленные законодательством.
                     Их нарушение влечет за собой наложение штрафов на налогоплательщика,
                     допустившего просрочку. 
                 </p><br>
                 <p>Большое количество отчетной документации, подлежащей сдаче в
                  контролирующие органы, затрудняет процедуру ее передачи и отслеживания
                  статуса обработки, поэтому использование электронной отчетности является
                  наиболее удобным и оперативным способом работы с документами для предприятий,
                  применяющих ОСНО.</p>
            </div>
            <div class="more-info">
                <p>
                    Ответы на все возникшие вопросы можно получить, позвонив в офис компании
                    «Астрал-М» по телефону. Дежурный специалист предоставит всю необходимую
                    информацию и поможет подобрать ПО, наиболее подходящее для работы в
                    определенных организационных условиях.
                </p>
             </div>           
            </div>
              <button class="order" data-toggle="modal" data-target="#basicModal">Оставить заявку на заказ</button>
              <div class="modal fade" id="basicModal" tabindex="-1" role="dialog">
                 <div class="modal-dialog">
                   <div class="modal-content">
                      <div class="modal-header text-center">
                          <img src="images/logoform.png" height="73" width="85" alt=""> 
                          <button class="close pull-right" type="button" data-dismiss="modal">x</button>                         
                          <h4 class="modal-title text-center" id="myModalLabel">Оставьте Ваши контактные данные
                          и наш консультант свяжется с Вами:</h4>                         
                      </div>
                    <div class="modal-body">
                      <form action="handler.php" class="order-form has-feedback" method="post">
                         <div id="fields"> 
                            <div class="form-group has-feedback">
                                <input type="text" name="name" required="required" placeholder="Имя"> 
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" name="surname" required="required" placeholder="Фамилия">
                                <span class="glyphicon form-control-feedback"></span> 
                            </div>
                            <div class="form-group has-feedback">
                                <input type="email" name="email" required="required" placeholder="Ваш e-mail"> 
                                <span class="glyphicon form-control-feedback"></span>
                            </div>                           
                         </div>        
                         </form>
                    </div>
                   <div class="modal-footer">
                    <input type="submit" id="submit" value="Отправить"/>                    
                </div>
              </div>
            </div>
            </div>
            <div class="alert-success hidden" id="success-alert">
              <h2 class="text-center">Спасибо, Ваши данные были успешно отправлены!</h2>            
            </div>            
        </section>
    
<!-- # END WORK AREA# -->
















    </div>
    <!--    FOOTER    -->
    <footer id="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <h4 class="footer_title">Основные разделы</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li><a href="/products/" class="nav_link"Продукты</a></li>
                                <li><a href="/about/partnership/" class="nav_link">Партнерам</a></li>
                                <li><a href="/news/" class="nav_link">Новости</a></li>
                                <li><a href="/blog/" class="nav_link">Блоги</a></li>
                                <li><a href="/about/" class="nav_link">О компании</a></li>
                                <li><a href="/contacts/" class="nav_link">Контакты</a></li>
                                <li><a href="/privacy_security/" class="nav_link">Конфидициальность</a></li>
                                <li><a href="/feedback/" class="nav_link">Обратная связь</a></li>
                                <li><a href="/about/vacancy/" class="nav_link">Вакансии</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <h4 class="footer_title">Продукты</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li><a href="/esignature/" class="nav_link">Электронная подпись</a></li>
                                <li><a href="/products/report/" class="nav_link">Астрал Отчет</a></li>
                                <li><a href="/products/1c-accounting/" class="nav_link">1С-Отчетность</a></li>
                                <li><a href="/products/security/" class="nav_link">Защита информации</a></li>
                                <li><a href="/products/alco/" class="nav_link">РАР</a></li>
                                <li><a href="/products/otsenka-usloviy-truda_old/" class="nav_link">СОУТ</a></li>
                                <li><a href="/products/skrin-astral/" class="nav_link">СКРИН.Астрал</a></li>
                                <li><a href="/products/servis-1s-etp/" class="nav_link">Сервис 1С-ЭТП</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <h4 class="footer_title">Техническая поддержка</h4>
                        <nav class="footer_nav tp">
                            <ul>
                                <li>
                                    <div><span>«Астрал Отчет»</span><br/></div>
                                    <div><abbr title="Техническая поддержка Астрал Отчет">+7 (495) 663-73-58, доб. 10</abbr><br/></div>
                                    <div><abbr title="Техническая поддержка Астрал Отчет"><a href="mailto:#">support@astralnalog.ru</a></abbr></div>
                                </li>
                                <li>
                                    <div><span>«1С Отчетность»</span><br/></div>
                                    <div><abbr title="Техническая поддержка 1С Отчетность">+7 (495) 663-73-58, доб. 20</abbr><br/></div>
                                    <div><abbr title="Техническая поддержка 1С Отчетность"><a href="mailto:#">1c@astralnalog.ru</a></abbr></div>
                                </li>
                                <li>
                                    <div><span>«Электронные торги»</span><br/></div>
                                    <div><abbr title="Электронные торги">+7 (495) 663-73-58, доб. 11</abbr><br/></div>
                                </li>
                                <li>
                                    <div><span>Техподдержка</span><br/></div>
                                    <div><abbr title="Техподдержка">8 (800) 700-86-68</abbr><br/></div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <h4 class="footer_title">Контакты</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li>
                                    <address id="add-phone">
                                        <b>Остались вопросы?</b><br>
                                        <abbr title="Телефон в Москве"><b>+7 (499) 649-30-42</b></abbr>
                                    </address>
                                </li>
                                <li>
                                    <address>
                                        <strong style="font-weight:bold;">ООО «Астрал-М»</strong><br>
                                        111123, г. Москва, Шоссе Энтузиастов д. 56, стр. 32<br>
                                        офис 211 <br>
                                        <a href="mailto:#">moscow@astralnalog.ru</a>
                                    </address>

                                </li>
                                <li>
                                    <address>
                                        <strong style="font-weight:bold;">Рабочие дни:</strong><br>
                                        Понедельник-Пятница<br>
                                        с 9:00 до 18:00<br>
                                    </address>
                                </li>
                                <li><a href="/contacts/">Все контакты</a></li>
                                <li><a href="/search/map.php">Карта сайта</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
        <!-- ARROW FIXED -->
        <div class="arrow_up_fix_none" id="arrow_up"></div>
        <!-- ARROW FIXED -->
        <div class="social">
            <div class="hidden-lg hidden-sm hidden-md visible-xs">
                <h5 class="footer_link">Рабочие дни:</h5>
                <div class="f-social centered">
                    <p class="footer_span">Понедельник-Пятница<br></p>
                    <p class="footer_span">с 9:00 до 18:00</p>
                </div>
            </div>

            <div class="hidden-lg hidden-sm hidden-md visible-xs">
                <h5 class="footer_link">Телефон</h5>
                <div class="f-social">
                    <abbr title="Phone"><b>+7 (499) 649-30-42</b></abbr>
                </div>
            </div>
            <br/>
            <h5 class="footer_link">Мы в социальных сетях</h5>
            <div class="f-social">
                <a href="http://vk.com/astralm" class="social_link social_link_vk" target="_blank">&nbsp;</a>
                <a href="http://facebook.com/astralmoscow" class="social_link social_link_fb" target="_blank">&nbsp;</a>
                <a href="http://twitter.com/MoscowAstral" class="social_link social_link_google" target="_blank">&nbsp;</a>
                <a href="http://www.youtube.com/channel/UCCzvlCiq1AlX_HiH31LXPvg/" class="social_link social_link_youtube" target="_blank">&nbsp;</a>
            </div>
        </div>
        <!-- <a href="#x" class="overlay" id="win1" style="opacity: 1;z-index: 1 !important;cursor: pointer;"></a> -->
    </footer>
























    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery-css-transform.min.js"></script>
    <script src="js/jquery-animate-css-rotate-scale.min.js"></script>
    <script src="js/jquery.quicksand.min.js"></script>

</body>
</html>