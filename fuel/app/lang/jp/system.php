<?php

return array(
    'menu' => array(
        'advertiser' => array(
            'list' => '広告主一覧',
        ),
        'media' => array(
            'list' => 'メディア一覧',
        ),
        'ad' => array(
            'list' => '広告一覧',
        ),
        'site' => array(
            'list' => 'サイト一覧',
        ),
    ),

    'advertisers' => array(
        'label' => array(
            'id'                => '広告主ID',
            'mail'              => '※メールアドレス',
            'password'          => '※パスワード',
            'rep'               => '※代理店',
            'name'              => '※会社名',
            'post_code'         => '郵便番号',
            'address'           => '住所',
            'your_staff'        => '担当者名',
            'tel'               => '電話番号',
            'our_staff'         => '営業スタッフ',
        ),
    ),

    'medias' => array(
        'label' => array(
            'id'                => 'メディアID',
            'mail'              => '※メールアドレス',
            'password'          => '※パスワード',
            'name'              => '※会社名',
            'post_code'         => '郵便番号',
            'address'           => '住所',
            'your_staff'        => '担当者名',
            'tel'               => '電話番号',
            'bank'              => '金融機関登録',
            'receive_notice'    => '新規広告のお知らせ',
        ),
        'select' => array(
            'receive_notice' => array(
                'receive'       => '受け取る',
                'unreceive'     => '受け取らない',
            ),
        ),
    ),

    'ads' => array(
        'label' => array(
            'id'                => '広告ID',
            'name'              => '※広告名',
            'status'            => 'ステータス',
            'advertiser_name'   => '広告主',
            'device'            => 'デバイス',
            'ad_genre'          => '広告ジャンル',
            'display_media'     => '表示メディア',
            'deliver_url_pc'    => '配信URL_PC',
            'deliver_url_sp'    => '配信URL_SP',
            'deliver_term'      => '配信期間',
            'partner_approval'  => 'パートナー承認',
            'result_approval'   => '成果認証',
            'ip_restrect'       => '成果IP制限',
            'referrer'          => 'リファラー収集',
            'result_point1'     => '成果ポイント①',
            'result_point2'     => '成果ポイント②',
            'result_multi'      => '複数成果',
            'ad_category'       => '広告カテゴリー',
            'result_point_upper1'   => '成果ポイント①上限',
            'result_point_upper2'   => '成果ポイント②上限',
            'result_point_reward1'   => '成果ポイント①報酬_グロス',
            'result_point_reward2'   => '成果ポイント②報酬_グロス',
            'result_point_amount1'   => '成果ポイント①報酬_ネット',
            'result_point_amount2'   => '成果ポイント②報酬_ネット',
            'reguration'            => 'レギュレーション',
            'ad_introduction'       => '広告紹介',
            'creative'            => 'クリエイティブ',
            'collabo_image'       => 'コラボ画像の使用',
        ),
        'select' => array(
            'status' => array(
                'on'            => 'ON',
                'off'           => 'OFF',
            ),
            'device' => array(
                'sp'            => 'SP',
                'pc'            => 'PC',
                'sppc'          => 'SPPC',
            ),
            'partner_approval' => array(
                'auto'          => '自動',
                'manual'        => '手動',
            ),
            'result_approval' => array(
                'auto'          => '自動',
                'manual'        => '手動',
            ),
            'referrer' => array(
                'invalid'       => '無効',
                'collect'       => '収集',
            ),
            'result_multi' => array(
                'impossible'     => '不可',
                'possible'       => '可',
            ),
            'collabo_image' => array(
                'impossible'     => '不可',
                'possible'       => '可',
            ),
        ),
    ),

    'sites' => array(
        'label' => array(
            'id'                => 'サイトID',
            'mail'              => '※メールアドレス',
            'name'              => '※サイト名',
            'site_attr'         => 'サイト属性',
            'sns'               => 'SNS',
            'icon'              => 'アイコン登録',
            'category'          => 'カテゴリ',
            'postback_variable' => 'ポストバック変数名',
            'postback_url'      => 'ポストバックURL',
        ),
        'select' => array(
            'site_attr' => array(
                'sns'               => 'SNS',
                'website'           => 'ウェブサイト',
            ),
            'sns' => array(
                'x'                 => 'X',
                'instagram'         => 'Instagram',
                'facebook'          => 'Facebook',
                'tiktok'            => 'TikTok',
                'youtube'           => 'Youtube',
                'niconico'          => 'ニコニコ動画',
                'others'            => 'その他',
            ),
        ),
        'checkbox' => array(
            'category' => array(
                'box1'              => 'テスト1',
                'box2'              => 'テスト2',
            ),
        )
    ),
);
