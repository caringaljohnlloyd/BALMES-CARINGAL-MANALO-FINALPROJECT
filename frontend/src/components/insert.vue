<template>
        <section class="vh-100 gradient-custom">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="card-title mb-4 pb-2 pb-md-0 mb-md-5">Music Form</h3>
                         
                            <form @submit.prevent="save">
                                <div class="form-group">
                                    <label for="artist">Artist</label>
                                    <input type="text" placeholder="artist" v-model="artist" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" placeholder="title" v-model="title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="release_date">Release Date</label>
                                    <input type="date" placeholder="release_date" v-model="release_date" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="genre">Choose Genre</label>
                                    <select class="form-control" v-model="genre" placeholder="select genre">
                                        <option value="OPM">OPM</option>
                                        <option value="BALLAD">BALLAD</option>
                                        <option value="POP">POP</option>
                                        <option value="RNB">RNB</option>
                                        <option value="JAZZ">JAZZ</option>
                                        <option value="REGGAE">REGGAE</option>
                                        <option value="HIP-HOP">HIP-HOP</option>
                                        <option value="COUNTRY MUSIC">COUNTRY MUSIC</option>
                                    </select>
                                </div>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import axios from 'axios';

export default{
    data(){
        return{
            artist:"",
            title:"",
            release_date:"",
            genre:"",
        }
    },  
    methods:{
        async save(){
try {
    const ins =await axios.post("save",{
        artist: this.artist,
        title: this.title,
        release_date: this.release_date,
        genre: this.genre,

    });
    this.artist="";
    this.title="";
    this.release_date="";
    this.genre="";
    this.$emit('data-saved');
    this.getInfo();
} catch (error) {
    
}        }
    }
}
</script>