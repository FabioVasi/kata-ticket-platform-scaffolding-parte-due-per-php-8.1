
import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

createApp({
    data() {
        return {
            message: 'Hello Vue!',
            apiUrl : 'http://127.0.0.1:8000/api/tickets',
            tickets : [],
            title: '',
            description: '',
            category: '',
            status: '',
            priority: '',
            operator: '',
        }
    },
    methods: {
        getTickets(){
            axios.get(this.apiUrl, {
                params: {
                        title: this.title,
                        description: this.description,
                        category: this.category,
                        status: this.status,
                        priority: this.priority,
                        operator: this.operator,
                    }
                })
                .then( (response) => {
                    console.log(response);
                    this.tickets = response.data.results;
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });
                console.log(this.filteredTickets);
        }
    },
    mounted(){
        this.getTickets();
    },

    computed:{
        filteredTickets(){
            return this.tickets.filter((ticket) =>
                    ticket.category.name.toLowerCase().includes(this.category.toLowerCase()) &&
                    ticket.title.toLowerCase().includes(this.title.toLowerCase()) &&
                    ticket.status.name.toLowerCase().includes(this.status.toLowerCase()) &&
                    ticket.priority.name.toLowerCase().includes(this.priority.toLowerCase())
                );
        }
    }
}).mount('#app')
