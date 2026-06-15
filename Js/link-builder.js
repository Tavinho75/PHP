document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.card');

    cards.forEach(function (card) {
        const titleElement = card.querySelector('h2');
        const linkElement = card.querySelector('a.btn');
        const target = linkElement.dataset.target;

        if (titleElement && linkElement && target) {
            const titleText = titleElement.textContent.trim();
            const query = encodeURIComponent(titleText);

            if (target.endsWith('index.php')) {
                linkElement.href = `${target}?titulo=${query}`;
            } else {
                linkElement.href = target;
            }
        }
    });
});
