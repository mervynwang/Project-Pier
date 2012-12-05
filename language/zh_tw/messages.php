<?php

  /**
  * Array of messages file (error, success message, status...)
  *
  * @http://www.projectpier.org/
  * 
  * Translated by Mervyn Wang (http://tw.linkedin.com/pub/mervyn-wang/60/648/288)
  *  Reviewed on 2011-1-15 7PM
  */


  return array(
  
    // Empty, dnx etc
    'project dnx' => '所請求的專案在資料庫中不存在',
    'message dnx' => '所請求的消息不存在',
    'no comments in message' => '這個消息上沒有評論',
    'no comments associated with object' => '這個專案上沒有評論被發表',
	'no status updates associated with object' => 'There are no status updates posted for this object',
    'no messages in project' => '這個專案上沒有消息',
    'no subscribers' => '沒有使用者訂閱這個消息',
	'no contacts in company' => 'There are no contacts in this company',

    'no activities in project' => '這個專案上還沒有進行中被記錄',
    'comment dnx' => '所請求的評論不存在',
    'milestone dnx' => '所請求的里程碑不存在',
    'time dnx' => '所請求的時間記錄不存在',
    'task list dnx' => '所請求的任務清單不存在',
    'task dnx' => '所請求的任務不存在',
    'no milestones in project' => '在這個專案中還沒有里程碑',
    'no active milestones in project' => '在這個專案中還沒有進行中的里程碑',
    'empty milestone' => '這個里程碑是空的。你能給它在任何時候增加 <a href="%s">消息</a> 或者 <a href="%s">任務清單</a> ',
    'no logs for project' => '這個專案還沒有記錄相關的資訊',
    'no recent activities' => '在資料庫中最近沒有進行中被記錄',
    'no open task lists in project' => '在這個專案中還沒有開放的任務清單',
    'no completed task lists in project' => '在這個專案中還沒有完成的任務清單',
    'no open task in task list' => '這個任務清單中還沒有定義任務',
    'no projects in db' => '在資料庫中還沒有定義專案',
    'no projects owned by company' => '還沒有公司來負責的專案',
    'no projects started' => '還沒有已經開始的專案',
    'no active projects in db' => '還沒進行的專案',
    'no new objects in project since last visit' => '從您上一次訪問到現在，這個專案上還沒有新的對象生成',
    'no clients in company' => '您的公司還沒有註冊客戶',
	'no contacts in company' => 'There are no contacts in this company',
    'no users in company' => '這個公司中沒有使用者存在',
    'client dnx' => '所選擇的客戶公司不存在',
    'company dnx' => '所選擇的公司不存在',
	'contact dnx' => 'Selected contact does not exist',
    'user dnx' => '所請求的使用者在資料庫中不存在',
    'avatar dnx' => '頭像不存在',
    'no current avatar' => '沒有上傳頭像',
    'no current logo' => '沒有上傳圖標',
    'user not on project' => '所選擇的使用者沒有參與在被選的專案中',
    'company not on project' => '所選擇的公司沒有參與被選的專案',
    'user cant be removed from project' => '所選擇的使用者不能從這個專案中刪除',
    'tag dnx' => '請求的標籤不存在',
    'no tags used on projects' => '在這個專案中沒有標籤',
    'no forms in project' => '在這個專案中沒有表單',
    'project form dnx' => '所請求的專案表單在資料庫中不存在',
    'related project form object dnx' => '相關的表單對像在資料庫中不存在',
    'no my tasks' => '沒有任務被分派給你',
    'no search result for' => '沒有與 「<strong>%s</strong>」 匹配的結果',
    'config category dnx' => '你請求的配置分類不存在',
    'config category is empty' => '所選擇的配置分類是空的',
    'email address not in use' => '%s 沒有在使用',
    'no administration tools' => '在資料庫中沒有註冊管理工具',
    'administration tool dnx' => '管理工具 「%s」 不存在',
    'about to delete' => '你將刪除',
    'about to move' => '你將移動',
    'no image functions' => 'No image functions (install GD library)',
    'no ldap functions' => 'No LDAP functions (install ldap extension)',

    
    // Success
    'success add project' => '專案 %s 已經被成功新增',
    'success copy project' => '專案 %s 已經被複製為 %s',
    'success edit project' => '專案 %s 已被更新',
    'success delete project' => '專案 %s 已被刪除',
    'success complete project' => '專案 %s 以被完成',
    'success open project' => '專案 %s 已被重新開放',
    'success edit project logo' => '專案圖標已被更新',
    'success delete project logo' => '專案圖標已被刪除',
    'success edit logo' => 'Logo has been updated',
    'success delete logo' => 'Logo has been deleted',
   
    'success add milestone' => '里程碑 \'%s\' 已經被成功新增',
    'success edit milestone' => '里程碑 \'%s\' 已被更新',
    'success deleted milestone' => '里程碑 \'%s\' 已被刪除',

    'success add time' => '時間 \'%s\' 已經被成功新增',
    'success edit time' => '時間 \'%s\' 已被更新',
    'success deleted time' => '時間 \'%s\' 已被刪除',
    
    'success add message' => '消息 %s 已經被成功新增',
    'success edit message' => '消息 %s 已被更新',
	'success move message' => 'Message \'%s\' has been moved from project \'%s\' to project \'%s\'',
    'success deleted message' => '消息 \'%s\' 和它所有相關評論已被刪除',
    
    'success add comment' => '評論已經被成功發表',
    'success edit comment' => '評論已經被成功更新',
    'success delete comment' => '評論已經被成功刪除',
    
    'success add task list' => '任務清單 \'%s\' 已被新增',
    'success edit task list' => '任務清單 \'%s\' 已被更新',
    'success copy task list' => '任務清單 \'%s\' 被複製為 \'%s\' 帶著 %s 個任務',
    'success move task list' => '任務清單 \'%s\' 被從 \'%s\' 專案中移動到 \'%s\'專案中',
    'success delete task list' => '任務清單 \'%s\' 已被刪除',
    
    'success add task' => '所選的任務已被新增',
    'success edit task' => '所選的任務已被更新',
    'success delete task' => '所選的任務已被刪除',
    'success complete task' => '所選的任務已完成',
    'success open task' => '所選的任務已開放',
    'success n tasks updated' => '%s 個任務已被更新',
     
    'success add client' => '客戶公司 %s 已被新增',
    'success edit client' => '客戶公司 %s 已被更新',
    'success delete client' => '客戶公司 %s 已被刪除',
    
    'success edit company' => '公司資料已被更新',
    'success edit company logo' => '公司圖標已被更新',
    'success delete company logo' => '公司圖標已被刪除',
    
    'success add user' => '使用者 %s 已被新增',
    'success edit user' => '使用者 %s 已被更新',
    'success delete user' => '使用者 %s 已被刪除',

    'success add contact' => 'Contact %s has been added successfully',
    'success edit contact' => 'Contact %s has been updated successfully',
    'success delete contact' => 'Contact %s has been deleted successfully',
    
    'success update project permissions' => '專案的全新已被更新',
    'success remove user from project' => '使用者已被從這個專案中刪除',
    'success remove company from project' => '公司已被從這個專案中刪除',
    
    'success update profile' => '使用者資料已被更新',
    'success edit avatar' => '頭像已被更新',
    'success delete avatar' => '頭像已被刪除',
    
    'success hide welcome info' => '歡迎資訊框已被隱藏',
    
    'success complete milestone' => '里程碑 \'%s\' 已被完成',
    'success open milestone' => '里程碑 \'%s\' 已被重新開放',
    
    'success subscribe to message' => '你已成功地訂閱了這個消息',
    'success unsubscribe to message' => '你已成功地解除了這個消息的訂閱',
   
    'success add project form' => '表單 \'%s\' 已被新增',
    'success edit project form' => '表單 \'%s\' 已被更新',
    'success delete project form' => '表單 \'%s\' 已被刪除',
    
    'success update config category' => '%s 配置值已被更新',
    'success forgot password' => '你的密碼被用郵件發出',
    
    'success test mail settings' => '測試郵件被成功地發送',
    'success massmail' => '郵件被發送',
    
    'success update company permissions' => '公司權限資訊 %s 已被更新',
    'success user permissions updated' => '使用者權限已被更新',
    
    // Failures
    'error form validation' => '由於某些屬性資料不合法，對像保存失敗',
    'error delete owner company' => '所屬公司不能被被刪除',
    'error delete message' => '所選消息刪除失敗',
    'error update message options' => '更新消息選項失敗',
    'error delete comment' => '所選評論刪除失敗',
    'error delete milestone' => '所選里程碑刪除失敗',
    'error delete time' => '所選時間刪除失敗',
    'error complete task' => '所選任務標記完成失敗',
    'error open task' => '所選任務重新開放失敗',
    'error delete project' => '所選項目刪除失敗',
    'error complete project' => '所選項目標記完成失敗',
    'error open project' => '所選項目重新開放失敗',
    'error edit project logo' => '專案圖標更新失敗',
    'error delete project logo' => '專案圖標刪除失敗',
    'error delete client' => '所選客戶公司刪除失敗',
    'error delete user' => '所選使用者刪除失敗',
    'error update project permissions' => '專案權限更新失敗',
    'error remove user from project' => '從專案中刪除使用者失敗',
    'error remove company from project' => '從專案中刪除公司失敗',
    'error edit avatar' => '更新頭像失敗',
    'error delete avatar' => '刪除頭像失敗',
    'error hide welcome info' => '隱藏歡迎資訊失敗',
    'error complete milestone' => '所選里程碑標記完成失敗',
    'error open milestone' => '所選里程碑重新開放失敗',
    'error edit company logo' => '公司圖標更新失敗',
    'error delete company logo' => '公司圖標刪除失敗',
    'error subscribe to message' => '訂閱所選消息失敗',
    'error unsubscribe to message' => '取消訂閱所選消息失敗',
    'error delete task list' => '所選任務清單刪除失敗',
    'error delete task' => '所選任務刪除失敗',
    'error delete category' => '所選分類刪除失敗',
    'error check for upgrade' => '檢查新版本失敗',
    'error test mail settings' => '發送測試消息失敗',
    'error massmail' => '發送郵件失敗',
    'error owner company has all permissions' => '所屬公司具有所有權限',
	'error delete task' => 'Failed to delete selected task',
    'error delete category' => 'Failed to delete selected category',
    'error check for upgrade' => 'Failed to check for a new version',
    'error test mail settings' => 'Failed to send test message',
    'error massmail' => 'Failed to send email',
    'error owner company has all permissions' => 'Owner company has all permissions',
    
    // Access or data errors
    'no access permissions' => '你沒有權限訪問所請求的頁面',
    'invalid request' => '無效的請求!',
    
    // Confirmation
    'confirm delete message' => '你確定要刪除這個消息?',
    'confirm delete milestone' => '你確定要刪除這個里程碑?',
    'confirm delete task list' => '你確定要刪除這個任務清單和它的所有任務?',
    'confirm delete task' => '你確定要刪除這個任務?',
    'confirm delete comment' => '你確定要刪除這個評論?',
    'confirm delete category' => '你確定要刪除這個分類?',
    'confirm delete project' => '你確定要刪除這個專案和它的所有資料(消息, 任務, 里程碑, 文件...)?',
    'confirm delete project logo' => '你確定要刪除這個圖標?',
    'confirm complete project' => '你確定要把這個專案標記完成? 所有專案進行中將被鎖定',
    'confirm open project' => '你確定要把這個專案標記開放? 這會把所有專案進行中解鎖',
    'confirm delete client' => '你確定要把所選客戶公司和它的所有使用者都全部刪除?',
    'confirm delete user' => '你確定要把這個使用者賬號刪除?',
    'confirm reset people form' => '你確定要把這個表單重置? 你做的所有修改將丟失!',
    'confirm remove user from project' => '你確定要把這個使用者從專案中刪除?',
    'confirm remove company from project' => '你確定要把這個公司從專案中刪除?',
    'confirm logout' => '你確定要從系統中退出?',
    'confirm delete current avatar' => '你確定要把此頭像刪除?',
    'confirm delete company logo' => '你確定要把此公司圖標刪除?',
    'confirm subscribe' => '你確定要訂閱此消息? 你想在除你之外的人對此消息評論的時候收到通知郵件',
    'confirm reset form' => '你確定要重置這個表單?',
    'confirm subscribe' => 'Are you sure that you want to subscribe to this message? You will receive an email every time someone (except you) posts a comment on this message.',
    'confirm reset form' => 'Are you sure that you want to reset this form?',
    
    // Errors...
    'system error message' => '抱歉，但是有個錯誤導致你的請求無法執行。一個錯誤報告已被發給了系統管理員',
    'execute action error message' => '抱歉，但是ProjectPier現在無法執行你的請求。一個錯誤報告已被發給了系統管理員',
    
    // Log
    'log add projectmessages' => '\'%s\' 已被新增',
    'log edit projectmessages' => '\'%s\' 已被更新',
    'log delete projectmessages' => '\'%s\' 已被刪除',
    
    'log add comments' => '%s 已被新增',
    'log edit comments' => '%s 已被更新',
    'log delete comments' => '%s 已被刪除',
    
    'log add projectmilestones' => '\'%s\' 已被新增',
    'log edit projectmilestones' => '\'%s\' 已被更新',
    'log delete projectmilestones' => '\'%s\' 已被刪除',
    'log close projectmilestones' => '\'%s\' 已完成',
    'log open projectmilestones' => '\'%s\' 已重新開放',

    'log add projecttimes' => '\'%s\' 已被新增', 
    'log edit projecttimes' => '\'%s\' 已被更新',
    'log delete projecttimes' => '\'%s\' 已被刪除',
    
    'log add projecttasklists' => '\'%s\' 已被新增',
    'log edit projecttasklists' => '\'%s\' 已被更新',
    'log delete projecttasklists' => '\'%s\' 已被刪除',
    'log close projecttasklists' => '\'%s\' 已被關閉',
    'log open projecttasklists' => '\'%s\' 已被開放',
    
    'log add projecttasks' => '\'%s\' 已被新增',
    'log edit projecttasks' => '\'%s\' 已被更新',
    'log delete projecttasks' => '\'%s\' 已被刪除',
    'log close projecttasks' => '\'%s\' 已被關閉',
    'log open projecttasks' => '\'%s\' 已被開放',
  
    'log add projectforms' => '\'%s\' 已被新增',
    'log edit projectforms' => '\'%s\' 已被更新',
    'log delete projectforms' => '\'%s\' 已被刪除',
  
    'log add projects' => '%s 已被新增',
    'log edit projects' => 'Project \'%s\' updated',
    'log open projects' => 'Project \'%s\' opened',
    'log close projects' => 'Project \'%s\' closed',
    'log delete projects' => 'Project \'%s\' deleted',

    'log add users' => 'User \'%s\' added',
    'log edit users' => 'User \'%s\' updated',
    'log delete users' => 'User \'%s\' deleted',

    'log add companies' => 'Company \'%s\' added',
    'log edit companies' => 'Company \'%s\' updated',
    'log delete companies' => 'Company \'%s\' deleted',

    'log add contacts' => 'Contact \'%s\' added',
    'log edit contacts' => 'Contact \'%s\' updated',
    'log delete contacts' => 'Contact \'%s\' deleted',

    'log add i18nlocales' => 'Locale \'%s\' added',
    'log edit i18nlocales' => 'Locale \'%s\' updated',
    'log delete i18nlocales' => 'Locale \'%s\' deleted',

    'log add i18localevalues' => 'Locale value \'%s\' added',
    'log edit i18nlocalevalues' => 'Locale value \'%s\' updated',
    'log delete i18nlocalevalues' => 'Locale value \'%s\' deleted',
  ); // array

?>