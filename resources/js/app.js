import Vue from "vue"
import axios from "axios"

window.axios = axios
axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest"

let app = new Vue({
	el: "#app",
	data: {
		photos: [],
		photo: {}
	},
	async created() {
		// Version 1
		// axios.get("photos").then(response => this.photos = response.data)

		// Version 2

		let response = await axios.get("photos")

		this.photos = response.data
	},
	methods: {
		add() {
			console.log(this.photo)
		}
	}
})