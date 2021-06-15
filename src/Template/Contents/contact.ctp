<body>
    <?=$this->element('Content/header') ?>
    <div class="inner">
        <section class="cont-box cf">
            <h2 class="ttl large">Contact</h2>
            <p class="txt-box">
                見直しの依頼・ご相談などお気軽にお問い合わせくださいませ。
                <br>
                下記フォームよりわかる範囲でご記入ください。必須の項目は必ずご記入お願いします。
            </p>
            <div class="wpcf7">
                <div class="screen-reader-response"></div>
                <?=$this->Form->create(null,['type'=>'post', 'url'=>['Controller'=>'Contents',
                'action'=>'homePage']]) ?>
                <dl class="contact-form">
                    <dt>貴社名</dt>
                    <dd class="w01">
                        <span class="wpcf7-form">
                            <?=$this->Form->text('company',['class'=>'wpcf7-form-text']) ?>
                        </span>
                    </dd>
                    <dt>お名前
                        <span class="required">必須</span>
                    </dt>
                    <dd class="w01">
                        <span class="wpcf7-form">
                            <?=$this->Form->text('name',['class'=>'wpcf7-form-text']) ?>
                        </span>
                    </dd>
                    <dt>メールアドレス
                        <span class="required">必須</span>
                    </dt>
                    <dd class="w01">
                        <span class="wpcf7-form">
                            <?=$this->Form->text('email',['class'=>'wpcf7-form-text']) ?>
                        </span>
                    </dd>
                    <dt>電話番号</dt>
                    <dd class="w01">
                        <span class="wpcf7-form">
                            <?=$this->Form->text('tel',['class'=>'wpcf7-form-text']) ?>
                        </span>
                    </dd>
                    <dt>お問い合わせ内容
                        <span class="required">必須</span>
                    </dt>
                    <dd class="w02">
                        <span class="wpcf7-form">
                            <?=$this->Form->textarea('message',['class'=>'wpcf7-form-textarea']) ?>
                        </span>
                    </dd>
                </dl>
                <p>
                    <?=$this->Form->submit('内容を送信する',['class'=>'submitbtn']) ?>
                </p>
                <?=$this->Form->end(); ?>
            </div>
        </section>
    </div>
    <?=$this->element('Content/footer') ?>
</body>