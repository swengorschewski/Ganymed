class Toast {
    static init() {
        this.toastElement = document.querySelector('.toast') || null;

        if(this.toastElement != null) {
            this.toastElement.addEventListener('click', this.hideToast);
            window.setTimeout(() => {
                this.toastElement.classList.add('toast--slide-out');
            }, 3000);
        }

    }

    hideToast() {
        this.toastElement.classList.add('toast--slide-out');
        this.toastElement.removeEventListener('click', this.hideToast);
    }
}

export default Toast;