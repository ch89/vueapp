import Vue from "vue"
import axios from "axios"

window.axios = axios
axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest"

let app = new Vue({
	el: "#app",
	data: {
		message: "Hello Vue!"
	}
})