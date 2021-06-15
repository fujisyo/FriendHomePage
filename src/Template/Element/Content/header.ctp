<header id="top" class="header">
    <h1 class="header-title">あああああああ</h1>
    <nav class="header-menu">
        <ul>
            <li><?=$this->html->link('About',['action'=>'about'],['class'=>'about']) ?></li>
            <li><?=$this->html->link('Work',['action'=>'work'],['class'=>'work']) ?></li>
            <li><?=$this->html->link('Blog',['action'=>'blog'],['class'=>'blog']) ?></li>
            <li><?=$this->html->link('Contact',['action'=>'contact'],['class'=>'contact']) ?></li>
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