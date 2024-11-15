<?php 
    get_header();
    $locale = get_locale();
?>
    <div class="l-layout js-show" id="scroller">
        <!-- @main -->
        <main class="homepage" id="home">
            <!-- top// -->
            <section class="top">
                <div class="top_container">
                    <div class="top_wrapper">
                        <div class="top_catchcopy">
                            <?php if ($locale == "en_US") : ?> 
                            <h2 class="txt3 tsu-fonts">新・写真新人賞</h2>
                            <?php else : ?> 
                            <h2 class="txt3 tsu-fonts">新・写真新人賞</h2>
                            <?php endif; ?> 
                        </div>

                        <div class="top_mainvisual">
                            <div class="top_bg">
                                <div class="top_bg_g1"></div>
                                <div class="top_bg_g2"></div>
                                <div class="top_bg_g3"></div>
                                <div class="top_bg_g4"></div>
                                <div class="top_bg_g5"></div>
                                <div class="top_bg_g6"></div>
                            </div>
                            <div class="top_noise">
                                <picture>
                                    <source media="(max-width:1023px)" srcset="<?= get_template_directory_uri() ?>/assets/img/home/fog3.gif">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/home/fog3.gif" draggable="false" loading="lazy"
                                        alt="夜明け前｜New Photography Award" width="1305" height="858">
                                </picture>
                            </div>
                            <div class="top_logo">
                                <figure>
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/home/top_logo.webp" loading="lazy"
                                        alt="夜明け前｜New Photography Award" width="900" height="433.53" draggable="false">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //top -->

            <!-- grants// -->
            <section class="grant js-sections js-offset-top" id="grants">
                <div class="grant_container">
                    <div class="grant_list">
                        <a href="<?= home_url(); ?>/grants/01/" class="grant_items">
                            <figure class="grant_figure">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/home/#" alt="#01 Finalists" draggable="false" loading="lazy" width="1440" height="779">
                            </figure>
                            <div class="grant_content">
                                <h2>#01 Finalists</h2>
                                <p>
                                    Yuri Uenishi, Shinya Fukuda, Hiroyasu Yamauchi, <br />
                                    Risaku Suzuki, Anri Samata, Kimi Himeno
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <!-- //grand -->

            <!-- about// -->
            <section class="about js-sections" id="about">
                <div class="about_container">
                    <div class="about_wrapper">
                        <div class="about_content">
                            <div class="about_content_text ">
                                <?php if ($locale == "en_US") : ?> 
                                <div class="js-is-blur">
                                    <p class="txt7-fw">
	                                    YOAKEMAE｜New Photography Award is <br>
	                                    dedicated to recognizing works that will shape the future of photography. <br class="pc-only">
	                                    Each year, one Grand Prix winner will be selected.
	                                </p>
                                    <p class="txt7-fw">
	                                    Award recipients will receive a grant to support their creative endeavors, <br class="pc-only">
	                                    along with opportunities for a solo exhibition, the production of a photo book, <br class="pc-only">
	                                    and guidance in their artistic activities.
	                                </p>
                                    <p class="txt7-fw">
	                                    Let's collaborate to forge an inspiring future <br class="pc-only">
	                                    for photographic expression.
	                                </p>
                                </div>
                                <?php else : ?> 
                                <div class="js-is-blur">
                                    <p class="txt7-fw">
                                        夜明け前｜<span class="time-fonts">New Photography Award</span> は、<br />
                                        写真の未来を切り拓く作品を募集する<br class="sp-only" />アワードです。<br class="pc-only" />
                                        年に一度の開催で、<br class="sp-only" />ひとりのグランプリ受賞者を決定します。
                                    </p>
                                    <p class="txt7-fw">
                                        受賞者へは、創作活動支援金として<br class="sp-only" />賞金<span
                                            class="time-fonts">300</span>万円のほか、<br class="pc-only" />
                                        個展開催と<br class="sp-only" />写真集出版の権利付与と費用ご提供、<br
                                            class="sp-only" />作家活動に関する相談など、<br>
                                        写真表現者として大きく羽ばたくために<br class="sp-only" />必要な支援を、幅広くさせていただきます。
                                    </p>
                                    <p class="txt7-fw">
                                        同アワードは、<br class="sp-only" />ベンチャーキャピタル<span
                                            class="time-fonts">ANRI</span>が主宰します。<br>
                                        写真表現の圧倒的な未来を、<br class="sp-only" />ともに創りましょう。
                                    </p>
                                </div>
                                <?php endif; ?> 

                                <div class="about_element element-1 js-element js-is-blur" data-scroll
                                    data-scroll-speed="2">
                                    <figure>
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/home/about_1.webp" draggable="false" alt="ABOUT"
                                            loading="lazy" width="300" height="362.17">
                                    </figure>
                                </div>
                            </div>

                            <div class="about_element element-2 js-element js-is-blur" data-scroll
                                data-scroll-speed="3">
                                <figure>
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/home/about_2.webp" class="pc-only" draggable="false"
                                        alt="ABOUT" loading="lazy" width="760" height="252">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/home/about_2_sp.webp" class="sp-only" draggable="false"
                                        alt="ABOUT" loading="lazy" width="237" height="117">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //about -->

            <!-- overview// -->
            <section class="overview" id="overview">
                <div class="overview_container l-container">
                    <div class="overview_element js-element js-is-blur" data-scroll data-scroll-speed="2">
                        <figure>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/home/overview_1.webp" draggable="false" alt="OVERVIEW" loading="lazy"
                                width="200" height="200">
                        </figure>
                    </div>

                    <div class="overview_inner">
                        <div class="overview_layout js-is-blur">
                            <div class="overview_left">
                                <?php if ($locale == "en_US") : ?> 
                                <p class="overview_ptext txt7-fw">Application period</p>
                                <?php else : ?> 
                                <p class="overview_ptext txt7-fw">募集期間</p>
                                <?php endif; ?> 
                            </div>
                            <div class="overview_right">
                                <?php if ($locale == "en_US") : ?> 
                                <p class="overview_ptext txt7-fw">August 30 - September 30, 2024</p>
                                <?php else : ?> 
                                <p class="overview_ptext txt7-fw">
                                    <span class="time-fonts">2024</span>年<span class="time-fonts">8</span>月<span
                                        class="time-fonts">30</span>日(金)〜<span class="time-fonts">9</span>月<span
                                        class="time-fonts">30</span>日(月)
                                </p>
                                <?php endif; ?> 
                            </div>
                        </div>
                        <div class="overview_layout js-is-blur">
                            <div class="overview_left">
                                <?php if ($locale == "en_US") : ?> 
                                <p class="overview_ptext txt7-fw">Grand Prix</p>
                                <?php else : ?> 
                                <p class="overview_ptext txt7-fw">グランプリ</p>
                                <?php endif; ?> 
                            </div>
                            <div class="overview_right">
                                <?php if ($locale == "en_US") : ?> 
                                <p class="overview_ptext txt7-fw">solo exhibition + <br class="sp-only" />production of a photo book + <br class="sp-only" />3 million yen</p>
                                <?php else : ?> 
                                <p class="overview_ptext txt7-fw"><span class="time-fonts">300</span>万＋個展開催＋写真集制作</p>
                                <?php endif; ?> 
                            </div>
                        </div>
                        <div class="overview_layout overview_layout_group">
                            <div class="overview_left">
                                <div class="overview_box">
                                    <div class="overview_box_inner">
                                        <?php if ($locale == "en_US") : ?> 
                                        <p class="overview_box_top overview_ptext txt7-fw js-is-blur">Jurors</p>
                                        <?php else : ?> 
                                        <p class="overview_box_top overview_ptext txt7-fw js-is-blur">審査員</p>
                                        <?php endif; ?> 
                                        <div class="overview_box_bot">
                                            <p class="txt7-fw">
                                                ©︎ MP Risaku Suzuki
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overview_right js-is-blur">
                                <div class="overview_swiper js-overview-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?= get_template_directory_uri() ?>/assets/img/home/profile_anri.webp" alt="佐俣アンリ"
                                                    draggable="false" loading="lazy" width="358" height="537">
                                            </figure>

                                            <div class="overview_content">
                                                <?php if ($locale == "en_US") : ?> 
                                                <h2 class="overview_content_title txt7-fw">Anri Samata</h2>
                                                <div class="overview_content_desc">
                                                    <p>
                                                        Representative Partner, ANRI<br><br>
                                                        Anri Samata is the founding partner of ANRI, a venture capital firm he launched in 2012 at the age of 27. Samata has led numerous successful investments, focusing on the Internet and deep tech sectors. His leadership continues to shape the future of technology and entrepreneurship.
                                                    </p>
                                                </div>
                                                <?php else : ?> 
                                                <h2 class="overview_content_title txt7-fw">佐俣アンリ</h2>
                                                <div class="overview_content_desc">
                                                    <p>
                                                        <span class="time-fonts">ANRI</span>代表パートナー。<span
                                                            class="time-fonts">2012</span>年、<span
                                                            class="time-fonts">27</span>歳でベンチャーキャピタル「<span
                                                            class="time-fonts">ANRI</span>」を設立。インターネットやディープテック領域をはじめ、多数の投資を実施し続ける。
                                                    </p>
                                                </div>
                                                <?php endif; ?> 
                                                <div class="overview_content_group">
                                                    <div class="overview_content_link">
                                                        <a href="https://anri.vc/" class="u-underline" target="_blank"
                                                            rel="noopener noreferrer">anri.vc</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?= get_template_directory_uri() ?>/assets/img/home/profile_suzuki.webp" alt="鈴木理策"
                                                    draggable="false" loading="lazy" width="358" height="537">
                                            </figure>
                                            <div class="overview_content">
                                                <?php if ($locale == "en_US") : ?> 
                                                <h2 class="overview_content_title txt7-fw">Risaku Suzuki</h2>
                                                <div class="overview_content_desc">
                                                    <p>
                                                        Photographer<br><br>
                                                        Winner of the 25th Ihei Kimura Photography Award in 2000 for his work "PILES OF TIME," Risaku Suzuki's published books include "Kumano," "Chikaku no kanko-ban (Sensitive Plate of Perception)," and "Fuyu to Haru (Winter and Spring)." Suzuki's solo exhibitions include "Ishiki no Nagare (Stream of Consciousness)" and "Suikyo (Water Mirror)."
                                                    </p>
                                                </div>
                                                <?php else : ?> 
                                                <h2 class="overview_content_title txt7-fw">鈴木理策</h2>
                                                <div class="overview_content_desc">
                                                    <p>
                                                        写真家。<span class="time-fonts">2000</span>年『<span
                                                            class="time-fonts">PILES OF TIME</span>』で第<span
                                                            class="time-fonts">25</span>回木村伊兵衛写真賞受賞。写真集に『<span
                                                            class="time-fonts">KUMANO</span>』『知覚の感光板』『冬と春』など、個展に「意識の流れ」「水鏡」ほか多数。
                                                    </p>
                                                </div>
                                                <?php endif; ?> 

                                                <div class="overview_content_group">
                                                    <div class="overview_content_link">
                                                        <a href="https://risakusuzuki.com/" class="u-underline"
                                                            target="_blank"
                                                            rel="noopener noreferrer">risakusuzuki.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?= get_template_directory_uri() ?>/assets/img/home/profile_himeno.webp" alt="姫野希美"
                                                    draggable="false" loading="lazy" width="358" height="537">
                                            </figure>
                                            <div class="overview_content">
                                                <?php if ($locale == "en_US") : ?> 
                                                <h2 class="overview_content_title txt7-fw">Kimi Himeno</h2>
                                                <div class="overview_content_desc">
                                                    <p>
                                                    Founder and Representative, AKAAKAsha<br><br>
                                                    Kimi Himeno is the founder of AKAAKAsha, a publishing house established in 2006. Known for its dedication to photography and art, AKAAKAsha has published numerous influential works, including Rieko Shiga's "CANARY," Masashi Asada's "The Asada Family," Aya Fujioka's "Kawa wa yuku," and Ryuichi Ishikawa's "Zekkei no Polyphony." Himeno's commitment to showcasing compelling visual narratives has made AKAAKAsha a leading name in the world of art publishing.
                                                    </p>
                                                </div>
                                                <?php else : ?> 
                                                <h2 class="overview_content_title txt7-fw">姫野希美</h2>
                                                <div class="overview_content_desc">
                                                    <p>
                                                        出版社・赤々舎代表。<span
                                                            class="time-fonts">2006</span>年赤々舎を立ち上げ、志賀理江子『<span
                                                            class="time-fonts">CANARY</span>』、浅田政志『浅田家』、藤岡亜弥『川はゆく』、石川竜一『絶景のポリフォニー』など、写真集や美術書を中心に刊行多数。
                                                    </p>
                                                </div>
                                                <?php endif; ?> 

                                                <div class="overview_content_group">
                                                    <div>
                                                        <a href="http://akaaka.com" class="u-underline" target="_blank"
                                                            rel="noopener noreferrer">akaaka.com</a>
                                                    </div>
                                                    <div>
                                                        <a href="https://purple-purple.com" class="u-underline"
                                                            target="_blank"
                                                            rel="noopener noreferrer">purple-purple.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="js-is-blur">
                        <a href="https://note.com/yoakemae_photo/n/nb05db986abb0" class="overview_btn" target="_blank">
                            <?php if ($locale == "en_US") : ?>
                            <p class="tsu-fonts txt7-fw">Jurors' discussion</p>
                            <?php else : ?>
                            <p class="tsu-fonts txt7-fw">審査員鼎談</p>
                            <?php endif ?>
                            <svg role="img" aria-label="Entry Button" xmlns="http://www.w3.org/2000/svg" width="30"
                                height="24.203" viewBox="0 0 30 24.203">
                                <path id="Path_938" data-name="Path 938"
                                    d="M18,0,26.83,10.923v.107H0v2.142H26.83v.107L18,24.2h2.4L30,12.1,20.4,0Z"
                                    transform="translate(0 0)" />
                            </svg>
                        </a>
                        <a href="<?= home_url() ?>/entry/" class="overview_btn">
                            <?php if ($locale == "en_US") : ?>
                            <p class="tsu-fonts txt7-fw">Application and Review Process</p>
                            <?php else : ?>
                            <p class="tsu-fonts txt7-fw">募集概要 / 応募フォーム</p>
                            <?php endif ?>
                            <svg role="img" aria-label="Entry Button" xmlns="http://www.w3.org/2000/svg" width="30"
                                height="24.203" viewBox="0 0 30 24.203">
                                <path id="Path_938" data-name="Path 938"
                                    d="M18,0,26.83,10.923v.107H0v2.142H26.83v.107L18,24.2h2.4L30,12.1,20.4,0Z"
                                    transform="translate(0 0)" />
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
            <!-- //overview -->

            <!-- news -->
            <section class="news js-sections" id="news">
                <div class="news_container l-container">
                    <div class="c-news_wrapper js-is-blur">
                        <div class="c-news_left">
                            <h2 class="txt3">News</h2>
                        </div>
                        <div class="c-news_right">
                            <div class="c-news_list txt7">
                                <?php
                                    $news_posts1 = array(
                                        'post_type' => 'news',
                                        'posts_per_page' => 3,
                                        'post_status' => 'publish',
                                        'orderby'           => 'date',
                                        'order'             => 'DESC',
                                    );
                                    $news_posts = new WP_Query( $news_posts1 );
                                    if( $news_posts->have_posts() ) :
                                        $i =0;
                                            while( $news_posts->have_posts() ) :
                                                $news_posts->the_post();
                                                $DayOfWeekNumber = date("w");
                                                $day = "mon";
                                                switch($DayOfWeekNumber)
                                                {
	                                                case 0 : $day="mon"; break;
	                                                case 1 : $day="tue"; break;
	                                                case 2 : $day="wed"; break;
	                                                case 3 : $day="thu"; break;
	                                                case 4 : $day="fri"; break;
	                                                case 5 : $day="sat"; break;
	                                                case 6 : $day="sun"; break;
                                                }
                                ?>
                                <a href="<?php the_permalink(); ?>" class="c-news_items">
                                    <!--<p><?= get_the_date('Y.m.d') . ' ' . $day; ?></p>-->
                                    <p><?= get_the_date('Y.m.d'); ?></p>
                                    <h3><?php the_title(); ?></h3>  
                                </a>
                                <?php
                                            $i++;
                                            endwhile;
                                        else: echo 'No projects found';
                                    endif; wp_reset_postdata();
                                ?>
                            </div>

                            <a href="<?= home_url(); ?>/news/" class="news_viewmore">
                                <p class="txt3">View More</p>
                                <span class="arrow">
                                    <svg aria-label="View More" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="16.135" viewBox="0 0 20 16.135">
                                        <path id="Path_980" data-name="Path 980"
                                            d="M12,0l5.883,7.282v.071H0V8.781H17.886v.071L12,16.135h1.6L20,8.068,13.6,0Z"
                                            transform="translate(0)" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //news -->

            <?php include 'components/jbtracker.php'; ?>
        </main>
        <!-- @@main -->
        
        <?php include 'components/footer.php'; ?>
    </div>
<?php get_footer(); ?>