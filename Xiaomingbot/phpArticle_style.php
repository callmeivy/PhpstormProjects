<!--这是新闻详情页，有格式-->
<?php
require_once("conn.php");
$id = $_GET['art'];   //接收前端上传的数据，此处为文章的id值
//$id = 6;   //接收前端上传的数据，此处为文章的id值
$query="select  tdt_archives.title,tdt_archives.pubdate,tdt_archives.litpic,tdt_addonarticle.body from tdt_archives,
tdt_addonarticle where tdt_archives.id ='$id' and tdt_addonarticle.aid='$id'";
$qry_result=$mysqli->query($query);
if($rows=mysqli_fetch_object($qry_result)){}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <meta name="renderer" content="webkit" />
    <link rel="dns-prefetch" href="//s3.pstatp.com/" />
    <link rel="dns-prefetch" href="//s3a.pstatp.com/" />
    <link rel="dns-prefetch" href="//s3b.pstatp.com" />
    <link rel="dns-prefetch" href="//p1.pstatp.com/" />
    <link rel="dns-prefetch" href="//p3.pstatp.com/" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,minimal-ui" />
    <meta name="360-site-verification" content="b96e1758dfc9156a410a4fb9520c5956" />
    <meta name="360_ssp_verify" content="2ae4ad39552c45425bddb738efda3dbb" />
    <meta name="google-site-verification" content="3PYTTW0s7IAfkReV8wAECfjIdKY-bQeSkVTyJNZpBKE" />
    <meta name="shenma-site-verification" content="34c05607e2a9430ad4249ed48faaf7cb_1432711730" />
    <meta name="baidu_union_verify" content="b88dd3920f970845bad8ad9f90d687f7" />
    <meta name="domain_verify" content="pmrgi33nmfuw4ir2ej2g65lunfqw6ltdn5wselbcm52wszbchirdqyztge3tenrsgq3dknjume2tayrvmqytemlfmiydimddgu4gcnzcfqrhi2lnmvjwc5tfei5dcnbwhazdcobuhe2dqobrpu" />
    <link rel="shortcut icon" href="//s3a.pstatp.com/toutiao/resource/ntoutiao_web/static/image/favicon_8e9c9c7.ico" type="image/x-icon" />
    <!--[if lt IE 9]>
    <p>您的浏览器版本过低，请<a href="http://browsehappy.com/">升级浏览器</a></p>
    <![endif]-->
    <link rel="alternate" media="only screen and (max-width: 640px)" href="//m.toutiao.com/a6590815106714567176/" />
    <title><?php echo $rows->title?></title>
    <meta name="keywords" content="瓜尔达多,莱万特,萨尔瓦多,皇家贝蒂斯,莫拉莱斯" />
    <meta name="description" content="西甲第1轮皇家贝蒂斯迎战莱万特。在北京时间2018年8月18日4时15分打响。最终,莱万特3:0战胜皇家贝蒂斯，萨尔瓦多，莫拉莱斯为本队建功。" />
    <script src="//s3.pstatp.com/toutiao/monitor/sdk/slardar.js?ver=20171221_1" crossorigin="anonymous"></script>
    <script>window.Slardar && window.Slardar.install({
            sampleRate: 0.5,
            bid: 'toutiao_pc',
            pid: 'article_detail_new',
            ignoreAjax: [/\/action_log\//],
            ignoreStatic: [/\.tanx\.com\//, /\.alicdn\.com\//, /\.mediav\.com/, /\.cnzz\.com/]
        });</script>
    <link rel="stylesheet" href="//s3.pstatp.com/toutiao/static/css/page/index_node/index.28afad29effa040a453fe7e1eca52cef.css" />
    <script>!function(e){function t(a){if(o[a])return o[a].exports;var r=o[a]={exports:{},id:a,loaded:!1};return e[a].call(r.exports,r,r.exports,t),r.loaded=!0,r.exports}var a=window.webpackJsonp;window.webpackJsonp=function(c,n){for(var p,s,f=0,l=[];f<c.length;f++)s=c[f],r[s]&&l.push.apply(l,r[s]),r[s]=0;for(p in n)Object.prototype.hasOwnProperty.call(n,p)&&(e[p]=n[p]);for(a&&a(c,n);l.length;)l.shift().call(null,t);if(n[0])return o[0]=0,t(0)};var o={},r={0:0};t.e=function(e,a){if(0===r[e])return a.call(null,t);if(void 0!==r[e])r[e].push(a);else{r[e]=[a];var o=document.getElementsByTagName("head")[0],c=document.createElement("script");c.type="text/javascript",c.charset="utf-8",c.async=!0,c.src=t.p+"static/js/"+e+"."+{1:"860a0ae9346f791e892b",2:"224ff3fc8068e0aaeed2",3:"19a9cb17cc31a5f40c6d",4:"26d6a38eff4a9e8e7a65",5:"92091ae75cf981f6bbe2"}[e]+".js",o.appendChild(c)}},t.m=e,t.c=o,t.p="/toutiao/",t.p="//s3.pstatp.com/toutiao/"}([]);</script>
    <style type="text/css">@keyframes resizeanim { from { opacity: 0; } to { opacity: 0; } }
        .resize-triggers { animation: 1ms resizeanim; visibility: hidden; opacity: 0; }
        .resize-triggers, .resize-triggers > div, .contract-trigger:before { content: " "; display: block; position: absolute; top: 0; left: 0; height: 100%; width: 100%; overflow: hidden; }
        .resize-triggers > div { background: #eee; overflow: auto; }
        .contract-trigger:before { width: 200%; height: 200%; }</style>
    <style id="27c92e2">.imga_wrapper{position:relative;display:inline-block;}.imga_flag{display: inline-block;position: absolute;bottom: 8px;left: 8px;border: 1px solid #fff;color: #fff;font-size: 12px;line-height: 12px;height: 12px;padding: 1px 2px;text-align: center;}</style>
    <style id="f9c505e">
        .pane-module .picture-list .picture-item-a { margin-right: 12px; margin-bottom: 16px; }
        .jx-hi-container { display: block !important; }
        .jx-hi-container .imag-wrap { width: 144px; height: 84px; position: relative; }
        .jx-hi-container .imag-wrap img { width: 100%; height: 100% }
        .jx-hi-container .imag-wrap .tag { position: absolute; right: 8px; bottom: 8px; padding: 0 6px;
            border-radius: 10px; background: #000; background: rgba(0, 0, 0, .7); color: #fff; line-height: 20px; }
        .jx-hi-container .ainfo { overflow: hidden; }
        .jx-hi-container .atitle { margin-top: 12px; height: 34px; font-size: 14px; color: #222; line-height: 18px;
            overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2;
            -webkit-box-orient: vertical; }
    </style>
    <style id="6c80c37">.bd-bottom-1{padding-left: 10px}</style>
    <style id="c537faf">.right-top-1{margin-bottom: 30px}</style>
    <style id="306a760">.right-top-2{margin-bottom: 30px}</style>
    <style id="7187f67">.right-top-3{margin-bottom: 30px}</style>
    <style id="85e22b6">.right-top-4{margin-bottom: 30px}</style>
    <style id="e126c00">.right-hover-1{position: fixed; top: 20px;} #imagindexhover ins {position: absolute !important}</style>
    <style id="3cb2ec6">.bd-bottom-1{padding-left: 10px}</style>
    <style type="text/css">@keyframes resizeanim { from { opacity: 0; } to { opacity: 0; } }
        .resize-triggers { animation: 1ms resizeanim; visibility: hidden; opacity: 0; }
        .resize-triggers, .resize-triggers > div, .contract-trigger:before { content: " "; display: block; position: absolute; top: 0; left: 0; height: 100%; width: 100%; overflow: hidden; }
        .resize-triggers > div { background: #eee; overflow: auto; }
        .contract-trigger:before { width: 200%; height: 200%; }</style>
    <style id="e448a65">.imga_wrapper{position:relative;display:inline-block;}.imga_flag{display: inline-block;position: absolute;bottom: 8px;left: 8px;border: 1px solid #fff;color: #fff;font-size: 12px;line-height: 12px;height: 12px;padding: 1px 2px;text-align: center;}</style>
    <style id="1b6485e">.right-top-1{margin-bottom: 30px}</style>
    <style id="2f1da9b">.right-top-2{margin-bottom: 30px}</style>
    <style id="e793e5a">.right-top-3{margin-bottom: 30px}</style>
    <style id="6236814">.right-top-4{margin-bottom: 30px}</style>
    <style id="05008b8">.right-hover-1{position: fixed; top: 20px;} #imagindexhover ins {position: absolute !important}</style>
    <style id="2a3b88d">.imga_wrapper{position:relative;display:inline-block;}.imga_flag{display: inline-block;position: absolute;bottom: 8px;left: 8px;border: 1px solid #fff;color: #fff;font-size: 12px;line-height: 12px;height: 12px;padding: 1px 2px;text-align: center;}</style>
    <style id="ed396cf">.right-top-1{margin-bottom: 30px}</style>
    <style id="e4ae118">.right-top-2{margin-bottom: 30px}</style>
    <style id="95a51a2">.right-top-3{margin-bottom: 30px}</style>
    <style id="3d53c57">.right-top-4{margin-bottom: 30px}</style>
    <style id="957e914">.right-hover-1{position: fixed; top: 20px;} #imagindexhover ins {position: absolute !important}</style>
</head>
<!--<body>-->
<!--<div class="artical-main">-->
<!--    <div class="content">-->
<!--<!--        <p class="title">-->--><?php ////echo ($rows['title'])?><!--<!--</p><!-- 如果想控制标题字数则使用下列方法-->--><?php //// echo strlen($rows['title'])>30? substr($rows['title'],0,30).'...':$rows['title'] ;  ?><!--<!---->-->-->
<!--        <p class="title">--><?php //echo ($rows->title)?><!--</p>-->
<!--<!--         如果想控制标题字数则使用下列方法-->-->
<!--<!--        <p class="time">-->--><?php ////echo ($rows['pubdate'])?><!--<!--</p>-->-->
<!--        <p class="time">--><?php //echo ($rows->pubdate)?><!--</p>-->
<!--        <p class="text">--><?php //echo ($rows->body)?><!--</p>-->
<!--    </div>-->
<!--</div>-->

<body>
<iframe style="width: 0px; height: 0px; display: none;" src="http://cdn.tanx.com/t/acookie/acbeacon2.html#mm_32479643_3494618_75352146"></iframe>
<iframe style="width: 0px; height: 0px; display: none;" src="https://phs.tanx.com/acbeacon4.html#mm_32479643_3494618_75352146"></iframe>
<div>
    <div class="toutiao-header">
        <div class="topbar">
            <!---->
            <div class="bui-left clearfix"></div>
            <div class="bui-right">
                <ul class="user-nav-list clearfix">
                    <!---->
                    <li class="new-article"><a href="//www.toutiao.com/c/user/102107331230/?publish=1" ga_event="ugc_write" target="_blank" class="tb-link">发文</a></li>
                    <li>
                        <div class="tt-dropdown">
                            <div class="tt-dropdown-link tb-link">
                                <a href="//www.toutiao.com/c/user/102107331230/" ga_event="mh_nav_user" target="_blank" rel="nofollow" class="user-name"><img src="//p3.pstatp.com/thumb/3791/5035712059" class="user-avatar" /> 手机用户102107331230</a>
                            </div>
                            <ul class="tt-dropdown-menu" style="display: none;">
                                <li class="tt-dropdown-menu__item"><a href="//www.toutiao.com/c/user/102107331230/?tab=favourite" target="_blank" rel="nofollow" class="layer-item">我的收藏</a></li>
                                <li class="tt-dropdown-menu__item"><a href="//www.toutiao.com/c/user/102107331230/?tab=following" target="_blank" rel="nofollow" class="layer-item">我的关注</a></li>
                                <li class="tt-dropdown-menu__item"><a href="//www.toutiao.com/c/user/relation/102107331230/?tab=followed" target="_blank" rel="nofollow" class="layer-item">我的粉丝</a></li>
                                <li class="tt-dropdown-menu__item tt-dropdown-menu__item--divided"><a href="https://sso.toutiao.com/logout/" rel="nofollow" class="layer-item">退出</a></li>
                            </ul>
                        </div></li>
                    <!---->
                    <li>
                        <div class="feedback">
                            <a href="javascript:void(0)" class="feedback-text">反馈</a>
                            <div class="tt-dialog__wrapper" style="display: none;">
                                <div class="tt-dialog tt-dialog--tiny" style="top: 15%;">
                                    <div class="tt-dialog__header">
                                        <span class="tt-dialog__title">意见反馈</span>
                                        <div class="tt-dialog__headerbtn">
                                            <i class="tt-dialog__close bui-icon icon-close_big"></i>
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="tt-dialog__footer">
            <span class="dialog-footer"><button type="button" class="tt-button tt-button--default">
              <!---->
                    <!----> <span>取消</span></button> <button type="button" class="tt-button submit tt-button--primary">
              <!---->
                    <!----> <span>确认</span></button></span>
                                    </div>
                                </div>
                            </div>
                        </div></li>
                    <li><a href="//www.toutiao.com/complain/" ga_event="mh_nav_complain" target="blank" class="tb-link">侵权投诉</a></li>
                    <li>
                        <div class="tt-dropdown">
                            <a href="javascript:;" class="tt-dropdown-link tb-link">头条产品</a>
                            <ul class="tt-dropdown-menu" style="display: none;">
                                <li class="tt-dropdown-menu__item"><a href="https://www.wukong.com/" target="_blank" ga_event="mh_nav_others" class="layer-item">问答</a></li>
                                <li class="tt-dropdown-menu__item"><a href="https://mp.toutiao.com/" target="_blank" ga_event="mh_nav_others" class="layer-item">头条号</a></li>
                                <li class="tt-dropdown-menu__item"><a href="https://tuchong.com?utm_source=toutiao&amp;utm_medium=pc_header" target="_blank" ga_event="mh_nav_others" class="layer-item">图虫</a></li>
                                <li class="tt-dropdown-menu__item"><a href="https://stock.tuchong.com/?source=ttweb" target="_blank" ga_event="mh_nav_others" class="layer-item">正版图库</a></li>
                                <li class="tt-dropdown-menu__item"><a href="https://ad.toutiao.com/promotion/?source2=pchometop" target="_blank" ga_event="mh_nav_ad" class="layer-item">广告投放</a></li>
                                <li class="tt-dropdown-menu__item"><a href="http://s.pstatp.com/site/motor/" target="_blank" ga_event="mh_nav_others" class="layer-item">懂车帝</a></li>
                            </ul>
                        </div></li>
                </ul>
            </div>
        </div>
        <div class="middlebar">
            <div class="middlebar-inner clearfix" style="width: 1170px;">
                <div class="bui-left logo-box">
                    <a href="/" ga_event="go_home" class="logo-link"><img src="//s3.pstatp.com/toutiao/static/img/logo.201f80d.png" class="logo" /></a>
                </div>
                <div class="bui-left chinese-tag">
                    <a href="/" target="_blank" ga_event="click_index">首页</a> /
                    <a href="/ch/news_sports/" target="_blank" ga_event="click_channel">体育</a> /
                    <span class="text">正文</span>
                </div>
                <div ga_event="middlebar_search" class="bui-right">
                    <div class="search-wrap">
                        <div class="tt-autocomplete">
                            <div class="tt-input tt-input-group tt-input-group--append">
                                <!---->
                                <!---->
                                <input placeholder="请输入要搜索的内容" autocomplete="off" class="tt-input__inner" type="text" />
                                <!---->
                                <div class="tt-input-group__append">
                                    <button type="button" class="tt-button tt-button--default">
                                        <!---->
                                        <!----> <span>搜索</span></button>
                                </div>
                            </div>
                            <div class="tt-autocomplete-suggestion" style="display: none;">
                                <div class="tt-scrollbar">
                                    <div class="tt-autocomplete-suggestion__wrap tt-scrollbar__wrap" style="margin-bottom: -12px; margin-right: -12px;">
                                        <ul class="tt-scrollbar__view tt-autocomplete-suggestion__list" style="position: relative;">
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 1px; height: 1px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="tt-scrollbar__bar is-horizontal">
                                        <div class="tt-scrollbar__thumb" style="transform: translateX(0%);"></div>
                                    </div>
                                    <div class="tt-scrollbar__bar is-vertical">
                                        <div class="tt-scrollbar__thumb" style="transform: translateY(0%);"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bui-box container">
        <div class="bui-left index-left">
            <div class="share-box share-box-fixed">
                <a href="#comment_area" ga_event="click_comment_anchor" class="share-count"><i class="bui-icon icon-comments_anchor" style="font-size: 30px; color: rgb(248, 89, 89);"></i> <span>0</span></a>
                <div class="share-hr"></div>
                <div ga_event="click_share_weibo" class="share-type">
                    <i class="bui-icon icon-sina" style="font-size: 34px; color: rgb(255, 102, 49);"></i>
                    <span>微博</span>
                </div>
                <div ga_event="click_share_qzone" class="share-type">
                    <i class="bui-icon icon-qzone" style="font-size: 34px; color: rgb(255, 189, 29);"></i>
                    <span>Qzone</span>
                </div>
                <div ga_event="click_share_weixin" class="share-type share-weixin">
                    <i class="bui-icon icon-wechat" style="font-size: 34px; color: rgb(82, 205, 62);"></i>
                    <span>微信</span>
                    <div class="share-qrcode">
                        <div id="J_qrcode"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bui-left index-middle">
            <div class="article-box">
                <h1 class="article-title"><?php echo ($rows->title)?></h1>
                <div class="article-sub">
                    <!---->
                    <span>AI小记者</span>
                    <span><?php echo ($rows->pubdate)?>/span>
                </div>
                <div class="article-content">
                    <p>(本文由机器写作机器人AI小记者撰写)</p>
                    <p><?php echo ($rows->body)?></p>
<!--                    <p>西甲 第1轮 皇家贝蒂斯迎战莱万特，在北京时间2018年8月18日4时15分打响。 最终, 莱万特3:0战胜皇家贝蒂斯，萨尔瓦多，莫拉莱斯为本队建功 。</p>-->
<!--                    <p>此役皇家贝蒂斯排出的阵型是3-5-2。守门员位置上是保罗-洛佩兹。后卫线方面曼迪，巴尔特拉和费达尔组合将肩负防守重任。卡纳莱斯，威廉-卡瓦略和瓜尔达多将出现在中前场。格雷罗的右路攻击线不容小觑。 另一方面，莱万特排出了4-4-2的阵型。首发门将是奥耶尔。杜库雷和坎帕尼亚构建中场屏障。莫拉莱斯和萨尔瓦多出现在锋线，担任箭头。 </p>-->
<!--                    <p>裁判起哨，全场比赛开始。 皇家贝蒂斯后场断球，一个大脚开到了前场。 第38分钟，莱万特率先取得进球，萨尔瓦多冷静施射，为母队抢得先机。 0-1！ 皇家贝蒂斯获得了一个角球，不过未能把握机会。 上半场很快结束了。 </p>-->
<!--                    <p> 第54分钟，莫拉莱斯把握良机，为莱万特再下一城。 0-2！ 第63分钟，萨纳布里亚替换下布德布兹。 此后，威廉 卡瓦略被换下，乾贵士替补登场。 第68分钟，普尔西奇替补出战。 第74分钟，莱万特做出人员调整，卢纳替换登场。 第82分钟，卢纳频繁的犯规招致一张黄牌。 第90分钟，莱万特试图重新调整下节奏，Raphael Dwamena替换杰森上场。 第90分钟，莫拉莱斯鲁莽的犯规，获得了一张黄牌。 第90分钟，皇家贝蒂斯防线再度失守，莫拉莱斯轻松打进一粒进球！ 0-3！ 终场哨响，全场比赛结束。</p>-->
<!--                    <p>本场比赛皇家贝蒂斯以75％的控球率控制全场。皇家贝蒂斯全场贡献16脚射门。另一边，莱万特流畅的配合，带来6脚射门。最终，全场战罢，皇家贝蒂斯0-3负于莱万特，未能取分。</p>-->
<!--                    <p>皇家贝蒂斯本场首发阵容（3-5-2）：13-保罗-洛佩兹 / 23-曼迪、5-巴尔特拉、4-费达尔 / 2-格雷罗、6-卡纳莱斯、14-威廉-卡瓦略、18-瓜尔达多、20-菲尔波 / 10-布德布兹、16-莫隆</p>-->
<!--                    <p>莱万特本场首发阵容（4-4-2）：13-奥耶尔 / 12-科克、15-塞尔吉奥、6-切马、3-托尼奥 / 23-杰森、5-杜库雷、24-坎帕尼亚、10-巴尔迪 / 11-莫拉莱斯、9-萨尔瓦多</p>-->
                </div>
                <!---->
                <div class="bui-box article-tag">
                    <div class="bui-left">
                        <i class="bui-icon icon-tag" style="font-size: 21px; color: rgb(202, 202, 202);"></i>
                        <ul class="tag-list">
                            <li class="tag-item"><a href="/search/?keyword=西甲" target="_blank" class="label-link">西甲</a></li>
                            <li class="tag-item"><a href="/search/?keyword=莱万特" target="_blank" class="label-link">莱万特</a></li>
                            <li class="tag-item"><a href="/search/?keyword=皇家贝蒂斯" target="_blank" class="label-link">皇家贝蒂斯</a></li>
                            <li class="tag-item"><a href="/search/?keyword=足球" target="_blank" class="label-link">足球</a></li>
                            <li class="tag-item"><a href="/search/?keyword=巴尔特拉" target="_blank" class="label-link">巴尔特拉</a></li>
                        </ul>
                    </div>
                    <div class="bui-right">
                        <div class="repin">
                            <i class="bui-icon icon-favorite_line" style="font-size: 18px; color: rgb(202, 202, 202);"></i>
                            <span>收藏</span>
                        </div>
                        <div class="report">
                            <div class="areport">
                                <i class="bui-icon icon-report" style="font-size: 14px; color: rgb(202, 202, 202);"></i>
                                <span>举报</span>
                            </div>
                            <div class="tt-dialog__wrapper" style="display: none;">
                                <div class="tt-dialog tt-dialog--tiny" style="top: 15%;">
                                    <div class="tt-dialog__header">
                                        <span class="tt-dialog__title">举报文章问题</span>
                                        <div class="tt-dialog__headerbtn">
                                            <i class="tt-dialog__close bui-icon icon-close_big"></i>
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="tt-dialog__footer">
            <span class="dialog-footer"><button type="button" class="tt-button tt-button--default">
              <!---->
                    <!----> <span>取消</span></button> <button type="button" class="tt-button tt-button--primary">
              <!---->
                    <!----> <span>确认</span></button></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div ad-cursor="" name="adetail_main*bottom_1" id="J_ad_baidu_bottom" class="bd-bottom-1" ad_name="h_640*60_TB_146" done="1" show="">
                <script src="//p.tanx.com/ex?i=mm_32479643_3494618_75352146" id="tanx-s-mm_32479643_3494618_75352146" charset="gbk"></script>
                <script charset="utf-8" src="http://atanx.alicdn.com/t/tanxssp.js?_v=12"></script>
                <ins style="display:inline-block;padding:0;margin:0;width:640px;height:90px;*zoom:1;*display:inline; position:relative;" id="tanxssp-outer-conmm_32479643_3494618_75352146"></ins>
                <a style="display:none;" id="tanx-a-mm_32479643_3494618_75352146"></a>
                <script src="http://ope.tanx.com/ex?i=mm_32479643_3494618_75352146&amp;cb=jsonp_callback_55250&amp;callback=&amp;userid=&amp;o=&amp;f=&amp;n=&amp;r=&amp;cg=abd165761142c2fe54fa1aadc198440d&amp;pvid=a3ef22d4f60ca811ac39602151eec8b3&amp;u=http%3A%2F%2Flocalhost%3A63343%2FPhpstormProjects%2FXiaomingbot%2Fbody.html%3F_ijt%3Dv25l5f8trohi44uoll2538lf06&amp;psl=0&amp;fp=1.HDlU6qI9D-VqoIi2F9QK0B1XCrAoc_h6Yj1bu2KRmOlNikjOWLxhWU.UTF-8.v6RiZXAEg03gjIdvFo4W6DbtQuLGCCQw9aaAuDQpLGEbgw4HKCeTmIMF2gsHKAIRoNmKQA.Q.2dhs2c"></script>
                <script charset="utf-8" src="https://atanx.alicdn.com/t/tanxssp.js?_v=12"></script>
                <ins style="display:inline-block;padding:0;margin:0;width:640px;height:90px;*zoom:1;*display:inline; position:relative;" id="tanxssp-outer-conmm_32479643_3494618_75352146">
                    <div id="tanxssp_con_mm_32479643_3494618_75352146" style="overflow:hidden;display:inline-block;position:relative;width:640px;height:90px;*display:inline;*zoom:1;font:12px/1.5 tahoma,'Hiragino Sans GB','microsoft yahei',sans-serif;">
                        <iframe id="tanxssp-tuwen-iframemm_32479643_3494618_75352146" src="//strip.alicdn.com/tfscom/TB1nJtlPFXXXXaUXFXXXXXXXXXX.html?tanxdspv=https%3a%2f%2frdstat.tanx.com%2ftrd%3ff%3d%26k%3da09e279ad7f7a12a%26p%3dmm_32479643_3494618_75352146%26pvid%3d0bb4860e00035b780a316aee005c8fb4%26s%3d640x90%26d%3d59420271%26t%3d1534593585&amp;pid=mm_32479643_3494618_75352146&amp;tp=3&amp;tsid=0bb4860e00035b780a316aee005c8fb4&amp;u=https%3A%2F%2Fwww.toutiao.com%2Fi6590815106714567176%2F&amp;r=https%3A%2F%2Fwww.toutiao.com%2Fm50050770286%2F&amp;tp=3&amp;tsid=0bb4860e00035b780a316aee005c8fb4&amp;pid=mm_32479643_3494618_75352146" style="width:640px;height:90px" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="true" frameborder="0"></iframe>
                        <a id="iconmm_32479643_3494618_75352146" title="我也要申请橱窗推广" target="_blank" href="https://www.alimama.com/" style="overflow:hidden;width:15px;height:13px;right:20px;bottom:0px;display:block;position:absolute;cursor:pointer;z-index:250;"> <span id="icon_smallmm_32479643_3494618_75352146" style="border-right:2px solid #eee;float:none;width:13px;display:block;height:13px;box-sizing:content-box"><img src="//atanx.alicdn.com/t/img/TB1DmcoJXXXXXavXpXXXXXXXXXX-26-26.png" style="width:13px;height:13px;margin:auto;display:block;" border="0" /></span> <span id="icon_bigmm_32479643_3494618_75352146" style="float:none;width:60px;height:13px;display: none;"><img src="//atanx.alicdn.com/t/img/TB1Lt7aJXXXXXcjXVXXXXXXXXXX-117-26.png" style="width:60px;height:13px;margin:auto;display:block;" border="0/" /></span></a>
                        <a id="sxmm_32479643_3494618_75352146" href="javascript:;" style="width:20px;height:13px;right:0px;bottom:0px;display:block;position:absolute;cursor:pointer;z-index:250;margin:0;"> <span id="sx1mm_32479643_3494618_75352146" style="float:none;width:20px;display:block;height:13px;"><img src="//atanx.alicdn.com/t/img/TB1tWvVJFXXXXc_aXXXXXXXXXXX-40-26.png" style="width:20px;height:13px;margin:auto;display:block;min-height:13px;" border="0/" /></span>
                            <div id="sxtipmm_32479643_3494618_75352146" style="display:none;position:absolute;left:-38px;bottom:13px;">
                                <img src="//atanx.alicdn.com/t/img/TB1upAiJXXXXXa5aXXXXXXXXXXX-116-30.png" style="width:58px;height:15px;margin:auto;display:block;min-height:15px;" border="0" />
                            </div></a>
                    </div>
                </ins>
                <a style="display:none;" id="tanx-a-mm_32479643_3494618_75352146"></a>
                <script src="https://opehs.tanx.com/ex?i=mm_32479643_3494618_75352146&amp;cb=jsonp_callback_31414&amp;callback=&amp;userid=&amp;o=&amp;f=&amp;n=&amp;r=https%3A%2F%2Fwww.toutiao.com%2Fm50050770286%2F&amp;cg=e4e8590e6d64d5eed35567d174130178&amp;pvid=baf693dfb0063d09d2d12d6d36a1c5fd&amp;u=https%3A%2F%2Fwww.toutiao.com%2Fi6590815106714567176%2F&amp;psl=1&amp;fp=1.HDiz~WcAS7UZXhc8YRQ47hNe5HoO53QCAWwq~Yrl2h7boWLND~Kb-U.UTF-8.v6RiZXAEg03gjIdvFo4W6DbtQuLGCCQw9aaAuDQpLGEbgw4HKCeTmIMF2gsHKAIRoNmKQA.Q.4bs9ii"></script>
                <script src="//p.tanx.com/ex?i=mm_32479643_3494618_75352146" id="tanx-s-mm_32479643_3494618_75352146" charset="gbk"></script>
            </div>
            <div class="detail-comment">
                <a id="comment_area" href="#"></a>
                <div id="comment">
                    <div class="c-header">
                        <em>0&nbsp;</em>条评论
                    </div>
                    <div data-v-7f58aa2c="" class="inputBox">
                        <div data-v-7f58aa2c="" class="bui-box">
                            <div data-v-7f58aa2c="" class="avatar-wrap avatar-wrap-center">
                                <img data-v-7f58aa2c="" src="//p3.pstatp.com/thumb/3791/5035712059" alt="" />
                            </div>
                            <div data-v-7f58aa2c="" class="input-wrap">
                                <div data-v-7f58aa2c="" ga_event="click_input_comment" class="c-textarea">
                                    <textarea data-v-7f58aa2c="" placeholder="写下您的评论..."></textarea>
                                </div>
                                <div data-v-7f58aa2c="" ga_event="click_publish_comment" class="c-action">
                                    <div data-v-7f58aa2c="" class="c-submit">
                                        评论
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul></ul>
                    <!---->
                    <!---->
                    <!---->
                    <div data-v-e2575b7c="">
                        <div data-v-e2575b7c="" class="tt-dialog__wrapper" style="display: none;">
                            <div class="tt-dialog tt-dialog--small" style="top: 15%;">
                                <div class="tt-dialog__header">
                                    <span class="tt-dialog__title">举报此人</span>
                                    <div class="tt-dialog__headerbtn">
                                        <i class="tt-dialog__close bui-icon icon-close_big"></i>
                                    </div>
                                </div>
                                <!---->
                                <div class="tt-dialog__footer">
           <span data-v-e2575b7c="" class="dialog-footer"><button data-v-e2575b7c="" type="button" class="tt-button tt-button--primary">
             <!---->
                   <!----> <span>确认</span></button> <button data-v-e2575b7c="" type="button" class="tt-button tt-button--default">
             <!---->
                   <!----> <span>取消</span></button></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bui-right index-right">
            <div class="pane-module">
                <!---->
                <div class="user-card">
                    <div class="user-card-head">
                        <a target="_blank" href="/c/user/50050770286/" class="user-card-avatar"><img src="//p3.pstatp.com/large/97e001bfe46760f3699" alt="" /></a>
                        <div class="user-card-name">
                            <a href="/c/user/50050770286/" target="_blank">AI小记者Xiaomingbot</a>
                            <div ga_event="follow_pgc" class="subscribe">
                                <div class="left-arrow unsubscribe-btn">
                                    <i class="bui-icon icon-check" style="font-size: 8px; color: rgb(119, 119, 119);"></i>
                                    <span>已关注</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="user-card-article-list">
                        <li class="user-card-article-item"><a href="/item/6590815106714567176" target="_blank">西甲 第1轮 皇家贝蒂斯惨败莱万特 溃不成军</a></li>
                        <li class="user-card-article-item"><a href="/item/6590790831668462087" target="_blank">法甲 第2轮 兰斯艰难战胜里昂 赢得对决</a></li>
                        <li class="user-card-article-item"><a href="/item/6589948436596916750" target="_blank">中超 第18轮 河南建业0:5惨败广州恒大</a></li>
                        <li class="user-card-article-item"><a href="/item/6589946912877576707" target="_blank">中超 第18轮 上海申花3:1狂扫贵州恒丰 斩获三分</a></li>
                    </ul>
                </div>
            </div>
            <div class="pane-module">
                <div class="module-head">
                    精彩图片
                </div>
                <ul ga_event="click_pictures_recommend" class="module-content bui-box picture-list">
                    <li class="bui-left picture-item"><a href="/group/6590954402637414919/" target="_blank" class="link">
                            <div class="module-pic picture-img">
                                <img alt="" src="//p99.pstatp.com/list/300x170/pgc-image/153457599814196f255ecb4" lazy="loaded" />
                                <i class="module-tag"><span>5图</span></i>
                            </div> <p>打过大量激素的葡萄，这3处不一样，大家不妨认真看看</p></a></li>
                    <li class="bui-left picture-item"><a href="/group/6590841527327523335/" target="_blank" class="link">
                            <div class="module-pic picture-img">
                                <img alt="" src="//p3.pstatp.com/list/300x170/pgc-image/1534549789656eb1cc16a50" lazy="loaded" />
                                <i class="module-tag"><span>7图</span></i>
                            </div> <p>重庆女孩为国夺冠，因矮被国家队开除，入籍法国成世界第二名利双收</p></a></li>
                    <li class="bui-left picture-item picture-item-a">
                        <div name="hot_image*cell_5" ad-cursor="" style="display: block !important;" ad_name="hot_image*cell_5" done="1" show="">
                            <a class="jx-hi-container" href="https://ssxd.mediav.com/s?type=2&amp;r=20&amp;mv_ref=www%2Etoutiao%2Ecom&amp;enup=CAABagLq9AgAAvTqAmoA&amp;mvid=NjY3MzI3Njg3MDEzODExMTQwNjAwMTg&amp;bid=1289464c09b70767&amp;price=AAAAAFt4CjAAAAAAAA1YSn1DlqohWH9F+7VQ9Q==&amp;finfo=DAABCAABAAAAAwgAAgAAADwEAAM/Aadk0HVligAIAAIAAAADCgADedblyA5+ueIIAAQAAABQBgAGGzMIAAgAAHUwCgAJAAAAAAACEBgGAAoAAAA&amp;ugi=FczLIxWIjlVMFQIVKBUoFQAAFcip3L4DFoQoFcgBAA&amp;uai=Fa6w+wElAhUEFoDIk9+RrO7W8wEV8ggli+bCqQ4UAhUAFRoA&amp;ubi=Fc7SPxWYrqYCFbyXgRYV3o3oVRUGFSIW2vKGsRYWgMioxpvy8tbzATQCFrDAECUGFfbkpqMCFf4EFQA2s+e55eDgkabpAQA&amp;clickid=0&amp;cpx=__OFFSET_X__&amp;cpy=__OFFSET_Y__&amp;cs=__EVENT_TIME_START__&amp;ce=__EVENT_TIME_END__&amp;csign=5fc9199a63a46e99&amp;url=http%3A%2F%2Fbj%2Esunland%2Eorg%2Ecn%2F2569%2FBJ%2Fpc%2FaA6KyE%2Findex%2Ehtml%3Fplan_id%3D423996%26creative_id%3DBEJ%2D180%2D01">
                                <div class="imag-wrap">
                                    <img src="https://s3m.mediav.com/galileo/521383-172d212d9c46f3bd679a8710b42a7c80.jpg" alt="" />
                                    <span class="tag">广告</span>
                                </div>
                                <div class="ainfo">
                                    <h3 class="atitle">在北京真好，上班族可申请名校在职研究生，毕业就是正规硕士！</h3>
                                </div> </a>
                        </div></li>
                    <li class="bui-left picture-item"><a href="/group/6590226063064826372/" target="_blank" class="link">
                            <div class="module-pic picture-img">
                                <img alt="" src="//p3.pstatp.com/list/300x170/pgc-image/1534406138406fd95a5be89" lazy="loaded" />
                                <i class="module-tag"><span>17图</span></i>
                            </div> <p>镜头下：四川大地主刘文彩的庄园！竟是如此的奢华无比</p></a></li>
                    <li class="bui-left picture-item"><a href="/group/6590944208444457480/" target="_blank" class="link">
                            <div class="module-pic picture-img">
                                <img alt="" src="//p1.pstatp.com/list/300x170/pgc-image/15345736835081bf3c96677" lazy="loaded" />
                                <i class="module-tag"><span>8图</span></i>
                            </div> <p>朱元璋发明了一句口头禅，流传至今无人不知，但大部分人总是说错</p></a></li>
                    <li class="bui-left picture-item"><a href="/group/6590869875231556110/" target="_blank" class="link">
                            <div class="module-pic picture-img">
                                <img alt="" src="//p3.pstatp.com/list/300x170/pgc-image/15345563811633a9896de88" lazy="loaded" />
                                <i class="module-tag"><span>6图</span></i>
                            </div> <p>不当日本人，华裔小将天赋惊人，却退出日本国家队，只代表中国出战</p></a></li>
                    <li class="bui-left picture-item picture-item-a">
                        <div name="hot_image*cell_6" ad-cursor="" style="display: block !important;" ad_name="hot_image*cell_6" done="1" show="">
                            <a class="jx-hi-container" href="https://ssxd.mediav.com/s?type=2&amp;r=20&amp;mv_ref=www%2Etoutiao%2Ecom&amp;enup=CAABagLq9AgAAvTqAmoA&amp;mvid=NjY3MzI3Njg3MDEzODExMTQwNjAwMTg&amp;bid=1289464c09b70767&amp;price=AAAAAFt4CjAAAAAAAA1Y7Q0OdYbSdwIK8uZXkw==&amp;finfo=DAABCAABAAAAAggAAgAAACAEAAM/CV6f7wsjFQAIAAIAAAADCgADedbu4ZRji6MIAAQAAAAgBgAGLbcIAAgAAE4gCgAJAAAAAAACEBgGAAoAAAA&amp;ugi=FczLIxWIjlVMFQIVKBUoFQAAFcip3L4DFoQoFcgBAA&amp;uai=Fa6w+wElAhUEFoDIk9+RrO7W8wEV8ggli+bCqQ4UAhUAFRoA&amp;ubi=FfDfRhWy9aYCFbjShBYV0tjwVRUEFSIW9sOU8RYWgMi9raW499bzATQEFrDAECUGFa2QmbQOFdIEFQA26ben4KL6tp2/AQA&amp;clickid=0&amp;cpx=__OFFSET_X__&amp;cpy=__OFFSET_Y__&amp;cs=__EVENT_TIME_START__&amp;ce=__EVENT_TIME_END__&amp;csign=6c83977ec68020d1&amp;url=http%3A%2F%2Fxh%2Eshangxue%2Ecom%2Findex%2Ephp%2Fzhibo%2Findex%2Fid%2F350%2Fk%2F1">
                                <div class="imag-wrap">
                                    <img src="https://s3m.mediav.com/galileo/579576-a65440dee8094f24db28a900c8f12955.jpg" alt="" />
                                    <span class="tag">广告</span>
                                </div>
                                <div class="ainfo">
                                    <h3 class="atitle">新开的淘宝店铺是怎么做到月入过万的？</h3>
                                </div> </a>
                        </div></li>
                    <li class="bui-left picture-item"><a href="/group/6590652617808937479/" target="_blank" class="link">
                            <div class="module-pic picture-img">
                                <img alt="" src="//p9.pstatp.com/list/300x170/pgc-image/15345055530126fddc4c77e" lazy="loaded" />
                                <i class="module-tag"><span>9图</span></i>
                            </div> <p>战争时立下赫赫战功，和平时扎根农村不问索取，92岁去世万人送别</p></a></li>
                    <li class="bui-left picture-item"><a href="/group/6590156458686415363/" target="_blank" class="link">
                            <div class="module-pic picture-img">
                                <img alt="" src="//p3.pstatp.com/list/300x170/pgc-image/15343902588530df7c98d84" lazy="loaded" />
                                <i class="module-tag"><span>4图</span></i>
                            </div> <p>老梁评价冯小刚：他不是一个合格的导演，更像一个流氓！</p></a></li>
                    <li class="bui-left picture-item"><a href="/group/6590927727828664846/" target="_blank" class="link">
                            <div class="module-pic picture-img">
                                <img alt="" src="//p99.pstatp.com/list/300x170/pgc-image/1534569909327b55bd8de81" lazy="loaded" />
                                <i class="module-tag"><span>6图</span></i>
                            </div> <p>为妻子治病，男子刻印章逃医疗费4年，坦言总不能眼看着她死</p></a></li>
                </ul>
            </div>
            <!---->
            <div id="imagindexhover" style="display: none;">
                <div name="adetail_right*hover_1" class="right-hover-1 right-img" ad-cursor="1" ad_name="h_300*250_TB_469" done="1" show="">
                    <script src="//p.tanx.com/ex?i=mm_32479643_3494618_63260469" id="tanx-s-mm_32479643_3494618_63260469" charset="gbk"></script>
                    <ins style="display: inline-block; padding: 0px; margin: 0px; width: 300px; height: 250px; position: fixed; top: 0px; left: 0px; z-index: 2147483647;" id="tanxssp-outer-conmm_32479643_3494618_63260469">
                        <div id="tanxssp_con_mm_32479643_3494618_63260469" style="overflow:hidden;display:inline-block;position:relative;width:300px;height:250px;*display:inline;*zoom:1;font:12px/1.5 tahoma,'Hiragino Sans GB','microsoft yahei',sans-serif;">
                            <a href="https://www.alimama.com/" target="_blank"><img src="//img.alicdn.com/tps/i3/TB1bynyGXXXXXa3XpXXK0sWQpXX-300-250.jpg" width="300px" height="250px" border="0" /></a>
                        </div>
                    </ins>
                    <a style="display: block; width: 0px; height: 0px;" id="tanx-a-mm_32479643_3494618_63260469"></a>
                    <script src="http://ope.tanx.com/ex?i=mm_32479643_3494618_63260469&amp;cb=jsonp_callback_90111&amp;callback=&amp;userid=&amp;o=&amp;f=&amp;n=&amp;r=&amp;cg=a1a486d22196dd8d76017eca1b0fea82&amp;pvid=a3ef22d4f60ca811ac39602151eec8b3&amp;u=http%3A%2F%2Flocalhost%3A63343%2FPhpstormProjects%2FXiaomingbot%2Fbody.html%3F_ijt%3Dv25l5f8trohi44uoll2538lf06&amp;psl=0&amp;fp=1.HDlU6qI7tTD1Dt4AnWmM~FOqx~S2V5GlXGMGL8efBb~u5wD9qxm2HU.UTF-8.v6RiZXAEg03gjIdvFo4W6DbtQuLGCCQw9aaAuDQpLGEbgw4HKCeTmIMF2gsHKAIRoNmKQA.Q.stem57"></script>
                    <ins style="display: inline-block; padding: 0px; margin: 0px; width: 300px; height: 250px; position: fixed; top: 0px; left: 0px; z-index: 2147483647;" id="tanxssp-outer-conmm_32479643_3494618_63260469">
                        <div id="tanxssp_con_mm_32479643_3494618_63260469" style="overflow:hidden;display:inline-block;position:relative;width:300px;height:250px;*display:inline;*zoom:1;font:12px/1.5 tahoma,'Hiragino Sans GB','microsoft yahei',sans-serif;">
                            <iframe id="tanxssp-tuwen-iframemm_32479643_3494618_63260469" src="https://a1.alicdn.com/creation/html/2016/06/20/creation-245057E3sJ6U0UZ8D-2830683.html#tanxdspv=https%3a%2f%2frdstat.tanx.com%2ftrd%3ff%3d%26k%3da09e279ad7f7a12a%26p%3dmm_32479643_3494618_63260469%26pvid%3d0bb4822b00035b780a3246a8005b9861%26s%3d300x250%26d%3d0%26t%3d1534593586&amp;pid=mm_32479643_3494618_63260469&amp;tp=5&amp;tsid=0bb4822b00035b780a3246a8005b9861&amp;pid=mm_32479643_3494618_63260469" style="width:300px;height:250px" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="true" frameborder="0"></iframe>
                            <a id="sxmm_32479643_3494618_63260469" href="javascript:;" style="width:20px;height:13px;right:0px;bottom:0px;display:block;position:absolute;cursor:pointer;z-index:250;margin:0;"> <span id="sx1mm_32479643_3494618_63260469" style="float:none;width:20px;display:block;height:13px;"><img src="//atanx.alicdn.com/t/img/TB1tWvVJFXXXXc_aXXXXXXXXXXX-40-26.png" style="width:20px;height:13px;margin:auto;display:block;min-height:13px;" border="0/" /></span>
                                <div id="sxtipmm_32479643_3494618_63260469" style="display:none;position:absolute;left:-38px;bottom:13px;">
                                    <img src="//atanx.alicdn.com/t/img/TB1upAiJXXXXXa5aXXXXXXXXXXX-116-30.png" style="width:58px;height:15px;margin:auto;display:block;min-height:15px;" border="0" />
                                </div></a>
                        </div>
                    </ins>
                    <a style="display: block; width: 0px; height: 0px;" id="tanx-a-mm_32479643_3494618_63260469"></a>
                    <script src="https://opehs.tanx.com/ex?i=mm_32479643_3494618_63260469&amp;cb=jsonp_callback_23030&amp;callback=&amp;userid=&amp;o=&amp;f=&amp;n=&amp;r=https%3A%2F%2Fwww.toutiao.com%2Fm50050770286%2F&amp;cg=a66c91db1e5b4e7f45724cd71dd662ee&amp;pvid=baf693dfb0063d09d2d12d6d36a1c5fd&amp;u=https%3A%2F%2Fwww.toutiao.com%2Fi6590815106714567176%2F&amp;psl=1&amp;fp=1.HDiz~Wb~cSJMzqK4UKwoA7wpQhbkZNp_FSlYt2dShf9taB1D~YlDvU.UTF-8.v6RiZXAEg03gjIdvFo4W6DbtQuLGCCQw9aaAuDQpLGEbgw4HKCeTmIMF2gsHKAIRoNmKQA.Q.10gv5ap"></script>
                    <script src="//p.tanx.com/ex?i=mm_32479643_3494618_63260469" id="tanx-s-mm_32479643_3494618_63260469" charset="gbk"></script>
                    <script src="//p.tanx.com/ex?i=mm_32479643_3494618_63260469" id="tanx-s-mm_32479643_3494618_63260469" charset="gbk"></script>
                </div>
            </div>
        </div>
    </div>
    <ul data-v-5c014667="" class="toolbar">
        <!---->
        <!---->
        <!---->
        <li data-v-5c014667="" class="tool-item"><a data-v-5c014667="" href="javascript:void(0);"><i data-v-5c014667="" class="bui-icon icon-arrow_up_big" style="font-size: 16px; color: rgb(255, 255, 255);"></i></a></li>
    </ul>
</div>
<script src="//s3.pstatp.com/inapp/lib/raven.js" crossorigin="anonymous"></script>
<script>;(function(window) {
        // sentry
        window.Raven && Raven.config('//key@m.toutiao.com/log/sentry/v2/96', {
            whitelistUrls: [/pstatp\.com/],
            sampleRate: 0.5,
            shouldSendCallback: function(data) {
                var ua = navigator && navigator.userAgent;
                var isDeviceOK = !/Mobile|Linux/i.test(navigator.userAgent);
                if (data.message && data.message.indexOf('p.tanx.com') !== -1) {
                    return false;
                }
                return isDeviceOK;
            },
            tags: {
                bid: 'toutiao_pc',
                pid: 'article_detail_new'
            },
            autoBreadcrumbs: {
                'xhr': false,
                'console': true,
                'dom': true,
                'location': true
            }
        }).install();
    })(window);</script>
<script>var PAGE_SWITCH = {"adScriptQihu":true,"adScriptTB":true,"anti_spam":false,"migScriptUrl":"//s3a.pstatp.com/toutiao/picc_mig/dist/img.min.js","nineteen":"","picVersion":"20180412_01","qihuAdShow":true,"taVersion":"20171221_1","ttAdShow":true};</script>
<script>var BASE_DATA = {
        userInfo: {
            id: 102107331230,
            userName: '手机用户102107331230',
            avatarUrl: '//p3.pstatp.com/thumb/3791/5035712059',
            isPgc: false,
            isOwner: false
        },
        headerInfo: {
            id: 102107331230,
            isPgc: false,
            userName: '手机用户102107331230',
            avatarUrl: '//p3.pstatp.com/thumb/3791/5035712059',
            isHomePage: false,
            chineseTag: '体育',
            crumbTag: 'ch/news_sports/',
            hasBar: true
        },
        // // articleInfo: {
        // //     title: '西甲 第1轮 皇家贝蒂斯惨败莱万特 溃不成军',
        // //     content: '&lt;p&gt;(本文由头条机器人Xiaomingbot撰写)&lt;/p&gt;&lt;p&gt;西甲  第1轮 皇家贝蒂斯迎战莱万特，在北京时间2018年8月18日4时15分打响。 最终, 莱万特3:0战胜皇家贝蒂斯，萨尔瓦多，莫拉莱斯为本队建功 。&lt;/p&gt;&lt;p&gt;此役皇家贝蒂斯排出的阵型是3-5-2。守门员位置上是保罗-洛佩兹。后卫线方面曼迪，巴尔特拉和费达尔组合将肩负防守重任。卡纳莱斯，威廉-卡瓦略和瓜尔达多将出现在中前场。格雷罗的右路攻击线不容小觑。 另一方面，莱万特排出了4-4-2的阵型。首发门将是奥耶尔。杜库雷和坎帕尼亚构建中场屏障。莫拉莱斯和萨尔瓦多出现在锋线，担任箭头。 &lt;/p&gt;&lt;p&gt;裁判起哨，全场比赛开始。 皇家贝蒂斯后场断球，一个大脚开到了前场。 第38分钟，莱万特率先取得进球，萨尔瓦多冷静施射，为母队抢得先机。 0-1！ 皇家贝蒂斯获得了一个角球，不过未能把握机会。 上半场很快结束了。 &lt;/p&gt;&lt;p&gt; 第54分钟，莫拉莱斯把握良机，为莱万特再下一城。 0-2！ 第63分钟，萨纳布里亚替换下布德布兹。 此后，威廉 卡瓦略被换下，乾贵士替补登场。 第68分钟，普尔西奇替补出战。 第74分钟，莱万特做出人员调整，卢纳替换登场。 第82分钟，卢纳频繁的犯规招致一张黄牌。 第90分钟，莱万特试图重新调整下节奏，Raphael Dwamena替换杰森上场。 第90分钟，莫拉莱斯鲁莽的犯规，获得了一张黄牌。 第90分钟，皇家贝蒂斯防线再度失守，莫拉莱斯轻松打进一粒进球！ 0-3！ 终场哨响，全场比赛结束。&lt;/p&gt;&lt;p&gt;本场比赛皇家贝蒂斯以75％的控球率控制全场。皇家贝蒂斯全场贡献16脚射门。另一边，莱万特流畅的配合，带来6脚射门。最终，全场战罢，皇家贝蒂斯0-3负于莱万特，未能取分。&lt;/p&gt;&lt;p&gt;皇家贝蒂斯本场首发阵容（3-5-2）：13-保罗-洛佩兹 / 23-曼迪、5-巴尔特拉、4-费达尔 / 2-格雷罗、6-卡纳莱斯、14-威廉-卡瓦略、18-瓜尔达多、20-菲尔波 / 10-布德布兹、16-莫隆&lt;/p&gt;&lt;p&gt;莱万特本场首发阵容（4-4-2）：13-奥耶尔 / 12-科克、15-塞尔吉奥、6-切马、3-托尼奥 / 23-杰森、5-杜库雷、24-坎帕尼亚、10-巴尔迪 / 11-莫拉莱斯、9-萨尔瓦多&lt;/p&gt;',
        // //     groupId: '6590815106714567176',
        // //     itemId: '6590815106714567176',
        // //     type: 2,
        // //     subInfo: {
        // //         isOriginal: false,
        // //         source: 'AI小记者Xiaomingbot',
        // //         time: '2018-08-18 06:08:43'
        // //     },
        //     tagInfo: {
        //         tags: [{"name":"西甲"},{"name":"莱万特"},{"name":"皇家贝蒂斯"},{"name":"足球"},{"name":"巴尔特拉"}],
        //         groupId: '6590815106714567176',
        //         itemId: '6590815106714567176',
        //         repin: 0,
        //     },
        //     has_extern_link: 0
        // },
        // commentInfo: {
        //     groupId: '6590815106714567176',
        //     itemId: '6590815106714567176',
        //     comments_count: 0,
        //     ban_comment: 0
        // },
        // mediaInfo: {
        //     uid: '50050770286',
        //     name: 'AI小记者',
        //     avatar: '//p3.pstatp.com/large/97e001bfe46760f3699',
        //     openUrl: '/c/user/50050770286/',
        //     follow: true
        // },
        // pgcInfo: [{"item_id":"6590815106714567176","url":"/item/6590815106714567176","title":"西甲 第1轮 皇家贝蒂斯惨败莱万特 溃不成军"},{"item_id":"6590790831668462087","url":"/item/6590790831668462087","title":"法甲 第2轮 兰斯艰难战胜里昂 赢得对决"},{"item_id":"6589948436596916750","url":"/item/6589948436596916750","title":"中超 第18轮 河南建业0:5惨败广州恒大"},{"item_id":"6589946912877576707","url":"/item/6589946912877576707","title":"中超 第18轮 上海申花3:1狂扫贵州恒丰 斩获三分"}],
        // feedInfo: {
        //     url: '/api/pc/feed/',
        //     category: '__all__',
        //     initList: [{"comments_count":41,"media_avatar_url":"//p5a.pstatp.com/large/1a6d0000aa9344c3ab39","is_feed_ad":false,"is_diversion_page":false,"title":"西甲最新战报 神锋连过5人奔袭整场破门堪比梅西 贝蒂斯输的心服","single_mode":true,"gallary_image_count":8,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590819772701606403/","source":"狂言体育","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":38,"image_url":"//p3.pstatp.com/list/190x124/pgc-image/15345447723377d3bbdaf3d","group_id":"6590819772701606403","is_related":true,"media_url":"/c/user/50584168296/"},{"comments_count":29,"media_avatar_url":"//p2.pstatp.com/large/1232000e3f47e9aebfd5","is_feed_ad":false,"is_diversion_page":false,"title":"从0-4落后到8-1翻盘！欧战再出逆天神迹，10虐11比巴萨更牛","single_mode":true,"gallary_image_count":16,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590655266147009027/","source":"懂英超","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":35,"image_url":"//p9.pstatp.com/list/190x124/pgc-image/1534506402206751a0d8ace","group_id":"6590655266147009027","is_related":true,"media_url":"/c/user/52924088069/"},{"comments_count":35,"media_avatar_url":"//p3.pstatp.com/large/150e000528ab0736f267","is_feed_ad":false,"is_diversion_page":false,"title":"0-3惨败！西甲首轮这场冷门打出61倍赔率！上赛季黑马主场被羞辱","single_mode":true,"gallary_image_count":8,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590907142864110094/","source":"白猫体育","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":12,"image_url":"//p99.pstatp.com/list/190x124/pgc-image/15345645535814022fed382","group_id":"6590907142864110094","is_related":true,"media_url":"/c/user/54433885753/"},{"comments_count":15,"media_avatar_url":"//p3.pstatp.com/large/135400038b5fefa4a18a","is_feed_ad":false,"is_diversion_page":false,"title":"皇马想让神锋回归需8000万！曝法甲劲旅索要当初10倍转会费","single_mode":true,"gallary_image_count":3,"middle_mode":true,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590971259977204237/","source":"尼玛踢FIFA","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":9,"image_url":"//p9.pstatp.com/list/190x124/pgc-image/153457955780241b43b71d5","group_id":"6590971259977204237","is_related":true,"media_url":"/c/user/53059496894/"},{"comments_count":4,"media_avatar_url":"//p10.pstatp.com/large/93300004d42ca8b4ca44","is_feed_ad":false,"is_diversion_page":false,"title":"致敬马拉多纳！莱万特老将神级千里走单骑连过四人破门","single_mode":true,"gallary_image_count":3,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590878846394827272/","source":"红都焦点","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p3.pstatp.com/list/190x124/pgc-image/153455856031536b354203f","group_id":"6590878846394827272","is_related":true,"media_url":"/c/user/92100836447/"},{"comments_count":0,"media_avatar_url":"//p3.pstatp.com/large/ef7000f0ce596354041","is_feed_ad":false,"is_diversion_page":false,"title":"西甲首轮：皇马巴萨无丢分危险，这争冠热门客战强敌要掉链子？","single_mode":true,"gallary_image_count":3,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590880566466314756/","source":"足言足语","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p3.pstatp.com/list/190x124/pgc-image/15345587820457e22b01772","group_id":"6590880566466314756","is_related":true,"media_url":"/c/user/51456361930/"},{"comments_count":2,"media_avatar_url":"//p3.pstatp.com/large/382e00166d976ed0b090","is_feed_ad":false,"is_diversion_page":false,"title":"梅西等主力队员无缘阿根廷队最新大名单，马蒂内斯和伊卡尔迪回归","single_mode":true,"gallary_image_count":1,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6591010023134986755/","source":"猫哥观娱","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p3.pstatp.com/list/190x124/pgc-image/15345888289156f2a7b01a7","group_id":"6591010023134986755","is_related":true,"media_url":"/c/user/68339408925/"},{"comments_count":7,"media_avatar_url":"//p3.pstatp.com/large/9826/4738639645","is_feed_ad":false,"is_diversion_page":false,"title":"输了曼城再遇切尔西，还有谁的命比埃梅里苦？","single_mode":true,"gallary_image_count":3,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590698894378664452/","source":"懂个球","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":1,"image_url":"//p99.pstatp.com/list/190x124/pgc-image/15345160723057194632202","group_id":"6590698894378664452","is_related":true,"media_url":"/c/user/4373458706/"},{"comments_count":1,"media_avatar_url":"//p1.pstatp.com/large/a14700041af8fa411108","is_feed_ad":false,"is_diversion_page":false,"title":"西甲揭幕战 8.19 04:15 巴萨罗那VS阿拉维斯 巴萨独孤求败 力荐","single_mode":true,"gallary_image_count":3,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590974823797621255/","source":"逍遥哥说球事","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p3.pstatp.com/list/190x124/pgc-image/1534580449083998808bcb9","group_id":"6590974823797621255","is_related":true,"media_url":"/c/user/102995680445/"},{"comments_count":2,"media_avatar_url":"//p6.pstatp.com/large/8b5f00015d1793189824","is_feed_ad":false,"is_diversion_page":false,"title":"梅西出局伊卡尔迪小西蒙尼入选 阿根廷新国家队闪亮登场","single_mode":true,"gallary_image_count":3,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590945274187743757/","source":"小董说球","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p3.pstatp.com/list/190x124/pgc-image/15345740226508bffe96bd7","group_id":"6590945274187743757","is_related":true,"media_url":"/c/user/5863566043/"},{"comments_count":0,"media_avatar_url":"//p2.pstatp.com/large/1232000e3f47e9aebfd5","is_feed_ad":false,"is_diversion_page":false,"title":"0-4后8-1逆转，俄超豪门再现巴萨式奇迹！世界杯红人戴帽+杀人助攻","single_mode":true,"gallary_image_count":7,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590654348957581832/","source":"懂英超","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p3.pstatp.com/list/190x124/pgc-image/153450604406449a2fa8db4","group_id":"6590654348957581832","is_related":true,"media_url":"/c/user/52924088069/"},{"comments_count":13,"media_avatar_url":"//p3.pstatp.com/large/ef7000f0ce596354041","is_feed_ad":false,"is_diversion_page":false,"title":"皇马一优势已消失，齐达内靠这个拿了三个欧冠，新赛季西甲争四？","single_mode":true,"gallary_image_count":3,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590860220929409549/","source":"足言足语","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p3.pstatp.com/list/190x124/pgc-image/1534554012815022ce8a51d","group_id":"6590860220929409549","is_related":true,"media_url":"/c/user/51456361930/"},{"comments_count":1,"media_avatar_url":"//p9.pstatp.com/large/12340002df277114c1c1","is_feed_ad":false,"is_diversion_page":false,"title":"第一队长梅西迎来西甲首战，多条信息预示巴萨明晨赢球","single_mode":true,"gallary_image_count":4,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590996416166887940/","source":"霍寿喜","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p99.pstatp.com/list/190x124/pgc-image/1534585610280cda23b6fad","group_id":"6590996416166887940","is_related":true,"media_url":"/c/user/52546225802/"},{"comments_count":15,"media_avatar_url":"//p10.pstatp.com/large/9b1f0004e56c2e3b418a","is_feed_ad":false,"is_diversion_page":false,"title":"西甲巴萨首战，梅西弯刀再出！阿拉维斯凶多吉少！","single_mode":true,"gallary_image_count":4,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590937027707929095/","source":"兽王足球公园","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":1,"image_url":"//p9.pstatp.com/list/190x124/pgc-image/153457142309446ca306b50","group_id":"6590937027707929095","is_related":true,"media_url":"/c/user/101622590728/"},{"comments_count":0,"media_avatar_url":"//p3.pstatp.com/large/150c000467843f827355","is_feed_ad":false,"is_diversion_page":false,"title":"转会看摩纳哥！副主席：祝勒马尔好运，他还有挺高的再转会分成！","single_mode":true,"gallary_image_count":4,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590969989119869444/","source":"红魔足球","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p3.pstatp.com/list/190x124/pgc-image/1534579582168cec29d3d47","group_id":"6590969989119869444","is_related":true,"media_url":"/c/user/5484241353/"},{"comments_count":21,"is_related":true,"is_feed_ad":false,"is_diversion_page":false,"title":"如果在本赛季联赛里已经降级，却在这个赛季获得了欧冠冠军，那下个赛季还能不能参加欧冠？","single_mode":true,"gallary_image_count":4,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6561744286004543748/","source":"悟空问答","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p9.pstatp.com/list/190x124/88da0002c60cd34c0011","group_id":"6561744286004543748"},{"comments_count":1,"media_avatar_url":"//p2.pstatp.com/large/5023/4134628510","is_feed_ad":false,"is_diversion_page":false,"title":"德布劳内伤停对曼城的影响有多大，瓜帅如何化解这次危机？","single_mode":true,"gallary_image_count":3,"middle_mode":true,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590955987023168003/","source":"婉约云儿","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p1.pstatp.com/list/190x124/pgc-image/153457642318203ce108754","group_id":"6590955987023168003","is_related":true,"media_url":"/c/user/4578744217/"},{"comments_count":1,"media_avatar_url":"//p1.pstatp.com/large/90620001ed9c9572acf3","is_feed_ad":false,"is_diversion_page":false,"title":"马德里双雄开局难度天差地别 巴塞罗那出门碰上巨人杀手","single_mode":true,"gallary_image_count":4,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590894631209140743/","source":"8号伪球迷","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p3.pstatp.com/list/190x124/pgc-image/15345618968739e6f6df304","group_id":"6590894631209140743","is_related":true,"media_url":"/c/user/100199206255/"},{"comments_count":0,"media_avatar_url":"//p1.pstatp.com/large/9b2100050c230873adb2","is_feed_ad":false,"is_diversion_page":false,"title":"西甲烧8亿：巴萨最多却不亏、皇马超马竞，升班马勒紧裤腰带","single_mode":true,"gallary_image_count":4,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590870832774382084/","source":"读我不是两三天","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p99.pstatp.com/list/190x124/pgc-image/15345566157016aef1b66ed","group_id":"6590870832774382084","is_related":true,"media_url":"/c/user/100376293263/"},{"comments_count":0,"media_avatar_url":"//p6.pstatp.com/large/8b5f00015d1793189824","is_feed_ad":false,"is_diversion_page":false,"title":"被瓜迪奥拉弃用的门将，如今连续3场零封带队晋级","single_mode":true,"gallary_image_count":4,"middle_mode":false,"has_video":false,"video_duration_str":null,"source_url":"https://www.toutiao.com/group/6590901648942432781/","source":"小董说球","more_mode":null,"article_genre":"article","has_gallery":false,"video_play_count":0,"image_url":"//p3.pstatp.com/list/190x124/pgc-image/1534563827321b95be50429","group_id":"6590901648942432781","is_related":true,"media_url":"/c/user/5863566043/"}]
        // },
        // shareInfo: {
        //     shareUrl: 'https://m.toutiao.com/item/6590815106714567176/',
        //     abstract: '西甲第1轮皇家贝蒂斯迎战莱万特。在北京时间2018年8月18日4时15分打响。最终,莱万特3:0战胜皇家贝蒂斯，萨尔瓦多，莫拉莱斯为本队建功。'.replace(/<br \/>/ig, ''),
        //     commentCount: '0',
        //     ban_comment: 0
        // }
    };</script>
<script>var imgUrl = '/c/gcegmji1dnm9oydrcw9v46h4t51lgkt61pp0w868ocicsxbj1qnsi/';</script>
<script>tac='i)69t3gdh0xs!i#hzws"0,<8~z|\x7f@QGNCJF[\\^D\\KFYSk~^WSZhg,(lfi~ah`{md"inb|1d<,%Dscafgd"in,8[xtm}nLzNEGQMKAdGG^NTY\x1ckgd"inb<b|1d<g,&TboLr{m,(\x02)!jx-2n&vr$testxg,%@tug{mn ,%vrfkbm[!cb|'</script>
<script type="text/javascript" crossorigin="anonymous" src="//s3b.pstatp.com/toutiao/static/js/vendor.26d6a38eff4a9e8e7a65.js"></script>
<script type="text/javascript" crossorigin="anonymous" src="//s3b.pstatp.com/toutiao/static/js/page/index_node/index.224ff3fc8068e0aaeed2.js"></script>
<script type="text/javascript" crossorigin="anonymous" src="//s3b.pstatp.com/toutiao/static/js/ttstatistics.92091ae75cf981f6bbe2.js"></script>
<style>a[href^='http://www.cnzz.com/stat'] {
        display: none!important;
    }</style>
<script src="//s95.cnzz.com/z_stat.php?id=1259612802&amp;web_id=1259612802" language="JavaScript"></script>
<script src="http://c.cnzz.com/core.php?web_id=1259612802&amp;t=z" charset="utf-8" type="text/javascript"></script>
<script src="https://c.cnzz.com/core.php?web_id=1259612802&amp;t=z" charset="utf-8" type="text/javascript"></script>
<a href="http://www.cnzz.com/stat/website.php?web_id=1259612802" target="_blank" title="站长统计">站长统计</a>
<a href="http://www.cnzz.com/stat/website.php?web_id=1259612802" target="_blank" title="站长统计">站长统计</a>
<script>if (window.ttAnalysis) {
        ttAnalysis.setup({
            c: 'detail_article'
        });
        ttAnalysis.send('pageview', {});
    }</script>
<script>document.getElementsByTagName('body')[0].addEventListener('click', function(e) {
        var target = e.target,
            ga_event,
            ga_category,
            ga_label,
            ga_value;
        while(target && target.nodeName.toUpperCase() !== 'BODY') {
            ga_event = target.getAttribute('ga_event');
            ga_category = target.getAttribute('ga_category') || 'detail_article';
            ga_label = target.getAttribute('ga_label') || '';
            ga_value = target.getAttribute('ga_value') || 1;
            ga_event && window._czc && _czc.push(﻿["_trackEvent", ga_category, ga_event, ga_label, ga_value]);
            ga_event && window.ttAnalysis && ttAnalysis.send('event', { ev: ga_event });
            target = target.parentNode;
        }
    });</script>
<script src="//s3a.pstatp.com/toutiao/picc_mig/dist/img.min.js?ver=20180412_01" crossorigin="anonymous"></script>
<script src="//s3a.pstatp.com/toutiao/picc_mig/dist/img.min.js?ver=20180412_01" crossorigin="anonymous"></script>



<?php
//$sql_former = "select * from tdt_archives where id<$id order by id desc limit 1"; //上一篇
//$sql_later = "select * from tdt_archives where id>$id order by id limit 1"; //下一篇
//$queryset_former = $mysqli->query($sql_former); //执行sql语句
//while($result = mysqli_fetch_object($queryset_former)){
//if(!empty($result)){
////    echo $result->title;
////    echo $result->id;
//    echo "<p class='pagelist'>上一篇: <a href='phpArticle.php?art=$result->id'> ".$result->title." </a></p>";
//}
//else {
//    echo "<p class='pagelist'>上一篇: 没有了</p>";}}
//$queryset_later = $mysqli->query($sql_later);
//while($result2 = mysqli_fetch_object($queryset_later)){
//if(!empty($result2)){
//    echo "<p class='pagelist' style='margin-bottom:20px;'>下一篇: <a href='phpArticle.php?art=$result2->id'> ". $result2->title."</a><br></p>";
//}
//else {
//    echo "<p class='pagelist' style='margin-bottom:20px;'>下一篇: 没有了</p>";}}
//?>

</body>
</html>