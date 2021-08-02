<body>
    <?=$this->element('Content/header'); ?>
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
            <div class="face-box cf">
                <p class="face-img face-box-left">
                    <?=$this->html->image('face1.png',['class'=>'']) ?>
                </p>
                <div class="face-box-right">
                    <dl class="company-prof cf">
                        <dt>名称 ：</dt>
                        <dd>あああああああ</dd>
                        <dt>所在地 ：</dt>
                        <dd>大阪市内</dd>
                        <dt>お問い合わせ ：</dt>
                        <dd>kkkkkkk</dd>
                        <dt>事業内容 :</dt>
                        <dd>金融その他いろいろ行っております</dd>
                    </dl>
                    <h2>田中太郎　Tanaka Taro</h2>
                    <dl class="company-prof cf">
                        <dt>Youtube:</dt>
                        <dd><?=$this->html->link('kkkkkk','#') ?></dd>
                        <dt>Instagram:</dt>
                        <dd><?=$this->html->link('llllll ','#') ?></dd>
                    </dl>
                </div>
            </div>
        </section>
        <?=$this->element('Content/footer'); ?>
    </div>
</body>