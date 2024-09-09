<?php get_template_part('template-parts/front-page'); ?>

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
        <div class="case__items">
        <?php if (have_posts()) :?>
 　　　     <?php while(have_posts()) :?>
   　　 　   <?php the_post(); ?>
   　　　　　　<?php if(has_post_thumbnail()):?>
        　　　<?php the_post_thumbnail(); ?>
        　　　<?php endif; ?>
           <?php endwhile; ?>
   　　   <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="news">
      <div class="news__inner inner">
        <div class="news__card">
          <h2 class="news__title js-in-view fade-in-up">NEWS</h2>
          <div class="news__lists">
            <a href="" class="news__list news-link">
              <div class="news-link__meta">
                <time class="news-link__date" datetime="2022-12-15"
                  >2022年12月15日</time
                >
                <div class="news-link__label is-news">お知らせ</div>
              </div>
              <h3 class="news-link__title">年末年始について</h3>
            </a>
            <a href="" class="news__list news-link">
              <div class="news-link__meta">
                <time class="news-link__date" datetime="2022-12-10"
                  >2022年12月10日</time
                >
                <div class="news-link__label is-column">コラム</div>
              </div>
              <h3 class="news-link__title">
                あの芸能人にも使っていただいていることが判明しました！もう嬉しすぎて頭が真っ白になってしまいましたが、続きは本文にて！
              </h3>
            </a>
            <a href="" class="news__list news-link">
              <div class="news-link__meta">
                <time class="news-link__date" datetime="2022-09-01"
                  >2022年9月1日</time
                >
                <div class="news-link__label is-event">イベント情報</div>
              </div>
              <h3 class="news-link__title">
                幕張メッセにて体験会を実施します！
              </h3>
            </a>
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

    <section id="how-to-use" class="how-to-use">
      <div class="how-to-use__inner inner">
        <div class="how-to-use__title">
          <div class="heading js-in-view fade-in-up">
            <div class="heading__en">HOW TO USE</div>
            <h2 class="heading__ja">OHA!の使い方</h2>
          </div>
        </div>
        <div class="how-to-use__boxes">
          <div class="how-to-use__box">
            <div class="how-to-use__box-title">
              誰かを起こす予定があれば<br class="hidden-pc" />起きれる派の人
              <img src="<?php echo get_template_directory_uri()?>/img/step1-title-img.png" alt="" />
            </div>
            <div class="how-to-use__steps">
              <div class="how-to-use__step js-in-view anim-fade-in-up">
                <div class="step-box">
                  <div class="step-box__head">
                    <div class="step-box__head-text">STEP</div>
                    <div class="step-box__head-number">01</div>
                  </div>
                  <div class="step-box__body">
                    <div class="step-box__image">
                      <img src="<?php echo get_template_directory_uri()?>/img/step1-1-img.png" alt="" />
                    </div>
                    <p class="step-box__text">
                      起こしたい時間を<br />設定します
                    </p>
                  </div>
                </div>
              </div>
              <div class="how-to-use__step">
                <div class="step-box">
                  <div class="step-box__head">
                    <div class="step-box__head-text">STEP</div>
                    <div class="step-box__head-number">02</div>
                  </div>
                  <div class="step-box__body">
                    <div class="step-box__image">
                      <img src="<?php echo get_template_directory_uri()?>/img/step1-2-img.png" alt="" />
                    </div>
                    <p class="step-box__text">
                      スマホを枕元に置いて<br />寝ます
                    </p>
                  </div>
                </div>
              </div>
              <div class="how-to-use__step">
                <div class="step-box">
                  <div class="step-box__head">
                    <div class="step-box__head-text">STEP</div>
                    <div class="step-box__head-number">03</div>
                  </div>
                  <div class="step-box__body">
                    <div class="step-box__image">
                      <img src="<?php echo get_template_directory_uri()?>/img/step1-3-img.png" alt="" />
                    </div>
                    <p class="step-box__text">
                      起こすことによって<br />起きることができます
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="how-to-use__box is-type2">
            <div class="how-to-use__box-title">
              誰かに起こされれば<br class="hidden-pc" />起きれる派の人
              <img src="<?php echo get_template_directory_uri()?>/img/step2-title-img.png" alt="" />
            </div>
            <div class="how-to-use__steps">
              <div class="how-to-use__step">
                <div class="step-box">
                  <div class="step-box__head">
                    <div class="step-box__head-text">STEP</div>
                    <div class="step-box__head-number">01</div>
                  </div>
                  <div class="step-box__body">
                    <div class="step-box__image">
                      <img src="<?php echo get_template_directory_uri()?>/img/step2-1-img.png" alt="" />
                    </div>
                    <p class="step-box__text">
                      起こされたい時間を<br />設定します
                    </p>
                  </div>
                </div>
              </div>
              <div class="how-to-use__step">
                <div class="step-box">
                  <div class="step-box__head">
                    <div class="step-box__head-text">STEP</div>
                    <div class="step-box__head-number">02</div>
                  </div>
                  <div class="step-box__body">
                    <div class="step-box__image">
                      <img src="<?php echo get_template_directory_uri()?>/img/step2-2-img.png" alt="" />
                    </div>
                    <p class="step-box__text">
                      スマホを枕元に置いて<br />寝ます
                    </p>
                  </div>
                </div>
              </div>
              <div class="how-to-use__step">
                <div class="step-box">
                  <div class="step-box__head">
                    <div class="step-box__head-text">STEP</div>
                    <div class="step-box__head-number">03</div>
                  </div>
                  <div class="step-box__body">
                    <div class="step-box__image">
                      <img src="<?php echo get_template_directory_uri()?>/img/step2-3-img.png" alt="" />
                    </div>
                    <p class="step-box__text">
                      起こされることによって<br />起きることができます
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
            <div class="merit-box">
              <div class="merit-box__content">
                <div class="merit-box__image">
                  <img src="<?php echo get_template_directory_uri()?>/img/merit1-img.png" alt="" />
                </div>
                <div class="merit-box__body">
                  <h3 class="merit-box__head">
                    <span class="merit-box__number">1</span>
                    <span class="merit-box__title">
                      通りすがりに猫が<br />挨拶してくれるようになる
                    </span>
                  </h3>
                  <p class="merit-box__text">
                    偶然の可能性も高いですが、OHA!を使うようになってから、やたらと猫が挨拶してくれるようになった、というお話をいただきます。とはいえ、自惚れすぎてはいけません。挨拶されたからといって一方的に話しかけ続けてしまうと気まぐれ猫ちゃんにうんざりされる上に周りの目も冷ややかです。
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="merit__box">
            <div class="merit-box is-reverse">
              <div class="merit-box__content">
                <div class="merit-box__image">
                  <img src="<?php echo get_template_directory_uri()?>/img/merit2-img.png" alt="" />
                </div>
                <div class="merit-box__body">
                  <h3 class="merit-box__head">
                    <span class="merit-box__number">2</span>
                    <span class="merit-box__title">
                      商店街の福引で<br />3等のティッシュボックスが<br
                        class="hidden-pc"
                      />当たる
                    </span>
                  </h3>
                  <p class="merit-box__text">
                    OHA!を使うことで、どういった因果関係なのか、ちょっと運もよくなります。あなたの街には商店街があるかわかりませんが、もしあればチャンスです。買い物をして、福引に挑んでみましょう。3等のティッシュボックスが当たること間違いなしです。<br />
                    もう景品のポケットティッシュで涙を拭う、なんてことはないのです。
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="merit__box">
            <div class="merit-box">
              <div class="merit-box__content">
                <div class="merit-box__image">
                  <img src="<?php echo get_template_directory_uri()?>/img/merit3-img.png" alt="" />
                </div>
                <div class="merit-box__body">
                  <h3 class="merit-box__head">
                    <span class="merit-box__number">3</span>
                    <span class="merit-box__title">
                      掃除をしていたら、<br />過去に自分が隠した<br
                        class="hidden-pc"
                      />へそくりが出てきた
                    </span>
                  </h3>
                  <p class="merit-box__text">
                    自分が隠したへそくりを自分が発見するのはプラスマイナス0ですが、なんだか嬉しいものですよね。過去の自分よ、素敵なサプライズをありがとう。<br />
                    へそくりをしたことがない方にとっては申し訳ないですがこのイベントは起こりませんのでアプリ使用の再検討をおすすめします。
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
                <th>仲介手数料</th>
                <td>なし！</td>
                <td>希望時間に起きれた毎に<br />100円</td>
                <td>希望時間に起きれた毎に<br />40000ペコ</td>
              </tr>
              <tr>
                <th>登録料</th>
                <td>なし！</td>
                <td>希望時間に起きれた毎に<br />100円</td>
                <td>希望時間に起きれた毎に<br />40000ペコ</td>
              </tr>
              <tr>
                <th>年間皆勤賞特典</th>
                <td>あり！</td>
                <td>なし</td>
                <td>なし</td>
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
          <div class="qa__box qa-box is-open">
            <button type="button" class="qa-box__head js-accordion">
              <span class="qa-box__head-icon">Q</span>
              <span class="qa-box__head-text"
                >僕があまりにも起きない場合、相手に怒られることはあるのでしょうか？怖くて朝も起きられません。</span
              >
            </button>
            <div class="qa-box__body" style="display: block">
              <div class="qa-box__a">
                <span class="qa-box__a-icon">A</span>
                <span class="qa-box__a-text">残念ながら、相手によります。</span>
              </div>
            </div>
          </div>
          <div class="qa__box qa-box">
            <button type="button" class="qa-box__head js-accordion">
              <span class="qa-box__head-icon">Q</span>
              <span class="qa-box__head-text"
                >今現在の登録者は何人ですか？</span
              >
            </button>
            <div class="qa-box__body">
              <div class="qa-box__a">
                <span class="qa-box__a-icon">A</span>
                <span class="qa-box__a-text"
                  >現在の登録者は150万人(から149.998万人を引いた人数)です。この文を2行にしたいのでもう一度言います。現在の登録者は150万人(から149.998万人を引いた人数)です！</span
                >
              </div>
            </div>
          </div>
          <div class="qa__box qa-box">
            <button type="button" class="qa-box__head js-accordion">
              <span class="qa-box__head-icon">Q</span>
              <span class="qa-box__head-text"
                >アプリをインストールして使う妄想だけで朝起きられるようになりました！結局インストールはしてないですが、ありがとうございます！</span
              >
            </button>
            <div class="qa-box__body">
              <div class="qa-box__a">
                <span class="qa-box__a-icon">A</span>
                <span class="qa-box__a-text"
                  >それはよかったです！しかしインストールはしてほしかった！！！</span
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
                <div class="gallery-card">
                  <div class="gallery-card__image">
                    <img src="<?php echo get_template_directory_uri()?>/img/gallery-1.png" alt="" />
                  </div>
                  <p class="gallery-card__text">
                    最高な海。を拝んでいる私最高...
                  </p>
                </div>
              </div>
              <div class="swiper-slide gallery__slide">
                <div class="gallery-card">
                  <div class="gallery-card__image">
                    <img src="<?php echo get_template_directory_uri()?>/img/gallery-2.png" alt="" />
                  </div>
                  <p class="gallery-card__text">
                    モーニングは一番のり。今日も私えらい。
                  </p>
                </div>
              </div>
              <div class="swiper-slide gallery__slide">
                <div class="gallery-card">
                  <div class="gallery-card__image">
                    <img src="<?php echo get_template_directory_uri()?>/img/gallery-3.png" alt="" />
                  </div>
                  <p class="gallery-card__text">
                    風車のある公園ヨガ。みんな私に釘付け。
                  </p>
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
                <div class="form-field">
                  <div class="form-field__head">
                    <label for="your-age" class="form-field__label">年代</label>
                    <span class="form-field__tag is-option">任意</span>
                  </div>
                  <div class="form-field__item">
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
