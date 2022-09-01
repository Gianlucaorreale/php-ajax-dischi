const app = new Vue({
    el:'#root',
    data: {
        discs: []
    },
    mounted(){
        axios.get('../api/discs/index_1.php').then(res => {
            this.discs = res.data;
        })
    }
});