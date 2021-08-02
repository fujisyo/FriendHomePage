<!-- to-top -->
<p class="to-top">
    <a href="#top"><i class="fas fa-arrow-up"></i></a>
</p>
<!-- footer -->
<footer class="cf">
    <nav class="footer">
        <ul class="cf">
            <li><?=$this->html->link('About',['action'=>'about'],['class'=>'about']) ?></li>
            <li><?=$this->html->link('Work',['action'=>'work'],['class'=>'work']) ?></li>
            <li><?=$this->html->link('Blog',['action'=>'blog'],['class'=>'blog']) ?></li>
            <li><?=$this->html->link('Contact',['action'=>'contact'],['class'=>'contact']) ?></li>
        </ul>
    </nav>
    <p class="copyright">
        <small>© UNDERLINE All rights reserved.</small>
    </p>
</footer>