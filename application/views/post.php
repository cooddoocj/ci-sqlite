<h1><?=$post->title?></h1>

<?=$post->content?>

<h2>Categories</h2>
<?php foreach ($categories as $category) :?>
    <?=$category->name?><br>
<?php endforeach; ?>

<h3>Author</h3>
<?=$post->first_name . ' ' . $post->last_name?>

<h3>Links</h3>
<a href="/">Home</a> | <?=($this->session->user_id)?'<a href="/admin/dashboard">Admin Dashboard</a> | <a href="/admin/logout">Logout</a>':'<a href="/admin/register">Register</a> | <a href="/admin/login">Login</a>'?>
