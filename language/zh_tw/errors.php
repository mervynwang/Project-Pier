<?php

  /**
  * Error messages
  *
  * @version 1.0
  * @http://www.projectpier.org/
  * 
  * Translated by Mervyn Wang (http://tw.linkedin.com/pub/mervyn-wang/60/648/288)
  *  Reviewed on 2011-1-15 7PM
  */

  return array(
  
    // General
    'invalid email address' => '郵件地址格式無效',
    'id missing' => '請求ID缺失',
   
    // Company validation errors
    'company name required' => '需要公司組織名稱',
    'company homepage invalid' => '主頁地址格式錯誤(http://www.example.com)',

    // Contact validation errors
    'name value required' => 'Name is required',
    'existing contact required' => 'You need to select an existing contact',
    
    // Add user to contact form
    'contact already has user' => 'This contact already has a user account attached to it.', 
    
    // User validation errors
    'username value required' => '需要填寫使用者名',
    'username must be unique' => '抱歉，所選使用者名已經被佔有了',
    'email value is required' => '需要填寫郵件地址',
    'email address must be unique' => '抱歉，所選郵件地址已經被佔用了',
    'company value required' => '使用者必須是某公司的成員',
    'password value required' => '密碼需要填寫',
    'passwords dont match' => '密碼不一致',
    'old password required' => '需要舊的密碼',
    'invalid old password' => '舊密碼無效',
    'user homepage invalid' => '主頁值無效(http://www.example.com)',
    
    // Avatar
    'invalid upload type' => '無效的文件格式，允許的是 %s',
    'invalid upload dimensions' => '文件尺寸無效，最大格式為 %s x %s 像素',
    'invalid upload size' => '圖片大小無效。最大為 %s',
    'invalid upload failed to move' => '上傳文件失敗',
    
    // Registration form
    'terms of services not accepted' => '為了創建一個賬號你需要閱讀和接受我們的服務條款',
    
    // Init company website
    'failed to load company website' => '加載站點失敗，所屬公司未發現',
    'failed to load project' => '加載進行中專案失敗',
    
    // Login form
    'username value missing' => '請輸入你的使用者名',
    'password value missing' => '請輸入你的用密碼',
    'invalid login data' => '登陸失敗，請檢查你的登陸資訊後重試',
	'invalid password' => 'Incorrect password. Please check your password and try again',
    
    // Add project form
    'project name required' => '需要專案名稱',
    'project name unique' => '專案名稱必須是唯一的',
    
    // Add message form
    'message title required' => '需要標題',
    'message title unique' => '資訊標題必須在這個專案中是唯一的',
    'message text required' => '需要標題的文本資訊',
    
    // Add comment form
    'comment text required' => '評論的文本資訊是必須的',
    
    // Add milestone form
    'milestone name required' => '需要填寫里程碑名稱',
    'milestone due date required' => '需要填寫里程碑日期',

    // Add task list
    'task list name required' => '需要填寫任務清單名稱',
    'task list name unique' => '任務清單名稱在此專案中必須是唯一的',
    
    // Add task
    'task text required' => '需要填寫任務文本',

    // Test mail settings
    'test mail recipient required' => '收信人地址是必須的',
    'test mail recipient invalid format' => '收信人地址格式無效',
    'test mail message required' => '郵件消息文字是必須的',
    
    // Mass mailer
    'massmailer subject required' => '消息主題是必須的',
    'massmailer message required' => '消息資訊是必須的',
    'massmailer select recipients' => '選擇將收到此郵件的使用者',
    
  ); // array

?>