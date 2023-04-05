<?php require_once __DIR__ . "/layout/header.php" ?>


<!-- center -->
<div class="h-screen bg-gray-300">
  <div class="py-12">


    <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg  md:max-w-5xl">
      <div class="md:flex ">
        <div class="w-full p-4 px-5 py-5">

          <div class="md:grid md:grid-cols-3 gap-2 ">

            <div class="col-span-2 p-5">

              <h1 class="text-xl font-medium ">Shopping Cart</h1>
              <?php if ($products) : ?>
                <form action="/changeCart" method="post">
                  <?php foreach ($products as $key => $pro) : ?>
                    <div class="flex justify-between items-center mt-6 pt-6">
                      <div class="flex  items-center">
                        <img src="/images/<?= $pro['images'] ?>" width="60" class="rounded-full ">

                        <div class="flex flex-col ml-3">
                          <span class="md:text-md font-medium"><?= $pro['title'] ?></span>
                        </div>


                      </div>

                      <div class="flex justify-center items-center">

                        <div class="pr-8 flex ">
                          <input type="number" name="quantity[<?= $key ?>]" class="focus:outline-none bg-gray-100 border h-6 w-12 rounded text-sm px-2 mx-2" value="<?= $pro['numberQuantity'] ?>" min="1">
                        </div>

                        <div class="pr-8 ">

                          <span class="text-xs font-medium"><?= $pro['price'] * $pro['numberQuantity'] ?></span>
                          <?php $total +=  $pro['price'] * $pro['numberQuantity'] ?>
                        </div>
                        <a href="/delete-cart?id=<?= $key ?>">
                          <i class="fa-solid fa-xmark"></i>
                        </a>
                      </div>
                    </div>
                  <?php endforeach; ?>

                  <div class="flex justify-between items-center mt-6 pt-6 border-t">
                    <div class="flex items-center">
                      <i class="fa fa-arrow-left text-sm pr-2"></i>
                      <span class="text-md  font-medium text-blue-500">Continue Shopping</span>
                    </div>
                    <div class="flex items-center">
                      <button type="submit" class="text-md  font-medium text-blue-500">Lưu giỏ hàng</button>
                    </div>
                </form>
              <?php else : ?>
                <div class="flex justify-center items-center">
                  <span class="text-md text-gray-400">Không có sản phẩm nào trong giỏ hàng</span>
                </div>
              <?php endif; ?>

            </div>
          </div>
          <div class=" p-5 bg-gray-800 rounded overflow-visible">

            <span class="text-xl font-medium text-gray-100 block pb-3">Chi tiết</span>

            <div class="mt-3 flex justify-between">
              <span class="text-xl text-gray-400 ">sản phẩm</span>
              <span class="text-xl text-gray-400 -translate-x-6">giá</span>
            </div>
            <?php if ($products) : ?>
            <?php foreach ($products as $key => $pro) : ?>

              <div class="mt-2 flex justify-between">
                <span class="text-md text-gray-400 "><?= $pro['title'] ?></span>
                <span class="text-md text-gray-400 -translate-x-5">
                  <?= $pro['price'] ?></span>
              </div>
            <?php endforeach; ?>
             
            <?php endif; ?>
            <hr>
            <div class="mt-2 flex justify-between">
              <span class="text-xl text-gray-400 ">Tổng</span>
              <span class="text-xl text-gray-400 -translate-x-5">
                <?= $total ?></span>
            </div>
              <?php if(isset($_SESSION['user'])) : ?>
            <div class="mt-5"><a href="/dathang" name=""  class=" h-12 w-full bg-blue-500 rounded focus:outline-none text-white px-5 py-2 hover:bg-blue-600">Tiến hành đặt hàng</a></div>
              <?php else : ?>
               <span class="text-white"> Cần đăng nhập để tiến hành đặt hàng</span>
                <?php endif; ?>    
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<?php require_once __DIR__ . "/layout/footer.php" ?>