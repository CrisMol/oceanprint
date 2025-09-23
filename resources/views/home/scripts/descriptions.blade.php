<script>
    // Tarjetas
    let descriptionTitles = document.querySelectorAll('.container-description');
    descriptionTitles.forEach(descriptionTitle => {
        descriptionTitle.addEventListener('mousemove', (e) => {
            let rect = descriptionTitle.getBoundingClientRect();
            let mouseX = e.clientX - rect.left;
            let mouseY = e.clientY - rect.top;

            let Ripple = document.createElement('div');
            Ripple.classList.add('ripple');
            Ripple.style.left = `${mouseX}px`;
            Ripple.style.top = `${mouseY}px`;
            descriptionTitle.appendChild(Ripple);

            Ripple.addEventListener('animationend', () => {
                Ripple.remove();
            })
        })
    })
</script>