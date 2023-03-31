<?php require_once __DIR__ . "/layout/header.php" ?>

<!-- center -->
<div class="w-full mx-auto container py-5">


  <div class="mt-11">
    <h2 class="text-2xl text-center mb-5">Sản phẩm lien quan</h2>
    <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-2.5">
      <?php foreach ($products as $product) : ?>
        <a href="product-detail?id=<?= $product->id ?>" class="p-2.5 text-xs sm:text-sm bg-white shadow-lg border-4 border-green-600">
          <img class="w-full transition-transform  hover:-translate-y-2 object-cover min-h-[100px]" src="/images/<?= $product->images ?>" alt="">
          <h3 class="mt-2.5 ">
            <?= $product->title ?>
          </h3>
          <div>
            Số lượng : <?= $product->quantity ?>
          </div>
          <div class="mt-2.5">
            <div>
              Giá : <?= $product->price ?>
            </div>

          </div>

          <div class="mt-2.5">
            bán được: <?= $product->sold ?>
          </div>

        </a>
      <?php endforeach; ?>

    </div>
  </div>
</div>

<?php require_once __DIR__ . "/layout/footer.php" ?>