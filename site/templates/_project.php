<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="case_head grid-container">
      <a href="/">
        <div class='container'>
          <div class='eye'></div>
          <div class='eye'></div>
        </div>
        <!-- <img src="/assets/images/arrow.svg" alt="" class="arrow"> -->
      </a>
      <div class="case_head_header grid-x">
        <div class="case_title cell large-6 medium-6">
          <h1><?php echo $page->title() ?></h1><h1 class="h1_year"><?php echo $page->type() ?></h1>
        </div>
        <div class="case_head_details cell large-6 medium-6">
          <div class="details_wrapper grid-x grid-margin-x align-right">
            <div class="role cell large-4 small-5">
              <h4>Role</h4>
              <p class="case_head_detail"><?php echo $page->rolle() ?></p>
            </div>
            <div class="customer cell large-5 small-7">
              <h4>Customer</h4>
              <p class="case_head_detail"><?php echo $page->auftraggeber() ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-x margin-x">
        <div class="case_descr cell large-7">
          <p><?php echo $page->text_left() ?></p>
        </div>
      </div>
    </div>
    <div class="grid-container fluid">
      <div class="case_grid_landing grid-x grid-margin-x">
          <div class="showcase_item_wrapper wow fadeInUp  cell large-6 medium-12 small-12" data-wow-offset="0" data-wow-delay=".01s" data-wow-duration=".7s">
            <img src="<?php echo $page->image('img_1.png')->url() ?>" alt="" class="showcase-image case_img" />
          </div>
          <div class="showcase_item_wrapper wow fadeInUp  cell large-6 medium-12 small-12" data-wow-offset="0" data-wow-delay=".01s" data-wow-duration="1s">
            <img src="<?php echo $page->image('img_2.png')->url() ?>" alt="" class="showcase-image case_img" />
          </div>
          <div class="showcase_item_wrapper wow fadeInUp  cell large-6 medium-12 small-12" data-wow-offset="0" data-wow-delay=".01s" data-wow-duration=".7s">
            <img src="<?php echo $page->image('img_3.png')->url() ?>" alt="" class="showcase-image case_img" />
          </div>
          <div class="showcase_item_wrapper wow fadeInUp  cell large-6 medium-12 small-12" data-wow-offset="0" data-wow-delay=".01s" data-wow-duration="1s">
            <img src="<?php echo $page->image('img_4.png')->url() ?>" alt="" class="showcase-image case_img" />
          </div>
          <div class="showcase_item_wrapper wow fadeInUp  cell large-12 medium-12 small-12" data-wow-offset="0" data-wow-delay=".01s" data-wow-duration="1s">
            <img src="<?php echo $page->image('img_5.png')->url() ?>" alt="" class="showcase-image case_img" />
          </div>
          <div class="showcase_item_wrapper wow fadeInUp  cell large-6 medium-12 small-12" data-wow-offset="0" data-wow-delay=".01s" data-wow-duration=".7s">
            <img src="<?php echo $page->image('img_6.png')->url() ?>" alt="" class="showcase-image case_img" />
          </div>
          <div class="showcase_item_wrapper wow fadeInUp  cell large-6 medium-12 small-12" data-wow-offset="0" data-wow-delay=".01s" data-wow-duration="1s">
            <img src="<?php echo $page->image('img_7.png')->url() ?>" alt="" class="showcase-image case_img" />
          </div>
          <div class="showcase_item_wrapper wow fadeInUp  cell large-12 medium-12 small-12" data-wow-offset="0" data-wow-delay=".01s" data-wow-duration="1s">
            <img src="<?php echo $page->image('img_8.png')->url() ?>" alt="" class="showcase-image case_img" />
          </div>
        </div>
      </div>
      <div class="grid-container">
        <div class="bottom_nav grid-x margin-x">
          <div class="bottom_nav_item_left cell large-6 small-6">
            <?php if($page->hasPrevVisible()): ?>
            <a href="<?= $page->prevVisible()->url() ?>"><span class="arrow_left">&#8592;</span>Previous project</a>
            <?php endif ?>
          </div>
          <div class="bottom_nav_item_right cell large-6 small-6">
            <?php if($page->hasNextVisible()): ?>
            <a href="<?= $page->nextVisible()->url() ?>">Next project<span class="arrow_right">&#8594;</span></a>
            <?php endif ?>
          </div>
        </div>
      </div>
  </main>

<?php snippet('footer') ?>
