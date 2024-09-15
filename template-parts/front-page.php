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
                    <?php if (get_field('number','88')):?>
                    <div class="step-box__head-number"><?php the_field('number','88');?></div>
                    <?php endif;?>
                  </div>
                  <div class="step-box__body">
                  <?php if (get_field('img','88')):?>
                    <div class="step-box__image">
                      <img src="<?php echo get_template_directory_uri()?><?php the_field('img','88');?>" alt="" />
                    </div>
                    <?php endif;?>
                    <?php if (get_field('overview','88')):?>
                    <p class="step-box__text">
                    <?php the_field('overview','88');?>
                    </p>
                    <?php endif;?>
                  </div>
                </div>
              </div>

              <div class="how-to-use__step">
                <div class="step-box">
                  <div class="step-box__head">
                    <div class="step-box__head-text">STEP</div>
                    <?php if (get_field('number','95')):?>
                    <div class="step-box__head-number"><?php the_field('number','95');?></div>
                    <?php endif;?>
                  </div>
                  <div class="step-box__body">
                  <?php if (get_field('img','95')):?>
                    <div class="step-box__image">
                      <img src="<?php echo get_template_directory_uri()?><?php the_field('img','95');?>" alt="" />
                    </div>
                    <?php endif;?>
                    <?php if (get_field('overview','95')):?>
                    <p class="step-box__text">
                    <?php the_field('overview','95');?>
                    </p>
                    <?php endif;?>
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