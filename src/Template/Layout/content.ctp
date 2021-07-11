<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->charset() ?>
    <?=$this->html->css('common.css') ?>
    <?=$this->html->css('home_page.css') ?>
    <?=$this->html->css('about.css') ?>
    <?=$this->html->css('work.css') ?>
    <?=$this->html->css('blog.css') ?>
    <?=$this->html->css('contact.css') ?>
    <?=$this->html->css('login.css') ?>
    <?=$this->html->css('content_form.css') ?>
    <?= $this->Html->css('fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css'); ?>
    <?= $this->Html->css('http://fonts.googleapis.com/css?family=Lato:400,700'); ?>
    <?= $this->Html->script('http://code.jquery.com/jquery.min.js'); ?>
    <?= $this->Html->script('smoothscroll') ?>
    <?= $this->Html->script('homePage') ?>
</head>
<body>
    <?= $this->fetch('content') ?>
</body>
</html>