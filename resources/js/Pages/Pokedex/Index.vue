<script setup>
import { onMounted } from "vue";
onMounted(() => {
  // console.log(data);
});

defineProps({
  pokeinfo: Array,
})
</script>

<template>
  <ul>
    <li v-for="poke in pokeinfo">
      {{ poke['jp_name'] }}
      <img :src="poke['front_default']">
    </li>
  </ul>
  <!-- <h2>{{ pokeinfo['name'] }}</h2>
    <img :src="pokeinfo['sprites']['front_default']">
    <img :src="pokeinfo['sprites']['back_default']">
    <h2>{{ pokeinfo[ 'p_id'] }}</h2> -->
  <!-- {{ pokeinfo }} -->
  <!-- <h2>{{ pokeinfo[ 'jp_name'] }}</h2>
    <h2>{{ pokeinfo[ 'en_name'] }}</h2>
    <h2>{{ pokeinfo[ 'type1'] }}</h2>
    <h2>{{ pokeinfo[ 'type2'] }}</h2>
    <h2>{{ pokeinfo[ 'ability1'] }}</h2>
    <h2>{{ pokeinfo[ 'ability2'] }}</h2>
    <h2>{{ pokeinfo[ 'hidden_ability'] }}</h2>
    <h2>{{ pokeinfo[ 'hp'] }}</h2>
    <h2>{{ pokeinfo[ 'attack'] }}</h2>
    <h2>{{ pokeinfo[ 'defense'] }}</h2>
    <h2>{{ pokeinfo[ 'special_attack'] }}</h2>
    <h2>{{ pokeinfo[ 'special_defense'] }}</h2>
    <h2>{{ pokeinfo[ 'speed'] }}</h2>
    <h2>{{ pokeinfo[ 'total_stats'] }}</h2>
    <h2>{{ pokeinfo[ 'front_default'] }}</h2>
    <h2>{{ pokeinfo[ 'back_default'] }}</h2>
    <h2>{{ pokeinfo[ 'dream_world_front_default'] }}</h2>
    <h2>{{ pokeinfo[ 'home_front_default'] }}</h2>
    <h2>{{ pokeinfo[ 'official_artwork_front_default'] }}</h2>
    <h2>{{ pokeinfo[ 'height'] }}</h2>
    <h2>{{ pokeinfo[ 'weight'] }}</h2> -->
</template>
