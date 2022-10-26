export default () => ({
    top: true,
    currentActiveLink: 'Home',

    getScrollPoint() {
        const scrollpoints = document.querySelectorAll('.linksection')
        scrollpoints.forEach((entry) => {
            let offsetTop = entry.getBoundingClientRect().top
            if (window.scrollY <= (window.innerHeight / 2)) {
                this.currentActiveLink = "Home"
            } else if (offsetTop >= 0 && offsetTop <= (window.innerHeight / 2)) {
                this.currentActiveLink = entry.dataset.link

            }
            // console.log({
            //     "Link": entry.dataset.link,
            //     "top": entry.getBoundingClientRect().top
            // })


        })
    },

    init() {


        window.addEventListener('scroll', () => {
            this.getScrollPoint()
            if (window.scrollY > 1) {
                this.top = false

            } else {
                this.top = true
            }

        })
        window.addEventListener('DOMContentLoaded', () => {
            this.getScrollPoint()
        })
    },



})