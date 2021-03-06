<?php
return array (
  'db' => 
  array (
    'type' => 'mysql',
    'path' => '',
    'server' => '127.0.0.1',
    'port' => '3306',
    'name' => 'maccms8',
    'user' => 'root',
    'pass' => 'root',
    'tablepre' => 'mac_',
    'backup_path' => './application/data/backup/database/',
    'part_size' => 20971520,
    'compress' => 1,
    'compress_level' => 4,
  ),
  'site' => 
  array (
    'site_name' => '猫视界',
    'site_url' => 'www.maosj.xyz',
    'site_wapurl' => 'www.maosj.xyz',
    'site_keywords' => '免费在线电影,最新电影,2020新出电影,好的的电影',
    'site_description' => '提供最新最快的影视资讯和在线播放',
    'site_icp' => 'icp123',
    'site_qq' => '123456',
    'site_email' => '123456@yuenos.cc',
    'install_dir' => '/',
    'site_logo' => 'static/images/logo.jpg',
    'site_waplogo' => 'upload/site/20220502-1/3ac0d904aa14bae7bdd82cdfbc67db5f.png',
    'template_dir' => 'mxone',
    'html_dir' => 'html_tplmx',
    'mob_status' => '2',
    'mob_template_dir' => 'mxone',
    'mob_html_dir' => 'html_tplmx',
    'site_tj' => '统计代码',
    'site_status' => '1',
    'site_close_tip' => '站点暂时关闭，请稍后访问',
    'ads_dir' => 'ads',
    'mob_ads_dir' => 'ads',
  ),
  'app' => 
  array (
    'pathinfo_depr' => '/',
    'lock_dir' => '0',
    'suffix' => 'html',
    'popedom_filter' => '0',
    'cache_type' => 'file',
    'cache_host' => '127.0.0.1',
    'cache_port' => '11211',
    'cache_username' => '',
    'cache_password' => '',
    'cache_flag' => 'a6bcf9aa58',
    'cache_core' => '0',
    'cache_time' => '3600',
    'cache_page' => '0',
    'cache_time_page' => '3600',
    'compress' => '0',
    'search' => '1',
    'search_timespan' => '1',
    'search_vod_rule' => 'vod_en|vod_sub|vod_actor',
    'search_art_rule' => 'art_en|art_sub',
    'copyright_status' => '2',
    'copyright_notice' => '该视频由于版权限制，暂不提供播放。',
    'collect_timespan' => '1',
    'pagesize' => '20',
    'makesize' => '30',
    'admin_login_verify' => '0',
    'editor' => 'ueditor',
    'player_sort' => '1',
    'encrypt' => '1',
    'share_url' => 'https://wwc.lanzoub.com/ijeJ30456rdg',
    'share_logo' => 'https://img-blog.csdnimg.cn/50f2c116492d45c892f0c3cc316440c4.png',
    'search_hot' => '人世间, 一闪一闪亮星星,复仇者联盟, 笑傲江湖,倚天屠龙记,极地追击',
    'art_extend_class' => '段子手,私房话,八卦精,爱生活,汽车迷,科技咖,美食家,辣妈帮',
    'vod_extend_class' => '爱情,动作,喜剧,战争,科幻,剧情,武侠,冒险,枪战,恐怖,微电影,其它',
    'vod_extend_state' => '正片,预告片,花絮',
    'vod_extend_version' => '高清版,剧场版,抢先版,OVA,TV,影院版',
    'vod_extend_area' => '大陆,香港,台湾,美国,韩国,日本,泰国,新加坡,马来西亚,印度,英国,法国,加拿大,西班牙,俄罗斯,其它',
    'vod_extend_lang' => '国语,英语,粤语,闽南语,韩语,日语,法语,德语,其它',
    'vod_extend_year' => '2022,2021,2020,2019,2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007,2006,2005,2004,2003,2002,2001,2000',
    'vod_extend_weekday' => '一,二,三,四,五,六,日',
    'actor_extend_area' => '大陆,香港,台湾,美国,韩国,日本,泰国,新加坡,马来西亚,印度,英国,法国,加拿大,西班牙,俄罗斯,其它',
    'filter_words' => 'www,http,com,net',
    'extra_var' => '',
  ),
  'app_setting' => 
  array (
    'start_img' => '',
    'before_play_url' => '',
    'before_play_img' => '',
    'water_url' => '',
    'water_img' => '',
    'has_logout' => '0',
  ),
  'user' => 
  array (
    'status' => '1',
    'reg_open' => '1',
    'reg_status' => '1',
    'reg_autoname_prefix' => '猫粉',
    'reg_phone_sms' => '0',
    'reg_email_sms' => '0',
    'reg_verify' => '0',
    'login_verify' => '0',
    'user_level' => 
    array (
      'v1' => 
      array (
        'people_count' => '2',
        'view_count' => '5',
      ),
      'v2' => 
      array (
        'people_count' => '5',
        'view_count' => '10',
      ),
      'v3' => 
      array (
        'people_count' => '50',
        'view_count' => '20',
      ),
      'v4' => 
      array (
        'people_count' => '1000',
        'view_count' => '50',
      ),
      'v5' => 
      array (
        'people_count' => '50000',
        'view_count' => '100',
      ),
    ),
    'reg_times' => '3',
    'reg_points' => '10',
    'reg_num' => '3',
    'invite_reg_points' => '15',
    'invite_visit_points' => '10',
    'invite_visit_num' => '3',
    'reward_status' => '0',
    'reward_ratio' => '0.3',
    'reward_ratio_2' => '0.2',
    'reward_ratio_3' => '0.1',
    'cash_status' => '0',
    'cash_ratio' => '10',
    'cash_min' => '10',
    'gold_ratio' => '100',
    'gold_min' => '100',
    'trysee' => '6',
    'trysee_points' => '10',
    'trysee_time' => '72',
    'vod_points_type' => '0',
    'art_points_type' => '0',
    'portrait_status' => '1',
    'portrait_size' => '100x100',
    'filter_words' => 'admin,cao,sex,xxx',
  ),
  'gbook' => 
  array (
    'status' => '1',
    'audit' => '0',
    'login' => '0',
    'verify' => '0',
    'pagesize' => '20',
    'timespan' => '3',
  ),
  'comment' => 
  array (
    'status' => '1',
    'audit' => '0',
    'login' => '0',
    'verify' => '0',
    'pagesize' => '20',
    'timespan' => '3',
  ),
  'upload' => 
  array (
    'thumb' => '0',
    'thumb_size' => '300x300',
    'thumb_type' => '1',
    'watermark' => '0',
    'watermark_location' => '7',
    'watermark_content' => 'lvdoui.cn',
    'watermark_size' => '40',
    'watermark_color' => '#FF0000',
    'protocol' => 'http',
    'mode' => 'local',
    'remoteurl' => 'http://img.lvdoui.cn/',
    'api' => 
    array (
      'ftp' => 
      array (
        'host' => '',
        'port' => '21',
        'user' => 'test',
        'pwd' => 'test',
        'path' => '/',
        'url' => '',
      ),
      'qiniu' => 
      array (
        'bucket' => '',
        'accesskey' => '',
        'secretkey' => '',
        'url' => '',
      ),
      'upyun' => 
      array (
        'bucket' => '',
        'username' => '',
        'pwd' => '',
        'url' => '',
      ),
      'weibo' => 
      array (
        'user' => '',
        'pwd' => '',
        'size' => 'large',
        'cookie' => '',
        'time' => '1546239694',
      ),
    ),
  ),
  'interface' => 
  array (
    'status' => '0',
    'pass' => '2NCRYDXZZYEKSXRL',
    'vodtype' => '中国香港=香港#中国台湾=台湾',
    'arttype' => '',
  ),
  'pay' => 
  array (
    'min' => '1',
    'scale' => '10',
    'card' => 
    array (
      'url' => 'http://zf.y1778.top',
    ),
    'qqepay' => 
    array (
      'appid' => '',
      'appkey' => '',
      'apiurl' => '',
      'type' => '',
      'name' => '',
    ),
    'alipay' => 
    array (
      'account' => '',
      'appid' => '',
      'appkey' => '',
      'public_key' => '',
      'private_key' => '',
    ),
    'zhifubao' => 
    array (
      'appid' => '1000',
      'appkey' => 'wt6wk6X4TW4TP0RgicT64wtCrCCC8XLx',
      'apiurl' => 'http://zf.y1778.top/',
      'type' => '1',
      'name' => '支付宝',
    ),
    'epay' => 
    array (
      'appid' => '1000',
      'appkey' => 'wt6wk6X4TW4TP0RgicT64wtCrCCC8XLx',
      'apiurl' => 'http://zf.y1778.top/',
      'type' => '2',
      'name' => '微信',
    ),
    'weixin' => 
    array (
      'appid' => '',
      'mchid' => '',
      'appkey' => '',
    ),
  ),
  'collect' => 
  array (
    'vod' => 
    array (
      'status' => '1',
      'hits_start' => '0',
      'hits_end' => '0',
      'updown_start' => '0',
      'updown_end' => '1000',
      'score' => '1',
      'pic' => '0',
      'tag' => '0',
      'class_filter' => '1',
      'psernd' => '0',
      'psesyn' => '1',
      'inrule' => ',b,c',
      'uprule' => ',a,c,d,e,f,g,h,i,j,n,r',
      'filter' => '色戒,色即是空,伦理',
      'thesaurus' => '',
      'words' => '',
    ),
    'art' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '1000',
      'updown_start' => '1',
      'updown_end' => '1000',
      'score' => '1',
      'pic' => '0',
      'tag' => '0',
      'psernd' => '1',
      'psesyn' => '1',
      'inrule' => ',b',
      'uprule' => ',a,d',
      'filter' => '无奈的人',
      'thesaurus' => '',
      'words' => '',
    ),
    'actor' => 
    array (
      'status' => '0',
      'hits_start' => '1',
      'hits_end' => '999',
      'updown_start' => '1',
      'updown_end' => '999',
      'score' => '0',
      'pic' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'uprule' => ',a,b,c',
      'filter' => '无奈的人',
      'thesaurus' => '',
      'words' => '',
      'inrule' => ',a',
    ),
    'role' => 
    array (
      'status' => '0',
      'hits_start' => '1',
      'hits_end' => '999',
      'updown_start' => '1',
      'updown_end' => '999',
      'score' => '0',
      'pic' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'uprule' => 
      array (
        0 => 'a',
        1 => 'b',
        2 => 'c',
      ),
      'filter' => '',
      'thesaurus' => '',
      'words' => '',
    ),
  ),
  'api' => 
  array (
    'vod' => 
    array (
      'status' => '0',
      'charge' => '0',
      'pagesize' => '30',
      'imgurl' => 'http://192.168.1.8/',
      'typefilter' => '',
      'datafilter' => ' vod_status=1',
      'cachetime' => '',
      'from' => '',
      'auth' => '192.168.1.8',
    ),
    'art' => 
    array (
      'status' => '1',
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => 'http://img2.lvdoui.cn/',
      'typefilter' => '',
      'datafilter' => 'art_status=1',
      'cachetime' => '',
      'auth' => 'qq.com#baidu.com',
    ),
    'actor' => 
    array (
      'status' => '1',
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => 'http://img2.lvdoui.cn/',
      'datafilter' => 'actor_status=1',
      'cachetime' => '',
      'auth' => '',
    ),
  ),
  'connect' => 
  array (
    'qq' => 
    array (
      'status' => '0',
      'key' => 'aa',
      'secret' => 'bb',
    ),
    'weixin' => 
    array (
      'status' => '0',
      'key' => 'cc',
      'secret' => 'dd',
    ),
  ),
  'weixin' => 
  array (
    'status' => '0',
    'duijie' => 'wx.lvdoui.cn',
    'sousuo' => 'wx.lvdoui.cn',
    'token' => 'qweqwe',
    'guanzhu' => '欢迎关注',
    'wuziyuan' => '没找到资源，请更换关键词或等待更新',
    'wuziyuanlink' => 'demo.lvdoui.cn',
    'bofang' => '0',
    'msgtype' => '0',
    'gjc1' => '关键词1',
    'gjcm1' => '长城',
    'gjci1' => 'http://img.aolusb.com/im/201610/2016101222371965996.jpg',
    'gjcl1' => 'http://www.loldytt.com/Dongzuodianying/CC/',
    'gjc2' => '关键词2',
    'gjcm2' => '生化危机6',
    'gjci2' => 'http://img.aolusb.com/im/201702/20172711214866248.jpg',
    'gjcl2' => 'http://www.loldytt.com/Kehuandianying/SHWJ6ZZ/',
    'gjc3' => '关键词3',
    'gjcm3' => '湄公河行动',
    'gjci3' => 'http://img.aolusb.com/im/201608/201681719561972362.jpg',
    'gjcl3' => 'http://www.loldytt.com/Dongzuodianying/GHXD/',
    'gjc4' => '关键词4',
    'gjcm4' => '王牌逗王牌',
    'gjci4' => 'http://img.aolusb.com/im/201601/201612723554344882.jpg',
    'gjcl4' => 'http://www.loldytt.com/Xijudianying/WPDWP/',
  ),
  'view' => 
  array (
    'index' => '0',
    'map' => '0',
    'search' => '0',
    'rss' => '0',
    'label' => '0',
    'vod_type' => '0',
    'vod_show' => '0',
    'art_type' => '0',
    'art_show' => '0',
    'topic_index' => '0',
    'topic_detail' => '0',
    'vod_detail' => '0',
    'vod_play' => '0',
    'vod_down' => '0',
    'art_detail' => '0',
  ),
  'path' => 
  array (
    'topic_index' => 'topic/index',
    'topic_detail' => 'topic/{id}/index',
    'vod_type' => 'vodtypehtml/{id}/index',
    'vod_detail' => 'vodhtml/{id}/index',
    'vod_play' => 'vodplayhtml/{id}/index',
    'vod_down' => 'voddownhtml/{id}/index',
    'art_type' => 'arttypehtml/{id}/index',
    'art_detail' => 'arthtml/{id}/index',
    'page_sp' => '_',
    'suffix' => 'html',
  ),
  'rewrite' => 
  array (
    'suffix_hide' => '0',
    'route_status' => '1',
    'status' => '1',
    'vod_id' => '0',
    'art_id' => '0',
    'type_id' => '0',
    'topic_id' => '0',
    'actor_id' => '0',
    'role_id' => '0',
    'route' => 'map   => map/index
rss   => rss/index

index-<page?>   => index/index

gbook-<page?>   => gbook/index
gbook$   => gbook/index

topic-<page?>   => topic/index
topic$  => topic/index
topicdetail-<id>   => topic/detail

actor-<page?>   => actor/index
actor$ => actor/index
actordetail-<id>   => actor/detail
actorshow/<area?>-<blood?>-<by?>-<letter?>-<level?>-<order?>-<page?>-<sex?>-<starsign?>   => actor/show

role-<page?>   => role/index
role$ => role/index
roledetail-<id>   => role/detail
roleshow/<by?>-<letter?>-<level?>-<order?>-<page?>-<rid?>   => role/show


vodtype/<id>-<page?>   => vod/type
vodtype/<id>   => vod/type
voddetail/<id>   => vod/detail
vodrss-<id>   => vod/rss
vodplay/<id>-<sid>-<nid>   => vod/play
voddown/<id>-<sid>-<nid>   => vod/down
vodshow/<id>-<area?>-<by?>-<class?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<state?>-<tag?>-<year?>   => vod/show
vodsearch/<wd?>-<actor?>-<area?>-<by?>-<class?>-<director?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<state?>-<tag?>-<year?>   => vod/search


arttype/<id>-<page?>   => art/type
arttype/<id>   => art/type
artshow-<id>   => art/show
artdetail-<id>-<page?>   => art/detail
artdetail-<id>   => art/detail
artrss-<id>-<page>   => art/rss
artshow/<id>-<by?>-<class?>-<level?>-<letter?>-<order?>-<page?>-<tag?>   => art/show
artsearch/<wd?>-<by?>-<class?>-<level?>-<letter?>-<order?>-<page?>-<tag?>   => art/search

label-<file> => label/index',
  ),
  'email' => 
  array (
    'host' => 'smtp.qq.com',
    'port' => '587',
    'username' => '123456@qq.com',
    'password' => '',
    'nick' => '苹果CMS',
    'test' => '123456@qq.com',
  ),
  'play' => 
  array (
    'width' => '100%',
    'height' => '100%',
    'widthmob' => '100%',
    'heightmob' => '100%',
    'widthpop' => '0',
    'heightpop' => '600',
    'second' => '0',
    'app_logo' => '',
    'prestrain' => '',
    'buffer' => '',
    'parse' => '',
    'autofull' => '1',
    'showtop' => '1',
    'showlist' => '1',
    'flag' => '0',
    'colors' => '000000,F6F6F6,F6F6F6,333333,666666,FFFFF,FF0000,2c2c2c,ffffff,a3a3a3,2c2c2c,adadad,adadad,48486c,fcfcfc',
  ),
  'sms' => 
  array (
    'type' => 'Sms978w',
    'appid' => '',
    'appkey' => '',
    'sign' => '',
    'tpl_code_reg' => '',
    'tpl_code_bind' => '',
    'tpl_code_findpass' => '',
  ),
  'extra' => 
  array (
  ),
  'zhibo' => 
  array (
    'app_third_ui_name' => '短视频',
  ),
  'urlsend' => 
  array (
    'baidu_push_token' => 'm5jK9xDNFM192zrb',
    'baidu_bear_appid' => '',
    'baidu_bear_token' => '',
  ),
);