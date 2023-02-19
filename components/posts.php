<?php
include('../scripts/feed.php');
?>

<style>
.post{
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
    background: #f5f5f5;
    margin: 2rem;
}

.post h2{
   font-size: 0.8rem;
   font-weight: 600;
}

.post .date{
    font-size: 0.4rem;
    color: #999;
}

.post .content{
    margin: 0.3rem 1rem;
    font-size: 0.7rem;
    border-radius: 0.3rem;
    padding: 0.3rem 1rem;
    background: #fff;

}
    </style>

<?php foreach ($posts as $post) : ?>
    <div class="post">
        <h2><?php echo $post['user_name']; ?></h2>
        <p class="date"><?php echo $post['post_time']; ?></p>
        <div class="content"><?php echo $post['message']; ?></div>
    </div>
<?php endforeach; ?>