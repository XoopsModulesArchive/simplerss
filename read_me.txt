
$Id: read_me.txt,v 1.1 2006/03/20 16:19:24 mikhail Exp $

標準のヘッドラインを非常にシンプルにしただけのxoopsモジュールです。
2.0.5で確認しています。
バージョン1系はまったく考慮されていません。
	
■インストール
	$xoops_home/modules配下にこのフォルダをコピーし、xoopsの管理画面からインストールしてください。
	その後、管理画面のブロック管理で表示したいブロックに表示してください。

■機能
	・RDFのURLをいれておけば、自動でニュース(?)みたいなものを拾ってきてくれる。
	・RDFの文字コードを指定できる
	・最大表示数を設定できる。

■注意点
	・自前でキャッシュをもっていないので、ブロックキャッシュを使ってください。
	・RSSのURLが異常に長い(180byte以上)と正しく登録できません(仕様)
	
■その他
	このモジュールではRSSパーサとして
	MagpieRSS(http://magpierss.sourceforge.net/)を使用しています。
	

■連絡先
	http://xoops-modules.sourceforge.jp/
	http://sourceforge.jp/projects/xoops-modules/