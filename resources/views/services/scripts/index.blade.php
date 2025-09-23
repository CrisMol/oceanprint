<script>
    document.addEventListener('DOMContentLoaded', function() {
        const items = document.querySelectorAll('.mostRequestedServices li');
        const image = document.getElementById('image-most-requested-services');
        const description = document.getElementById('container-description-most-requested-service').querySelector('p');

        items.forEach(item => {
            item.addEventListener('click', () => {
            items.forEach(i => i.classList.remove('active'));
            item.classList.add('active');

            const newImage = item.getAttribute('data-image');
            image.src = newImage;

            const newDescription = item.getAttribute('data-description');
            description.innerHTML = newDescription;
            });
        });

        /**
         * Texto circular animado
        */
        const text = document.querySelector('.text p');
        text.innerHTML = text.innerText.split('').map(
            (char, i) => 
            `<span style="transform:rotate(${i * 8.3}deg)">${char}</span>`
        ).join('');
    });
</script>