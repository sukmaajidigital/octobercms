<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => '不合法的字段类型 :type.',
    'options_method_invalid_model' => '属性 \':field\' 不能解析为有效模型. 请尝试为模型类:model指定一个可选方法.',
    'options_method_not_exists' => '模型 :model 必须定义一个返回 \':field\' 表单字段选项的方法 :method()。',
    'colors_method_not_exists' => '模型 :model 必须定义一个返回十六进制格式的颜色值 \':field\' 字段的 :method() 方法。 ',
  ],
  'widget' => [
    'not_registered' => '未注册部件 \':name\' ',
    'not_bound' => '部件 \':name\' 未绑定至控制器',
  ],
  'page' => [
    'untitled' => '未命名',
    'not_found' => [
      'label' => '找不到页面',
      'help' => '无法找到请求的页面',
      'back_link' => '返回上个页面',
    ],
    'access_denied' => [
      'label' => '拒绝访问',
      'help' => '您没有访问该页面所需的权限.',
      'cms_link' => '返回后台',
    ],
    'no_database' => [
      'label' => '无法找到数据库',
      'help' => '需要数据库以访问后端。请在再次尝试之前检查数据库的配置和迁移。',
      'cms_link' => '返回首页',
    ],
  ],
  'partial' => [
    'not_found_name' => '未找到部件 \':name\' ',
    'invalid_name' => '未知的部件名称 :name ',
  ],
  'ajax_handler' => [
    'invalid_name' => '未知的AJAX处理方法 :name.',
    'not_found' => '无法找到AJAX处理方法 \':name\' ',
  ],
  'account' => [
    'impersonate' => '模拟用户',
    'impersonate_confirm' => '您确定要模拟该用户吗？ 您可以通过注销来恢复到原来的状态。',
    'impersonate_success' => '您现在正在模拟该用户',
    'impersonate_working' => '模拟中...',
    'impersonating' => '模拟 :full_name',
    'stop_impersonating' => '停止模拟',
    'signed_in_as' => '以 :full_name 身份登录',
    'sign_out' => '登出',
    'login_prompt' => '欢迎回来！ 请登录您的帐户以继续。',
    'login_placeholder' => '登录',
    'password_placeholder' => '密码',
    'enter_email' => '输入邮件地址',
    'email_placeholder' => '邮件',
    'apply' => '应用',
    'cancel' => '取消',
    'delete' => '删除',
    'ok' => '好',
  ],
  'dashboard' => [
    'menu_label' => '仪表盘',
    'widget_inspector_title' => '小部件配置',
    'widget_inspector_description' => '配置报告小部件',
    'widget_columns_label' => '宽度 :columns',
    'widget_columns_description' => '小部件宽度， 1 到 10',
    'widget_columns_error' => '请输入小部件宽度，1 到 10',
    'columns' => '{1} 栏|[2,Inf] 栏',
    'widget_new_row_label' => '强制新行',
    'widget_new_row_description' => '把小部件放到新行',
    'widget_title_label' => '小部件标题',
    'widget_title_error' => '需要小部件标题',
    'reset_layout_success' => '布局已经复位',
    'make_default_success' => '当前布局为默认布局',
    'collapse_all' => '全部折叠',
    'expand_all' => '展开全部',
    'status' => [
      'widget_title_default' => '系统状态',
      'update_available' => '{0} 个可用更新！|{1} 个可用更新！|[2,Inf] 个可用更新！',
      'updates_pending' => '等待软件更新',
      'updates_nil' => '软件已为最新版本',
      'updates_link' => '更新',
      'warnings_pending' => '您需要留意一些问题',
      'warnings_nil' => '没有警告显示',
      'warnings_link' => '查看',
      'core_build' => '系统构建',
      'event_log' => '事件日志',
      'request_log' => '请求日志',
      'app_birthday' => '在线日期',
    ],
    'welcome' => [
      'widget_title_default' => '欢迎',
      'welcome_back_name' => '欢迎归来 :app, :name.',
      'welcome_to_name' => '欢迎到 :app, :name.',
      'first_sign_in' => '这是您首次登录.',
      'last_sign_in' => '您最后登录是',
      'view_access_logs' => '访问登录日志',
      'nice_message' => '祝你有美好的一天！',
    ],
  ],
  'user' => [
    'name' => '管理员',
    'list_title' => '管理',
    'new' => '新管理员',
    'first_name' => '名',
    'last_name' => '姓',
    'full_name' => '全名',
    'email' => '邮件',
    'role_field' => '角色',
    'role_comment' => '角色指定了用户的权限，您可以在权限栏中进行修改。',
    'groups' => '团队',
    'groups_comment' => '指定成员所归属的组.',
    'avatar' => '头像',
    'password' => '密码',
    'password_confirmation' => '确认密码',
    'permissions' => '权限',
    'account' => '帐号',
    'superuser' => '超级用户',
    'superuser_comment' => '选中并允许此成员访问所有区域.',
    'send_invite' => '发送邀请邮件',
    'send_invite_comment' => '发送一封包含用户名和密码的欢迎邮件',
    'delete_confirm' => '您真的想要删除这个管理员?',
    'return' => '返回管理员列表',
    'allow' => '允许',
    'inherit' => '继承',
    'deny' => '拒绝',
    'activated' => '已激活',
    'last_login' => '最后登录',
    'created_at' => '创建时间',
    'updated_at' => '更新时间',
    'deleted_at' => '删除时间',
    'show_deleted' => '显示已删除',
    'group' => [
      'name' => '组',
      'name_field' => '名称',
      'name_comment' => '该名称显示在管理员表单的组列表中。',
      'description_field' => '描述',
      'is_new_user_default_field_label' => '默认组',
      'is_new_user_default_field_comment' => '默认添加新管理员到该组',
      'code_field' => '代码',
      'code_comment' => '如果要使用 API 访问组对象，请输入唯一代码。',
      'list_title' => '管理群组',
      'new' => '新组',
      'delete_confirm' => '删除这个管理员组？',
      'return' => '返回群组列表',
      'users_count' => '用户',
    ],
    'role' => [
      'name' => '角色',
      'name_field' => '名称',
      'name_comment' => '该名称显示在管理员表单的角色列表中。',
      'description_field' => '描述',
      'code_field' => '代码',
      'code_comment' => '如果要使用 API 访问角色对象，请输入唯一代码。',
      'list_title' => '管理角色',
      'new' => '新角色',
      'delete_confirm' => '删除这个管理员角色？',
      'return' => '返回角色列表',
      'users_count' => '用户',
    ],
    'preferences' => [
      'not_authenticated' => '没有经过身份验证的用户可以加载或保存首选项。',
    ],
    'trashed_hint_title' => '该账户已经被删除',
    'trashed_hint_desc' => '该账户已经被删除而无法登录。你可以点击右下角的恢复按钮进行恢复。',
  ],
  'list' => [
    'default_title' => '列表',
    'search_prompt' => '搜索...',
    'no_records' => '当前视图中没有记录',
    'missing_model' => '在 :class 中使用的列表行为没有定义模型。',
    'missing_column' => '没有 :columns 的列定义。',
    'missing_columns' => '在 :class 中使用的列表没有定义列表列。',
    'missing_definition' => '列表行为不包含 \':field\' 的列。',
    'missing_parent_definition' => '列表行为不包含 \':definition\' 的定义。',
    'behavior_not_ready' => '列表行为尚未初始化，请检查您是否在控制器中调用了 makeLists()。',
    'invalid_column_datetime' => '列值 \':column\' 不是 DateTime 对象，您是否缺少模型中的 $dates 引用？',
    'pagination' => '显示的记录：第:from-:to项，共 :total 项',
    'first_page' => '首页',
    'last_page' => '末页',
    'prev_page' => '上一页',
    'next_page' => '下一页',
    'refresh' => '刷新',
    'updating' => '正在更新...',
    'loading' => '加载中...',
    'check' => '检查',
    'create_button' => '新 :name',
    'delete_selected' => '删除选中',
    'delete_selected_empty' => '没有要删除的选定记录。',
    'delete_selected_confirm' => '删除选中的记录？',
    'delete_selected_success' => '已删除选定的记录。',
    'column_switch_true' => '是',
    'column_switch_false' => '否',
  ],
  'object_list' => [
    'prop_cant_be_empty' => '属性：:property不能为空',
    'key_value_exists' => '值已经定义：:property_value',
  ],
  'fileupload' => [],
  'form' => [
    'create_title' => '新的 :name',
    'update_title' => '编辑 :name',
    'preview_title' => '预览 :name',
    'restore_success' => '成功恢复 :name',
    'reset_success' => '重置完成',
    'missing_id' => '未指定表单记录ID。',
    'missing_tab' => '缺少有效的标签定义。',
    'missing_model' => '在 :class 中使用的表单无定义模型。',
    'missing_definition' => '表单行为不包含 \':field\' 的字段。',
    'action_confirm' => '你确定吗？',
    'create' => '创建',
    'create_and_close' => '创建并关闭',
    'creating' => '创建中...',
    'creating_name' => '创建:name...',
    'save' => '保存',
    'save_and_close' => '保存并关闭',
    'saving' => '保存...',
    'saving_name' => '正在保存：:name...',
    'delete' => '删除',
    'deleting' => '正在删除...',
    'confirm_delete' => '删除记录？',
    'confirm_delete_multiple' => '您确定删除记录？',
    'deleting_name' => '删除:name...',
    'restore' => '恢复',
    'restoring' => '恢复中...',
    'confirm_restore' => '您确定要恢复这条记录吗？',
    'reset_default' => '重置为默认值',
    'resetting' => '重置',
    'resetting_name' => '重置:name',
    'undefined_tab' => '杂项',
    'field_off' => '关闭',
    'field_on' => '开启',
    'add' => '添加',
    'apply' => '应用',
    'insert' => '插入',
    'cancel' => '取消',
    'close' => '关闭',
    'confirm' => '确认',
    'reload' => '重新加载',
    'complete' => '完成',
    'ok' => '好',
    'or' => '或',
    'confirm_tab_close' => '您真的想要关闭这个标签页吗？未保存的更改将会丢失。',
    'behavior_not_ready' => '表单未初始化，请确认您已调用控制器 initForm().',
    'preview_no_files_message' => '无上传文件。',
    'preview_no_media_message' => '无选中媒体.',
    'preview_no_record_message' => '无选择记录。',
    'select' => '选择',
    'select_all' => '全选',
    'select_none' => '选择无',
    'insert_row' => '插入行',
    'insert_row_below' => '在下面插入行',
    'delete_row' => '删除行',
    'concurrency_file_changed_title' => '文件已更改',
    'concurrency_file_changed_description' => '您正在编辑的文件正在被其他用户修改，您可以重载或覆盖磁盘上的文件。',
    'return_to_list' => '返回列表',
    'no_options_found' => '没有找到选项',
    'error' => '错误',
    'toggle_full_screen' => '切换全屏',
  ],
  'treeview' => [
    'expand' => '展开',
    'collapse' => '折叠',
    'reorder' => '重新排序',
    'clear_search' => '清除搜索',
    'search' => '搜索',
    'command_or_document' => '命令或文档...',
    'quick_access' => '快速访问',
    'open' => '打开',
    'commands' => '命令',
  ],
  'tabs' => [
    'close' => '关闭标签',
    'close_all' => '关闭所有',
    'close_others' => '关闭其他',
    'close_saved' => '保存并关闭',
    'full_screen' => '切换全屏',
  ],
  'modal' => [
    'close' => '关闭',
  ],
  'dropdownmenu' => [
    'go_back' => '返回',
    'close_menu' => '关闭菜单',
  ],
  'recordfinder' => [
    'find_record' => '查找记录',
    'invalid_model_class' => '提供的 ":modelClass" 不可用',
    'cancel' => '取消',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => '关系无配置文件 \':config\'',
    'missing_definition' => '关系无定义 \':field\' ',
    'missing_model' => ':class 关系中无已定义模型',
    'invalid_action_single' => '此操作无法在单一关系上执行.',
    'invalid_action_multi' => '此操作无法在多重关系上执行.',
    'help' => '点击增加',
    'add' => '增加',
    'link_selected' => '关联选中',
    'cancel' => '取消',
    'close' => '关闭',
    'create' => '创建',
    'update' => '更新',
    'preview' => '预览',
    'remove_name' => '移除 :name',
    'delete_name' => '删除 :name',
    'link' => '关联',
    'unlink_name' => '取消关联 :name',
  ],
  'reorder' => [
    'default_title' => '重新排序记录',
    'no_records' => '没有可供排序的记录.',
  ],
  'model' => [
    'name' => '模型',
    'not_found' => '无法找到ID为 :id 的模型 \':class\'',
    'missing_id' => '无法找到指定ID的模型记录.',
    'missing_relation' => '模型 \':class\' 不包含 \':relation\'.',
    'missing_method' => '模型 \':class\' 不包含 \':method\'.',
    'invalid_class' => '模型 :model 在 :class 中是不合法的，它必须继承 \\Model 类.',
    'mass_assignment_failed' => '为模型属性\':attribute\'赋值失败.',
  ],
  'warnings' => [
    'tips' => '系统配置提示',
    'tips_description' => '为了正确配置系统，您需要注意一些问题。',
    'permissions' => '目录 :name 或其子目录对于 PHP 不可写。 请为该目录的网络服务器设置相应的权限。',
    'extension' => 'PHP 扩展名 :name 未安装。 请安装这个库并激活扩展。',
    'plugin_missing' => '插件 :name 是一个依赖项，但尚未安装。 请安装这个插件。',
    'debug' => '调试模式已启用。 不建议将其用于生产安装。',
    'backend_uri' => '后端URL :name 太普通。请设置为更特殊的内容。',
    'backend_login' => '找到具有通用登录名：name 的帐户。请重命名此管理员帐户。',
  ],
  'editor' => [
    'toolbar_buttons_presets' => [
      'default' => '默认',
      'minimal' => '精简',
      'full' => '完整',
    ],
    'paragraph_formats_comment' => '将出现在段落格式下拉列表中的选项。',
  ],
  'tooltips' => [],
  'mysettings' => [
    'menu_label' => '我的设置',
    'menu_description' => '涉及您管理帐号的设置',
  ],
  'myaccount' => [],
  'branding' => [
    'accent_color' => '强调色',
  ],
  'backend_preferences' => [],
  'filter' => [
    'all' => '全部',
    'options_method_not_exists' => '模型类 :model 必须定义一个方法 :method() 返回 \':filter\' 过滤器的选项。',
    'options_static_method_invalid_value' => ':class 上的静态方法 \':method()\' 没有返回有效的选项数组。',
    'date_all' => '所有时期',
    'number_all' => '所有数字',
  ],
  'import_export' => [
    'row' => ':row 行',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => '上传和管理媒体内容 - 图像、视频、声音、文档',
  ],
  'mediafinder' => [
    'label' => '媒体查找器',
    'no_image' => '找不到图片',
    'not_an_image' => '所选文件不是图像',
    'click_to_select_file' => '点击选择文件',
  ],
  'media' => [
    'menu_label' => '媒体',
    'upload' => '上传',
    'move' => '移动',
    'delete' => '删除',
    'add_folder' => '增加文件夹',
    'search' => '搜索',
    'display' => '显示',
    'filter_everything' => '所有',
    'filter_images' => '图片',
    'filter_video' => '视频',
    'filter_audio' => '音频',
    'filter_documents' => '文档',
    'library' => '库',
    'size' => '大小',
    'title' => '标题',
    'last_modified' => '最近修改',
    'public_url' => '公开URL',
    'click_here' => '点击这里',
    'thumbnail_error' => '生成缩略图错误.',
    'return_to_parent' => '返回上层文件夹',
    'return_to_parent_label' => '返回 ..',
    'nothing_selected' => '没有选中.',
    'multiple_selected' => '多选.',
    'uploading_file_num' => '上传 :number 文件...',
    'uploading_complete' => '上传完毕',
    'uploading_error' => '上传失败',
    'type_blocked' => '该文件类型因安全问题被禁止使用。',
    'order_by' => '排序',
    'direction' => '升降序',
    'direction_asc' => '升序',
    'direction_desc' => '降序',
    'folder' => '文件夹',
    'no_files_found' => '未找到您所请求的文件.',
    'delete_empty' => '请选择删除项.',
    'delete_confirm' => '您是否想要删除选中项?',
    'error_renaming_file' => '重命名错误.',
    'new_folder_title' => '新文件',
    'folder_name' => '文件夹名',
    'error_creating_folder' => '新建文件夹错误',
    'folder_or_file_exist' => '文件夹或文件已经存在.',
    'move_empty' => '请选择移动项.',
    'move_popup_title' => '移动文件或文件夹',
    'move_destination' => '目标文件夹',
    'please_select_move_dest' => '请选择目标文件夹.',
    'move_dest_src_match' => '请选择另一个目标文件夹.',
    'empty_library' => '媒体库为空。请上传文件或新建文件夹。',
    'insert' => '插入',
    'crop_and_insert' => '裁剪并插入',
    'select_single_image' => '请选择图片.',
    'selection_not_image' => '所选项不为图片.',
    'restore' => '取消所有更改',
    'resize' => '调整大小...',
    'selection_mode_normal' => '正常',
    'selection_mode_fixed_ratio' => '固定比例',
    'selection_mode_fixed_size' => '固定大小',
    'height' => '高度',
    'width' => '宽度',
    'selection_mode' => '选择模式',
    'resize_image' => '调整图片',
    'image_size' => '图片大小:',
    'selected_size' => '选中:',
  ],
  'table' => [
    'add_item' => '添加项目',
  ],
  'dictionary' => [
    'key_required' => 'Key 字段是必需的',
    'value_required' => 'Value字段是必需的',
  ],
  'uploader' => [
    'uploading' => '上传文件',
    'complete' => '上传完成',
  ],
  'richeditor' => [
    'upload_from_computer' => '从计算机上传',
    'embedding_code' => '嵌入代码',
    'url_required' => 'URL 是必需的',
    'url_validation' => 'URL 必须以 http:// 或 https:// 开头',
    'add_image' => '插入图片',
    'add_video' => '插入视频',
    'add_audio' => '插入音频',
    'add_file' => '插入文件',
    'embedding_code_required' => '需要嵌入代码',
    'embedding_code_invalid' => '请输入有效的 HTML 嵌入代码',
    'embedding_code_invalid_title' => '无效代码',
    'browse' => '浏览媒体库',
    'by_url' => '按网址',
  ],
];