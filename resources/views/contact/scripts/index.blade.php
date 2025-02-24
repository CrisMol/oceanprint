<script>
    document.addEventListener("scroll", function () {
        const title = document.querySelector(".scroll-title");
        const scrollPosition = window.scrollY;
        title.style.transform = `translateX(${scrollPosition / 5}px)`;
    });
</script>