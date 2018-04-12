<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<div class="grid-container fluid">
  <div class="case_grid_landing grid-x grid-margin-x">
    <?php foreach($projects as $project): ?>
    <div class="showcase_item_wrapper  cell large-6 medium-12 small-12">
        <a href="<?= $project->url() ?>" class="showcase-link">
          <!-- <div class="showcase-caption">
            <h3 class="showcase-title"><?= $project->title()->html() ?></h3>
          </div> -->
          <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(2000, 2000); ?>
              <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image wow fadeIn" data-wow-delay=".2s" />
            <?php endif ?>
        </a>
      </div>
      <?php endforeach ?>
    </div>
  </div>


<!-- <ul class="showcase grid gutter-1">

  <?php foreach($projects as $project): ?>

     <li class="showcase-item column">
        <a href="<?= $project->url() ?>" class="showcase-link">
          <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>

          <?php endif ?>
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $project->title()->html() ?></h3>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul> -->
