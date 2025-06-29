<!-- css -->
<style>
  .horizontal-scroll {
    width: 100%;
    overflow-x: auto;
    /* Changed from hidden to auto to enable native scrolling */
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    -ms-overflow-style: none;
    cursor: grab;
    position: relative;
  }

  .horizontal-scroll:active {
    cursor: grabbing;
  }

  .horizontal-scroll::-webkit-scrollbar {
    display: none;
  }

  .scroll-content {
    display: inline-flex;
    transition: transform 0.3s ease-out;
    /* Menambahkan gap antara item */
    gap: 5px;
  }

  .scroll-item {
    flex: 0 0 100%;
    width: 100%;
    white-space: normal;
    user-select: none;
    transition: opacity 0.3s ease-in-out;
  }

  .scroll-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
  }

  @media (min-width: 768px) {
    .scroll-item {
      flex: 0 0 50%;
      width: 50%;
    }
  }
</style>
<!-- Slider -->
<div class="container">
  <div class="horizontal-scroll" id="scrollContainer">
    <div class="scroll-content" id="scrollContent">
      <div class="scroll-item">
        <img src="<?= base_url('assets/upload/banner/image1.png') ?>" alt="Slide 1">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>JUARA</h5>
          <p>Jujur, Unggul, Amanah, Ramah, Agamis</p> -->
        </div>
      </div>
      <div class="scroll-item">
        <img src="<?= base_url('assets/upload/banner/image2.png') ?>" alt="Slide 2">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Judul Slide 2</h5>
          <p>Deskripsi Slide 2</p> -->
        </div>
      </div>
      <div class="scroll-item">
        <img src="<?= base_url('assets/upload/banner/image3.png') ?>" alt="Slide 3">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Judul Slide 2</h5>
          <p>Deskripsi Slide 2</p> -->
        </div>
      </div>
      <div class="scroll-item">
        <img src="<?= base_url('assets/upload/banner/image4.png') ?>" alt="Slide 4">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Judul Slide 2</h5>
          <p>Deskripsi Slide 2</p> -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Slider -->

<!-- JS Slider -->
<script>
  const scrollContainer = document.getElementById('scrollContainer');
  const scrollContent = document.getElementById('scrollContent');
  let isDown = false;
  let startX;
  let scrollLeft;
  let autoScrollInterval;
  const scrollSpeed = 1; // Increased scroll speed
  const scrollInterval = 16;

  function getScrollPosition() {
    return scrollContainer.scrollLeft;
  }

  function setScrollPosition(x) {
    scrollContainer.scrollLeft = x;
  }

  function smoothScrollToStart() {
    const items = document.querySelectorAll('.scroll-item');
    items.forEach(item => {
      item.style.opacity = '0';
    });

    setTimeout(() => {
      setScrollPosition(0);
      items.forEach(item => {
        item.style.opacity = '1';
      });
    }, 300);
  }

  function startAutoScroll() {
    let position = getScrollPosition();
    const contentWidth = scrollContent.scrollWidth;
    const containerWidth = scrollContainer.offsetWidth;

    autoScrollInterval = setInterval(() => {
      if (!isDown) {
        position += scrollSpeed;

        // Smooth transition when reaching the end
        if (position >= (contentWidth - containerWidth)) {
          smoothScrollToStart();
          position = 0;
        } else {
          setScrollPosition(position);
        }
      }
    }, scrollInterval);
  }

  function stopAutoScroll() {
    clearInterval(autoScrollInterval);
  }

  startAutoScroll();

  scrollContainer.addEventListener('mousedown', (e) => {
    isDown = true;
    scrollContainer.style.cursor = 'grabbing';
    startX = e.pageX - scrollContainer.offsetLeft;
    scrollLeft = scrollContainer.scrollLeft;
    stopAutoScroll();
  });

  scrollContainer.addEventListener('mouseleave', () => {
    isDown = false;
    scrollContainer.style.cursor = 'grab';
    startAutoScroll();
  });

  scrollContainer.addEventListener('mouseup', () => {
    isDown = false;
    scrollContainer.style.cursor = 'grab';
    startAutoScroll();
  });

  scrollContainer.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - scrollContainer.offsetLeft;
    const walk = (x - startX) * 2; // Scroll speed multiplier
    scrollContainer.scrollLeft = scrollLeft - walk;
  });

  scrollContainer.addEventListener('mouseenter', stopAutoScroll);
</script>