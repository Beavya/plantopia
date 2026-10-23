@extends('layouts.main')

@section('title', 'Главная')

@section('content')
    <div class="container-main-banner-header">
        <header id="header">
            <img class="header-burger" src="{{ asset('assets/img/icon/burger-menu-white.svg') }}" alt="menu">
            <div class="header-logo">
                <img src="{{ asset('assets/img/icon/logo-white.svg') }}" alt="plantopia">
            </div>
            <nav class="header-nav">
                <a href="#catalog">Растения</a>
                <a href="#about-us">О нас</a>
                <a href="#footer">Контакты</a>
            </nav>
        </header>

        <section class="main-banner">
            <h2>Магия растений открыта для каждого.</h2>
            <h1><span>Plantopia</span> — твой портал в этот мир.</h1>
            <div class="main-banner-text">
                <p>Начни собирать растения, которые тебе по душе. Учись ухаживать за ними и находи необычные сорта. Каждый из них добавит жизни твоему пространству.</p>
            </div>
            <div class="main-banner-actions">
                <a href="{{ route('settings') }}">Профиль</a>
            </div>
        </section>
    </div>

    <main>
        <div class="container-catalog-about-us">
            <section id="catalog">
                <div class="catalog-header">
                    <div class="catalog-controls">
                        <form class="catalog-search-form">
                            <input type="text" placeholder="Найти"/>
                            <button type="submit"><img src="{{ asset('assets/img/icon/search.svg') }}" alt="search"></button>
                        </form>
                        <div class="catalog-sort">
                            <button>
                                Сортировка: <span>Название</span>
                                <img src="{{ asset('assets/img/icon/arrow-sort.svg') }}" alt="open" class="sort-arrow">
                            </button>
                            <ul class="sort-dropdown">
                                <li data-value="name">Название</li>
                                <li data-value="care">Сложность ухода</li>
                                <li data-value="light">Светолюбивость</li>
                                <li data-value="size">Размер</li>
                                <li data-value="moisture">Влаголюбивость</li>
                            </ul>
                        </div>
                    </div>
                    <div class="catalog-filter">
                        <button class="catalog-filter-item-active">Все растения</button>
                        <button>Цветущие</button>
                        <button>Суккуленты</button>
                        <button>Плодовые</button>
                        <button>Хищные</button>
                        <button>Декоративно-лиственные</button>
                    </div>
                </div>

                <div class="catalog-list">
                    <article class="plant-card big-card">
                        <img class="plant-card-img" src="{{ asset('assets/img/plants/washingtonia.png') }}" alt="washingtonia">
                        <div class="plant-card-content">
                            <div class="plant-card-info">
                                <h3>Вашингтония</h3>
                                <p>Веерная пальма, которая привносит...</p>
                            </div>
                            <div class="plant-card-actions">
                                <img src="{{ asset('assets/img/icon/book-white.svg') }}" alt="collection">
                                <img src="{{ asset('assets/img/icon/heart-white.svg') }}" alt="favorites">
                                <img src="{{ asset('assets/img/icon/pencil-white.svg') }}" alt="note">
                            </div>
                        </div>
                    </article>

                    <article class="plant-card">
                        <img class="plant-card-img" src="{{ asset('assets/img/plants/murraya.png') }}" alt="murraya">
                        <div class="plant-card-content">
                            <div class="plant-card-info">
                                <h3>Муррайя</h3>
                                <p>Вечнозеленое растение...</p>
                            </div>
                            <div class="plant-card-actions">
                                <img src="{{ asset('assets/img/icon/book-purple.svg') }}" alt="collection">
                                <img src="{{ asset('assets/img/icon/heart-white.svg') }}" alt="favorites">
                                <img src="{{ asset('assets/img/icon/pencil-white.svg') }}" alt="note">
                            </div>
                        </div>
                    </article>

                    <article class="plant-card">
                        <img class="plant-card-img" src="{{ asset('assets/img/plants/rhipsalis.png') }}" alt="rhipsalis">
                        <div class="plant-card-content">
                            <div class="plant-card-info">
                                <h3>Рипсалис</h3>
                                <p>Неприхотливый кактус...</p>
                            </div>
                            <div class="plant-card-actions">
                                <img src="{{ asset('assets/img/icon/book-white.svg') }}" alt="collection">
                                <img src="{{ asset('assets/img/icon/heart-purple.svg') }}" alt="favorites">
                                <img src="{{ asset('assets/img/icon/pencil-white.svg') }}" alt="note">
                            </div>
                        </div>
                    </article>

                    <article class="plant-card">
                        <img class="plant-card-img" src="{{ asset('assets/img/plants/dracaena-draco.png') }}" alt="dracaena draco">
                        <div class="plant-card-content">
                            <div class="plant-card-info">
                                <h3>Дерево дракона</h3>
                                <p>Медленно растущее...</p>
                            </div>
                            <div class="plant-card-actions">
                                <img src="{{ asset('assets/img/icon/book-white.svg') }}" alt="collection">
                                <img src="{{ asset('assets/img/icon/heart-white.svg') }}" alt="favorites">
                                <img src="{{ asset('assets/img/icon/pencil-white.svg') }}" alt="note">
                            </div>
                        </div>
                    </article>

                    <article class="plant-card">
                        <img class="plant-card-img" src="{{ asset('assets/img/plants/orchid.png') }}" alt="orchid">
                        <div class="plant-card-content">
                            <div class="plant-card-info">
                                <h3>Орхидея</h3>
                                <p>Царица цветов...</p>
                            </div>
                            <div class="plant-card-actions">
                                <img src="{{ asset('assets/img/icon/book-purple.svg') }}" alt="collection">
                                <img src="{{ asset('assets/img/icon/heart-white.svg') }}" alt="favorites">
                                <img src="{{ asset('assets/img/icon/pencil-purple.svg') }}" alt="note">
                            </div>
                        </div>
                    </article>

                    <article class="plant-card">
                        <img class="plant-card-img" src="{{ asset('assets/img/plants/chlorophytum.png') }}" alt="chlorophytum">
                        <div class="plant-card-content">
                            <div class="plant-card-info">
                                <h3>Хлорофитум</h3>
                                <p>Неприхотливый...</p>
                            </div>
                            <div class="plant-card-actions">
                                <img src="{{ asset('assets/img/icon/book-white.svg') }}" alt="collection">
                                <img src="{{ asset('assets/img/icon/heart-white.svg') }}" alt="favorites">
                                <img src="{{ asset('assets/img/icon/pencil-white.svg') }}" alt="note">
                            </div>
                        </div>
                    </article>

                    <article class="plant-card">
                        <img class="plant-card-img" src="{{ asset('assets/img/plants/violet.png') }}" alt="violet">
                        <div class="plant-card-content">
                            <div class="plant-card-info">
                                <h3>Фиалка</h3>
                                <p>Компактное растение...</p>
                            </div>
                            <div class="plant-card-actions">
                                <img src="{{ asset('assets/img/icon/book-white.svg') }}" alt="collection">
                                <img src="{{ asset('assets/img/icon/heart-white.svg') }}" alt="favorites">
                                <img src="{{ asset('assets/img/icon/pencil-white.svg') }}" alt="note">
                            </div>
                        </div>
                    </article>

                    <article class="plant-card">
                        <img class="plant-card-img" src="{{ asset('assets/img/plants/crassula.png') }}" alt="crassula">
                        <div class="plant-card-content">
                            <div class="plant-card-info">
                                <h3>Толстянка</h3>
                                <p>Символ богатства...</p>
                            </div>
                            <div class="plant-card-actions">
                                <img src="{{ asset('assets/img/icon/book-white.svg') }}" alt="collection">
                                <img src="{{ asset('assets/img/icon/heart-purple.svg') }}" alt="favorites">
                                <img src="{{ asset('assets/img/icon/pencil-white.svg') }}" alt="note">
                            </div>
                        </div>
                    </article>

                    <article class="plant-card">
                        <img class="plant-card-img" src="{{ asset('assets/img/plants/schlumbergera.png') }}" alt="schlumbergera">
                        <div class="plant-card-content">
                            <div class="plant-card-info">
                                <h3>Шлюмбергера</h3>
                                <p>Лесной кактус...</p>
                            </div>
                            <div class="plant-card-actions">
                                <img src="{{ asset('assets/img/icon/book-white.svg') }}" alt="collection">
                                <img src="{{ asset('assets/img/icon/heart-white.svg') }}" alt="favorites">
                                <img src="{{ asset('assets/img/icon/pencil-white.svg') }}" alt="note">
                            </div>
                        </div>
                    </article>
                </div>

                <div class="catalog-pagination">
                    <div class="catalog-pagination-item-active">1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <div><img src="{{ asset('assets/img/icon/pagination-next.svg') }}" alt="next"></div>
                    <div><img src="{{ asset('assets/img/icon/pagination-end.svg') }}" alt="end"></div>
                </div>
            </section>

            <section id="about-us">
                <div class="about-us-content">
                    <div class="about-us-image">
                        <img src="{{ asset('assets/img/book.png') }}" alt="book">
                    </div>
                    <div class="about-us-text">
                        <h2>Создай свой зелёный уголок</h2>
                        <p>Plantopia — это твой персональный гид в мире растений. Нажимай на картинку, чтобы открыть страницу из умной книги с советами по уходу. Здесь ты найдёшь правила полива, особенности освещения и интересные факты о каждом растении. Сохраняй понравившиеся экземпляры в свою коллекцию и создавай уникальную энциклопедию зелёных друзей.</p>
                        <p>Открывай книгу знаний о растениях легко и с удовольствием!</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
