<?php

require_once XOOPS_ROOT_PATH . '/modules/simplerss/language/' . $xoopsConfig['language'] . '/main.php';
require_once XOOPS_ROOT_PATH . '/class/snoopy.php';
require_once XOOPS_ROOT_PATH . '/modules/simplerss/blocks/rss_fetch.inc';
define('MAGPIE_CACHE_DIR', XOOPS_ROOT_PATH . '/cache');

function b_simplerss_convert_encoding(&$text, $from, $to, $opt = 0)
{
    $result = &$text;

    if (function_exists('mb_convert_encoding')) {
        $result = mb_convert_encoding($text, $to, $from);
    } elseif (function_exists('iconv')) {
        $result = iconv($from, $to, $text);
    }

    if (0 == $opt) {
        return htmlspecialchars($result, ENT_QUOTES | ENT_HTML5);
    }
  

    return $result;
}

function b_simplerss_not_empty($key, $array)
{
    return (array_key_exists($key, $array) && !empty($array[$key]));
}

function b_simplerss_show($options)
{
    $result = [];

    $result['url'] = $options[0];

    $result['max_display_num'] = (isset($options[1])) ? (int)$options[1] : 10;

    $encoding = $options[2] ?? 'auto';

    $rss = fetch_rss($result['url'], $encoding, _CHARSET);

    $result['title'] = b_simplerss_convert_encoding($rss->channel['title'], $encoding, _CHARSET, $options[3]);

    $result['link'] = (b_simplerss_not_empty('link', $rss->channel)) ? b_simplerss_convert_encoding($rss->channel['link'], $encoding, _CHARSET, 0) : $result['url'];

    $i = 0;

    if (!empty($rss->items) && (is_array($rss->items)) && (count($rss->items) > 0)) {
        foreach ($rss->items as $item) {
            $result['data'][$i]['text'] = '&lt;empty title&gt;';

            $result['data'][$i]['description'] = '';

            if (b_simplerss_not_empty('title', $item)) {
                $result['data'][$i]['text'] = b_simplerss_convert_encoding($item['title'], $encoding, _CHARSET, $options[3]);
            }

            if (b_simplerss_not_empty('description', $item)) {
                $result['data'][$i]['description'] = b_simplerss_convert_encoding($item['description'], $encoding, _CHARSET, $options[3]);
            }

            $result['data'][$i]['link'] = b_simplerss_convert_encoding($item['link'], $encoding, _CHARSET, 0);

            $i++;
        }
    } else {
        $result['title'] = SIMPLERSS_CANNOT_GET_RSS;
    }

    // print_r($rss);

    return $result;
}

function b_simplerss_edit($options)
{
    $form = "<table width=100% border=0 cellspacing='1'>";

    $form .= "<tr>\n";

    $form .= '<td>' . SIMPLERSS_URL . "</td>\n";

    $form .= "<td><input type='text' name='options[0]' value='" . $options[0] . "' size='40'></td>\n";

    $form .= "</tr>\n";

    $form .= "<tr>\n";

    $form .= '<td>' . SIMPLERSS_MAX_DISPLAY_NUM . "</td>\n";

    $form .= "<td><input type='text' name='options[1]' value='" . $options[1] . "'></td>\n";

    $form .= "</tr>\n";

    $form .= "<tr>\n";

    $form .= '<td>' . SIMPLERSS_CHAR_ENCODING . "</td>\n";

    $form .= "<td><select name='options[2]'>\n";

    $form .= "<option value='auto'" . (('auto' == $options[2]) ? ' checked' : '') . ">auto</option>\n";

    $form .= "<option value='utf-8'" . (('utf-8' == $options[2]) ? ' checked' : '') . ">utf-8</option>\n";

    $form .= "<option value='euc-jp'" . (('euc-jp' == $options[2]) ? ' checked' : '') . ">euc-jp</option>\n";

    $form .= "<option value='sjis'" . (('sjis' == $options[2]) ? ' checked' : '') . ">sjis</option>\n";

    $form .= "</select>\n";

    $form .= "</td>\n";

    $form .= "</tr>\n";

    $form .= "<tr>\n";

    $form .= '<td>' . _MD_SIMPLERSS_ALLOW_HTML_TAG . "</td>\n";

    $form .= "<td><select name='options[3]'>\n";

    $form .= "<option value='1'" . (('1' == $options[3]) ? ' checked' : '') . ">yes</option>\n";

    $form .= "<option value='0'" . (('0' == $options[3]) ? ' checked' : '') . ">no</option>\n";

    $form .= "</select>\n";

    $form .= "</td>\n";

    $form .= "</tr>\n";

    $form .= "</table>\n";

    return $form;
}
