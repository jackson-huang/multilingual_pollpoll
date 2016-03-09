<?php

return [

    /*
    |--------------------------------------------------------------------------
    | pollpoll.net related Language Lines
    |--------------------------------------------------------------------------
    |
    |
    */
    //sys
    'sys.Contact us'=>'联系我们',
    'sys.agree'    => '按下按钮登入系统代表您同意以下' ,

    'sys.Log In'   => '登录',
    'sys.logout'   => '退出',
    'sys.Sign Up'  => '免费注册',
    'sys.fPass'    => '忘记密码?',
    'sys.email'    => '电子邮箱',
    'sys.password' => '密码',
    'sys.ConfmPass'=> '确认密码',
    'sys.name'     => '帐户名称',
    'sys.or'       => '或',
    'sys.and'      => '及',
    'sys.socialErr'=> '使用合作帐号登录发生错误. 原因:',
    'sys.lang'     => '语言',
    'sys.template' => '模版',
    'sys.privacy'  => '隐私权',
    'sys.terms'    => '服务条款',
    'sys.feedback' => '意见反馈',
    'sys.cooperation'=>'合作建议',

    //pollpoll
    'create'    => '新建问卷',
    'mgt'       => '问卷管理',
    'duplicate.votes'   => '这份问卷您已经投过票了！',

    'qnr.status.draft'		=> '草稿编辑中',
    'qnr.status.complete'	=> '完成',
    'qnr.savedraft.success' => '保存草稿成功，可以在后台问卷管理功能中再次编辑',

    'main.remlink'          => '现在可以记下您的问卷链接并开始使用',
    'main.qnrqr'            => '问卷链接 二维码：',
    'main.qnrurl'           => '回覆问卷：',
    'main.qnrembed'         => '内嵌问卷到您的网站？',
    'main.thanks'           => '谢谢您，已经完成问卷！',
    'main.createqnr'        => '自己创建一个问卷？',
    'main.result'           => '看统计结果',
    'main.resultqr'         => '问卷结果统计链接 二维码：',
    'main.resulturl'        => '问卷结果：',
    'main.resultiframe'     => '复制以下iframe将统计结果嵌入到您的网站',
    'main.h1'               => '普罗快问卷',
    'main.h1.desc'          => '让您快速制作问卷并回收结果',
    'main.insert'           => '插入图片或视频需要将文件保存到您的账号中，请先登录。',
    'main.use'              => '使用图片或视频',
    'main.writeq'           => '在这里输入我想问的问题...',
    'main.opt'              => '输入选项',
    'main.dupcheck1'        => '不勾选:<br>同一张问卷，使用者可以无限制的重复投票。',
    'main.dupcheck2'        => '一般限制:<br>适合组织、公司、学校内部，重要性为普通程度的问卷。',
    'main.dupcheck3'        => '严格限制:<br>适合重要性较高的问卷，以使用者的公网IP作为限制条件，一般组织、公司内部若使用intranet架构，对外连线部分使用者有可能会被视为单一公网IP。',
    'main.dupcheck4'        => '限制重复投票',
    'main.dupcheckgeneral'  => '一般限制',
    'main.dupcheckstrict'   => '严格限制',
    'main.sign1'            => '输入你要求投票者留下的信息。例如：姓名、工号、联系电话或电子邮箱。结果页面会显示投票者留下的信息。',
    'main.sign2'            => '记名投票',
    'main.sign3'            => '比如: 姓名、工号、联系电话、电子邮箱',
    'main.multi1'           => '允许投票者同时选择多个选项！',
    'main.multi2'           => '多项选择',
//    'main.multi3'           => '多项选择',
//    'main.multi4'           => '允许投票者同时选择多个选项，输入多选题的题号，并用逗号（，）分隔。例如第1 3 5题为多选题，则输入1,3,5',
    'main.recaptcha'        => '防止刷票',
    'main.captcha'          => '重要性较高或是统计时间较长的问卷，可以开启验证码，防止刷票',
    'main.endtime'          => '设置投票截止时间',

    'main.private1'         => '此问卷仅使用于公司内部或独立组织内的调查，若问卷的内容不宜公开或不宜让非组织内的成员投票，请勾选。',
    'main.private2'         => '将问卷设置为不公开',
    'main.info1'            => '如果您要求投票者提供额外的性别、年龄等信息，那么投票结果就会显示这些信息的统计分析。',
    'main.info2'            => '要求投票人提供更多信息',
    'main.infogender'       => '性别',
    'main.infoage'          => '年龄段',
    'main.qnrtitle'         => '修改问卷标题',
    'main.qnrftitle'        => '输入问卷标题',
    'main.endtime.err'      => '设定的截止日期有错误!',
    'main.finish'           => '完成了...',
    'main.alphabet'         => '输入字母',
    'main.neweqnr'          => '创建问卷',
    'main.saveqnr'          => '保存问卷',
    'main.savedraft'        => '暂存草稿',
    'main.two_opts'         => '请输入至少两个选项!',

    //multigen
    'multiqnr'              => '多题型问卷',
    'multifrom'             => '从这里开始：',
    'multiselnum'           => '选择问卷包含的题数：',

    //multimain
    'multiset'              => '完成其他设置',

    //qnrmain
    'qnrendtime'            => '已经超过问卷截至时间！',
        //使用範例: [ 請問您最喜歡台灣新氣象App中的哪些功能呢？ ]，'一共有 5 題!'
    'qnrtotal'              => '，一共有',
    'qnrquestions'          => '题！',
        //使用範例: '開始填問卷，一共有 5 題!',
    'qnrfill'               => '开始填问卷，一共有',

    'qnrenbed'              => '或内嵌问卷到您的网站？',
    //使用範例: '# 問題 1'  (使用於問卷標題)
    'qnrq'                  => '# 问题',
    //使用範例: '您必須输入您的' 電子郵件 '才能送出問卷!'
    'qnrfill1'              => '必须输入您的',
    'qnrfill2'              => '才能生成问卷！',

    //使用範例: '選擇您的' 性別
    'qnrsel'                => '选择您的',
    'qnrfemale'             => '女性',
    'qnrmale'               => '男性',
    'qnrother'              => '其他',
//    'qnrtext'               => '输入验证码',
//    'qnren'                 => '（英文字母区分大小写）:',
    'qnrsend'               => '完成送出!',
        //resultmain_part1
    //使用範例: '這份問卷目前已經有' 8 '次投票.'
    're1'                   => '这份问卷目前已经有',
    're2'                   => '次投票。',

    'statgender'            => '性别统计',
    'statage'               => '年龄段统计',
    'statbarchart'          => '票数柱状图统计',
    'statpiechart'          => '得票率（百分比）',
    'stat3s'                => '（每3秒自动更新）',
        //backend user main
    'acctmgt'               => '账号管理',
    'myqnr'                 => '我的问卷',
    'resetre'               => '重置投票结果',
    'resetconfirm'          => '确定要清空投票结果吗？',
    'reset'                 => '重置',
    'editreset'             => '启动再次编辑将重置投票结果',
    'edit'                  => '编辑',
    'delqnr'                => '这会删除问卷ID:',
    'delqnrconfirm'         => '，确定要删除？',
    'del'                   => '删除',
    'emptyqnr'              => '您目前没有任何问卷！',
    //backend user resultmain
    'otherinfo'             => '投票人信息：',
    //controller
    'con_draft_login'       => '暂存草稿需要问卷管理功能，请先登录。',
    'con_sign_login'        => '记名投票需要问卷管理功能，请先登录。',
    'con_private_login'     => '不公开问卷需要问卷管理功能，请先登录。',
    'con_age0'              =>  ' 0-10岁',
    'con_age1'              =>  '11-20岁',
    'con_age2'              =>  '21-30岁',
    'con_age3'              =>  '31-40岁',
    'con_age4'              =>  '41-50岁',
    'con_age5'              =>  '51-60岁',
    'con_age6'              =>  '61-70岁',
    'con_age7'              =>  '71-80岁',
    'con_age8'              =>  '81-90岁',
    'con_age9'              =>  '91-100岁',
    'con_q'                 =>  '问题',
    'con_vote'              =>  ' 票',
    'con_opt'               =>  '选项',
    //meta
    //'meta_topic'            => 'Poll Poll - 即时 问卷调查、投票',
    'meta.index.desc'       => '提供极简的问卷设计，能快速创建问卷并投过二维码或Iframe发送问卷链接，即时显示统计投票结果，适合在需要和观众或粉丝即时互动的情景下使用。',
    'meta.index.kw'         => '即时问卷调查、投票系统，多题型问卷，观众互动的投票系统。',
    'meta.mqidx.title'      => '多题型问卷选择题数',
    'meta.mqidx.desc'       => '创建多题型问卷可以选择1~20题。',
    'meta.mqidx.kw'         => '多题型，问卷，1~20题。',
    'meta.multiq.title'     => '多题型问卷编辑主页',
    'meta.multiq.desc'      => '创建多题型问卷内容',
    'meta.multiq.kw'        => '多题型，问卷',
    'meta.qnrtitle'         => '问卷标题：',
    'meta.qnr'              => '问卷',
    //使用範例: '這份問卷是關於' [請問您最喜歡台灣新氣象App中的哪些功能呢？] '的結果統計頁面'
    'meta.qnrabout'         => '这份问卷是关于',
    'meta.result'           => '的结果统计页面',

    //使用範例: '這是' Jackson Huang '的後台管理問卷主頁'
    'meta.backend.main'     => '的后台管理问卷主页',
    'meta.backend.this'     => '这是',
    //使用範例: '這是' Jackson Huang '的後台管理問卷主頁,可以編輯,重置答案統計或刪除問卷。'
    'meta.backend.func'     => '的后台管理问卷主页，可以编辑、重置答案，统计或删除问卷。',
    'meta.backend.func1'    => '编辑问卷，重置问卷，删除问卷',
     //使用範例: '問卷' [請問您最喜歡台灣新氣象App中的哪些功能呢？] '的後台編輯頁面'
    'meta.backend.edit'     => '的后台编辑页面',
     //使用範例: '問卷' [請問您最喜歡台灣新氣象App中的哪些功能呢？] '的後台結果統計頁面'
    'meta.backend.re'       => '的后台结果统计页面',
    'meta.backend.mgt'      => '后台管理',
];
