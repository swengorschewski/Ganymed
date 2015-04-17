class Ripple {

    constructor(className) {
        this.className = className.replace('.', '');
    }

    init() {

        this.rippleContainers = document.querySelectorAll('.' + this.className);
        this.handleClickListeners();

    }

    handleClickListeners() {

        for(let i = 0; i < this.rippleContainers.length; i++) {
            console.log(this.rippleContainers[i]);

            let self = this;

            if(!this.checkDisplayStyle(this.rippleContainers[i])) {
                return;
            }

            this.rippleContainers[i].addEventListener('click', function(event) {
                self.handleRipple(event, this);
            });
        }

    }

    handleRipple(event, rippleContainer) {

        if(!(rippleContainer.style.position == 'absolute')) {
            rippleContainer.style.position = 'relative';
        }

        if(rippleContainer.querySelector('.ripple__element') != null) {
            rippleContainer.removeChild(rippleContainer.querySelector('.ripple__element'));
        }

        let rippleElement = document.createElement('span');

        let size = this.getSize(rippleContainer);
        rippleElement.style.width = size + 'px';
        rippleElement.style.height = size + 'px';

        let position = this.getPosition(rippleContainer, event, size);
        rippleElement.style.position = 'absolute';
        rippleElement.style.left = position.x + 'px';
        rippleElement.style.top = position.y + 'px';

        console.log(this.getColor(rippleContainer));
        rippleElement.style.backgroundColor = this.getColor(rippleContainer);

        rippleElement.classList.add('ripple__element');

        rippleContainer.insertBefore(rippleElement, rippleContainer.firstChild);
    }

    getSize(rippleContainer) {
        return Math.max(rippleContainer.offsetHeight, rippleContainer.offsetWidth);
    }

    getPosition(rippleContainer, event, size) {
        return {
            x: event.clientX - rippleContainer.offsetLeft - size / 2,
            y: event.clientY - rippleContainer.offsetTop - size / 2
        }
    }

    getColor(rippleContainer) {
        let color = rippleContainer.style.backgroundColor;

        if(color == '') {
            color = window.getComputedStyle(rippleContainer).backgroundColor;
        }

        let rgb = color.replace('rgb(', '').replace(')', '').split(', ').map(function(item) {
            item = parseInt(item, 10);
            return (item < 128) ? item + 30 : item - 30;
        });

        return 'rgb(' + rgb.join() + ')';
    }

    checkDisplayStyle(rippleContainer) {
        let displayStyle = rippleContainer.style.display;

        if(displayStyle == '') {
            displayStyle = window.getComputedStyle(rippleContainer).display;
        }

        return displayStyle == 'block' || displayStyle == 'inline-block';
    }

}

export default Ripple;