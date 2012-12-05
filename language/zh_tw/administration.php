<?php

  /**
  * @http://www.projectpier.org/
  * 
  * Translated by Mervyn Wang (http://tw.linkedin.com/pub/mervyn-wang/60/648/288)
  *  Reviewed on 2011-1-15 7PM
  */
  return array(

    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Test mail settings',
    'administration tool desc test_mail_settings' => 'Use this simple tool to send test emails to check if the ProjectPier mailer is configured properly',
    'administration tool name mass_mailer' => 'Mass mailer',
    'administration tool desc mass_mailer' => 'Simple tool that lets you send plain text messages to any group of users registered in the system',
    'administration tool name system_info' => 'System information',
    'administration tool desc system_info' => 'Simple tool that shows you system details',
    'administration tool name browse_log' => 'Browse system log',
    'administration tool desc browse_log' => 'Use this tool to browse the system log and detect errors',

    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => '配置',
    
    'mail transport mail()' => '默認PHP上傳',
    'mail transport smtp' => 'SMTP伺服器',
    
    'secure smtp connection no'  => '否',
    'secure smtp connection ssl' => '是,使用SSL',
    'secure smtp connection tls' => '是,使用TLS',
    
    'file storage file system' => '文件系統',
    'file storage mysql' => '資料庫(MySQL)',
    
    // Categories
    'config category name general' => '常規',
    'config category desc general' => '常規ProjectPier系統上傳',
    'config category name mailing' => '郵件發送',
    'config category desc mailing' => '使用此配置來上傳ProjectPier系統如何發送郵件通知。你可以按照php.ini文件中提供的資訊配置，或者使用SMTP伺服器的配置資訊',
    'config category name features' => '功能',
    'config category desc features' => '使用如下參數來啟用或者停用不同的功能，或者選擇專案資料顯示的不同方式',
    'config category name database' => '資料庫',
    'config category desc database' => '使用如下參數類配置資料庫相關選項',
    'config category name authentication' => 'Authentication',
    'config category desc authentication' => 'Access to all authentication settings',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => '地點名稱',
    'config option desc site_name' => '這個值將被作為專案的地點名稱在看板頁面上顯示',
    'config option name file_storage_adapter' => '文件存儲',
    'config option desc file_storage_adapter' => '選擇用來存儲附件、頭像、圖標圖片和其他任何上傳文檔的位置。 <strong>推薦使用資料庫引擎存儲</strong>.',
    'config option name default_project_folders' => '默認文件夾',
    'config option desc default_project_folders' => '當一個專案被創建的時候，會生成一個文件夾。每一個文件夾名稱應該占新的一行。 重複的或者空行將被程序忽略',
    'config option name theme' => '皮膚',
    'config option desc theme' => '使用皮膚功能你可以改變Projectpier系統默認的外觀和顏色',
    'config option name calendar_first_day_of_week' => '每週的第一天',
    'config option name check_email_unique' => '郵件地址必須是唯一的',
    'config option name remember_login_lifetime' => '保持登錄狀態的秒數',
    'config option name installation_root' => 'Web站點的路徑',
    'config option name installation_welcome_logo' => '登錄頁面的Logo圖標',
    'config option name installation_welcome_text' => '登錄頁面上的文字',
    'config option name installation_base_language' => '基礎語言(也用於登錄頁面)',
    'config option name dashboard action index' => 'Overview',
    'config option name dashboard action my_projects' => 'My Projects',
    'config option name dashboard action my_tasks' => 'My tasks',
    'config option name dashboard action my_projects_by_name' => 'My Projects - ordered by name',
    'config option name dashboard action my_projects_by_priority' => 'My Projects - ordered by priority',
    'config option name dashboard action my_projects_by_milestone' => 'My Projects - ordered by milestone',
    'config option name dashboard action my_tasks_by_name' => 'My Tasks - ordered by name',
    'config option name dashboard action my_tasks_by_priority' => 'My Tasks - ordered by priority',
    'config option name dashboard action my_tasks_by_milestone' => 'My Tasks - ordered by milestone',
    'config option name dashboard action contacts' => 'Contacts',
    'config option name dashboard action search_contacts' => 'Search contacts',

    // LDAP authentication support
    'config option name ldap_domain' => 'LDAP 域名',
    'config option desc ldap_domain' => '進行中目錄域名',
    'config option name ldap_host' => 'LDAP 主機',
    'config option desc ldap_host' => '進行中目錄主機名或者IP地址',
    'secure ldap connection no' => '否',
    'secure ldap connection tls' => '是，使用TLS',
    'config option name ldap_secure_connection' => '使用安全LDAP連接',
    
    // ProjectPier
    'config option name upgrade_check_enabled' => '使用升級包線上檢查',
    'config option desc upgrade_check_enabled' => '如果選 \'是\' 系統將每天檢查是否ProjectPier有可以下載的新版本發佈',
    'config option name logout_redirect_page' => '退出頁面重定向頁面',
    'config option desc logout_redirect_page' => '配置當使用者退出系統後，被重定向的跳轉頁面。使用默認字符串變更到默認配置',
    
    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange兼容模式',
    'config option desc exchange_compatible' => '如果您使用的是Microsoft Exchange 伺服器，上傳這個選項為是， 來避免一些已知錯誤。',
    'config option name mail_transport' => '郵件發送',
    'config option desc mail_transport' => '使用默認的PHP配置來發送郵件，或者指定一個 SMTP伺服器',
    'config option name mail_from' => '郵件發件人: 地址',
    'config option name mail_use_reply_to' => '用於回復: 給發件人',
    'config option name smtp_server' => 'SMTP 伺服器',
    'config option name smtp_port' => 'SMTP 端口',
    'config option name smtp_authenticate' => '使用SMTP認證',
    'config option name smtp_username' => 'SMTP 使用者名',
    'config option name smtp_password' => 'SMTP 密碼',
    'config option name smtp_secure_connection' => '使用安全SMTP連接',

    'config option name per_project_activity_logs' => '專案前期進行中記錄',
    'config option name categories_per_page' => '每頁分類的數量',

    'config option name character_set' => '使用的字符集',
    'config option name collation' => '字符集排序',

    'config option name session_lifetime' => '會話剩餘時間',
    'config option name default_controller' => '默認主頁',
    'config option name default_action' => '默認次頁',
    'config option name default_controller' => 'Default main page',
    'config option name default_action' => 'Page to show after login',

    'config option name logs_show_icons' => '在應用記錄中顯示圖標',
    'config option name default_private' => '私有選項為默認上傳',
    'config option name send_notification_default' => 'Default setting for Send notification',
    'config option name enable_efqm' => 'Enable EFQM options',
    'config option name login_show_options' => 'Show options on the login page',
    'config option desc login_show_options' => 'If yes, options for setting language and theme are shown.',
    'config option name display_application_logs' => 'Display application logs',
    'config option desc display_application_logs' => 'If no, logging still occurs but it is not displayed anymore.',
    'config option name dashboard_logs_count' => 'Max. number of application log lines to show',
    'config option desc dashboard_logs_count' => 'Limits the number of log lines to show on the dashboard',

    // Authentication
    'config option name authdb server' => 'Database server',
    'config option desc authdb server' => 'The ip address or DNS name of the database server for authentication. Port number can be included.',
    'config option name authdb username' => 'Database user name',
    'config option desc authdb username' => 'The password to access the database',
    'config option name authdb password' => 'Database user name',
    'config option desc authdb password' => 'The password corresponding to the user',
    'config option name authdb database' => 'Database name',
    'config option desc authdb database' => 'Name of the database in the database server',
    'config option name authdb sql' => 'Select SQL',
    'config option desc authdb sql' => 'The SQL to retrieve a single row from the table containing the user details. At least 1 field should be returned named email. $username/$password is the placeholder for the user name/password during login.',

    'config option name parking space reservation url' => 'Parking space url',
    'config option desc parking space reservation url' => 'Enter the complete url to start the parking space reservation web application',

    'config option name map url' => 'Display map url',
    'config option desc map url' => 'The url to display a map showing the location of a contact or company. $location is the placeholder for the location details.',
    'config option name route url' => 'Display route url',
    'config option desc route url' => 'The url to display a route showing a route from the current user (contact) to the location of a contact or company. $from/$to is the placeholder for the from address/to address.',

  ); // array
 
?>