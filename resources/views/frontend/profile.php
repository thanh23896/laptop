<?php require_once __DIR__ . "/layout/header.php" ?>

<!-- center -->
<section style="background-color: #eee;">
  <div class="container py-5 mx-auto">
    <form action="/profile" method="post" enctype="multipart/form-data">
      <div class="grid grid-cols-4 gap-10">
        <div class="p-4 bg-white rounded-md">
          <div class=" text-center">
            <img id="uploadPreview" src="/images/<?= $user['image'] ?>" alt="avatar" class="rounded-full mx-auto w-40 h-44 object-cover">
            <input class="mt-4" id="uploadImage" type="file" name="image" onchange="PreviewImage();" />
            <h5 class="my-3 text-2xl font-bold"><?= $user['full_name'] ?></h5>
            <p class="mb-4"><?= $user['role'] == 2 ? "admin" : "khách hàng" ?></p>
          </div>
        </div>

        <div class="col-span-3 rounded-md mb-4 p-4 bg-white">
          <div class="flex gap-x-14 mb-3 mt-5">
            <p class="min-w-[70px]">Full Name</p>
            <input name="full_name" type="text" value="<?= $user['full_name'] ?>" class="border border-gray-500 w-96 rounded-md outline-none px-2 pt-0.5 text-xs" placeholder="">

          </div>
          <hr>
          <div class="flex gap-x-14 mb-3 mt-5">
            <p class="min-w-[70px]">Email</p>
            <p class="text-gray-400 mb-0"><?= $user['email'] ?></p>
          </div>
          <hr>
          <div class="flex gap-x-14 mb-3 mt-5">
            <p class="min-w-[70px]">Phone</p>
            <input type="text" name="phone" value="<?= $user['phone'] ?>" class="border border-gray-500 w-96 rounded-md outline-none px-2 pt-0.5 text-xs" placeholder="">
          </div>
          <hr>
          <div class="flex gap-x-14 mb-3 mt-5">
            <p class="min-w-[70px]">Quyền hạn</p>
            <p class="text-gray-400 mb-0"><?= $user['role'] == 2 ? "admin" : "khách hàng" ?></p>
          </div>
          <div class="flex gap-x-14 mb-3 mt-5">
            <button class="bg-green-600 rounded-xl p-3 text-white">thay đổi thông tin</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>

<?php require_once __DIR__ . "/layout/footer.php" ?>