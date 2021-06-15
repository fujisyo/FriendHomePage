
<body>
    <?=$this->element('Content/header'); ?>
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
        <?=$this->element('Content/footer'); ?>
    </div>
</body>