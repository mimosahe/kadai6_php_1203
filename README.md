# 課題6 -PHP-

## ①課題内容（どんな作品か）
- 手持ち服の画像・情報（服の色、カテゴリなど）を登録し、一覧を表示するアプリ

## ②工夫した点・こだわった点
- 画像ファイルの登録・表示機能をつけた。
- 手持ち服の情報（アイテムID、画像ファイル名、服の色、カテゴリなど）を、アイテムIDをキーとした連想配列にした。

## ③難しかった点・次回トライしたいこと(又は機能)
- ユーザーが使いやすいように、画像ファイル（png,jpg/jpeg）であればアップロードできるようにしたが、画像格納時にpng形式に変換する（方法を見つける）のが大変だった。【write.php】
- 手持ち服登録時の画像のプレビュー機能の実装を、今後トライしたい。

## ④質問・疑問・感想、シェアしたいこと等なんでも
- [感想]Reactを使って書きたかったが、参考情報をあまり見つけられず、通常の方法で書いた。「ReactとPHPフレームワークのLaravelは相性良い」との情報をいくつも見たので、早くReactを使えるようにLaravelの予習を頑張りたい。
- [質問]サーバーに保存した情報を取得し表示させる際、無理矢理echoでhtmlを書きましたが、echoが何行も繰り返されるのが効率良くないように感じています。調べたところ、phpの中にhtmlを書く方法はいくつかあるようですが、ベストなorよく使われる書き方を知りたいです。【write.php】
- [参考記事]
    - PHPで画像を登録する
    https://www.youtube.com/playlist?list=PLCyDm9NTxdhJYNEcbTzq0cey5qEeGwK-3
    - 既存のjsonファイルに連想配列データを追加する
    https://teratail.com/questions/334322
    
