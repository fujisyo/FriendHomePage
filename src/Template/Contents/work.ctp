<body>
    <?=$this->element('Content/header') ?>
    <div class="inner">
        <section class="cont-box cf">
            <h2 class="ttl large">Works</h2>
            <ul class="work-list">
                <li>
                    <p><?=$this->html->link('','#'); ?></p>
                    <a href="#" target="blank">
                        <div class="data-picture data-alt">
                            <?=$this->html->image('face1.png',['class'=>'']) ?>
                        </div>
                    </a>
                    <h3 class="ttl">
                        <a href="#" target="blank">企業名？名前</a>
                    </h3>
                    <p class="skill">技術</p>
                    <p class="read-last">
                        どういうことをおこなったか
                    </p>
                </li>
                <li>
                    <p><?=$this->html->link('','#'); ?></p>
                    <a href="#" target="blank">
                        <div class="data-picture data-alt">
                            <?=$this->html->image('face1.png',['class'=>'']) ?>
                        </div>
                    </a>
                    <h3 class="ttl">
                        <a href="#" target="blank">企業名？名前</a>
                    </h3>
                    <p class="skill">技術</p>
                    <p class="read-last">
                        どういうことをおこなったか
                    </p>
                </li>
                <li>
                    <p><?=$this->html->link('','#'); ?></p>
                    <a href="#" target="blank">
                        <div class="data-picture data-alt">
                            <?=$this->html->image('face1.png',['class'=>'']) ?>
                        </div>
                    </a>
                    <h3 class="ttl">
                        <a href="#" target="blank">企業名？名前</a>
                    </h3>
                    <p class="skill">技術</p>
                    <p class="read-last">
                        どういうことをおこなったか
                    </p>
                </li>
                
            </ul>
        </section>
    </div>
    <?=$this->element('Content/footer') ?>
</body>