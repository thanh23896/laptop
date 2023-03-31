<footer class="bg-green-500">
  <div class="w-full py-10 pl-10 pr-16 xl:px-0  max-w-full mx-auto flex gap-10 flex-col sm:flex-row sm:justify-between sm:items-center">
    <div class="text-3xl text-center"><a href="index.php"><img class="w-24 h-24" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt=""></a>
    </div>
    <div class="mt-5 d-flex flex-column flex-md-row text-center text-md-start justify-content-between">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0 ">
        Copyright © 2020. All rights reserved.
      </div>
    </div>
  </div>
</footer>
</div>
<script src="js/previewFileInput.js"></script>
<script>
  var menuNav = document.querySelector('.menu-nav');
  var openMenuNav = document.querySelector('.menu-open');
  var closeMenuNav = document.querySelector('.menu-close');
  menuNav.addEventListener('click', function(e) {
    openMenuNav.classList.add('block');
    openMenuNav.classList.remove('hidden');
  })
  closeMenuNav.onclick = () => {
    openMenuNav.classList.remove('block');
    openMenuNav.classList.add('hidden');
  }
</script>
</body>

</html>