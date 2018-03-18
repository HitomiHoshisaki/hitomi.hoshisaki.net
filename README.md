# 説明
ほしさきひとみのポートフォリオサイト


# HTML/CSSコーディング規約

+ [こちらの記事](https://qiita.com/pugiemonn/items/964203782e1fcb3d02c3) の考え方をベースにする
+ [Google HTML/CSS Style Guide](https://google.github.io/styleguide/htmlcssguide.html) に準じる
+ CSS構成は [FLOCSS（フロックス）](https://github.com/hiloki/flocss) を採用する
+ utilityは [emma.css](https://github.com/ruedap/emma.css/blob/master/emma.css) を拝借する


# 命名規則マイルール

+ 命名規則は [BEM](https://qiita.com/pugiemonn/items/964203782e1fcb3d02c3) を採用する
+ CSSにはclassを使う
+ layoutもclassを使い、接頭辞"l-"をつける
+ JSにはできるだけidを使い、接頭辞"j-"をつける
+ .Block(そのまとまりで一番上の親要素)__Element(部品)--Modifier(状態)
+ 単語区切りはハイフン「-」
+ 特定の要素にのみ使用させたいクラスは、Element(部品)の末尾に「-要素名」
+ 特定の何かを囲みたいクラスは、Element(部品)の末尾に「-box」
+ Modifier(状態)のキーとバリューの区切りにはアンダーバー「_」


## HTMLマイルール

+ ひとかたまりとして見せたい場合(目安は5行以上)は、前後に1行だけ空ける
+ 1行はできるだけ80文字以内におさめる
+ セレクタを書く順番は、for → id → class → その他


## CSSマイルール

+ 基本的にフォントやmargin/padding等のサイズはrem単位で指定する
+ ブレイクポイント @media (min-width: 1200px) { Tablets + Desktops }
+ メディアクエリはその場その場で書き込んじゃう
+ 色は https://www.materialui.co/colors の 偶数を基本的に使う


## CSSコメントルール

```
/* ************************************************************
 * 大見出し（前後に空行）
 * ************************************************************ */
```
```
/* 中見出し(前後に空行) ************************************__**** */
```
```
/* 小見出し(前だけ空行) */
```
