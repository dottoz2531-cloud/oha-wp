<?php get_header(); ?>

    <div class="mv">
      <div class="mv__inner">
        <div class="mv__content">
          <p class="mv__lead">
            <span class="mv__lead1">「めざめる」の日常を</span>
            <span class="mv__lead2">もっとおもしろく。</span>
          </p>
          <p class="mv__description">
            OHA!は、朝起きたい人と<br />朝起こされたい人が<br />ランダムにマッチングしちゃう<br />通話アプリです。
          </p>
          <div class="mv__button">
            <a href="#contact" class="button button--type2"
              >アプリダウンロード</a
            >
          </div>
        </div>
        <div class="mv__image">
          <img src="<?php echo get_template_directory_uri()?>/img/first-view-img.png" alt="" />
        </div>
      </div>
    </div>

    <section class="case">
      <div class="case__inner">
        <h2 class="case__title js-in-view fade-in-up">導入実績</h2>
        <?php
         $term_var = get_the_terms($post->ID, 'case');
         $related_query = new WP_Query(
         $param = array(
          'post_type' => 'case',
          'orderby' => 'rand',
          'posts_per_page' => '8',
          'post__not_in' => array($post->ID),
          'tax_query' => array(
          'relation' => 'AND',
             )
            )
          );
          ?>
            <div class="case__items">
            <?php if ( $related_query->have_posts() ) : ?>
            <?php while ( $related_query->have_posts() ) : ?>
              <?php $related_query->the_post(); ?>
              <div class="case__item"><?php the_post_thumbnail(); ?></div>
              <?php endwhile;?>
              <?php endif;?>
              <?php wp_reset_postdata(); ?>
            </div>
           
      </div>
    </section>

    <section class="news">
      <div class="news__inner inner">
        <div class="news__card">
          <h2 class="news__title js-in-view fade-in-up">NEWS</h2>
          <?php
            $term_var = get_the_terms($post->ID, 'post');
            $related_query = new WP_Query(
            array(
             'post_type' => 'post',
             'posts_per_page' => '3',
               )
             );
           ?>
           
          <div class="news__lists">
          <?php if ( $related_query->have_posts() ) : ?>
            <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="news__list news-link">
              <div class="news-link__meta">
                <time class="news-link__date" datetime="<?php the_time('c')?>"
                  ><?php the_time('Y/n/j')?></time>
                  <?php 
                    $category = get_the_category();
                    if($category[0]) :?>
                <div class="news-link__label is-news <?php echo $category[0]->slug; ?>"><?php echo $category[0]->cat_name; ?></div>
                <?php endif; ?>
              </div>
              <h3 class="news-link__title"><?php the_title();?></h3>
            </a>
            <?php endwhile;?>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>
          </div>
          <div class="news__link"><a href="">もっとみる</a></div>
        </div>
      </div>
    </section>

    
    <div id="about" class="about">
      <div class="about__inner">
        <div class="about__title js-in-view fade-in-up">
          <img src="<?php echo get_template_directory_uri()?>/img/about-logo.png" alt="OHA!" />
        </div>
        <div class="about__content">
          <div class="about__image">
            <img src="<?php echo get_template_directory_uri()?>/img/about-img.png" alt="" />
          </div>
          <p class="about__text">
            突然ですが、あなたは朝起きる時、<br
              class="hidden-pc"
            />誰かに起こされれば起きれる派か、<br />
            誰かを起こす予定があれば起きれる派か、<br
              class="hidden-pc"
            />どちらかというとどちらでしょうか？<br />
            朝起きるという行為は、<br
              class="hidden-pc"
            />徹夜してなければ1年に365回、<br />
            10年だと3652回、<br
              class="hidden-pc"
            />50年だと18262回やってきます。<br />
            そんなに回数があるんなら、<br
              class="hidden-pc"
            />ちょっとイベントにしてみても<br
              class="hidden-pc"
            />楽しいんじゃない？<br />
            というアイデアで誕生したのがOHA!です。<br />
            日本中の起こしたい人と起こされたい人が<br
              class="hidden-pc"
            />ランダムにマッチングして<br
              class="hidden-pc"
            />起こし起こされることで、<br />朝の日常にちょっとした刺激が生まれます。
          </p>
          <div class="about__pop">＼開発者はお坊さん？／</div>
          <div class="about__button">
            <button class="button js-modal-open">誕生ストーリーを見る</button>
          </div>
        </div>
      </div>
    </div>

    <dialog id="js-about-modal" class="about-modal">
      <div class="about-modal__head">
        <button class="about-modal__close-icon js-modal-close">
          <img src="<?php echo get_template_directory_uri()?>/img/close-icon.png" alt="モーダルを閉じる" />
        </button>
      </div>
      <div class="about-modal__body">
        <p>
          お坊さんの師匠は、ある日自分が寝坊して仏教の講義に遅刻してしまい、急いで作ったアプリがきっかけでした。そのアプリは、自分のスマートフォンにセットした時間になると、仏教の教えをパッと思い出すようになっていました。<br />
          お坊さんはそのアプリを見て、自分もそんなアプリが欲しいと思い、師匠に頼んで自分専用のアプリを作ってもらったのだそうです。そして、お坊さんは太郎にそのアプリを使ってもらうように勧めました。
        </p>
        <p>
          太郎は早速、そのアプリをダウンロードして設定してみました。翌朝、セットした時間になると、スマートフォンが音を立てて仏教の教えが表示されました。「一日を立派に過ごすためには、まず朝イチで身心の健康を整えることが大切です」という教えに太郎は心を動かされ、僧侶になるかもしれないと思いました。<br />
          以来、太郎は毎朝ちゃんと起きることができ、授業に遅刻することはなくなりました。そして、太郎はそのアプリの効果に感服し、友人たちにも勧めるようになっていきました。そうして、そのアプリは口コミで広まり、多くの人に利用されるようになっていったのでした。
        </p>
      </div>
      <div class="about-modal__close-button">
        <button class="button js-modal-close">閉じる</button>
      </div>
    </dialog>

    <section class="movie">
      <div class="movie__inner">
        <div class="heading js-in-view fade-in-up">
          <div class="heading__en">MOVIE</div>
          <h2 class="heading__ja">2秒で分かる！OHA!について</h2>
        </div>
        <div class="movie__iframe">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/4XTF16CcqPc"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </section>

    <?php get_template_part('template-parts/how-to-page'); ?>

    <section id="merit" class="merit">
      <div class="merit__inner inner">
        <div class="merit__title">
          <div class="heading js-in-view fade-in-up">
            <div class="heading__en">MERIT</div>
            <div class="heading__ja">OHA!を使うメリット</div>
          </div>
        </div>
        <div class="merit__boxes">
        <div class="merit__box">
            <div class="merit-box ">
              <div class="merit-box__content">
                <div class="merit-box__image">
                  <img src="<?php the_field('image','124');?>" alt="" />
                </div>
                <div class="merit-box__body">
                  <h3 class="merit-box__head">
                    <span class="merit-box__number"><?php the_field('number','124');?></span>
                    <span class="merit-box__title">
                    <?php echo nl2br(get_field('title','124'));?>
                    </span>
                  </h3>
                  <p class="merit-box__text">
                  <?php echo nl2br(get_field('overview','124'));?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="merit__box">
            <div class="merit-box is-reverse">
              <div class="merit-box__content">
                <div class="merit-box__image">
                  <img src="<?php the_field('image','127');?>" alt="" />
                </div>
                <div class="merit-box__body">
                  <h3 class="merit-box__head">
                    <span class="merit-box__number"><?php the_field('number','127');?></span>
                    <span class="merit-box__title">
                    <?php echo nl2br(get_field('title','127'));?>
                    </span>
                  </h3>
                  <p class="merit-box__text">
                  <?php echo nl2br(get_field('overview','127'));?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="merit__box">
            <div class="merit-box">
              <div class="merit-box__content">
                <div class="merit-box__image">
                  <img src="<?php the_field('image','128');?>" alt="" />
                </div>
                <div class="merit-box__body">
                  <h3 class="merit-box__head">
                    <span class="merit-box__number"><?php the_field('number','128');?></span>
                    <span class="merit-box__title">
                    <?php echo nl2br(get_field('title','128'));?>
                    </span>
                  </h3>
                  <p class="merit-box__text">
                  <?php echo nl2br(get_field('overview','128'));?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="cta">
      <div class="cta__inner inner">
        <p class="cat__text">
          どうですか？<br class="hidden-pc" /><span class="inline-block"
            >早速今日から使ってみたく</span
          ><span class="inline-block">なりましたか？</span
          ><br />てかほんと使って。お願い。
        </p>
        <div class="cat__button">
          <a href="#contact" class="button">今すぐダウンロード</a>
        </div>
      </div>
    </div>

    <div class="compare">
      <div class="compare__inner inner">
        <div class="compare__title js-in-view fade-in-up">
          他のサービスとの違い
        </div>
        <div class="compare__content">
          <table class="compare__table">
            <thead>
              <tr>
                <th></th>
                <th><img src="<?php echo get_template_directory_uri()?>/img/compare-logo.png" alt="OHA!" /></th>
                <th>他社1</th>
                <th>他社2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><?php the_field('title','150');?></th>
                <td><?php the_field('whether','150');?></td>
                <td>希望時間に起きれた毎に<br /><?php the_field('fee','150');?></td>
                <td>希望時間に起きれた毎に<br /><?php the_field('point','150');?></td>
              </tr>
              <tr>
                <th><?php the_field('title','153');?></th>
                <td><?php the_field('whether','153');?></td>
                <td>希望時間に起きれた毎に<br /><?php the_field('fee','153');?></td>
                <td>希望時間に起きれた毎に<br /><?php the_field('point','153');?></td>
              </tr>
              <tr>
                <th><?php the_field('title','156');?></th>
                <td><?php the_field('whether','156');?></td>
                <td><?php the_field('fee','156');?></td>
                <td><?php the_field('point','156');?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="compare__attention">横にスクロールできます</p>
      </div>
    </div>

    <section class="qa">
      <div class="qa__inner inner">
        <div class="qa__title">
          <div class="heading js-in-view fade-in-up">
            <div class="heading__en">Q&A</div>
            <h2 class="heading__ja">よくあるご質問</h2>
          </div>
        </div>
        <div class="qa__boxes">
          <div class="qa__box qa-box ">
            <button type="button" class="qa-box__head js-accordion">
              <span class="qa-box__head-icon">Q</span>
              <span class="qa-box__head-text"
                ><?php the_field('question','140');?></span
              >
            </button>
            <div class="qa-box__body" >
              <div class="qa-box__a">
                <span class="qa-box__a-icon">A</span>
                <span class="qa-box__a-text"><?php the_field('answer','140');?></span>
              </div>
            </div>
          </div>
          <div class="qa__box qa-box">
            <button type="button" class="qa-box__head js-accordion">
              <span class="qa-box__head-icon">Q</span>
              <span class="qa-box__head-text"
                ><?php the_field('question','143');?></span
              >
            </button>
            <div class="qa-box__body">
              <div class="qa-box__a">
                <span class="qa-box__a-icon">A</span>
                <span class="qa-box__a-text"
                  ><?php the_field('answer','143');?></span
                >
              </div>
            </div>
          </div>
          <div class="qa__box qa-box">
            <button type="button" class="qa-box__head js-accordion">
              <span class="qa-box__head-icon">Q</span>
              <span class="qa-box__head-text"
                ><?php the_field('question','145');?></span
              >
            </button>
            <div class="qa-box__body">
              <div class="qa-box__a">
                <span class="qa-box__a-icon">A</span>
                <span class="qa-box__a-text"
                  ><?php the_field('answer','145');?></span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery">
      <div class="gallery__inner inner">
        <div class="gallery__title">
          <div class="heading js-in-view fade-in-up">
            <div class="heading__en">GALLERY</div>
            <h2 class="heading__ja">ギャラリー</h2>
          </div>
        </div>
        <div class="gallery__slider">
          <!-- Slider main container -->
          <div id="js-gallery-swiper" class="swiper gallery__swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide gallery__slide">
              <?php
                 $term_var = get_the_terms($post->ID, 'gallery');
                 $related_query = new WP_Query(
                 $param = array(
                  'post_type' => 'gallery',
                  'posts_per_page' => '1',
                    )
                  );
                  ?>
                <div class="gallery-card">
                <?php if ( $related_query->have_posts() ) : ?>
                   <?php while ( $related_query->have_posts() ) : ?>
                     <?php $related_query->the_post(); ?>
                  <div class="gallery-card__image">
                     <?php the_post_thumbnail(); ?>
                  </div>
                  <p class="gallery-card__text">
                  <?php the_title();?>
                  </p>
                  <?php endwhile;?>
                <?php endif;?>
              <?php wp_reset_postdata(); ?>
                </div>
              </div>
            </div>
            <!-- If we need pagination -->
            <div
              id="js-gallery-pagination"
              class="swiper-pagination gallery__pagination"
            ></div>

            <!-- If we need navigation buttons -->
            <div
              id="js-gallery-prev"
              class="swiper-button-prev gallery__prev"
            ></div>
            <div
              id="js-gallery-next"
              class="swiper-button-next gallery__next"
            ></div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="contact__inner inner">
        <div class="contact__box">
          <div class="contact__title">
            <div class="heading js-in-view fade-in-up">
              <div class="heading__en">CONTACT</div>
              <h2 class="heading__ja">お問い合わせ</h2>
            </div>
          </div>
          <form class="contact__form">
            <div class="contact__fields">
              <div class="contact__field">
                <div class="form-field">
                  <div class="form-field__head">
                    <label for="your-name" class="form-field__label"
                      >お名前</label
                    >
                    <span class="form-field__tag">必須</span>
                  </div>
                  <div class="form-field__item">
                    <input
                      class="form-text"
                      type="text"
                      name="your-name"
                      id="your-name"
                      placeholder="田中 おは次郎"
                    />
                  </div>
                </div>
              </div>
              <div class="contact__field">
                <div class="form-field">
                  <div class="form-field__head">
                    <label for="your-email" class="form-field__label"
                      >メールアドレス</label
                    >
                    <span class="form-field__tag">必須</span>
                  </div>
                  <div class="form-field__item">
                    <input
                      class="form-text"
                      type="email"
                      name="your-email"
                      id="your-email"
                      placeholder="info@oha.com"
                    />
                  </div>
                </div>
              </div>  
                <div class="form-field">
                  <div class="form-field__head">
                    <div class="form-field__label">お問い合わせ項目</div>
                    <span class="form-field__tag">必須</span>
                  </div>
                  <div class="form-field__item">
                    <div class="form-field__radios">
                      <label class="form-field__radio from-radio">
                        <input
                          class="from-radio__input"
                          type="radio"
                          name="your-name"
                        />
                        <span class="from-radio__text">アプリの質問</span>
                      </label>
                      <label class="form-field__radio from-radio">
                        <input
                          class="from-radio__input"
                          type="radio"
                          name="your-name"
                        />
                        <span class="from-radio__text">取材の依頼</span>
                      </label>
                      <label class="form-field__radio from-radio">
                        <input
                          class="from-radio__input"
                          type="radio"
                          name="your-name"
                        />
                        <span class="from-radio__text">その他</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contact__field">
                <div class="form-field mb30">
                  <div class="form-field__head">
                    <label for="your-age" class="form-field__label">年代</label>
                    <span class="form-field__tag is-option">任意</span>
                  </div>
                  <div class="form-field__item ">
                    <select name="your-age" id="your-age" class="form-select">
                      <option value="">選択してください</option>
                      <option value="">10代</option>
                      <option value="">20代</option>
                      <option value="">30代</option>
                      <option value="">40代</option>
                      <option value="">50代</option>
                      <option value="">60代</option>
                      <option value="">70代</option>
                      <option value="">80代</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="contact__field">
                <div class="form-field">
                  <div class="form-field__head">
                    <label for="your-message" class="form-field__label"
                      >お問い合わせ内容</label
                    >
                    <span class="form-field__tag">必須</span>
                  </div>
                  <div class="form-field__item">
                    <textarea
                      name="your-message"
                      id="your-message"
                      class="form-textarea"
                      cols="30"
                      rows="10"
                      placeholder="ここに文章を入力してくださいここに文章を入力してください"
                    ></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="contact__privacy">
              <label class="form-checkbox">
                <input
                  type="checkbox"
                  name="your-privacy"
                  class="form-checkbox__input"
                />
                <span class="form-checkbox__text"
                  ><a href="" target="_blank">プライバシーポリシー</a
                  >に同意する</span
                >
              </label>
            </div>
            <div class="contact__button">
              <input type="submit" value="送信する" class="button" />
            </div>
          </form>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer__inner inner">
        <small class="footer__copyright"
          >COPYRIGHT 2023 株式会社デイトラ
        </small>
      </div>
    </footer>

    <a href="#" class="pagetop" id="js-pagetop"
      ><img src="<?php echo get_template_directory_uri()?>/img/pagetop-img.png" alt=""
    /></a>

    <?php wp_footer(); ?>
  </body>
</html>
