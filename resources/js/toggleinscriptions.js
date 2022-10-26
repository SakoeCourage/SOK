export default () => ({

    currentIndex: 1,

    IncreaseIndex: function() {
        if (this.currentIndex == 3) {
            this.currentIndex = 1
        } else {
            this.currentIndex++
        }
    },

    ToggleVisibility: function(i) {
        return i == this.currentIndex
    },
    init() {
        setInterval(() => {
            this.IncreaseIndex()
        }, 5000)


    },



})