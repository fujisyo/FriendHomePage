<?=$this->html->css('homePage.css') ?>
<?= $this->Html->css('fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css'); ?>
<?= $this->Html->css('http://fonts.googleapis.com/css?family=Lato:400,700'); ?>
<?= $this->Html->script('http://code.jquery.com/jquery.min.js'); ?>
<?= $this->Html->script('smoothscroll') ?>
<?= $this->Html->script('homePage') ?>

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
    <div class="main">
        <div class="main-picture">
            <div >
                <?=$this->html->image('face1.png',['class' => '']) ?>
            </div>
        </div>
        <!-- Service -->
        <section class="service cf">
            <h2 class="ttl">Service</h2>
            <section class="service-section">
                <h3 class="ttl">金融</h3>
                <p class="ttl">Finance</p>
                <p class="icon">
                    <?=$this->html->image('slide.jpg',['class'=> '']) ?>
                </p>
                <p class="text">
                    こんｔにjdfjdghasrｆｙｈｇｓｈｓｄｓｆｆｆｆｆｆｆｆｆｆｆ
                </p>
            </section>
            <section class="service-section">
                <h3 class="ttl">固定費</h3>
                <p class="ttl">Fixed cost</p>
                <p class="icon">
                    <?=$this->html->image('wallpa).jpg',['class'=>'']) ?>
                </p>
                <p class="text">
                    こよいはようこそお越しくださいました。
                    ｋｄｊｋｌｆｊヵｊｆｌ；ｋｆｄじゃｌｋｊｆ；
                </p>
            </section>
            <section class="service-section last">
                <h3 class="ttl">保険</h3>
                <p class="ttl">insurance</p>
                <p class="icon">
                    <?=$this->html->image('wallpa).jpg',['class'=>'']) ?>
                </p>
                <p class="text">
                    こよいはようこそお越しくださいました。
                    ｋｄｊｋｌｆｊヵｊｆｌ；ｋｆｄじゃｌｋｊｆ；
                </p>
            </section>
        </section>
        <!-- Works -->
        <section class="works cf">
            <h2 class="ttl">Works</h2>
            <ul class="works-list">
                <li>
                    <p class="photo">
                        <a href="#"><?=$this->html->image('face1.png',['class'=>'']) ?></a>
                    </p>
                </li>
                <li>
                    <p class="photo">
                        <a href="#"><?=$this->html->image('face1.png',['class'=>'']) ?></a>
                    </p>
                </li>
                <li>
                    <p class="photo">
                        <a href="#"><?=$this->html->image('face1.png',['class'=>'']) ?></a>
                    </p>
                </li>
            </ul>
        </section>
        <!-- Blog -->
        <section class="blog cf">
            <h2 class="ttl">Blog</h2>
            <ul class="blog-list">
                <li>
                    <p class="photo">
                        <a href="#"><?=$this->html->image('face1.png',['class'=>'']) ?></a>
                    </p>
                    <p class="cont">
                        ふぁみれどおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお
                    </p>
                    <?=$this->html->link('more','#',['class'=>'detail']) ?>
                </li>
                <li>
                    <p class="photo">
                        <a href="#"><?=$this->html->image('face1.png',['class'=>'']) ?></a>
                    </p>
                    <p class="cont">
                        ふぁみれどおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお
                    </p>
                    <?=$this->html->link('more','#',['class'=>'detail']) ?>
                </li>
                <li>
                    <p class="photo">
                        <a href="#"><?=$this->html->image('face1.png',['class'=>'']) ?></a>
                    </p>
                    <p class="cont">
                        ふぁみれどおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお
                    </p>
                    <?=$this->html->link('more','#',['class'=>'detail']) ?>
                </li>
            </ul>
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