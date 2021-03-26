window.addEventListener('load', () => {
    $('.loading').addClass('opacity-0')
    setTimeout(() => {
        $('.loading').addClass('hidden')
    }, 200);
})