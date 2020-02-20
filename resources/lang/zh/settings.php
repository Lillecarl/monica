<?php

return [
    'sidebar_settings' => '帐户设置',
    'sidebar_personalization' => '个性化',
    'sidebar_settings_storage' => '存储空间',
    'sidebar_settings_export' => '导出数据',
    'sidebar_settings_users' => '用户',
    'sidebar_settings_subscriptions' => '订阅',
    'sidebar_settings_import' => '导入数据',
    'sidebar_settings_tags' => '标签管理',
    'sidebar_settings_api' => 'API',
    'sidebar_settings_dav' => 'Dav 资源',
    'sidebar_settings_security' => '安全',
    'sidebar_settings_auditlogs' => '追踪日志',

    'export_title' => '导出帐户数据',
    'export_be_patient' => '单击按钮开始导出。处理导出可能需要几分钟时间，请耐心等待, 不要取消按钮。',
    'export_title_sql' => '导出到 SQL',
    'export_sql_explanation' => '以 SQL 格式导出数据使您可以将数据导入到自己的Monica实例中。这只在你有自己的服务器时有效。',
    'export_sql_cta' => '导出到 SQL',
    'export_sql_link_instructions' => '注意: <a href=":url">阅读说明</a>, 了解有关将此文件导入到您的实例的详细信息。',

    'firstname' => '名',
    'lastname' => '姓氏',
    'name_order' => '名称顺序',
    'name_order_firstname_lastname' => '<名> <姓> - 小明 王',
    'name_order_lastname_firstname' => '<姓> <名> - 王 小明',
    'name_order_firstname_lastname_nickname' => '<名> <姓> (<昵称>) - 小明 王 (狗蛋)',
    'name_order_firstname_nickname_lastname' => '<名> (<昵称>) <姓> - 小明 (狗蛋) 王',
    'name_order_lastname_firstname_nickname' => '<姓> <名> (<昵称>) - 王 小明 (狗蛋)',
    'name_order_lastname_nickname_firstname' => '<姓> (<昵称>) <名> - 王 (狗蛋) 小明',
    'name_order_nickname' => '<昵称> - 狗蛋',
    'currency' => '货币',
    'name' => '您的姓名: :name',
    'email' => '电子邮件地址',
    'email_placeholder' => '输入电子邮箱',
    'email_help' => '这是用于登录的电子邮件, 同时也用来接收您的提醒。',
    'timezone' => '时区',
    'temperature_scale' => '温度单位',
    'temperature_scale_fahrenheit' => '华氏度',
    'temperature_scale_celsius' => '摄氏度',
    'layout' => '布局',
    'layout_small' => '最大1200像素宽',
    'layout_big' => '浏览器的全宽度',
    'save' => '更新偏好',
    'delete_title' => '删除您的帐户',
    'delete_desc' => '您想要删除您的帐户吗？警告：删除是永久性的，您的所有数据将被永久删除，如果您有订阅的话也将立即取消',
    'delete_other_desc' => '声明：您在主数据库中的数据将立即删除。 然而，正如我们的隐私政策所描述的那样。 如果出现故障，我们会做数据库的每日备份。备份将保存30天——然后它将被完全删除。 想象我们可以在所有备份中删除您的特定数据是不现实的。 顺便提一下，这种数据是在非常安全的亚马逊服务器上加密的，除了我们以外，没有人拥有加密密钥。 因此，您的数据将在 30 天后从所有备份中完全消失。',
    'reset_desc' => '您想重置您的帐户吗？这将删除所有联系人以及与之关联的数据。您的帐户将不会被删除。',
    'reset_title' => '删除您的帐户',
    'reset_cta' => '重置帐户',
    'reset_notice' => '您确定要重新设置帐户吗？此操作不能回退。',
    'reset_success' => '您的帐户已成功重置',
    'delete_notice' => '您确定要重新设置帐户吗？此操作不能回退。',
    'delete_cta' => '删除帐户',
    'settings_success' => '偏好设置已更新',
    'locale' => '应用程序中使用的语言',
    'locale_help' => '您想要帮助翻译Monica或添加新语言吗？请点击 <a href=":url" target="_blank" lang="en">了解更多信息</a>。',
    'locale_ar' => '阿拉伯文',
    'locale_cs' => '捷克文',
    'locale_de' => '德文',
    'locale_en' => '英文',
    'locale_es' => '西班牙文',
    'locale_fr' => '法文',
    'locale_he' => '希伯来文',
    'locale_hr' => '克罗地亚文',
    'locale_it' => '意大利文',
    'locale_nl' => '荷兰文',
    'locale_pt' => '葡萄牙文',
    'locale_pt-BR' => '葡萄牙语 (巴西)',
    'locale_ru' => '俄文',
    'locale_zh' => '简体中文',
    'locale_tr' => '土耳其文',
    'locale_en-GB' => '英语 (英国)',

    'security_title' => '安全',
    'security_help' => '更改您的帐户的安全选项。',
    'password_change' => '更改密码',
    'password_current' => '当前密码',
    'password_current_placeholder' => '输入当前密码',
    'password_new1' => '新密码',
    'password_new1_placeholder' => '输入一个新密码',
    'password_new2' => '确认',
    'password_new2_placeholder' => '重新输入新密码',
    'password_btn' => '更改密码',
    '2fa_title' => '双重验证',
    '2fa_otp_title' => '用于二次验证的App',
    '2fa_enable_title' => '启用二次验证',
    '2fa_enable_description' => '启用双重身份验证以提高帐户的安全性。',
    '2fa_enable_otp' => '打开您的双重认证移动应用程序, 并扫描以下 QR 条码:',
    '2fa_enable_otp_help' => '如果您的双重认证移动应用程序不支持 QR 条码, 请在下面的代码中输入:',
    '2fa_enable_otp_validate' => '请验证您刚设置的新设备:',
    '2fa_enable_success' => '双重认证已激活',
    '2fa_enable_error' => '尝试激活双重身份验证时出错',
    '2fa_enable_error_already_set' => '二次验证已激活',
    '2fa_disable_title' => '关闭双重身份验证',
    '2fa_disable_description' => '为您的帐户禁用双重素身份验证。小心, 你的帐户将不再安全!',
    '2fa_disable_success' => '双重身份认证已禁用',
    '2fa_disable_error' => '尝试禁用双重身份验证时出错',
    'u2f_title' => 'U2F 安全密钥',
    'u2f_enable_description' => '添加新的 U2F 安全密钥',
    'u2f_key_name_help' => '给你的钥匙起一个名字',
    'u2f_key_name' => '密钥名称:',
    'u2f_buttonAdvise' => '如果您的安全密钥有一个按钮, 请按下它。',
    'u2f_noButtonAdvise' => '如果没有, 请将其拔出并再次插入。',
    'u2f_success' => '您的密钥已被检测到并验证完毕。',
    'u2f_insertKey' => '插入安全密钥。',
    'u2f_error_other_error' => '发生错误',
    'u2f_error_bad_request' => '您没有使用 HTTPS或访问的 URL 与应用程序 ID 不匹配',
    'u2f_error_configuration_unsupported' => '客户端配置不支持',
    'u2f_error_device_ineligible' => '当前设备不支持此请求。',
    'u2f_error_timeout' => '请求超时',
    'u2f_last_use' => '最后使用: {timestamp}',
    'u2f_delete_confirmation' => '确实要删除这个钥匙吗?',
    'u2f_delete_success' => '密钥已删除',

    'webauthn_title' => '安全钥匙 - WebAuthn',
    'webauthn_enable_description' => '添加一个安全钥匙',
    'webauthn_key_name_help' => '给你的钥匙起个名字',
    'webauthn_key_name' => '钥匙名称:',
    'webauthn_success' => '您的钥匙已被检测到并验证完毕。',
    'webauthn_last_use' => '最后使用: {timestamp}',
    'webauthn_delete_confirmation' => '确实要删除这个钥匙吗?',
    'webauthn_delete_success' => '钥匙已删除',
    'webauthn_insertKey' => '插入您的安全钥匙',
    'webauthn_buttonAdvise' => '如果您的安全钥匙有按钮，请按下它。',
    'webauthn_noButtonAdvise' => '如果没有, 请将其拔出并再次插入。',
    'webauthn_not_supported' => '您的游览器并不支持WebAuthn',
    'webauthn_not_secured' => 'WebAuthn只支持SSL连接，请使用https打开这个页面',
    'webauthn_error_already_used' => '这个钥匙已经注册，您无需在注册一次。',
    'webauthn_error_not_allowed' => '操作超时或不允许。',

    'recovery_title' => '恢复代码',
    'recovery_show' => '获取恢复代码',
    'recovery_copy_help' => '复制到您的剪贴板',
    'recovery_help_intro' => '以下是您的恢复代码:',
    'recovery_help_information' => '您可以使用每个恢复代码一次。',
    'recovery_clipboard' => '已复制到剪贴板',
    'recovery_generate' => '正在生成代码...',
    'recovery_generate_help' => '请注意, 生成新代码将使以前生成的代码失效',
    'recovery_already_used_help' => '此代码已被使用。',

    'users_list_title' => '可以访问您的帐户的用户',
    'users_list_add_user' => '邀请新用户',
    'users_list_you' => '这是你',
    'users_list_invitations_title' => '待处理的邀请',
    'users_list_invitations_explanation' => '已邀请',
    'users_list_invitations_invited_by' => '被:name邀请',
    'users_list_invitations_sent_date' => '在:date发送',
    'users_blank_title' => '您是唯一可以访问此帐户的人。',
    'users_blank_add_title' => '你想邀请别人吗？',
    'users_blank_description' => '此人将具有您拥有的相同访问权限, 并且可以添加、编辑或删除联系人信息。',
    'users_blank_cta' => '邀请他人加入',
    'users_add_title' => '通过电子邮件邀请新用户到您的帐户',
    'users_add_description' => '此人将拥有与您相同的权利, 包括邀请其他用户并删除它们 (包括您)。因此, 请确保您信任此人。',
    'users_add_email_field' => '输入您要邀请的人的电子邮件',
    'users_add_confirmation' => '我确认我想邀请这个用户到我的帐户。此人将访问我的所有数据, 并与我所看到的一致。',
    'users_add_cta' => '通过电子邮件邀请用户',
    'users_accept_title' => '接受邀请并新建一个账号',
    'users_error_please_confirm' => '请您先确认您要邀请此用户',
    'users_error_email_already_taken' => '这个电子邮件已经存在，请另选一个！',
    'users_error_already_invited' => '您已经邀请了此用户。请选择其他电子邮件地址。',
    'users_error_email_not_similar' => '这不是邀请人的电子邮件。',
    'users_invitation_deleted_confirmation_message' => '已成功删除邀请',
    'users_invitations_delete_confirmation' => '确实要删除此邀请吗？',
    'users_list_delete_confirmation' => '是否确实要从您的帐户中删除此用户？',
    'users_invitation_need_subscription' => '您需要升级账户才能添加更多用户',

    'subscriptions_account_current_plan' => '您当前的订阅',
    'subscriptions_account_current_paid_plan' => '您当前的订阅是：:name，感谢您的订阅。',
    'subscriptions_account_next_billing' => '您的订阅将在 <strong>:date</strong> 自动续费',
    'subscriptions_account_cancel' => '您可以随时 <a href=":url">取消订阅</a>。',
    'subscriptions_account_free_plan' => '您正在使用免费版',
    'subscriptions_account_free_plan_upgrade' => '您可以将您的帐户升级为:name, 它的成本为每月$:price。您将享有以下特权:',
    'subscriptions_account_free_plan_benefits_users' => '不限数量的用户',
    'subscriptions_account_free_plan_benefits_reminders' => '电子邮件提醒',
    'subscriptions_account_free_plan_benefits_import_data_vcard' => '从 vCard 文件导入联系人',
    'subscriptions_account_free_plan_benefits_support' => '支持项目的长久运行, 使我们可以引入更多的功能。',
    'subscriptions_account_upgrade' => '更新您的账户',
    'subscriptions_account_upgrade_title' => '立即升级您的Monica账户吧！',
    'subscriptions_account_upgrade_choice' => '在下方选择一个订阅（已有 :customers 订阅了高级版）',
    'subscriptions_account_invoices' => '发票',
    'subscriptions_account_invoices_download' => '下载',
    'subscriptions_account_invoices_subscription' => '订阅周期：:startDate 至 :endDate',
    'subscriptions_account_payment' => '哪个付费周期最适合您？',
    'subscriptions_account_confirm_payment' => '交易尚未完成，请您按此<a href=":url">确认您的付款</a>',
    'subscriptions_downgrade_title' => '将您的帐户降级为免费版',
    'subscriptions_downgrade_limitations' => '免费版的功能有限制。如果您需要降级，请您确保完成以下检查：',
    'subscriptions_downgrade_rule_users' => '您的帐户中必须只有1个用户',
    'subscriptions_downgrade_rule_users_constraint' => '您的帐户中当前有 <a href=":url">:count 个用户</a>。',
    'subscriptions_downgrade_rule_invitations' => '您不能有未接受的邀请',
    'subscriptions_downgrade_rule_invitations_constraint' => '您的帐户中当前有 <a href=":url">:count 个未确认邀请</a>。',
    'subscriptions_downgrade_rule_contacts' => '您不能超过 :number 的活跃联系人',
    'subscriptions_downgrade_rule_contacts_constraint' => '当前有 <a href=":url">:count 位联系人</a>。',
    'subscriptions_downgrade_cta' => '降级',
    'subscriptions_downgrade_success' => '您已降级到免费版！',
    'subscriptions_downgrade_thanks' => '非常感谢您尝试过高级版订阅。我们一直为Monica不断地增加新的功能-, 期待您的再次订阅。',
    'subscriptions_back' => '返回设置',
    'subscriptions_upgrade_title' => '升级您的帐户',
    'subscriptions_upgrade_choose' => '您选择了:plan',
    'subscriptions_upgrade_infos' => '请在下方输入您的付款信息：',
    'subscriptions_upgrade_name' => '持卡人姓名',
    'subscriptions_upgrade_zip' => '邮政编码',
    'subscriptions_upgrade_credit' => '信用卡或借记卡',
    'subscriptions_upgrade_submit' => '支付{amount}',
    'subscriptions_upgrade_charge' => '您将支付 :price ，下次扣费日期：:date。如果您改变主意了，您可以随时取消订阅。',
    'subscriptions_upgrade_charge_handled' => '支付服务由第三方支付平台 <a href=":url">Stripe</a> 提供，我们无法接触到您的个人信息。',
    'subscriptions_upgrade_success' => '感谢您的订阅！',
    'subscriptions_upgrade_thanks' => '欢迎来到让世界变得更美好的社区。',

    'subscriptions_payment_confirm_title' => '确认您的 :amount 付款',
    'subscriptions_payment_confirm_information' => '需要额外信息来处理您的付款，请您补充下列付款信息。',
    'subscriptions_payment_succeeded_title' => '支付成功',
    'subscriptions_payment_succeeded' => '此交易已经完成。',
    'subscriptions_payment_cancelled_title' => '付款已取消',
    'subscriptions_payment_cancelled' => '您的付款已被取消。',
    'subscriptions_payment_error_name' => '请提供您的姓名',
    'subscriptions_payment_success' => '您的付款已成功',

    'subscriptions_pdf_title' => '您的:name每月订阅',
    'subscriptions_plan_choose' => '选择此计划',
    'subscriptions_plan_year_title' => '按年度支付',
    'subscriptions_plan_year_cost' => '$45 美元/年',
    'subscriptions_plan_year_cost_save' => '您可以节省 25%',
    'subscriptions_plan_year_bonus' => '一整年的安心',
    'subscriptions_plan_month_title' => '按月支付',
    'subscriptions_plan_month_cost' => '$5 美元/月',
    'subscriptions_plan_month_bonus' => '随时取消',
    'subscriptions_plan_include1' => '您将享有以下特权：',
    'subscriptions_plan_include2' => '无限添加联系人·无限的用户数量·电子邮件提醒·导入 vCard ·个性化的联系人信息',
    'subscriptions_plan_include3' => '收入的100% 用于此项目的开发。',
    'subscriptions_help_title' => '您可能还关心',
    'subscriptions_help_opensource_title' => '什么是开源项目？',
    'subscriptions_help_opensource_desc' => 'Monica是一个开源项目，这意味着它是由社区建造的项目。开源意味着代码在 GitHub 上公开提供, 每个人都可以检查并修改它。我们筹集的所有资金都致力于建立更好的功能, 拥有更强大的服务器, 帮助支付账单。没有您的支持，我们将无法完成这一切。',
    'subscriptions_help_limits_title' => '你们对免费版的联系人有限制吗？',
    'subscriptions_help_limits_plan' => '是的。免费版您能拥有:number位联系人。',
    'subscriptions_help_discounts_title' => '你们对非盈利机构和学生有优惠吗？',
    'subscriptions_help_discounts_desc' => '当然！Monica免费为学生，非盈利机构提供服务。您只需要提交一下材料给我们的 <a href=":support">支持人员</a>。',
    'subscriptions_help_change_title' => '如果我改变主意怎么办？',
    'subscriptions_help_change_desc' => '您可以随时取消您的订阅。但是，目前为止我们无法提供退款服务。',

    'stripe_error_card' => '您的卡被拒，原因是：:message',
    'stripe_error_api_connection' => '与Stripe的通信失败，请稍候重试。',
    'stripe_error_rate_limit' => '与Stripe的通信次数过多，请稍候再试。',
    'stripe_error_invalid_request' => '无效的参数，请稍后再试。',
    'stripe_error_authentication' => 'Stripe授权失败',

    'import_title' => '在您的帐户中导入联系人',
    'import_cta' => '上载联系人',
    'import_stat' => '您目前为止导入了:number个文件。',
    'import_result_stat' => '上传了包含 :total_contacts 个联系人的 vCard (:total_imported imported, :total_skipped skipped)',
    'import_view_report' => '查看报告',
    'import_in_progress' => '导入正在进行中。在一分钟内重新加载页面。',
    'import_upload_title' => '从 vCard 文件导入联系人',
    'import_upload_rules_desc' => '但是, 我们有一些规则:',
    'import_upload_rule_format' => '我们支持 <code>vcard</code> 和 <code>vcf</code> 文件。',
    'import_upload_rule_vcard' => '我们支持 vCard 3.0 格式, 这是Contacts.app (macOS) 和 Google Contacts的默认格式. 。',
    'import_upload_rule_instructions' => '导出 <a href=":url1" target="_blank" rel="noopener noreferrer">Contacts.app (macOS)</a> 和 <a href=":url2" target="_blank" rel="noopener noreferrer">Google Contacts</a>的说明。',
    'import_upload_rule_multiple' => '现在, 如果您的联系人有多个电子邮件地址或电话号码, 则只会获取第一个条目。',
    'import_upload_rule_limit' => '文件限制为10MB。',
    'import_upload_rule_time' => '上传联系人和处理它们可能需要1分钟的时间。请耐心等待。',
    'import_upload_rule_cant_revert' => '请确认您上传的数据是正确的，一旦上传就无法撤销。',
    'import_upload_form_file' => '你的 <code>.vcf</code> 或 <code>. vCard</code> 文件:',
    'import_upload_behaviour' => '导入偏好:',
    'import_upload_behaviour_add' => '添加新条目, 跳过已有条目',
    'import_upload_behaviour_replace' => '替换现有条目',
    'import_upload_behaviour_help' => '提示: 替换会替换所有在 vCard 文件中获取的数据, 但是会保留未被替换的信息区域。',
    'import_report_title' => '导入报表',
    'import_report_date' => '导入日期',
    'import_report_type' => '导入类型',
    'import_report_number_contacts' => '文件中的联系人数',
    'import_report_number_contacts_imported' => '导入的联系人数量',
    'import_report_number_contacts_skipped' => '跳过的联系人数',
    'import_report_status_imported' => '导入',
    'import_report_status_skipped' => '跳过',
    'import_vcard_parse_error' => '分析 vcard 项时出错',
    'import_vcard_contact_exist' => '联系人已存在',
    'import_vcard_contact_no_firstname' => '无名字 (必填)',
    'import_vcard_file_not_found' => '文件不存在',
    'import_vcard_unknown_entry' => '未知的联系人姓名',
    'import_vcard_file_no_entries' => '文件不包含联系人',
    'import_blank_title' => '您暂无导入的联系人。',
    'import_blank_question' => '是否立即导入联系人？',
    'import_blank_description' => '我们可以从 Google Contacts 或您的Contact manager那里导入您的 vCard 文件。',
    'import_blank_cta' => '导入 vCard',
    'import_need_subscription' => '您需要订阅才能导入联系人',

    'tags_list_title' => '标签',
    'tags_list_description' => '您可以通过设置来标记联系人。标记的工作方式类似于文件夹, 但可以向联系人添加多个标记。若要添加新标记, 请在联系人中添加即可。',
    'tags_list_contact_number' => ':count 个联系人',
    'tags_list_delete_success' => '标签已成功删除',
    'tags_list_delete_confirmation' => '确实要删除该标签吗？不会删除任何联系人, 只有标签。',
    'tags_blank_title' => '标签是对您的联系人进行分类的一种很好的方式。',
    'tags_blank_description' => '标签的工作方式类似于文件夹, 但可以向联系人添加多个标签。转到联系人并在名字的下面标记一个朋友,。一旦联系人被标记, 请返回此处管理帐户中的所有标签。',

    'api_title' => 'API 访问',
    'api_description' => 'API 可以用来从外部应用程序操纵Monica的数据, 例如移动应用程序。',
    'api_help' => '要使用 API，必须要有一个Token。 您可以创建个人访问 Token，也可以授权OAuth 客户端为您创建它。 查看 <a href=":url">API 文档</a>获取详情',
    'api_endpoint' => '此 Monica 实例的 API 终端是：',

    'api_personal_access_tokens' => '个人访问令牌',
    'api_pao_description' => '请确保将此token授予您信任的源-因为它们允许您访问所有数据。',
    'api_token_title' => '个人访问 Token',
    'api_token_create_new' => '创建密钥',
    'api_token_not_created' => '您没有已创建的访问密钥',
    'api_token_name' => 'Token 名称',
    'api_token_expire' => '过期于 {date}',
    'api_token_delete' => '删除',
    'api_token_create' => '创建密钥',
    'api_token_scopes' => '作用域',
    'api_token_help' => '这是您的个人访问密钥，我们只会展示一次，请妥善保管。您现在可以使用这个密钥进行API请求',

    'api_oauth_clients' => '您的 Oauth 客户端',
    'api_oauth_clients_desc' => '您可以注册自己的 OAuth 客户端。',
    'api_oauth_clients_desc2' => '使用此客户端ID请求一个新的Token，并将授权码转换为Token。请参阅 <a href="{url}">Laravel Passport文档</a> 获取更多信息。',
    'api_oauth_title' => 'OAuth 客户端',
    'api_oauth_create_new' => '创建新的客户端',
    'api_oauth_edit' => '编辑客户端',
    'api_oauth_not_created' => '您尚未创建Oauth客户端',
    'api_oauth_clientid' => '客户端 ID',
    'api_oauth_name' => '名称',
    'api_oauth_name_help' => '安全码',
    'api_oauth_secret' => '密钥',
    'api_oauth_create' => '创建客户端',
    'api_oauth_redirecturl' => '重定向URL',
    'api_oauth_redirecturl_help' => '应用程序的授权回调 URL。',

    'api_authorized_clients' => '授权客户端列表',
    'api_authorized_clients_desc' => '本节列出了您授权访问应用程序的所有客户端，您可以随时撤销此授权。',
    'api_authorized_clients_title' => '已授权的应用',
    'api_authorized_clients_none' => '尚无授权客户端',
    'api_authorized_clients_name' => '名称',
    'api_authorized_clients_scopes' => '作用域',

    'personalization_tab_title' => '个性化您的帐户',

    'personalization_title' => '在这里您可以找到不同的设置来配置您的帐户。这些功能更多的是针对想最大化控制Monica "高级用户"所设置。',
    'personalization_contact_field_type_title' => '联系人字段类型',
    'personalization_contact_field_type_add' => '添加新字段类型',
    'personalization_contact_field_type_description' => '在这里您可以配置所有不同类型的联系人字段, 您可以关联到所有联系人。如果将来出现新的社交网络, 您将能够在这里添加这种新的联系方式。',
    'personalization_contact_field_type_table_name' => '名称',
    'personalization_contact_field_type_table_protocol' => '协议',
    'personalization_contact_field_type_table_actions' => '行动',
    'personalization_contact_field_type_modal_title' => '添加新的联系人字段类型',
    'personalization_contact_field_type_modal_edit_title' => '编辑现有联系人字段类型',
    'personalization_contact_field_type_modal_delete_title' => '删除现有联系人字段类型',
    'personalization_contact_field_type_modal_delete_description' => '确实要删除此联系人字段类型吗？删除此类型的联系人字段将删除所有联系人的此类型的所有数据。',
    'personalization_contact_field_type_modal_name' => '名称',
    'personalization_contact_field_type_modal_protocol' => '协议 (可选)',
    'personalization_contact_field_type_modal_protocol_help' => '每个新的联系人字段类型都可以选定。如果设置了协议, 我们将使用它来触发设置的操作。',
    'personalization_contact_field_type_modal_icon' => '图标 (可选)',
    'personalization_contact_field_type_modal_icon_help' => '您可以将图标与此联系人字段类型关联。您需要添加对Font Awesome图标的引用。',
    'personalization_contact_field_type_delete_success' => '联系人字段类型已成功删除。',
    'personalization_contact_field_type_add_success' => '已成功添加联系人字段类型。',
    'personalization_contact_field_type_edit_success' => '联系人字段类型已成功更新。',

    'personalization_genders_title' => '性别类型',
    'personalization_genders_add' => '添加新的性别类型',
    'personalization_genders_desc' => '你可以根据需要定义尽可能多的性别。您的帐户中至少需要一种性别类型。',
    'personalization_genders_modal_add' => '添加性别类型',
    'personalization_genders_modal_edit' => '更新性别类型',
    'personalization_genders_modal_name' => '名称',
    'personalization_genders_modal_name_help' => '在联系人页面显示性别的名称',
    'personalization_genders_modal_sex' => '性别',
    'personalization_genders_modal_sex_help' => '在导入/导出 VCard 时用于定义关系',
    'personalization_genders_modal_default' => '设为新联系人的默认性别吗？',
    'personalization_genders_modal_delete' => '删除性别类型',
    'personalization_genders_modal_delete_desc' => '是否确实要删除{name}？',
    'personalization_genders_modal_delete_question' => '这个性别下有{count} 个联系人，请您为这个联系人分配新的性别：|这个性别下有{count} 个联系人，请您为这些联系人分配新的性别',
    'personalization_genders_modal_delete_question_default' => '此性别为默认性别，如果您删除此性别，您需要指定一个新的默认性别',
    'personalization_genders_modal_error' => '请从列表中选择一个有效的性别。',
    'personalization_genders_list_contact_number' => '{count} 个联系人|{count} 个联系人',
    'personalization_genders_table_name' => '名称',
    'personalization_genders_table_sex' => '性别',
    'personalization_genders_table_default' => '默认',
    'personalization_genders_default' => '默认性别',
    'personalization_genders_make_default' => '更改默认性别',
    'personalization_genders_select_default' => '选择默认性别',
    'personalization_genders_m' => '男性',
    'personalization_genders_f' => '女性',
    'personalization_genders_o' => '其他',
    'personalization_genders_u' => '未知',
    'personalization_genders_n' => '无或不适用',

    'personalization_reminder_rule_save' => '更改已保存',
    'personalization_reminder_rule_title' => '提醒规则',
    'personalization_reminder_rule_line' => '提前 {count} 天|提前 {count} 天',
    'personalization_reminder_rule_desc' => '对于您设置的每个提醒, 我们可以在事件发生前几天向您发送电子邮件。您可以在此处切换这些通知。请注意, 这些通知只适用于每月和每年的提醒。',

    'personalization_module_save' => '更改已被保存',
    'personalization_module_title' => '功能',
    'personalization_module_desc' => '有些人并不需要启用所有功能。因此您可以在此处隐藏不需要的功能，该改动对所有联系人生效。',

    'personalisation_paid_upgrade' => '这是一个高级版的功能. 在设置-订阅内进行高级版订阅。',

    'reminder_time_to_send' => '应发送每日提醒的时间',
    'reminder_time_to_send_help' => '基于您提供的信息, 您的下一次提醒将在 <span title="{dateTimeUtc}" class="reminder-info">{dateTime}</span>发送.',

    'personalization_activity_type_category_title' => '活动分类',
    'personalization_activity_type_category_add' => '增加一个活动分类',
    'personalization_activity_type_category_table_name' => '名称',
    'personalization_activity_type_category_description' => '我们为您添加了一些默认活动及分类，您可以在此处修改它们。',
    'personalization_activity_type_category_table_actions' => '行动',
    'personalization_activity_type_category_modal_add' => '增加活动分类',
    'personalization_activity_type_category_modal_edit' => '编辑活动分类',
    'personalization_activity_type_category_modal_question' => '您想如何命名这个新的分类？',
    'personalization_activity_type_add_button' => '增加一个活动',
    'personalization_activity_type_modal_add' => '增加一个活动',
    'personalization_activity_type_modal_question' => '您想如何命名这个新的活动？',
    'personalization_activity_type_modal_edit' => '编辑活动',
    'personalization_activity_type_category_modal_delete' => '删除活动分类',
    'personalization_activity_type_category_modal_delete_desc' => '您真的要删除这个活动分类吗？',
    'personalization_activity_type_modal_delete' => '删除活动',
    'personalization_activity_type_modal_delete_desc' => '您真的要删除这个活动吗？',
    'personalization_activity_type_modal_delete_error' => '我们无法找到这个活动',
    'personalization_activity_type_category_modal_delete_error' => '我们无法找到这个活动分类',

    'personalization_life_event_category_work_education' => '工作与教育',
    'personalization_life_event_category_family_relationships' => '家庭与恋爱',
    'personalization_life_event_category_home_living' => '家与生活',
    'personalization_life_event_category_travel_experiences' => '旅行与经历',
    'personalization_life_event_category_health_wellness' => '健康与饮食',

    'personalization_life_event_type_new_job' => '新工作',
    'personalization_life_event_type_retirement' => '退休',
    'personalization_life_event_type_new_school' => '新学校',
    'personalization_life_event_type_study_abroad' => '留学',
    'personalization_life_event_type_volunteer_work' => '志愿者工作',
    'personalization_life_event_type_published_book_or_paper' => '出版一本书或一篇论文',
    'personalization_life_event_type_military_service' => '兵役',
    'personalization_life_event_type_first_met' => '第一次见面',
    'personalization_life_event_type_new_relationship' => '新关系',
    'personalization_life_event_type_engagement' => '订婚',
    'personalization_life_event_type_marriage' => '婚姻',
    'personalization_life_event_type_anniversary' => '周年纪念日',
    'personalization_life_event_type_expecting_a_baby' => '想要孩子',
    'personalization_life_event_type_new_child' => '新的孩子',
    'personalization_life_event_type_new_family_member' => '新的家庭成员',
    'personalization_life_event_type_new_pet' => '新宠物',
    'personalization_life_event_type_end_of_relationship' => '结束了一段关系',
    'personalization_life_event_type_loss_of_a_loved_one' => '失去心爱的人',
    'personalization_life_event_type_moved' => '搬家了',
    'personalization_life_event_type_bought_a_home' => '买了新房子',
    'personalization_life_event_type_home_improvement' => '装修',
    'personalization_life_event_type_holidays' => '假日',
    'personalization_life_event_type_new_vehicle' => '新车',
    'personalization_life_event_type_new_roommate' => '新室友',
    'personalization_life_event_type_overcame_an_illness' => '熬过了疾病',
    'personalization_life_event_type_quit_a_habit' => '戒掉一个习惯',
    'personalization_life_event_type_new_eating_habits' => '新的饮食习惯',
    'personalization_life_event_type_weight_loss' => '减肥',
    'personalization_life_event_type_wear_glass_or_contact' => '戴眼镜',
    'personalization_life_event_type_broken_bone' => '骨折',
    'personalization_life_event_type_removed_braces' => '去掉了牙齿矫正器',
    'personalization_life_event_type_surgery' => '手术',
    'personalization_life_event_type_dentist' => '牙医',
    'personalization_life_event_type_new_sport' => '新的运动',
    'personalization_life_event_type_new_hobby' => '新的爱好',
    'personalization_life_event_type_new_instrument' => '新乐器',
    'personalization_life_event_type_new_language' => '新语言',
    'personalization_life_event_type_tattoo_or_piercing' => '纹身或耳洞',
    'personalization_life_event_type_new_license' => '新驾照',
    'personalization_life_event_type_travel' => '旅行',
    'personalization_life_event_type_achievement_or_award' => '成就或奖项',
    'personalization_life_event_type_changed_beliefs' => '改变信仰',
    'personalization_life_event_type_first_word' => '第一次发言',
    'personalization_life_event_type_first_kiss' => '初吻',

    'storage_title' => '存储空间',
    'storage_account_info' => '您的账户容量: :accountLimit Mb /  您目前已使用: :currentAccountSize Mb (:percentUsage%)',
    'storage_upgrade_notice' => '升级您的帐户, 以便上传文档和照片。',
    'storage_description' => '在这里, 您可以看到上传的有关您的联系人的所有文档和照片。',

    'dav_title' => 'WebDAV',
    'dav_description' => '在这里, 您可以找到所有设置, 以便为 Carddav 和 CalDAV 导出使用 webdav 资源。',
    'dav_copy_help' => '复制到您的剪贴板',
    'dav_clipboard_copied' => '值已复制到剪贴板',
    'dav_url_base' => '所有CardDAV和CalDAV资源的基本 url:',
    'dav_connect_help' => '您可以在手机或计算机上使用此基本 url 连接您的联系人和/或日历。',
    'dav_connect_help2' => '使用您的登录名 (电子邮件) 和密码, 或创建 api 令牌进行身份验证。',
    'dav_url_carddav' => '用于联系资源的CardDAV',
    'dav_url_caldav_birthdays' => '用于生日资源的 caldav url:',
    'dav_url_caldav_tasks' => '用于任务资源的 caldav url:',
    'dav_title_carddav' => 'CardDAV',
    'dav_title_caldav' => 'CalDAV',
    'dav_carddav_export' => '导出一个文件中的所有联系人',
    'dav_caldav_birthdays_export' => '在一个文件中导出所有生日',
    'dav_caldav_tasks_export' => '导出一个文件中的所有任务',

    'archive_title' => '存档您帐户中的所有联系人',
    'archive_desc' => '这将存档您帐户中的所有联系人',
    'archive_cta' => '存档所有联系人',

    'logs_title' => '此账户发生的所有情况',
    'logs_author' => ':name 于 :date ',
];
