<h1>Posts in Category <?=$category->name?></h1>

<h2>Posts</h2>
<p>
    <?php foreach ($posts as $post) :?>
        <h3><a href="/post/<?=$post->slug?>"><?=$post->title?></a></h3>
        <p>
            <?=word_limiter($post->content, 1)?>
        </p>
        <a href="<?=$post->slug?>">Read more</a>
    <?php endforeach; ?>
</p>

<h3>Links</h3>
<a href="/">Home</a> | <?=($this->session->user_id)?'<a href="/admin/dashboard">Admin Dashboard</a> | <a href="/admin/logout">Logout</a>':'<a href="/admin/register">Register</a> | <a href="/admin/login">Login</a>'?>
