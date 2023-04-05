<?php require_once __DIR__ . "/layout/header.php" ?>


<!-- center -->
<div class=" bg-gray-300">
  <div class="py-12">


    <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg  md:max-w-5xl p-2">
      <div class="md:flex ">
        <div class="w-full p-4 px-5 py-5">

          <div class="md:grid md:grid-cols-2 gap-2 ">

            <div class="col-span-2 p-5">

              <h1 class="text-xl font-medium ">Đặt hàng</h1>
              <?php if ($products) : ?>
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
                        <input type="number" disabled name="quantity[<?= $key ?>]" class="focus:outline-none bg-gray-100 border h-6 w-12 rounded text-sm px-2 mx-2" value="<?= $pro['numberQuantity'] ?>" min="1">
                      </div>

                      <div class="pr-8 ">

                        <span class="text-xs font-medium"><?= $pro['price'] * $pro['numberQuantity'] ?></span>
                        <?php $total +=  $pro['price'] * $pro['numberQuantity'] ?>
                      </div>

                    </div>
                  </div>
                <?php endforeach; ?>

                <div class="pr-8 mt-3">

                  Tổng tiền: <span class=""><?= $total ?></span>

                </div>

              <?php endif; ?>

            </div>
          </div>

        </div>
      </div>
      <div class="mt-4 pb-5">
        <div class="w-full max-w-md mx-auto">
          <form method="post" action="/dathang" class=" shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h3>Form thông tin đặt hàng</h3>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Tên của bạn
              </label>
              <input name="name_user" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="PhoneNumber">
                Số điện thoại
              </label>
              <input name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="PhoneNumber" type="number" placeholder="PhoneNumber">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                Địa chỉ
              </label>
              <input name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text" placeholder="">
            </div>
            <input type="hidden" name="price_total" value="<?= $total ?>">

            <div class="flex items-center justify-between">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Đặt hàng
              </button>

            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>


<?php require_once __DIR__ . "/layout/footer.php" ?>