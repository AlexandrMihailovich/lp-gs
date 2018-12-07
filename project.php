<?php
$prj_thumb                          = 'assets/images/image-placeholder.png';
$prj_thumb_alt                      = 'project-1';
$prj_cat                            = 'Show';
$prj_date                           = '21-06-2015';
$prj_title                          = 'Lorem ipsum dolor sit amet, consec tetur adipiscing elit.';
$prj_text                           = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem facere hic iusto labore
            necessitatibus quia quibusdam soluta veritatis? Culpa dolor dolores dolorum excepturi fuga id
            laborum non quibusdam reiciendis temporibus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem facere hic iusto labore
            necessitatibus quia quibusdam soluta veritatis? Culpa dolor dolores dolorum excepturi fuga id
            laborum non quibusdam reiciendis temporibus?';


if(!empty($_GET['p'])) {
    $page = $_GET['p'];
    if($page == 1) {
        $prj_thumb_alt                      = 'project-1';
        $prj_cat                            = 'Music';
        $prj_date                           = '11-06-2015';
        $prj_title                          = '1 Lorem ipsum dolor sit amet, consec tetur adipiscing elit.';
        $prj_text                           = '1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem facere hic iusto labore
            necessitatibus quia quibusdam soluta veritatis? Culpa dolor dolores dolorum excepturi fuga id
            laborum non quibusdam reiciendis temporibus?';
    } elseif($page == 2) {
        $prj_thumb_alt                      = 'project-2';
        $prj_cat                            = 'Rock';
        $prj_date                           = '18-06-2015';
        $prj_title                          = '2 Lorem ipsum dolor sit amet, consec tetur adipiscing elit.';
        $prj_text                           = '2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem facere hic iusto labore
            necessitatibus quia quibusdam soluta veritatis? Culpa dolor dolores dolorum excepturi fuga id
            laborum non quibusdam reiciendis temporibus?';
    } elseif($page == 4) {
        $prj_thumb_alt                      = 'project-4';
        $prj_cat                            = 'Lessons';
        $prj_date                           = '30-07-2015';
        $prj_title                          = '4 Lorem ipsum dolor sit amet, consec tetur adipiscing elit.';
        $prj_text                           = '4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem facere hic iusto labore
            necessitatibus quia quibusdam soluta veritatis? Culpa dolor dolores dolorum excepturi fuga id
            laborum non quibusdam reiciendis temporibus?';
    }
}
?>
<div class="col-md-8">
    <div class="project-slider owl-carousel owl-theme">
        <img class="img-responsive" src="<?php echo $prj_thumb?>" alt="<?php echo $prj_thumb_alt?>">
        <img class="img-responsive" src="<?php echo $prj_thumb?>" alt="<?php echo $prj_thumb_alt?>">
        <img class="img-responsive" src="<?php echo $prj_thumb?>" alt="<?php echo $prj_thumb_alt?>">
    </div>
</div>
<div class="col-md-4">
    <header class="row projects__big-header">
        <div class="col-md-6">
            <p><i class="fa fa-folder-open"></i> <?php echo $prj_cat?></p>
        </div>
        <div class="col-md-6 text-right">
            <p><i class="fa fa-calendar"></i> <?php echo $prj_date?></p>
        </div>
        <div class="col-md-12">
            <h4 class="decoration decoration-left text-uppercase"><?php echo $prj_title?></h4>
        </div>
    </header>
    <div class="content row">
        <div class="col-md-12 projects__content-text">
            <p><?php echo $prj_text?></p>
        </div>
        <div class="col-md-9">
            <a href="#" class="btn btn-primary btn-block projects__read-btn">Go to project</a>
        </div>
    </div>
    <footer>
        <div class="share-box">
            <span class="text-uppercase">share:</span>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
        </div>
    </footer>
</div>