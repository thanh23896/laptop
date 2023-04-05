<?php require_once __DIR__ . "/../layout/header.php" ?>
<div class="grid mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4 border-green-400">
    <div class="grid grid-cols-12 gap-6">
        <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
            <div class="col-span-12 mt-5">
                <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                    <div class="bg-white p-4 shadow-lg rounded-lg">
                        <h1 class="font-bold text-base">Table</h1>
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
                                                                <span class="mr-2">Tên Người </span>
                                                            </div>
                                                        </th>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">Số điện thoại</span>
                                                            </div>
                                                        </th>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">Địa chỉ</span>
                                                            </div>
                                                        </th>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">Tổng tiền</span>
                                                            </div>
                                                        </th>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">Trạng thái</span>
                                                            </div>
                                                        </th>

                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">Hành động</span>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    <?php foreach ($bills as $bill) : ?>
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p><?= $bill->id ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p><?= $bill->name_user ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p><?= $bill->phone ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p><?= $bill->address ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p><?= $bill->price_total ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                      <form action="/admin/invoice" method="post">
                                                        <input type="hidden" name="id"  value="<?= $bill->id ?>">
                                                        <select name="status" id="">
                                                          <!-- đang giao, giao thất bại, giao thành công -->
                                                          <?php if ($bill->status == 1) : ?>
                                                            <option value="1" selected>Đang giao</option>
                                                          <?php  else : ?>
                                                            <option value="1">Đang giao</option>
                                                          <?php endif; ?>
                                                          <?php if ($bill->status == 2) : ?>
                                                            <option value="2" selected>Giao thất bại</option>
                                                          <?php  else : ?>
                                                            <option value="2">Giao thất bại</option>
                                                          <?php endif; ?>
                                                          <?php if ($bill->status == 3) : ?>
                                                            <option value="3" selected>Giao thành công</option>
                                                          <?php  else : ?>
                                                            <option value="3">Giao thành công</option>
                                                          <?php endif; ?>
                                                        </select>
                                                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Cập nhật</button>
                                                      </form>
                                                          </td>

                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <div class="flex space-x-4">
                                                                    <a href="/admin/bill/show?id=<?= $bill->id ?>" class="text-green-500 hover:text-green-600">
                                                                        <p>Detail</p>
                                                                    </a>
                                                                </div>
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