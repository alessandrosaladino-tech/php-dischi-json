const { createApp } = Vue
createApp({
    data() {
        return {
            title: 'Spotify',
            records: ''
        }
    },

    methods: {

    },
    mounted() {
        axios
            .request({
                url: 'records.json',
                methods: 'GET'
            })

            .then(response => {
                this.records = response.data;
            })
    }
}).mount('#app')