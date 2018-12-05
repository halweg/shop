<?php

return [
    'alipay' => [
        //虚拟号码，非正式号码
        'app_id'         => '2016092000554217',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAys+8vBZGsqsuRIJUYI+GgHUkFeNI8SVwMImyq/EIFJNC/lJKljrJ30vYuQWJyOImvCaB8p03hRRLAhrLvwLYrIteqz43t2GU73imYMgTepCmeZynPnffUkZUKRGSHVmKsgkg5+w4OiYbRWLe3WGXf3yd8v/9UcpnTEOkP0a0eVEFJwYtJdo95KZroK3j88y2EQ42gm9BtOHZO4qWHsjLeQfNaGZ7wpTjFykPGRXVCZ8pYy7/h8Mn65/1yATnaOA8JXsWOhM1RFwRq1D4ciNKKyhSHJNBX9y/XiAxPrNvkdbVJEM0NicQkl0S1GcnkvwD7MU0hSgxS2hWyycRz5g6OQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAzG9GQCn69OUKyd7QCii1oKty0H/zCsGf29yZQCPNgcbpAyvAzgbVNogXciXOJ5lHbFxgZdRXpAl7w2o0IWndgGkY4BELPa8ojgjuHOwBARv5QQuKwP6WOLVqgikJLDLvMV/N7tJqZd77I2IpN8a7YCNrsT/hi1FhRNZEPjmv3rxpbkAqf3RZTHZuHVcuVppmL7Y9YvZlqdgFHgz2/RP+c22PolxN5AuMib/DxVMMi7w8TQ4srT2NF22xtXuNK9JAKX/bmEuDh/vEFGKZxWjleXSq44LHpNyRwbcfjk+0ZZ0e/leeegFPdiNxZRi3qYkQE3cKQW26KVYaerPXxRn59QIDAQABAoIBAQDAox4keipzN5y56o5I9GFpvATduaOQgDGdoLp7+QC+iGurREBTI5cn4oeNVVh0cfgegNGJQtUuyozn8BydW7+QL/hzszvPbU0ewgV2FWFA5VYzV6fxAjUVzMVHT1nIX1qLQQaxQ29k/P/TML08RLTt+5KQHGzwtcedcPYvWHaDv4G7ffjnZWTj1eAjqergH8UGvsG4LzcX8oRhNtRG6emmRa6BpdUon8gsXI7YHjiLx6PUaYRMQF3Op+Mbwk+EBbVUBbvxZlygiysVXl/Hj6dimy25nlPMcOJ/fJYWXZqbHTGy7JuArRtYSqKk9wzLz6c+OCTgV3QhiaGtgS0DJvhlAoGBAOhv6IVDuvoKZb/30eUh5bGdFsg319tifuwnzGi1kLzeJBBEJiQ0yQMfOLDcYmraoDB3PMm4GiNFCHTvBijTbbb6jRdH4Ng4tBmCGADj4dtKJlx1oC8wIdSQN3HQmhCWjPezTadHZXNf5inF5NhSy4W7eSm8rOauAlqEIqkNA4RLAoGBAOEoqPOyNyJsVS/9uXU4weZLeu42+bcdZNgg9zRtt0/b89zM1J0fyqK8V7YvyOlh8q5G9Q4NW3No/LY3cbfOwoo6qbmNVQ8cZEZ8i/twPWagXZSx4MQDRmLFpa1jjm20PjwT5kam0q228deApvZnjFWJK9lpS/o1TtYul84CZxK/AoGAUu2KUfGGRitrfgAW3N8pKiNXu3thAh60FeFlJn6Q8zF2QG9wBD7o8Lo06bTXUDRMLr5766RJfwfkKoQU+H/mhwABUqsMZ1hjuS4XDko/jJN5+EbnLa7IgyQpA+xe60grZzyLmgD5Cx7N6V13dk6j2kS2x9NPBMZUhKLcEuBXvt0CgYB/Eo5/stXxBIjzY9PWN2kfSvwfE0HNubYfUEOUAFPTq0QvGh7oanfXbkpmVQOjy5bGCt/kxV8WfGsbf6EbZoJetwrw4LXfqFtjeIkcJ9VPZTRLZjR/C4Ye2oNNnwFUIsR47ZYpy57dUYGd6UrRh9EouRjZQ9cQaCONN5CPQMXhSwKBgQC+28j5Ez7Bil5nzDtxkjV5koE/6Kk/a1eNLIr+r9ZZePDyl1ZLA8BuO6rpfxbh3Sjd+yePG59jD4L1RRBitwVgrtf8iAsSZps9qFqKuRcZJrzyyz/IkgqtB2YdWcHMNjjWUwsmHbiy8W/91Oe3byLBm0WnY84IuNmv8L7G98z4Ug==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
