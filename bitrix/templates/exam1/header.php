<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>
<link href="<?=SITE_TEMPLATE_PATH?>/style.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/reset.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/owl.carousel.css" type="text/css" rel="stylesheet" />
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>
	

	
</head>
<body>
<div class="wrap">
        <!-- header -->
        <div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <header class="header">
            
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                <? $date = date("H")?>
                    <? if ($date < 9 or $date > 18): ?>
                        <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                    <? endif; ?>
                    <? if ($date > 9 and $date < 18): ?>
                        <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                    <? endif; ?>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
                </div>
                <div class="actions-block">
                    <form action="/" class="main-frm-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                    <nav class="menu-block">
                        <ul>
                            <li class="att popup-wrap">
                                <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
                                <form action="/" class="frm-login popup-block">
                                    <div class="frm-title">Войти на сайт</div>
                                    <a href="" class="btn-close">Закрыть</a>
                                    <div class="frm-row"><input type="text" placeholder="Логин"></div>
                                    <div class="frm-row"><input type="password" placeholder="Пароль"></div>
                                    <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
                                    <div class="frm-row">
                                        <div class="frm-chk">
                                            <input type="checkbox" id="login">
                                            <label for="login">Запомнить меня</label>
                                        </div>
                                    </div>
                                    <div class="frm-row"><input type="submit" value="Войти"></div>
                                </form>
                            </li>
                            <li><a href="">Зарегистрироваться</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <nav class="nav">
            <div class="inner-wrap">
                <div class="menu-block popup-wrap">
                    <a href="" class="btn-menu btn-toggle"></a>
                    <div class="menu popup-block">
                        <ul class="">
                            <li class="main-page"><a href="">Главная</a>
                            </li>
                            <li>
                                <a href="">Компания</a>
                                <ul>
                                    <li>
                                        <a href="">Пункт 1</a>
                                        <ul>
                                            <li><a href="">Пункт 1</a>
                                            </li>
                                            <li><a href="">Пункт 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="">Пункт 2</a>
                                    </li>
                                    <li><a href="">Пункт 3</a>
                                    </li>
                                    <li><a href="">Пункт 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">Новости</a>
                            </li>
                            <li>
                                <a href="">Каталог</a>
                                <ul>
                                    <li>
                                        <a href="">Пункт 1</a>
                                        <ul>
                                            <li><a href="">Пункт 1</a>
                                            </li>
                                            <li><a href="">Пункт 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="">Пункт 2</a>
                                    </li>
                                    <li><a href="">Пункт 3</a>
                                    </li>
                                    <li><a href="">Пункт 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">Фотогалерея</a>
                            </li>
                            <li><a href="">Партнерам</a>
                            </li>
                            <li><a href="">Контакты</a>
                            </li>
                        </ul>
                        <a href="" class="btn-close"></a>
                    </div>
                    <div class="menu-overlay"></div>
                </div>
            </div>
        </nav>
        <?if($APPLICATION->GetCurPage(false) !== '/'): ?>
        <div class="breadcrumbs-box">
            <div class="inner-wrap">
                <a href="">Главная</a>
                <a href="">Мебель</a>
                <span>Выставки и события</span>
            </div>
        </div>
        <? endif; ?>
        
       
        <!-- /nav -->
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content">
                    <div class="cnt">
                    <?if($APPLICATION->GetCurPage(false) !== '/'): ?>
                        <header>
                        <h1 id="pagetitle"><?$APPLICATION->ShowTitle(true);?></h1>
                        </header>
                        
                        <? endif; ?>
                    </div>
                    <?if($APPLICATION->GetCurPage(false) === '/'): ?>
                    <div class="cnt">

						<p>«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
						</p>
                    
                           
						<!-- index column -->
		                <div class="cnt-section index-column">
		                    <div class="col-wrap">
		
		                        <!-- main actions box -->
		                        <div class="column main-actions-box">
		                        	<div class="title-block">
		                                <h2>Новинки</h2>
		                                 <hr>
		                            </div>
		                              <div class="items-wrap">
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title-block att">
		                                            Угловой диван!
		                                        </div>
		                                        <br>
		                                        <div class="inner-block">
		                                            <a href="" class="photo-block">
		                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/new01.jpg" alt="">
		                                            </a>
		                                            <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
		                                            <a href="" class="btn-arr"></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title-block att">
		                                            Угловой диван!
		                                        </div>
		                                        <br>
		                                        <div class="inner-block">
		                                            <a href="" class="photo-block">
		                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/new02.jpg" alt="">
		                                            </a>
		                                            <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
		                                            <a href="" class="btn-arr"></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title-block att">
		                                            Угловой диван!
		                                        </div>
		                                        <br>
		                                        <div class="inner-block">
		                                            <a href="" class="photo-block">
		                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/new03.jpg" alt="">
		                                            </a>
		                                            <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
		                                            <a href="" class="btn-arr"></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <a href="" class="btn-next">Все новинки</a>
		                        </div>
		                        <!-- /main actions box -->
		                        <!-- main news box -->
		                        <div class="column main-news-box">
		                            <div class="title-block">
		                                <h2>Новости</h2>
		                            </div>
		                            <hr>
		                            <div class="items-wrap">
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title"><a href="">29 августа 2012</a>
		                                        </div>
		                                        <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title"><a href="">29 августа 2012</a>
		                                        </div>
		                                        <div class="text"><a href="">Мастер-класс дизайнеров  из Италии для производителей мебели </a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title"><a href="">29 августа 2012</a>
		                                        </div>
		                                        <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title"><a href="">29 августа 2012</a>
		                                        </div>
		                                        <div class="text"><a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <a href="" class="btn-next">Все новости</a>
		                        </div>
		                        <!-- /main news box -->
		
		                    </div>
		                </div>
		                <!-- /index column -->
		                
	                    <!-- afisha box -->
		                <div class="cnt-section afisha-box">
		                    <div class="section-title-block">
		                        <h2 class="second-ttile">Ближайшие мероприятия</h2>
		                        <a href="" class="btn-next">все мероприятия</a>
		                    </div>
		                    <hr>
		                    <div class="items-wrap">
		                        <div class="item-wrap">
		                            <div class="item">
		                                <div class="title"><a href="">29 августа 2012, Москва</a>
		                                </div>
		                                <div class="text"><a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="item-wrap">
		                            <div class="item">
		                                <div class="title"><a href="">29 августа 2012, Москва</a>
		                                </div>
		                                <div class="text"><a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="item-wrap">
		                            <div class="item">
		                                <div class="title"><a href="">29 августа 2012, Москва</a>
		                                </div>
		                                <div class="text"><a href="">Открытие нового магазина в нашей  дилерской сети.</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <!-- /afisha box -->
                                
				                               
                    </div>
                    <? endif; ?>
                    </div>
            <div class="side">
                    <!-- side anonse -->
                    <div class="side-block side-anonse">
                        <div class="title-block"><span class="i i-title01"></span>Полезная информация!</div>
                        <div class="item">
                            <p>Клиенты предпочитают все больше эко-материалов.</p>
                        </div>
                    </div>
                    <!-- /side anonse -->
                    <!-- side wrap -->
                    <div class="side-wrap">
                        <div class="item-wrap">
                            <!-- side action -->
                            <div class="side-block side-action">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action-bg.jpg" alt="" class="bg">
                                <div class="photo-block">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action.jpg" alt="">
                                </div>
                                <div class="text-block">
                                    <div class="title">Акция!</div>
                                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                                    </p>
                                </div>
                                <a href="" class="btn-more">подробнее</a>
                            </div>
                            <!-- /side action -->
                        </div>
                                              
                       <!-- footer rew slider box -->
                       <div class="item-wrap">
		                     <div class="rew-footer-carousel">
								<div class="item">
									<div class="side-block side-opin">
										<div class="inner-block">
											<div class="title">
												<div class="photo-block">
													<img src="<?=SITE_TEMPLATE_PATH?>/img/side-opin.jpg" alt="">
												</div>
												<div class="name-block"><a href="">Дмитрий Иванов</a></div>
												<div class="pos-block">Генеральный директор,"Офис+"</div>
											</div>
											<div class="text-block">“В магзине предоставили потрясающий выбор
												расцветок, а также, получил большую скидку по карте постоянного...</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="side-block side-opin">
										<div class="inner-block">
											<div class="title">
												<div class="photo-block">
													<img src="<?=SITE_TEMPLATE_PATH?>/img/side-opin.jpg" alt="">
												</div>
												<div class="name-block"><a href="">Дмитрий Иванов</a></div>
												<div class="pos-block">Генеральный директор,"Офис+"</div>
											</div>
											<div class="text-block">“В магазине предоставили потрясающий выбор
												расцветок, а также, получил большую скидку по карте постоянного...</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- / footer rew slider box --> 
                    </div>
                    <!-- /side wrap -->
                </div>