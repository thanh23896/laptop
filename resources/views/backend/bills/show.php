<?php require_once __DIR__ . "/../layout/header.php" ?>
<div class="grid mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4 border-green-400">
    <div class="grid grid-cols-12 gap-6">
        <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
            <div class="col-span-12 mt-5">
           
                <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                    <div class="bg-white p-4 shadow-lg rounded-lg">
                    <a href="/admin/invoice" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Trở về
              </a>
                    <h1 class="font-bold text-base mt-4">Table</h1>
                        <div class="mt-4">
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto">
                                    <div class="py-2 align-middle inline-block min-w-full">
                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead>
                                                    <tr>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">ID</span>
                                                            </div>
                                                        </th>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">Tên Sản Phẩm</span>
                                                            </div>
                                                        </th>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">Hình ảnh</span>
                                                            </div>
                                                        </th>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">Giá</span>
                                                            </div>
                                                        </th>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">Số lượng</span>
                                                            </div>
                                                        </th>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">Tổng tiền</span>
                                                            </div>
                                                        </th>

                                                      
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    <?php foreach ($bill_detail as $bill) : ?>
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p><?= $bill->id ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p><?= $bill->namePro ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p><img src="/images/<?= $bill->image ?>" width="100" alt=""></p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p><?= $bill->price ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p><?= $bill->quantity ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p><?= $bill->total ?></p>
                                                            </td>
                                                           
                                                  
                                                           

                                                          
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . "/../layout/footer.php" ?>