<?php

/**
 * Từ json trong file 7.json
 * 
 * Yêu cầu:
 *  1. tính trung bình tổng của tất cả points
 *  2. tìm ra id có số points lớn nhất
 */


$json = '[
    {
        "id": "631f3d9148c72",
        "points": 114763.71437315118
    },
    {
        "id": "631f3d9148c7f",
        "points": 99779.38284892934
    },
    {
        "id": "631f3d9148c80",
        "points": 25174.079358543306
    },
    {
        "id": "631f3d9148c81",
        "points": 429284.2074221793
    },
    {
        "id": "631f3d9148c82",
        "points": 22793.189722029114
    },
    {
        "id": "631f3d9148c83",
        "points": 44944.63387167064
    },
    {
        "id": "631f3d9148c84",
        "points": 405515.34364951187
    },
    {
        "id": "631f3d9148c85",
        "points": 490146.82544245
    },
    {
        "id": "631f3d9148c86",
        "points": 389815.9502704106
    },
    {
        "id": "631f3d9148c87",
        "points": 80250.46641775103
    },
    {
        "id": "631f3d9148c88",
        "points": 51641.43081393485
    },
    {
        "id": "631f3d9148c89",
        "points": 414168.3271174656
    },
    {
        "id": "631f3d9148c8a",
        "points": 301222.9781287671
    },
    {
        "id": "631f3d9148c8b",
        "points": 51688.65397926544
    },
    {
        "id": "631f3d9148c8c",
        "points": 49362.65470348376
    },
    {
        "id": "631f3d9148c8d",
        "points": 108306.57339769954
    },
    {
        "id": "631f3d9148c8e",
        "points": 2274.0756796435803
    },
    {
        "id": "631f3d9148c8f",
        "points": 201663.15220891644
    },
    {
        "id": "631f3d9148c90",
        "points": 496422.7464854823
    },
    {
        "id": "631f3d9148c91",
        "points": 4599.27116924956
    },
    {
        "id": "631f3d9148c92",
        "points": 164618.09237271833
    },
    {
        "id": "631f3d9148c93",
        "points": 168214.32847992438
    },
    {
        "id": "631f3d9148c94",
        "points": 139070.8410225156
    },
    {
        "id": "631f3d9148c96",
        "points": 633877.2394647883
    },
    {
        "id": "631f3d9148c97",
        "points": 185752.78304130386
    },
    {
        "id": "631f3d9148c98",
        "points": 358316.62668069295
    },
    {
        "id": "631f3d9148c99",
        "points": 294007.15960159485
    },
    {
        "id": "631f3d9148c9a",
        "points": 59776.084066692776
    },
    {
        "id": "631f3d9148c9b",
        "points": 203831.52614189291
    },
    {
        "id": "631f3d9148c9c",
        "points": 272352.61360741156
    },
    {
        "id": "631f3d9148c9d",
        "points": 557504.9965634174
    },
    {
        "id": "631f3d9148c9e",
        "points": 180926.80052491502
    },
    {
        "id": "631f3d9148c9f",
        "points": 303854.1735795062
    },
    {
        "id": "631f3d9148ca0",
        "points": 412652.2811317026
    },
    {
        "id": "631f3d9148ca1",
        "points": 340752.85523949465
    },
    {
        "id": "631f3d9148ca2",
        "points": 44217.22991276683
    },
    {
        "id": "631f3d9148ca3",
        "points": 80818.06483511862
    },
    {
        "id": "631f3d9148ca4",
        "points": 191229.31871134104
    },
    {
        "id": "631f3d9148ca5",
        "points": 106330.00861367304
    },
    {
        "id": "631f3d9148ca6",
        "points": 786856.4770803193
    },
    {
        "id": "631f3d9148ca7",
        "points": 38292.41939761882
    },
    {
        "id": "631f3d9148ca8",
        "points": 39539.45064011563
    },
    {
        "id": "631f3d9148ca9",
        "points": 216370.1365718917
    },
    {
        "id": "631f3d9148caa",
        "points": 106698.82503614335
    },
    {
        "id": "631f3d9148cab",
        "points": 32361.5475224897
    },
    {
        "id": "631f3d9148cac",
        "points": 134582.56699473484
    },
    {
        "id": "631f3d9148cad",
        "points": 17453.62803121732
    },
    {
        "id": "631f3d9148caf",
        "points": 64760.78608746211
    },
    {
        "id": "631f3d9148cb0",
        "points": 547307.4239009374
    },
    {
        "id": "631f3d9148cb1",
        "points": 159922.95941459155
    },
    {
        "id": "631f3d9148cb2",
        "points": 96422.06780814382
    }
]';

$data = json_decode($json, true);

$max = null;

foreach ($data as $object) {
    if ($max === null) {
        $max = $object;
    }

    if ($max['points'] < $object['points']) {
        $max = $object;
    }
}

echo $max['id'] . "\n";
