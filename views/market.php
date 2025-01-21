<?php
// print_r($products->pagination);exit();
$header_include = "<link rel=\"stylesheet\" href=\"/public/css/market.css\" />";
$title = "Ntornarch Market";
$page = "market";

require_once __DIR__ . "/inc/Header.php";

?>
<div id="hero">
  <?php require_once __DIR__ . "/inc/nav.php"; ?>
  <section class="container">
    <h2>Market</h2>
  </section>
</div>
<form id="search" method="get" class="container">
  <div class="input" style="flex-direction: row;">
    <input type="text" name="search" value="<?= old('search'); ?>" placeholder="X52 Mobile Phone Cooler">
    <button class="i_icon"></button>
  </div>
</form>

<main class="container">
  <!-- <div class="box hide">
    <h3>Popular Items</h3>
    <div class="cards">
      <a href="#" class="card">
        <img src="./assets/about.png" alt="">
        <h4>X52 Mobile Phone Cooler</h4>
        <h3 class="price">
          <span class="old">N 7,900</span>
          <span>N 7,900</span>
        </h3>
        <h5>Uyo, Nigeria</h5>
      </a>
      <a href="#" class="card">
        <img src="./assets/about.png" alt="">
        <h4>X52 Mobile Phone Cooler</h4>
        <h3 class="price">
          <span class="old">N 7,900</span>
          <span>N 7,900</span>
        </h3>
        <h5>Uyo, Nigeria</h5>
      </a>
      <a href="#" class="card">
        <img src="./assets/about.png" alt="">
        <h4>X52 Mobile Phone Cooler</h4>
        <h3 class="price">
          <span class="old">N 7,900</span>
          <span>N 7,900</span>
        </h3>
        <h5>Uyo, Nigeria</h5>
      </a>
      <a href="#" class="card">
        <img src="./assets/about.png" alt="">
        <h4>X52 Mobile Phone Cooler</h4>
        <h3 class="price">
          <span class="old">N 7,900</span>
          <span>N 7,900</span>
        </h3>
        <h5>Uyo, Nigeria</h5>
      </a>
    </div>
    <a href="#" class="btn primary">See more</a>
  </div> -->
  <div class="box products">
    <div class="filter">
      <div class="filter_menu">
        <h3>CATEGORY</h3>
        <form action="#" id="filter_apply">
          <label for="all">
            <input type="checkbox" name="filter" value="all" id="all">
            <span>All</span>
          </label>
          <label for="cloth">
            <input type="checkbox" name="filter" value="cloth" id="cloth">
            <span>Cloth</span>
          </label>
          <label for="food">
            <input type="checkbox" name="filter" value="food" id="food">
            <span>food</span>
          </label>
          <label for="appliances">
            <input type="checkbox" name="filter" value="appliances" id="appliances">
            <span>appliances</span>
          </label>
          <label for="electronics">
            <input type="checkbox" name="filter" value="electronics" id="electronics">
            <span>electronics</span>
          </label>
          <label for="phones">
            <input type="checkbox" name="filter" value="phones" id="phones">
            <span>phones</span>
          </label>
          <label for="others">
            <input type="checkbox" name="filter" value="others" id="others">
            <span>others</span>
          </label>
          <input type="submit" class="btn" value="Save">
        </form>
      </div>
    </div>
    <div class="product">
      <div class="head">
        <span>Showing <?= $products->pagination->start; ?>-<?= $products->pagination->end; ?> of <?= $products->pagination->total; ?> Result(s)</span>
        <form action="#">
          <label for="sort">
            Sort by:
          </label>
          <select name="sort" id="sort">
            <option value="date">Date</option>
            <option value="low_high">low to high</option>
            <option value="high_low">high to low</option>
          </select>
          <a href="#" class="filter_icon i_icon"></a>
          <script>
            let closeModal = e => {
              if (!e.target.closest(".filter_menu")) {
                document.querySelector(".filter").classList.remove("show");
              }
            }
            document.querySelector(".filter").addEventListener("click", e => {
              closeModal(e);
            })
            document.querySelector(".filter").addEventListener("touch", e => {
              closeModal(e);
            })
            document.querySelector(".filter_icon").onclick = (e) => {
              e.preventDefault();
              document.querySelector(".filter").classList.toggle("show");
            }
          </script>
        </form>
      </div>
      <div class="cards">
        <?php foreach ($products->product as $stock): ?>
          <a href="/market/show/<?= $stock->id; ?>" class="card">
            <img src="/public/uploads/<?= explode(",", $stock->img)[0]; ?>" alt="<?= $stock->title; ?>">
            <h4 class="truncate" style="--line:1;"><?= $stock->title; ?></h4>
            <h3 class="price">
              <span class="old">N <?= number_format((int)$stock->price + (0.483 * (int)$stock->price), 2); ?></span>
              <span>N <?= number_format($stock->price, 2) ?></span>
              <span>N <?= $stock->price, 2 ?></span>
            </h3>
            <h5><?= $stock->location; ?></h5>
          </a>
        <?php endforeach; ?>
      </div>
      <?php if ($products->pagination->hasMore): ?>
        <a class="btn primary loadmore" onclick="loadmore()">Load More</a>
      <?php endif; ?>
      <script>
        let page = 2,
          head = document.querySelector(".product .head > span"),
          loadmore = () => {
            fetch(`/api/loadProducts/${page}`, {
                method: "POST",
                headers: {
                  'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `sort=${encodeURIComponent(localStorage.getItem('sortVal') || '')}&filter=${encodeURIComponent(localStorage.getItem('filter') || '')}`
              })
              .then(response => response.json())
              // .then(response => {console.log(response)})
              .then(({
                pagination,
                product
              }) => {
                // console.log({
                //   pagination,
                //   product
                // });
                if (!pagination.hasMore) {
                  document.querySelector('.loadmore')?.remove();
                }
                if (product.length == 0) return false;
                head.textContent = `Showing 1-${page} of ${pagination.total} Result(s)`;
                product = product.map(stock => {
                  return `
                  <a href="/market/show/${stock.id}" class="card">
                    <img src="/public/uploads/${stock.img.split(",")[0]}" alt="${stock.title}">
                    <h4 class="truncate" style="--line:1;">${stock.title}</h4>
                    <h3 class="price">
                      <span class="old">N ${(stock.price * 1.483).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 })}</span>
                      <span>N ${parseFloat(stock.price).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 })}</span>
                    </h3>
                    <h5>${stock.location}</h5>
                  </a>
                  `;
                });
                document.querySelector(".product .cards").innerHTML += product.join("");
                // console.log(product)
                page++;

              })
              .catch(error => console.error(error))
          }
        let searchInput = document.querySelector('input[name=search]'),
          sortVal = document.querySelector('[name=sort]');
        sortVal.value = localStorage.getItem('sortVal') || "date"; // Set value from localStorage
        sortVal?.addEventListener('change', event => {
          localStorage.setItem('sortVal', event.target.value.trim()); // Store value in localStorage
          const params = new URLSearchParams(window.location.search); // Get current query params
          params.set('sort', event.target.value.trim()); // Add or update the 'sort' parameter
          window.location.search = params.toString(); // Trigger a reload with the new query string
        });

        let filter = document.querySelector("#filter_apply");
        filter?.addEventListener("submit", event => {
          event.preventDefault();
          let selectedFilters = Array.from(document.querySelectorAll('input[name="filter"]:checked'))
            .map(checkbox => checkbox.value);
          const params = new URLSearchParams(window.location.search);
          localStorage.setItem('filter', selectedFilters.join(',')); // Store value in localStorage
          params.set('filter', selectedFilters.join(',')); // Add or update the 'sort' parameter
          window.location.search = params.toString(); // Trigger a reload with the new query string
        })
        let selectedFilter = localStorage.getItem('filter').split(",");
        filter.querySelectorAll('[name=filter]').forEach(input => {
          if (selectedFilter.includes(input.getAttribute("value"))) {
            input.setAttribute("checked", true)
          }
        })
        searchInput.value = localStorage.getItem('searchQuery') || ""; // Set value from localStorage
        document.getElementById('search').onsubmit = () => localStorage.setItem('searchQuery', searchInput.value.trim());
      </script>
    </div>
  </div>
</main>
<?php
$footer_include = "";
require_once __DIR__ . "/inc/Footer.php";
?>