const { createApp } = Vue;

createApp({
    data() {
        return {
            records: [],
            selectedRecord: null,
            newRecord: {
                title: '',
                author: '',
                year: '',
                genre: null,
                poster: 'https://picsum.photos/200/300?random=1'
            }
        }
    },
    methods: {
        addRecord() {
            axios
                .request({
                    url: 'server.php',
                    method: 'POST',
                    data: {
                        newRecord: this.newRecord
                    },
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then(response => {
                    console.log(response);
                    this.records = response.data;
                    this.newRecord = {
                        title: '',
                        author: '',
                        year: '',
                        genre: null,
                        poster: '<img src="https://picsum.photos/200/300?random=1">'
                    }
                })
                .catch(error => {
                    console.error(error.message);
                })
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