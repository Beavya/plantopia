<footer class="footer" id="footer">
    <div class="footer-content">
        <div class="footer-brand">
            <a href="{{ route('home') }}" class="footer-logo">
                <img src="{{ asset('assets/img/icon/logo-green.svg') }}" alt="plantopia">
            </a>
            <div class="footer-social">
                <a href="#"><img src="{{ asset('assets/img/icon/email-white.svg') }}" alt="email"></a>
                <a href="#"><img src="{{ asset('assets/img/icon/telegram.svg') }}" alt="telegram"></a>
                <a href="#"><img src="{{ asset('assets/img/icon/vk.svg') }}" alt="vk"></a>
            </div>
        </div>

        <nav class="footer-nav">
            <span>Главная страница</span>
            <a href="{{ route('home') }}#catalog">Растения</a>
            <a href="{{ route('home') }}#about-us">О нас</a>
            <a href="{{ route('home') }}#footer">Контакты</a>
        </nav>

        <nav class="footer-nav">
            <span>Личный кабинет</span>
            <a href="#">Коллекция</a>
            <a href="{{ route('settings') }}">Настройки</a>
        </nav>
    </div>
</footer>
