<?php

return [

    'bank' => [

        'status' => [

            'unactive' => 0,
            'active' => 1,
            'canceled' => 2,

        ],

    ],

    'account' => [

        'type' => [

            'shareholder' => 1, # conta corrente / disponivel
            'yield' => 2, # conta rendimento / Retém Pool Point
            'savings' => 3, # conta poupança / Point Qualification
            'coffer' => 99, # geral

        ],

        'status' => [

            'unactive' => 0,
            'active' => 1,
            'blocked' => 2,

        ],

    ],

    'transaction' => [

        'type' => [

            'withdraw' => 1, # saque (-)
            'deposit' => 2, # deposito (+)
            'recue' => 3, # resgate (+)
            'application' => 4, # aplicação (-)
            'send_transfer' => 5, # transferência (-)
            'receive_transfer' => 6, # transferência (+)

        ],

        'status' => [

            'submitted' => 1,   # ainda não processado (ex.: sistema em manutenção).
            'accepted' => 2,    # recebido, será processada manualmente (ex.: suspeita de fraude).
            'pending' => 3,     # pendente, aguardando condição p/ processar (ex.: data específica).
            'completed' => 4,   # foi concluída com sucesso.
            'reversed' => 5,    # estornado, desfeito (status não pode ser alterado).
            'rejected' => 6,    # foi rejeitada (ex.: falta de fundo).
            'expired' => 8,     # expirou antes de ser processada.
            'failed' => 0,      # não pode ser executada por erro de sistema.

        ],

        'reason' => [

            # shareholder
            'd_am_s' => 'deposit pending for acquisition membership', # deposito p/ pagar Membership
            'w_am_s' => 'withdrawal for acquisition application', # saque para pagar Membership
            'a_4c_s' => 'application in courses', # aplicar em cursos
            'a_4v_s' => 'voucher application', # aplicar em voucher
            'r_cp_s' => 'commission points residual rescue', # resgate de Commission Points
            'r_rp_s' => 'residual points rescue', # resgate de Residual Points
            'rt_pp_s' => 'pool point income transfer', # deposito de renda de Pool Points (yield)
            'w_4u_s' => 'withdrawal for use', # saque p/ carteira

            # yield
            'r_pp_y' => 'redemption of income from pool points', # resgate de rendimento de Pool Points
            'st_pp_y' => 'consolidate pool points', # transferência para conta corrente (shareholder)

            # savings
            'r_pq_s' => 'qualification points rescue', # resgate de Qualification Points

        ],

    ],

    'invoice' => [

        'status' => [

            'pending' => 0,
            'paid' => 1,
            'canceled' => 2,
            'draft' => 3,
            'partially_paid' => 4,
            'refunded' => 5,
            'expired' => 6,
            'in_protest' => 7,
            'chargeback' => 8,

        ],

        'payment' => [

            'method' => [

                'money' => 1,
                'credit_card' => 2,
                'debit_card' => 3,
                'billet' => 4,
                'voucher' => 5,
                'bitcoin' => 6,

            ],

            'term' => '3 days',
        ],

    ],

    'contract' => [

        'status' => [

            'unactive' => 0,
            'active' => 1,
            'expired' => 2,

        ],

    ],

    'currency' => [

        'BTC' => [

            'sign' => 'B',
            'name' => 'Bitcoin',

        ],

        'USD' => [

            'sign' => '$',
            'name' => 'American Dollar',

        ],
    ],

];
