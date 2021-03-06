<?php

/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 10/06/2017
 * Time: 8:59 SA
 */
class Memcaches
{
    const CACHE_ON = 1 ; // 0:Not cache, 1:Cache
    const CACHE_TIME_TO_LIVE_15 = 900; //Time cache 15 minute
    const CACHE_TIME_TO_LIVE_30 = 1800; //Time cache 30 minute
    const CACHE_TIME_TO_LIVE_60 = 3600; //Time cache 60 minute
    const CACHE_TIME_TO_LIVE_ONE_DAY = 86400; //Time cache 1 day
    const CACHE_TIME_TO_LIVE_ONE_WEEK = 604800; //Time cache 7 day
    const CACHE_TIME_TO_LIVE_ONE_MONTH = 2419200; //Time cache 1 month
    const CACHE_TIME_TO_LIVE_ONE_YEAR =  29030400; //Time cache 1 year

    //Role
    const CACHE_ALL_ROLE    = 'cache_all_role';
    const CACHE_ROLE_ID    = 'cache_role_id_';

    //User
    const CACHE_USER_ID    = 'cache_user_id_';
    const CACHE_ALL_USER    = 'cache_user_all';

    //User group
    const CACHE_ALL_USER_GROUP    = 'cache_all_user_group';
    const CACHE_USER_GROUP_ID    = 'cache_user_group_id_';

    //Modul
    const CACHE_ALL_MODUL    = 'cache_all_modul';
    const CACHE_MODUL_ID    = 'cache_modul_id_';

    //Trash
    const CACHE_ALL_TRASH    = 'cache_all_trash';
    const CACHE_TRASH_ID    = 'cache_trash_id_';

    //Menu
    const CACHE_ALL_MENU    = 'cache_all_menu';
    const CACHE_MENU_ID    = 'cache_menu_id_';

    //Info
    const CACHE_INFO_ID    = 'cache_info_id_';

    //News
    const CACHE_ALL_NEWS    = 'cache_all_news';
    const CACHE_NEWS_ID    = 'cache_news_id_';

    //News
    const CACHE_ALL_CATEGORY    = 'cache_all_category';
    const CACHE_CATEGORY_ID    = 'cache_category_id_';
    const CACHE_CATEGORY_key    = 'cache_category_key_';
    const CACHE_ALL_CATEGORY_MENU    = 'cache_all_category_menu';

    //Product
    const CACHE_ALL_PRODUCT    = 'cache_all_product';
    const CACHE_PRODUCT_ID    = 'cache_product_id_';
    //Product
    const CACHE_ALL_ADVERTISE   = 'cache_all_advertise';
    const CACHE_ADVERTISE_ID    = 'cache_advertise_id_';
    //Script
    const CACHE_ALL_SCRIPT   = 'cache_all_script';
    const CACHE_SCRIPT_ID    = 'cache_script_id_';
    //banner
    const CACHE_ALL_BANNER   = 'cache_all_banner';
    const CACHE_BANNER_ID    = 'cache_banner_id_';
    //static
    const CACHE_ALL_STATIC   = 'cache_all_static';
    const CACHE_STATIC_ID    = 'cache_static_id_';
    const CACHE_STATIC_KEY    = 'cache_static_key_';
    //static
    const CACHE_ALL_ORDER   = 'cache_all_order';
    const CACHE_ORDER_ID    = 'cache_order_id_';
}