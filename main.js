const { createApp } = Vue;

createApp({
    data() {
        return {
            records: [],
            selectedRecord: null
        }
    },
    mounted() {
        axios
            .request({
                url: 'server.php',
                method: 'GET',
            })
            .then(response => {
                console.log(response.data);
                this.records = response.data;
            })
            .catch(error => {
                console.error(error.message);
            })
    }
}).mount('#app');