<?php

return [
    'title' => 'Личный кабинет',

    'sidebar' => [
        'title' => 'Профиль',
        'menu'  => [
            'home'         => 'Главная',
            'transactions' => 'Мои транзакции',
        ],
    ],

    'labels' => [
        'btc'        => [
            'title' => 'BTC адрес',
        ],
        'percentage' => [
            'title' => 'Процент',
        ],
        'referral'   => [
            'title' => 'Реф. ссылка',
        ],

        'balance' => 'Баланс',
        'request_total' => 'Сумма',

        'transactions' => [
            'title' => 'Мои транзакции',
            'model' => [
                'referer'     => 'Реферальная ссылка',
                'btc_address' => 'BTC адрес',
                'total'       => 'Сумма (EUR)',
                'date'        => 'Дата',
            ],
        ],
    ],

    'tabs' => [
        'settings'              => [
            'title' => 'Настройка аккаунта',
        ],
        'receive_money_request' => [
            'title' => 'Вывод средств',
        ],
    ],

    'messages' => [
        'transactions' => [
            'empty_collection' => 'Пока вы не совершили ни одной тразакции.',
        ],
        'receive_money_request' => [
            'description' => 'Здесь вы можете оставить запрос на вывод средств на привязанный биткоин-адрес.',
        ],
    ],

    'actions' => [
        'profile' => 'Профиль',
        'logout'  => 'Выйти',
    ],
];