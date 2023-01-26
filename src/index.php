<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>[demo]</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no, email=no, address=no">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- OGP -->
	<meta property="og:image" content="./images/ogp.png"><!--※データ渡し時は公開ドメインに修正-->

	<!-- favicon -->
	<link rel="icon" href="./images/favicon.ico" sizes="any">
	<link rel="icon" href="./images/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="./images/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" type="image/png" href="./images/android-touch-icon.png" sizes="192x192">


	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;1,300&family=Roboto:wght@300&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="./css/style.css">

	<!-- SCRIPT -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js" defer></script>
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js" defer></script>
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" defer></script>
	<script src="js/script.js" defer></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-***"></script> -->
	<!-- <script src="【デモ用ディレクトリ名】/js/analytics.js"></script> -->
</head>

<body id="index">
	<!-- ▼ヘッダー -->
	<header class="l-header">
		<h1 class="l-header__logo">
			<a href="/" class="l-header__logo-link" aria-label="トップページへ戻る"><img class="l-header__logo-img" src="./images/header-logo.png" alt="学校法人 富田学園 岐阜東高等学校" width="" height=""></a>
		</h1>

		<div class="l-header__menu">
			<div class="l-header__menu-top">
				<a class="l-header__menu-access l-header__menu-top-item" href="">交通アクセス</a>
				<a class="l-header__menu-contact l-header__menu-top-item" href="">お問い合わせ</a>
			</div>
			<div class="l-header__menu-bottom">
				<!-- 管理画面可変ボタン① -->
				<a class="l-header__menu-free01 l-header__menu-bottom-item" href="">学校見学会等申し込み</a>
				<!-- 管理画面可変ボタン② -->
				<a class="l-header__menu-free02 l-header__menu-bottom-item" href="">インターネット出願</a>
			</div>
		</div>
	</header>
	<!-- ▲ヘッダー -->

	<!-- ▼コンテンツ ******************************************************************** -->
	<main>
		<article>
			<!--------------------------- fv ------>
			<section class="p-index-fv">
				<div class="p-index-fv__inner">
					<picture>
						<source srcset="./images/index_fv_fv_sp.jpg" media="(max-width: 500px)">
						<img class="p-index-fv__movie" src="./images/index_fv_fv.jpg" alt="ムービーが入ります">
					</picture>
					<div class="p-index-fv__title-wrapper js-fv-title">
						<!-- <picture>
							<source srcset="./images/index_fv_title_sp.png" media="(max-width: 500px)">
							<img class="p-index-fv__title" src="./images/index_fv_title.png" alt="やりぬく精神で未来へ羽ばたけ">
						</picture> -->
						<span class="p-index-fv__mask mask01">
							<img class="p-index-fv__title-img01" src=" ./images/index_fv_title01.png" alt="">
						</span>
						<span class="p-index-fv__mask mask02">
							<img class="p-index-fv__title-img02" src="./images/index_fv_title02.png" alt="">
						</span>
						<span class="p-index-fv__mask mask03">
							<img class="p-index-fv__title-img03" src="./images/index_fv_title03.png" alt="">
						</span>

					</div>

				</div>

			</section>

			<!--------------------------- pickup ------>
			<section class="p-index-pickup">
				<div class="p-index-pickup__heading-wrapper">
					<h2 class="p-index-pickup__heading js-nyoki">Pick Up</h2>
				</div>

				<div class="p-index-pickup__buttons">
					<!-- 管理画面可変ボタン① -->
					<a class="p-index-pickup__button p-index-pickup__free01" href="">学校見学会等<br class="u-sp">申し込み</a>
					<!-- 管理画面可変ボタン② -->
					<a class="p-index-pickup__button p-index-pickup__free02 " href="">インターネット<br class="u-sp">出願</a>
				</div>
			</section>

			<!--------------------------- post ------>
			<section class="p-index-post">
				<div class="p-index-post__bg"></div>
				<!-- School Topics -->
				<div class="p-index-post__post-box js-postAnim">

					<h2 class="p-index-post__heading">
						<div class="js-nyoki-wrapper">
							<span class="p-index-post__en-heading">School Topics</span>
						</div>
						<span class="p-index-post__ja-heading">学校トピックス</span>
					</h2>

					<a href="" class="p-index-post__show-link"><span>一覧を見る</span><span class="c-right-gray"></span></a>

					<ul class="p-index-post__post-list">
						<li class="p-index-post__post-item">
							<a class="p-index-post__post-link" href="">

								<div class="p-index-post__img-wrapper">
									<img class="p-index-post__post-img" src="./images/index_news_post01.jpg" alt="">
								</div>

								<div class="p-index-post__post-body">
									<div class="p-index-post__post-times">
										<time class="p-index-post__post-time">2022.11.30</time><span class="p-index-post__post-label">トピックス</span>
									</div>
									<h3 class="p-index-post__post-title">留学体験記vol.4</h3>
								</div>
							</a>
						</li>

						<li class="p-index-post__post-item">
							<a class="p-index-post__post-link" href="">

								<div class="p-index-post__img-wrapper">
									<img class="p-index-post__post-img" src="./images/index_news_post02.jpg" alt="">
								</div>

								<div class="p-index-post__post-body">
									<div class="p-index-post__post-times">
										<time class="p-index-post__post-time">2022.11.30</time><span class="p-index-post__post-label">トピックス</span>
									</div>
									<h3 class="p-index-post__post-title">水泳競技大会　結果報告</h3>
								</div>
							</a>
						</li>

						<li class="p-index-post__post-item">
							<a class="p-index-post__post-link" href="">

								<div class="p-index-post__img-wrapper">
									<img class="p-index-post__post-img" src="./images/index_news_post00.jpg" alt="">
								</div>

								<div class="p-index-post__post-body">
									<div class="p-index-post__post-times">
										<time class="p-index-post__post-time">2022.11.30</time><span class="p-index-post__post-label">トピックス</span>
									</div>
									<h3 class="p-index-post__post-title">【卒業生向け】令和４年度飛翔祭～文化祭の部～についてのお知らせ</h3>
								</div>
							</a>
						</li>

						<li class="p-index-post__post-item">
							<a class="p-index-post__post-link" href="">

								<div class="p-index-post__img-wrapper">
									<img class="p-index-post__post-img" src="./images/index_news_post00.jpg" alt="">
								</div>

								<div class="p-index-post__post-body">
									<div class="p-index-post__post-times">
										<time class="p-index-post__post-time">2022.11.30</time><span class="p-index-post__post-label">トピックス</span>
									</div>
									<h3 class="p-index-post__post-title">【卒業生向け】令和４年度飛翔祭～文化祭の部～についてのお知らせ</h3>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<!-- 受験生の方へ -->
				<div class="p-index-post__post-box js-postAnim">

					<h2 class="p-index-post__heading">
						<div class="js-nyoki-wrapper">
							<span class="p-index-post__en-heading">To Examinees</span>
						</div>
						<span class="p-index-post__ja-heading">受験生の方へ</span>
					</h2>

					<a href="" class="p-index-post__show-link"><span>一覧を見る</span><span class="c-right-gray"></span></a>

					<ul class="p-index-post__post-list">
						<li class="p-index-post__post-item">
							<a class="p-index-post__post-link" href="">

								<div class="p-index-post__img-wrapper">
									<img class="p-index-post__post-img" src="./images/index_news_post03.jpg" alt="">
								</div>

								<div class="p-index-post__post-body">
									<div class="p-index-post__post-times">
										<time class="p-index-post__post-time">2022.11.30</time><span class="p-index-post__post-label">受験生の方</span>
									</div>
									<h3 class="p-index-post__post-title">岐阜県私立高校入試相談会in一宮</h3>
								</div>
							</a>
						</li>

						<li class="p-index-post__post-item">
							<a class="p-index-post__post-link" href="">

								<div class="p-index-post__img-wrapper">
									<img class="p-index-post__post-img" src="./images/index_news_post04.jpg" alt="">
								</div>

								<div class="p-index-post__post-body">
									<div class="p-index-post__post-times">
										<time class="p-index-post__post-time">2022.11.30</time><span class="p-index-post__post-label">受験生の方</span>
									</div>
									<h3 class="p-index-post__post-title">【学校見学会】来校時のお願い</h3>
								</div>
							</a>
						</li>

						<li class="p-index-post__post-item">
							<a class="p-index-post__post-link" href="">

								<div class="p-index-post__img-wrapper">
									<img class="p-index-post__post-img" src="./images/index_news_post00.jpg" alt="">
								</div>

								<div class="p-index-post__post-body">
									<div class="p-index-post__post-times">
										<time class="p-index-post__post-time">2022.11.30</time><span class="p-index-post__post-label">受験生の方</span>
									</div>
									<h3 class="p-index-post__post-title">【中学生向け】部活動紹介コーナー！</h3>
								</div>
							</a>
						</li>

						<li class="p-index-post__post-item">
							<a class="p-index-post__post-link" href="">

								<div class="p-index-post__img-wrapper">
									<img class="p-index-post__post-img" src="./images/index_news_post00.jpg" alt="">
								</div>

								<div class="p-index-post__post-body">
									<div class="p-index-post__post-times">
										<time class="p-index-post__post-time">2022.11.30</time><span class="p-index-post__post-label">受験生の方</span>
									</div>
									<h3 class="p-index-post__post-title">令和4年度学校見学会について【申し込みはこちら】</h3>
								</div>
							</a>
						</li>

					</ul>
				</div>


			</section>
			<!--------------------------- movie ------>
			<section class="p-index-movie">
				<h2 class="p-index-movie__heading js-titleAnim">
					<div class="js-nyoki-wrapper">
						<span class="p-index-movie__en-heading js-move01">Movie</span>
					</div>
					<span class="p-index-movie__ja-heading js-move02">学校紹介動画</span>
				</h2>

				<a class="p-index-movie__link moveItem2" href="">
					<img class="p-index-movie__movie" src="./images/index_movie_img.jpg" alt="">
				</a>

			</section>
			<!--------------------------- policy ------>
			<section class="p-index-policy">
				<div class="p-index-policy__bg"></div>
				<div class="p-index-policy__en-wrapper">
					<img class="p-index-policy__en-heading" src="./images/index_policy_en-title.png" alt="school policy">
				</div>

				<div class="p-index-policy__2col-box">
					<div class="p-index-policy__message">
						<h2 class="p-index-policy__heading">
							<img class="p-index-policy__ja-heading" src="./images/index_policy_ja-title.png" alt="心身ともに剛健な人材の育成">
						</h2>
						<p class="p-index-policy__message-text">
							岐阜東高等学校は生徒が日常生活において<br class="u-pc">
							常に努力を怠らず、<br class="u-pc">
							将来に向かって自己の成長と発展を期して<br class="u-pc">
							全力つくせる学び舎です。<br>
							何ごとも最後までやりぬくことができる<br class="u-pc">
							「やりぬく精神」を軸とし、<br class="u-pc">
							国際社会で活躍できる有為な人材の育成を<br class="u-pc">
							目指しています。
						</p>
						<a class="p-index-policy__message-link c-right-white" href="">
							<picture>
								<source srcset="./images/index_policy_grand-design_sp.png" media="(max-width: 500px)">
								<img class="p-index-policy__message-img" src="./images/index_policy_grand-design.png" alt="岐阜東高等学校が目指す教育 grand design">
							</picture>

						</a>
					</div>

					<div class="p-index-policy__overflow js-fade-stagger">
						<div class="p-index-policy__grid-images">
							<img class="p-index-policy__grid-img grid01" src="./images/index_policy_student01.png" alt="">

							<img class="p-index-policy__grid-img grid02" src="./images/index_policy_student02.png" alt="">

							<div class="p-index-policy__img-wrapper">
								<img class="p-index-policy__grid-img grid03" src="./images/index_policy_student03.png" alt="">

								<img class="p-index-policy__grid-img grid04" src="./images/index_policy_student04.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--------------------------- intro(about/life) ------>
			<section class="p-index-intro">
				<div class="p-index-intro__img-wrapper">
					<picture>
						<!-- <source srcset="./images/index_intro_main01_sp.jpg" media="(max-width: 500px)"> -->
						<img class="p-index-intro__main-img main01 js-parallax" src="./images/index_intro_main01.jpg" alt="" data-y="-20vw">
					</picture>

				</div>
				<div class="p-index-intro__text-bg">
					<a class="p-index-intro__link" href="">
						<h2 class="p-index-intro__heading js-titleAnim">
							<div class="js-nyoki-wrapper">
								<span class="p-index-intro__en-heading js-move01">About School</span>
							</div>
							<span class="p-index-intro__ja-heading js-move02">学校の紹介</span>
						</h2>
						<p class="p-index-intro__text">岐阜東高校の歴史や教育方針、設置コースをはじめ、<br class="u-pc">充実した施設設備についてご紹介いたします。</p>
						<span class="c-right-dark"></span>
					</a>
				</div>

				<div class="p-index-intro__img-wrapper">
					<img class="p-index-intro__main-img main02 js-parallax" src="./images/index_intro_main02.jpg" alt="" data-y="-20vw">
					</picture>
				</div>
				<div class="p-index-intro__text-bg">
					<a class="p-index-intro__link" href="">
						<h2 class="p-index-intro__heading js-titleAnim">
							<div class="js-nyoki-wrapper">
								<span class="p-index-intro__en-heading js-move01">School Life</span>
							</div>
							<span class="p-index-intro__ja-heading js-move02">学校の生活</span>
						</h2>
						<p class="p-index-intro__text">岐阜東高校の学校行事や部活動、<br class="u-pc">学習指導の詳細などをご紹介いたします。</p>
						<span class="c-right-dark"></span>
					</a>
				</div>


			</section>
			<!--------------------------- entrance ------>
			<section class="p-index-entrance">
				<div class="p-index-entrance__inner js-titleAnim--entrance">
					<h2 class="p-index-entrance__heading">
						<div class="js-nyoki-wrapper">
							<span class="p-index-entrance__en-heading js-move01">Entrance exams</span>
						</div>
						<span class="p-index-entrance__ja-heading js-move02">受験をお考えの方へ</span>
					</h2>

					<div class="p-index-entrance__items js-entrance-items">
						<a href="" class="p-index-entrance__item">
							<span class="p-index-entrance__icon icon-book"></span>
							<p class="p-index-entrance__text">
								<span class="p-index-entrance__text-ja">デジタル学校案内</span>
								<span class="p-index-entrance__text-en">digital book</span>
							</p>
						</a>

						<a href="" class="p-index-entrance__item">
							<span class="p-index-entrance__icon icon-course"></span>
							<p class="p-index-entrance__text">
								<span class="p-index-entrance__text-ja">進路情報</span>
								<span class="p-index-entrance__text-en">course</span>
							</p>
						</a>

						<a href="" class="p-index-entrance__item">
							<span class="p-index-entrance__icon icon-event"></span>
							<p class="p-index-entrance__text">
								<span class="p-index-entrance__text-ja">学校見学会</span>
								<span class="p-index-entrance__text-en">event</span>
							</p>
						</a>

						<a href="" class="p-index-entrance__item">
							<span class="p-index-entrance__icon icon-entrance"></span>
							<p class="p-index-entrance__text">
								<span class="p-index-entrance__text-ja">入試について</span>
								<span class="p-index-entrance__text-en">entrance</span>
							</p>
						</a>

						<a href="" class="p-index-entrance__item">
							<span class="p-index-entrance__icon icon-pc"></span>
							<p class="p-index-entrance__text">
								<span class="p-index-entrance__text-ja"><span class="u-dib-pc">インターネット</span><span class="u-dib-sp">ネット</span>出願</span>
								<span class="p-index-entrance__text-en">application</span>
							</p>
						</a>

						<a href="" class="p-index-entrance__item">
							<span class="p-index-entrance__icon icon-access"></span>
							<p class="p-index-entrance__text">
								<span class="p-index-entrance__text-ja">交通アクセス</span>
								<span class="p-index-entrance__text-en">access</span>
							</p>
						</a>
					</div>
				</div>

			</section>

			<!--------------------------- others ------>
			<ul class="p-index-others__list">
				<li class="p-index-others__list-item">
					<a class="p-index-others__list-link" href="">
						<span class="p-index-others__list-text">同窓会だより</span>
						<span class="p-index-others__list-icon c-right-white"></span>
					</a>
				</li>

				<li class="p-index-others__list-item">
					<a class="p-index-others__list-link" href="">
						<span class="p-index-others__list-text">各種証明書<br class="u-sp">発行</span>
						<span class="p-index-others__list-icon c-right-white"></span>
					</a>
				</li>

				<li class="p-index-others__list-item">
					<a class="p-index-others__list-link" href="">
						<span class="p-index-others__list-text">教員採用の<br class="u-sp">ご案内</span>
						<span class="p-index-others__list-icon c-right-white"></span>
					</a>
				</li>

				<li class="p-index-others__list-item"><a class="p-index-others__list-link" href="">
						<span class="p-index-others__list-text">寄付金募集の<br>ご案内</span>
						<span class="p-index-others__list-icon c-right-white"></span>
					</a>
				</li>

				<li class="p-index-others__list-item">
					<a class="p-index-others__list-link" href="">
						<span class="p-index-others__list-text">中学校先生用<br>資料<span class="u-dib-pc">ダウンロード</span><span class="u-dib-sp">DL</span></span>
						<span class="p-index-others__list-icon c-right-white"></span>
					</a>
				</li>
			</ul>
			<!--------------------------- others__splide ------>
			<div class="splide js-splide p-index-others__splide" role="group" aria-label="学校生活の様子">
				<div class="splide__track">
					<ul class="splide__list">
						<li class="splide__slide"><img src="./images/index_entrance_slider01.jpg" alt=""></li>
						<li class="splide__slide"><img src="./images/index_entrance_slider02.jpg" alt=""></li>
						<li class="splide__slide"><img src="./images/index_entrance_slider03.jpg" alt=""></li>
						<li class="splide__slide"><img src="./images/index_entrance_slider04.jpg" alt=""></li>
						<li class="splide__slide"><img src="./images/index_entrance_slider05.jpg" alt=""></li>
						<li class="splide__slide"><img src="./images/index_entrance_slider06.jpg" alt=""></li>
						<li class="splide__slide"><img src="./images/index_entrance_slider07.jpg" alt=""></li>

					</ul>
				</div>
			</div>

		</article>
	</main>
	<!-- ▲コンテンツ ******************************************************************** -->

	<!-- ▼フッター -->
	<footer class="l-footer">
		<div class="l-footer__inner">

			<div class="l-footer__top">
				<div class="l-footer__school-info">
					<p class="l-footer__school-name">
						<span class="l-footer__school-name-top">学校法人富田学園</span>
						<span class="l-footer__school-name-bottom">岐阜東高等学校</span>
					</p>
					<p class="l-footer__address">〒500-8765　岐阜市野一色4丁目17番1号</p>
					<p class="l-footer__tel">
						<span class="l-footer__tel-tel">TEL </span><span class="l-footer__tel-num">058-246-2956</span>
					</p>
					<a class="l-footer__insta-link" href="" aria-label="インスタグラムのページへ行く" target="_blank" rel="noopener noreferrer">
						<img class="l-footer__insta-img" src="./images/footer_instagram.png" alt="instagram follow us" width="315" height="35">
					</a>
				</div>
				<div class="l-footer__buttons">
					<a class="l-footer__border-button js-move01" href="">
						<span>交通アクセス</span>
						<span class="c-right-dark" aria-hidden="true"></span></a>
					<a class="l-footer__border-button js-move02" href=""><span>お問い合わせ</span><span class="c-right-dark" aria-hidden="true"></span></a>
				</div>
			</div>

			<ul class="l-footer__menus">

				<li class="l-footer__menu">
					<p class="l-footer__menu-title">学校の紹介</p>
					<ul class="l-footer__menu-items">
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">校長挨拶・<br>建学の精神・沿革</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">グランドデザイン</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">設置コース</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">施設・設備</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">よくある質問</a></li>
					</ul>
				</li>

				<li class="l-footer__menu">
					<p class="l-footer__menu-title">学校の生活</p>
					<ul class="l-footer__menu-items">
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">学校行事</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">部活動</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">学習指導</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">スクールバス・<br>定期券購入</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">感染症への<br class="u-sp">罹患報告書</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">悪天候時の対応</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">南海トラフ地震の<br class="u-sp">対応</a></li>
					</ul>
				</li>

				<li class="l-footer__menu">
					<p class="l-footer__menu-title">進路・入試情報</p>
					<ul class="l-footer__menu-items">
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">進路指導</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">大学合格実績</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">学校見学会等</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link u-Mr05" href="">入試日程・募集要項</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">自己推薦書<br class="u-sp">ダウンロード</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link u-Mr05" href="">インターネット出願</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">デジタル学校案内</a></li>
					</ul>
				</li>

				<li class="l-footer__menu">
					<p class="l-footer__menu-title">新着情報</p>
					<ul class="l-footer__menu-items">
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">学校トピックス</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">受験生の方へ</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">同窓会だより</a></li>
					</ul>
				</li>

				<li class="l-footer__menu">
					<p class="l-footer__menu-title">その他</p>
					<ul class="l-footer__menu-items">
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">各種証明書発行について</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">教員採用のご案内</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">寄付金募集のご案内</a></li>
						<li class="l-footer__menu-item"><a class="l-footer__menu-link" href="">中学校先生用<br>資料ダウンロード</a></li>
					</ul>
				</li>
			</ul>

			<div class="l-footer__bottom">
				<a class="l-footer__privacy" href="">プライバシーポリシー</a>
				<div class="l-footer__school">
					<a class="l-footer__school-link" href="">学校法人富田学園</a>
					<a class="l-footer__school-link" href="">富田高等学校</a>
					<a class="l-footer__school-link" href="">岐阜東中学校</a>
				</div>
			</div>

		</div>

		<p class="l-footer__copyright"><small>Copyright &copy; Gifu Higashi High School All Rights Reserved.</small></p>
	</footer>
	<!-- ▲フッター -->

	<!-- <div class="pagetop"></div> -->


	<!-- ▽SP-bottom-fixed -->
	<div class="u-sp">
		<ul class="l-footer__fixed">
			<li class="l-footer__fixed-item l-footer__fixed-item--モディ">
				<a class="l-footer__fixed-link" href="">
					<span class="l-footer__fixed-icon icon-megaphone"></span>
					<span class="l-footer__fixed-text">学校トピックス</span>
				</a>
			</li>

			<li class="l-footer__fixed-item l-footer__fixed-item--モディ">
				<a class="l-footer__fixed-link" href="">
					<span class="l-footer__fixed-icon icon-pencil"></span>
					<span class="l-footer__fixed-text">受験生の方へ</span>
				</a>
			</li>

			<li class="l-footer__fixed-item l-footer__fixed-item--モディ">
				<a class="l-footer__fixed-link" href="">
					<span class="l-footer__fixed-icon icon-hat"></span>
					<span class="l-footer__fixed-text">卒業生の方へ</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- △SP-bottom-fixed -->

	<!-- ▽ドロワー -->
	<div id="sp_menu_btn" class="c-hamburger js-hamburger"><span class="c-hamburger__icon"></span></div>

	<div class="c-drawer js-drawer">

		<ul>
			<li><a href="">参上！</a></li>
			<li><a href="">参上！</a></li>
			<li><a href="">参上！</a></li>
			<li><a href="">参上！</a></li>
			<li><a href="">参上！</a></li>
		</ul>
	</div><!-- / #drawer -->
	<!-- △ドロワー -->

</body>

</html>