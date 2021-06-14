<?=$this->html->css('about.css') ?>
<?= $this->Html->css('fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css'); ?>
<?= $this->Html->css('http://fonts.googleapis.com/css?family=Lato:400,700'); ?>

<body>
    <header id="top" class="header">
        <h1 class="header-title">あああああああ</h1>
        <nav class="header-menu">
            <ul>
                <li><?=$this->html->link('About',['action'=>'about'],['class'=>'about']) ?></li>
                <li><?=$this->html->link('Work','#',['class'=>'work']) ?></li>
                <li><?=$this->html->link('Blog','#',['class'=>'blog']) ?></li>
                <li><?=$this->html->link('Contact','#',['class'=>'contact']) ?></li>
            </ul>
        </nav>
        <ul class="social-btn">
            <li>
                <a href="#" target="blank"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="last">
                <a href="#" target="blank"><i class="fab fa-facebook-f"></i></a>
            </li>
        </ul>
    </header>
    <div class="inner">
        <section class="cont-box cf">
            <h2 class="ttl large">About</h2>
            <p class="txt-box">
                大阪で働いています<br>
                2019年から<br>
                金融<br>
                保険<br>
                固定費
            </p>
        </section>
        <!-- to-top -->
        <p class="to-top">
            <a href="#top"><i class="fas fa-arrow-up"></i></a>
        </p>
        <!-- footer -->
        <footer class="cf">
            <nav class="footer">
                <ul class="cf">
                    <li><?=$this->html->link('About','#',['class'=>'about']) ?></li>
                    <li><?=$this->html->link('Work','#',['class'=>'work']) ?></li>
                    <li><?=$this->html->link('Blog','#',['class'=>'blog']) ?></li>
                    <li><?=$this->html->link('Contact','#',['class'=>'contact']) ?></li>
                </ul>
            </nav>
            <p class="copyright">
                <small>© UNDERLINE All rights reserved.</small>
            </p>
        </footer>
    </div>

</body>