
<?=$this->html->css('content_index') ?>
<!-- <?=$this->html->css('https://use.fontawesome.com/releases/v5.6.1/css/all.css') ?> -->

<div class="box">
    <div class="box_image">
        <?=$this->html->image('slide.jpg',[
            'class' => 'slide_image'
        ]) ?>
        <ul class="box_image_link">
            <li><?=$this->html->link('プロフィール','#',['class' => 'link']) ?></li>
            <li><?=$this->html->link('実績','#',['class' => 'link']) ?></li>
            <li><?=$this->html->link('お問い合わせ','#',['class' => 'link']) ?></li>
        </ul>
    </div>
    <div class="box_profile">
        <?=$this->html->image('face1.png',['class' => 'face_image img_margin_bottom img_margin_top']) ?>
        <h1 class="greeting">こんにちは</h1>
        <div class="box_profile_message">
            <p class="text_font_size text_color">あｋｈｈふぁｊｋｈｄふぁふぁふぁがｄががげがええあｇｈｒｆｈｋｆｈ</p>
        </div>
    </div>
    <div class="box_work">
        <h2 class="contents_title">こういうことします</h2>
        <div class="box_work_menu">
            <?=$this->html->image('face1.png',['class' => 'face_image img_margin_right']) ?>
            <div class="greeting box_work_menu_message">
                yahho
                <p class="box_work_menu_message_text text_font_size text_color">固定費の削減</p>
            </div>
        </div>
        <div class="box_work_menu">
            <div class="greeting box_work_menu_message">
                yahho
                <p class="box_work_menu_message_text text_font_size text_color">;lfk;lsj;jhl;kjhslkjlk;jkjrslkfjlsk;jhoijeskjlkjyriopjyouoihjhfslhkl:;khs:k;:</p>
            </div>
            <?=$this->html->image('face1.png',['class' => 'face_image img_margin_left']) ?>
        </div>
    </div>
    <div class="box_contact">
        <h2 class="contents_title">お問い合わせ</h2>
        <div class="greeting box_contact_message">
            お困りさんなら
            <p class="box_contact_message_text text_font_size text_color">ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
        </div>
        <div class="box_contact_mail">
            <div class="box_contact_mail_space">
                <a href="" class="btn_link">
                    <i class="far fa-envelope"></i>
                    <p class="box_contact_mail_space_text text_font_size">問い合わせる</p>
                </a>
            </div>
        </div>
    </div>
    <div class="box_footer">
        <ul class="box_footer_list">
            <li><?=$this->html->link('twitter','#',['class' => 'link footer_link']) ?></li>
            <li><?=$this->html->link('instagram','#',['class' => 'link footer_link']) ?></li>
            <li><?=$this->html->link('facebook','#',['class' => 'link footer_link']) ?></li>
        </ul>
        <p class="box_footer_copylight">2017 © o-saka</p>
    </div>
</div>