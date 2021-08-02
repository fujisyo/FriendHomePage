<div class="inner">
    <div class="login">
        <h4 class="login-form">ログイン</h4>
        <?=$this->Form->create(null,['url'=>['action'=>'login']]) ?>
        <?=$this->Form->control('password',[
            'class'=>'login-password-form'
        ]) ?>
        <?=$this->Form->button('ログイン',[
            'class'=>'login-password-button'
        ]) ?>
        <?=$this->Form->end() ?>
    </div>
</div>