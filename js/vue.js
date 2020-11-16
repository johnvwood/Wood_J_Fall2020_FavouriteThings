const myVM = (() => {
    let vue_VM = new Vue({
        el: ".main",
        methods: {
            clickR() {
                console.log("clicked right");
            },

            clickL() {
                console.log("clicked left")
            }
        }
    })

})();