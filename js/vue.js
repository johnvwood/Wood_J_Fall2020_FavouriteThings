const myVM = (() => {
    let vue_VM = new Vue({
        // el means element reference (# for id then app for main tag)
        el: ".main",
        data: {
            message: "Hello from Vue",
            anotherMessage: "This is some other message in paragraph form.",

            people: [
                { name: "Justin", role: "Coordinator", nickname: "Nitsuj"},
                { name: "Joe", role: "Professor", nickname: "Joseph"},
                { name: "Joe Pesci", role: "Actor", nickname: "Zodiac Killer"}
            ]
        },

        methods: {
            clickR() {
                console.log("clicked right");
            },

            clickL() {
                console.log("clicked left")
            }
        }
    })//.$mount("#app"); //alternate vue connect method
})();