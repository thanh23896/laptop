<?php require_once __DIR__ . "/layout/header.php" ?>


<!-- center -->
<div class=" bg-gray-300">
  <div class="py-12">

    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg  md:max-w-5xl">
      <div class="md:flex ">
        <div class="w-full p-4 px-5 py-5">

          <div class="md:grid md:grid-cols-3 gap-2 ">

            <div class="col-span-2 p-5">

              <div class=" py-6 px-10  w-full ">
                <div class="sm:text-3xl text-2xl font-semibold text-center text-sky-600  mb-12">
                  Thông tin người nhân
                </div>
                <div class="">
                  <div>
                    <input type="text" class="focus:outline-none border-b w-full pb-2 border-sky-400 placeholder-gray-500" placeholder="Tên " />
                  </div>
                  <div>
                    <input type="email" class="focus:outline-none border-b w-full pb-2 border-sky-400 placeholder-gray-500 my-8" placeholder="Điện thoại" />
                  </div>

                  <div>
                    <label class="">Địa chỉ</label>
                    <textarea class="focus:outline-none border w-full pb-2 border-sky-400 placeholder-gray-500 mb-8"></textarea>
                  </div>

                  <div class="flex justify-center my-6">

                  </div>
                </div>
              </div>
              <div class="flex justify-between items-center mt-6 pt-6 border-t">



              </div>
            </div>
            <div class=" p-5 bg-gray-800 rounded overflow-visible">

              <span class="text-xl font-medium text-gray-100 block pb-3">chi tiet</span>

              <div class="mt-3 flex justify-between">
                <span class="text-xl text-gray-400 ">san pham</span>
                <span class="text-xl text-gray-400 -translate-x-6">gia</span>
              </div>
              <div class="mt-2 flex justify-between">
                <span class="text-md text-gray-400 ">Chicken Momo</span>
                <span class="text-md text-gray-400 -translate-x-5">
                  $10.50</span>
              </div>
              <hr>
              <div class="mt-2 flex justify-between">
                <span class="text-xl text-gray-400 ">tong</span>
                <span class="text-xl text-gray-400 -translate-x-5">
                  $10.50</span>
              </div>
              <div class="my-4 pt-3 flex justify-between border-t-2">
                <span class="text-xl text-gray-400 ">giao hang</span>
                <span class="text-xl text-gray-400 -translate-x-5">
                  mien phi</span>
              </div>
              <button class="mt-5 h-12 w-full bg-blue-500 rounded focus:outline-none text-white hover:bg-blue-600">dat
                hang</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php require_once __DIR__ . "/layout/footer.php" ?>