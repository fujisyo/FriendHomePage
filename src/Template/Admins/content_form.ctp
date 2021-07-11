<div class="inner">
    <div class="cf">
        <div class="form-box-title">
            <h4>Serviceフォーム</h4>
            <?=$this->Form->create($service) ?>
            <div class="service-box-form">
                <div class="service-box-form-left">
                    <?=$this->Form->control('title1',[
                        'label'=>'タイトル左'
                    ]) ?>
                    <?=$this->Form->control('eng_title1',[
                        'label'=>'タイトル左英語'
                    ]) ?>
                    <?=$this->Form->control('image1',[
                        'type'=>'file',
                        'label'=>'画像左'
                    ]) ?>
                    <?=$this->Form->control('description1',[
                        'type'=>'textarea',
                        'label'=>'説明左'
                        ]) ?>
                </div>
                <div class="service-box-form-center">
                    <?=$this->Form->control('title2',[
                        'label'=>'タイトル真ん中'
                    ]) ?>
                    <?=$this->Form->control('eng_title2',[
                        'label'=>'タイトル真ん中英語'
                    ]) ?>
                    <?=$this->Form->control('image2',[
                        'type'=>'file',
                        'label'=>'画像真ん中'
                        ]) ?>
                    <?=$this->Form->control('description2',[
                        'type'=>'textarea',
                        'label'=>'説明真ん中'
                        ]) ?>
                </div>
                <div class="service-box-form-right">
                    <?=$this->Form->control('title3',[
                        'label'=>'タイトル右'
                    ]) ?>
                    <?=$this->Form->control('eng_title3',[
                        'label'=>'タイトル右英語'
                    ]) ?>
                    <?=$this->Form->control('image3',[
                        'type'=>'file',
                        'label'=>'画像右'
                        ]) ?>
                    <?=$this->Form->control('description3',[
                        'type'=>'textarea',
                        'label'=>'説明右'
                        ]) ?>
                </div>
            </div>
            <?=$this->Form->button('登録') ?>
            <?=$this->Form->end() ?>
        </div>
        <div class="form-box-title">
            <h4>Workフォーム</h4>
            <?=$this->Form->create($work) ?>
            <div>
                <?=$this->Form->control('title',[
                    'label'=>'タイトル'
                ]) ?>
                <?=$this->Form->control('subtitle',[
                    'label'=>'サブタイトル'
                ]) ?>
                <?=$this->Form->control('image',[
                    'type'=>'file',
                    'label'=>'画像'
                    ]) ?>
                <?=$this->Form->control('content',[
                    'type'=>'textarea',
                    'label'=>'コンテンツ'
                    ]) ?>
            </div>
            <?=$this->Form->button('投稿する') ?>
            <?=$this->Form->end() ?>
        </div>
        <div class="form-box-title">
            <h4>Blogフォーム</h4>
            <?=$this->Form->create($blog) ?>
            <div>
                <?=$this->Form->control('title',[
                    'label'=>'タイトル'
                ]) ?>
                <?=$this->Form->control('thumbnail',[
                    'type'=>'file',
                    'label'=>'サムネイル'
                    ]) ?>
                <?=$this->Form->control('image1',[
                    'type'=>'file',
                    'label'=>'画像1'
                    ]) ?>
                <?=$this->Form->control('image2',[
                    'type'=>'file',
                    'label'=>'画像2'
                    ]) ?>
                <?=$this->Form->control('image3',[
                    'type'=>'file',
                    'label'=>'画像3'
                    ]) ?>
                <?=$this->Form->control('image4',[
                    'type'=>'file',
                    'label'=>'画像4'
                    ]) ?>
                <?=$this->Form->control('content',[
                    'type'=>'textarea',
                    'label'=>'コンテンツ'
                    ]) ?>
            </div>
            <?=$this->Form->button('投稿する') ?>
            <?=$this->Form->end() ?>
        </div>
        <div class="form-box-title">
            <h4>Aboutフォーム</h4>
            <?=$this->Form->create($About) ?>
            <div>
                <?=$this->Form->control('content',[
                    'type'=>'textarea',
                    'label'=>'コンテンツ'
                    ]) ?>
            </div>
            <?=$this->Form->button('登録') ?>
            <?=$this->Form->end() ?>
        </div>

    </div>
</div>