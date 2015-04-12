var toast = document.querySelector('.toast');

function hideToast() {
    toast.classList.add('toast--slide-out');
    toast.removeEventListener('click', hideToast);
}

toast.addEventListener('click', hideToast);

window.setTimeout(function() {
    toast.classList.add('toast--slide-out');
}, 3000);