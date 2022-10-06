<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="blog-sec">
        <div class="blog-img">
            <?php foreach ($manyPost as $post) : ?>
                <a href="">
                    <img src="<?php echo $post["image"]; ?>" class="img-responsive">
                </a>
            <?php endforeach; ?>
        </div>
        <div class="blog-info">
            <?php foreach ($manyPost as $post) : ?>
            <h2> <?php echo $post["title"]; ?></h2>
            <div class="blog-comment">
                <p>Posted In: <span>Legal Advice</span></p>
                <p>
                    <span><a href="#"><i class="fa fa-comments"></i></a><?php echo $post["likes"]; ?></span>
                    <span><a href="#"><i class="fa fa-eye"></i></a><?php echo $post["views"]; ?></span></p>
<?php endforeach; ?>
