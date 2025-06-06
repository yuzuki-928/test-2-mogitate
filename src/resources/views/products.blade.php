<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>もぎたて</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/products.css" />
</head>

<body>
    <header class="header">
        <p>mogitate</p>
    </header>

    <div class="flex__head">
        <h1>商品一覧</h1>
        <button class="item__input" onclick="location.href='register.blade.php'">+商品を追加</button>
    </div>

    <div class="main">
        <div class="side__menu">
            <div>
                <form action="サイトURL" method="get">
                    <input type="search" name="search" placeholder="商品名で検索" />
                    <input type="submit" name="submit" value="検索" />
                </form>
                <h2>価格順で表示</h2>
                <FORM name="form2" />
                <SELECT name="select">
                    <option SELECTED> 価格で並べ替え</option>
                    <option value="http://www.yahoo.co.jp/">高い順に表示</option>
                    <option value="http://www.google.co.jp/">低い順に表示</option>
                </SELECT>
            </div>
        </div>

        <div class="flex__item wrap">
            <div class="fruit__card">
                <a href="#" class="button__card">
                <div class="card__img">
                    <img src="{{ asset('img/kiwi.png') }}" alt="" />
                </div>
                <div class="card__content">
                        <p class="card__name">キウイ</p>
                        <p class="card__place">￥800</p>
                </div>
                </a>
            </div>

            <div class="fruit__card">
                <a href="#" class="button__card">
                <div class="card__img">
                    <img src="{{ asset('img/strawberry.png') }}" alt="" />
                </div>
                <div class="card__content">
                        <p class="card__name">ストロベリー</p>
                        <p class="card__place">￥1200</p>
                </div>
            </div>

            <div class="fruit__card">
                <a href="#" class="button__card">
                <div class="card__img">
                    <img src="{{ asset('img/orange.png') }}" alt="" />
                </div>
                <div class="card__content">
                        <p class="card__name">オレンジ</p>
                        <p class="card__place">￥850</p>
                </div>
            </div>

            <div class="fruit__card">
                <a href="#" class="button__card">
                <div class="card__img">
                    <img src="{{ asset('img/watermelon.png') }}" alt="" />
                </div>
                <div class="card__content">
                        <p class="card__name">スイカ</p>
                        <p class="card__place">￥700</p>
                </div>
            </div>

            <div class="fruit__card">
                <a href="#" class="button__card">
                <div class="card__img">
                    <img src="{{ asset('img/peach.png') }}" alt="" />
                </div>
                <div class="card__content">
                        <p class="card__name">ピーチ</p>
                        <p class="card__place">￥1000</p>
                </div>
            </div>

            <div class="fruit__card">
                <a href="#" class="button__card">
                <div class="card__img">
                    <img src="{{ asset('img/muscat.png') }}" alt="" />
                </div>
                <div class="card__content">
                        <p class="card__name">シャインマスカット</p>
                        <p class="card__place">￥1400</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>