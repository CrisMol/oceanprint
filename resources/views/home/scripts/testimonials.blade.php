<script>
   document.getElementById("testimonials").addEventListener("mousemove", function(e) {
        this.querySelectorAll(".layer").forEach(layer => {
            const speed = layer.getAttribute("data-speed");
            const rotate = layer.getAttribute("data-rotate");
            const x = (this.offsetWidth - e.clientX * speed) / 100;
            const y = (this.offsetHeight - e.clientY * speed) / 100;
            layer.style.transform = `translateX(${x}px) translateY(${y}px) rotate(${rotate}deg)`;
        });
    });
</script>