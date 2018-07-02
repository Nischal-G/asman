<div class="bg-contact3" style="background-color: #E8E8E8; padding-bottom: 20px;">
  <div class="container">

    
    <?php foreach($news->result_array() as $ne):?> 
      <div class="row news-sec">

        <div class="col-md-4">
          <img class="news_image" src="<?=base_url('lib/images/').$ne['news_image']?>" alt="" >
        </div>

        <div class="col-md-8">
          <h1 style="margin-top: 20px; font-size:50px;"><?=ucfirst($ne['news_title'])?></h1>
          <p >Posted on <strong><?=$ne['news_date']?></strong></p><hr>
          <p class="lead"><?=$ne['news_venue']?></p>
          <p><?=$ne['news_objective']?></p>
        </div>
      </div>
      <hr style="height: 2px; background-color: #56A7E9">
    <?php endforeach; ?>
  </div>
</div>

