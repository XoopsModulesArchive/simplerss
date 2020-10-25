<?php
// $Id: xoops_version.php,v 1.1 2006/03/20 16:19:24 mikhail Exp $

$modversion['name'] = _MI_SIMPLERSS_NAME;
$modversion['version'] = '0.13';
$modversion['description'] = _MI_SIMPLERSS_DESC;
$modversion['credits'] = '';
$modversion['author'] = '<a href=\"http://xoops-modules.sourceforge.jp/" target="_blank">xoops-modules project</a>';
$modversion['help'] = '';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'logo.gif';
$modversion['dirname'] = 'simplerss';

//Admin things
$modversion['hasAdmin'] = 0;
$modversion['hasMain'] = 0;

// Blocks
$modversion['blocks'][1]['file'] = 'simplerss_top.php';
$modversion['blocks'][1]['name'] = _MI_SIMPLERSS_NAME . '1';
$modversion['blocks'][1]['description'] = _MI_SIMPLERSS_DESC . '1';
$modversion['blocks'][1]['show_func'] = 'b_simplerss_show';
$modversion['blocks'][1]['edit_func'] = 'b_simplerss_edit';
$modversion['blocks'][1]['options'] = 'http://jp.xoops.org/backend.php|10|utf-8|0';
$modversion['blocks'][1]['template'] = 'simplerss_block1.html';

$modversion['blocks'][2]['file'] = 'simplerss_top.php';
$modversion['blocks'][2]['name'] = _MI_SIMPLERSS_NAME . '2';
$modversion['blocks'][2]['description'] = _MI_SIMPLERSS_DESC . '2';
$modversion['blocks'][2]['show_func'] = 'b_simplerss_show';
$modversion['blocks'][2]['edit_func'] = 'b_simplerss_edit';
$modversion['blocks'][2]['options'] = 'http://rss.bulknews.net/tb/whatsnew.xml|3|utf-8|0';
$modversion['blocks'][2]['template'] = 'simplerss_block2.html';

$modversion['blocks'][3]['file'] = 'simplerss_top.php';
$modversion['blocks'][3]['name'] = _MI_SIMPLERSS_NAME . '3';
$modversion['blocks'][3]['description'] = _MI_SIMPLERSS_DESC . '3';
$modversion['blocks'][3]['show_func'] = 'b_simplerss_show';
$modversion['blocks'][3]['edit_func'] = 'b_simplerss_edit';
$modversion['blocks'][3]['options'] = 'http://www.find-job.net/rss/programmer.rdf|10|utf-8|0';
$modversion['blocks'][3]['template'] = 'simplerss_block3.html';

$modversion['blocks'][4]['file'] = 'simplerss_top.php';
$modversion['blocks'][4]['name'] = _MI_SIMPLERSS_NAME . '4';
$modversion['blocks'][4]['description'] = _MI_SIMPLERSS_DESC . '4';
$modversion['blocks'][4]['show_func'] = 'b_simplerss_show';
$modversion['blocks'][4]['edit_func'] = 'b_simplerss_edit';
$modversion['blocks'][4]['options'] = 'http://pukiwiki.org/?cmd=rss|10|utf-8|0';
$modversion['blocks'][4]['template'] = 'simplerss_block4.html';

$modversion['blocks'][5]['file'] = 'simplerss_top.php';
$modversion['blocks'][5]['name'] = _MI_SIMPLERSS_NAME . '5';
$modversion['blocks'][5]['description'] = _MI_SIMPLERSS_DESC . '5';
$modversion['blocks'][5]['show_func'] = 'b_simplerss_show';
$modversion['blocks'][5]['edit_func'] = 'b_simplerss_edit';
$modversion['blocks'][5]['options'] = 'http://bulknews.net/rss/rdf.cgi?Asahi|10|utf-8|0';
$modversion['blocks'][5]['template'] = 'simplerss_block5.html';

$modversion['blocks'][6]['file'] = 'simplerss_top.php';
$modversion['blocks'][6]['name'] = _MI_SIMPLERSS_NAME . '6';
$modversion['blocks'][6]['description'] = _MI_SIMPLERSS_DESC . '6';
$modversion['blocks'][6]['show_func'] = 'b_simplerss_show';
$modversion['blocks'][6]['edit_func'] = 'b_simplerss_edit';
$modversion['blocks'][6]['options'] = 'http://rss-jp.net/x/macpage.cgi|10|utf-8|0';
$modversion['blocks'][6]['template'] = 'simplerss_block6.html';

$modversion['blocks'][7]['file'] = 'simplerss_top.php';
$modversion['blocks'][7]['name'] = _MI_SIMPLERSS_NAME . '1' . _MI_SIMPLERSS_SHOW_DESC;
$modversion['blocks'][7]['description'] = _MI_SIMPLERSS_DESC . '1' . _MI_SIMPLERSS_SHOW_DESC;
$modversion['blocks'][7]['show_func'] = 'b_simplerss_show';
$modversion['blocks'][7]['edit_func'] = 'b_simplerss_edit';
$modversion['blocks'][7]['options'] = 'http://www.myblog.jp/blogs.rdf?type=rss1.0|4|utf-8|0';
$modversion['blocks'][7]['template'] = 'simplerss_block1d.html';

$modversion['blocks'][8]['file'] = 'simplerss_top.php';
$modversion['blocks'][8]['name'] = _MI_SIMPLERSS_NAME . '2' . _MI_SIMPLERSS_SHOW_DESC;
$modversion['blocks'][8]['description'] = _MI_SIMPLERSS_DESC . '2' . _MI_SIMPLERSS_SHOW_DESC;
$modversion['blocks'][8]['show_func'] = 'b_simplerss_show';
$modversion['blocks'][8]['edit_func'] = 'b_simplerss_edit';
$modversion['blocks'][8]['options'] = 'http://jp.xoops.org/backend.php|4|utf-8|0';
$modversion['blocks'][8]['template'] = 'simplerss_block1d.html';
