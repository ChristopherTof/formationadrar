<script setup>
import StevenSeagal from './components/StevenSeagal.vue';
import SalutNounou from './components/HelloWorld.vue';
</script>

<template>
  <div class="superApp">
    <h1>Bienvenue ici on est dans le App.vue</h1>
    <StevenSeagal></StevenSeagal>
    <SalutNounou></SalutNounou>
  </div>
</template>

<style scoped>
.superApp {
  background-color: blueviolet;
  padding: 5%;
}
</style>
