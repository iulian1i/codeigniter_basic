<h1><?= $title ?></h1>


<div>

    <?php foreach ($posts as $post) :  ?>
        <div>
            <h3><?= $post ?></h3>
            <img src="/assets/images/codeigniter.jpg" alt="" style="width: 200px; height:auto">
            <p>Test random in blog.php</p>
        </div>
    <?php endforeach; ?>
</div>