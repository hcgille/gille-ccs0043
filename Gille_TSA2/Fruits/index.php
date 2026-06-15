<!DOCTYPE html>
<html>
<head>
    <title>Fruit Directory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$fruits = [

    [
        "name" => "Apple",
        "image" => "https://marketplace.canva.com/Pk_Vc/MAFsWnPk_Vc/1/tl/canva-red-apple-fruit-MAFsWnPk_Vc.png",
        "description" => "Color Red",
        "facts" => "Apples are rich in fiber and vitamin C. They help support heart health and digestion."
    ],

    [
        "name" => "Banana",
        "image" => "https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YmFuYW5hfGVufDB8fDB8fHww",
        "description" => "Color Yellow",
        "facts" => "Bananas provide potassium and energy. They are commonly eaten as a healthy snack."
    ],

    [
        "name" => "Cherry",
        "image" => "https://www.shutterstock.com/image-vector/two-cherries-isolated-on-white-600nw-2425952009.jpg",
        "description" => "Color Dark Red",
        "facts" => "Cherries contain antioxidants and may help reduce inflammation and improve sleep."
    ],

    [
        "name" => "Grapes",
        "image" => "https://png.pngtree.com/png-clipart/20250104/original/pngtree-delicious-black-grapes-png-image_20004046.png",
        "description" => "Color Purple",
        "facts" => "Grapes are packed with antioxidants and are used to make raisins and juice."
    ],

    [
        "name" => "Kiwi",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/b/b8/Kiwi_%28Actinidia_chinensis%29_1_Luc_Viatour.jpg?utm_source=tl.wikipedia.org&utm_campaign=index&utm_content=original",
        "description" => "Color Green",
        "facts" => "Kiwi contains vitamin C and fiber. It supports the immune system and digestion."
    ],

    [
        "name" => "Mango",
        "image" => "https://www.shopfreshandgreen.com/cdn/shop/products/MangoRipe-min_800x.png?v=1743777070",
        "description" => "Color Orange",
        "facts" => "Mangoes are sweet tropical fruits rich in vitamins A and C."
    ],

    [
        "name" => "Orange",
        "image" => "https://static.vecteezy.com/system/resources/thumbnails/015/606/509/small/sweet-orange-fruit-photo.jpg",
        "description" => "Color Orange",
        "facts" => "Oranges are known for their vitamin C content and refreshing juice."
    ],

    [
        "name" => "Pineapple",
        "image" => "https://www.healthxchange.sg/adobe/dynamicmedia/deliver/dm-aid--c06c2aed-90cf-4360-a423-7f053b2a44d9/pineapple-health-benefits-and-ways-to-enjoy.jpg?preferwebp=true",
        "description" => "Color Yellow",
        "facts" => "Pineapples contain bromelain, an enzyme that helps digestion."
    ],

    [
        "name" => "Strawberry",
        "image" => "https://i.pinimg.com/736x/bc/4f/14/bc4f146c12a47874d75e5477bda70d10.jpg",
        "description" => "Color Red",
        "facts" => "Strawberries are rich in antioxidants and are commonly used in desserts."
    ],

    [
        "name" => "Watermelon",
        "image" => "https://cdn.mos.cms.futurecdn.net/v2/t:0,l:200,cw:1200,ch:1200,q:80,w:1200/XenViG9cC4EdGupeibtKa5.jpg",
        "description" => "Color Green",
        "facts" => "Watermelons contain high water content and help keep the body hydrated."
    ]

];

// SORT ALPHABETICALLY
usort($fruits, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});

?>

<div class="container">

    <div class="title-box">
        My Fruits
    </div>

    <div class="grid header">

        <div>Image</div>
        <div>Name</div>
        <div>Description</div>
        <div>Facts</div>

    </div>

    <?php foreach($fruits as $fruit) { ?>

    <div class="grid row">

        <div class="image-box">
            <img src="<?php echo $fruit['image']; ?>" alt="<?php echo $fruit['name']; ?>">
        </div>

        <div>
            <?php echo $fruit['name']; ?>
        </div>

        <div>
            <?php echo $fruit['description']; ?>
        </div>

        <div class="facts">
            <?php echo $fruit['facts']; ?>
        </div>

    </div>

    <?php } ?>

</div>

</body>
</html>