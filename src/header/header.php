<style>
</style>

<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

      <div class="m-auto row">
        <div class="col-3">
          <svg class="bi me-2 fill-white" width="40" height="32">
            <use xlink:href="#bootstrap" />
          </svg>
        </div>
        <div class="col-9">
          <h3>24 Delivery </h3>
        </div>
      </div>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 text-secondary">About</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search...">
      </form>

      <div class="text-end">
        <button id="login" type="button" class="btn btn-outline-light me-2">Login</button>
        <button type="button" class="btn btn-warning">Sign-up</button>
      </div>
    </div>
  </div>
</header>

<script>
document.getElementById("login").addEventListener('click', () =>  {
  document.location.href = '<?php echo '/signin' ?>';
});
</script>