<script>
import axios from 'axios';
    export default {
        data (){
            return{
                pokemons: []
            }
        },
        mounted() {
            this.getPokemons();
            console.log('Carga de la Api pokemon')
        },
        methods: {
            getPokemons: function () {
                 axios.get('https://pokeapi.co/api/v2/pokemon').then(response => {
                    this.pokemons = response.data.results
                    console.log (this.pokemons);
                });
            }
        }
    }
</script>