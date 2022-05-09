<?php
    function getDataByIdProd($id = 0){
        $products =  [
            ['id' => 1, 'name' => 'san pham a', 'images' => 'https://cdn.tgdd.vn/Products/Images/42/224859/samsung-galaxy-s20-fan-edition-090320-040338-600x600.jpg', 'price' => 1000000, 'quantity' => 10],
            ['id' => 2, 'name' => 'san pham b', 'images' => 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-violet-1-600x600.jpg', 'price' => 2000000, 'quantity' => 10],
            ['id' => 3, 'name' => 'san pham c', 'images' => 'https://cdn.tgdd.vn/Products/Images/42/235971/xiaomi-redmi-note-10-5g-xanh-bong-dem-1-600x600.jpg', 'price' => 3000000, 'quantity' => 10],
            ['id' => 4, 'name' => 'san pham x', 'images' => 'https://cdn.tgdd.vn/Products/Images/42/230630/vivo-y12s-den-new-600x600-600x600.jpg', 'price' => 1500000, 'quantity' => 10],
            ['id' => 5, 'name' => 'san pham y', 'images' => 'https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-aurora-1-600x600.jpg', 'price' => 2500000, 'quantity' => 10],
            ['id' => 6, 'name' => 'san pham z', 'images' => 'https://cdn.tgdd.vn/Products/Images/42/228967/samsung-galaxy-a52-8gb-256gb-thumb-violet-600x600-600x600.jpg', 'price' => 1000000, 'quantity' => 10]
        ];

        $info = [];
        foreach($products as $product){
            if($product['id'] == $id){
                $info = $product;
            }
        }
        return $info;
    }

    function getDataAllProducts(){
        return  [
            ['id' => 1, 'name' => 'san pham a', 'images' => 'https://cdn.tgdd.vn/Products/Images/42/224859/samsung-galaxy-s20-fan-edition-090320-040338-600x600.jpg', 'price' => 1000000, 'quantity' => 10],
            ['id' => 2, 'name' => 'san pham b', 'images' => 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-violet-1-600x600.jpg', 'price' => 2000000, 'quantity' => 10],
            ['id' => 3, 'name' => 'san pham c', 'images' => 'https://cdn.tgdd.vn/Products/Images/42/235971/xiaomi-redmi-note-10-5g-xanh-bong-dem-1-600x600.jpg', 'price' => 3000000, 'quantity' => 10],
            ['id' => 4, 'name' => 'san pham x', 'images' => 'https://cdn.tgdd.vn/Products/Images/42/230630/vivo-y12s-den-new-600x600-600x600.jpg', 'price' => 1500000, 'quantity' => 10],
            ['id' => 5, 'name' => 'san pham y', 'images' => 'https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-aurora-1-600x600.jpg', 'price' => 2500000, 'quantity' => 10],
            ['id' => 6, 'name' => 'san pham z', 'images' => 'https://cdn.tgdd.vn/Products/Images/42/228967/samsung-galaxy-a52-8gb-256gb-thumb-violet-600x600-600x600.jpg', 'price' => 1000000, 'quantity' => 10]
        ];
    }