<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>もぎたて</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/register.css" />
</head>

<body>
    <header class="header">
        <p>mogitate</p>
    </header>

    <div class="main">
        <h1>商品登録</h1>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品名</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name--text" class="name--text" placeholder="商品名を入力" />
                </div>
                <div class="form__error">
                    @error('name--text')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">値段</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="price--text" class="price--text" placeholder="値段を入力" />
                </div>
                <div class="form__error">
                    @error('price--text')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品画像</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="file" name="fruit--img" class="fruit--img" />
                </div>
                <div class="form__error">
                    @error('fruit--img')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">季節</span>
                <span class="form__label--required">必須</span>
                <span class="form__label--required--1">複数選択可</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="checkbox" name="season" class="season" value="春" />春</span class="space">
                    <input type="checkbox" name="season" class="season" value="夏" />夏</span class="space">
                    <input type="checkbox" name="season" class="season" value="秋" />秋</span class="space">
                    <input type="checkbox" name="season" class="season" value="冬" />冬</span class="space">
                </div>
                <div class="form__error">
                    @error('season')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品説明</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="descride--text" class="descride--text" placeholder="商品の説明を入力" />
                </div>
                <div class="form__error">
                    @error('descride--text')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">戻る</button>
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </div>
</body>
</html>