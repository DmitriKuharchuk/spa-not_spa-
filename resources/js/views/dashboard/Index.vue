<template>
<div class="whois">
    <div class="whois__form">
        <p class="whois__header">Введите список доменов </p>
        <input class="whois__input" type="text" placeholder="Введите домен" v-model="message">
        <p class="whois__error" v-if="error != null">{{error.message}}</p>
        <input class="whois__button" type="submit" @click="sendRequest()">
    </div>
    <div v-if="resultBlock == true" class="whois__form__result">
       <div  v-for="(item, index) in result">
           <p>{{item}}</p>
       </div>
    </div>


</div>
</template>

<script>
import {postWhoIs} from "@/api/whois";

export default {
    name: 'WhoIs',
    data() {
        return {
           resultBlock : false,
           result : null,
           message : null,
           error : null,
        }
    },
    methods:{
        sendRequest(){
            postWhoIs(this.message).then((res)=>{
                this.result = res;
                this.resultBlock = true;
            }).catch((error) => {
                this.error = error;
            })
        }
    },
}

</script>

<style lang="scss">


</style>

