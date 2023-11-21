<script setup>
import Layout from "../Layouts/UserLayout.vue";
defineOptions({
  layout: Layout,
});

const questions = [
  {
    title: "Are you alright?",
    text: "answer",
  },
  {
    title: "Are you alleft??",
    text: "answer",
  },
  {
    title: "Gamiti lang siguro ug use case",
    text: "answer",
  },
];
</script>
<template>
  <div>
    <h1 style="justify-content: center; display: flex; margin-top: 5%; font-size: 50px">
      Frequently Asked Questions
    </h1>
    <v-expansion-panels style="width: 50%; margin-left: 25%; margin-top: 2%">
      <v-expansion-panel v-for="question in questions" :key="question.title">
        <v-expansion-panel-title
          expand-icon="mdi-plus"
          collapse-icon="mdi-minus"
          style="font-size: 20px"
        >
          {{ question.title }}
        </v-expansion-panel-title>
        <v-expansion-panel-text style="font-size: 25px">
          {{ question.text }}
        </v-expansion-panel-text>
      </v-expansion-panel>
    </v-expansion-panels>
    <h1 style="justify-content: center; display: flex; margin-top: 5%; font-size: 50px">
      Do You Have Any Questions?
    </h1>
    <div class="button-container">
      <button class="rounded-button">Ask a Question</button>
    </div>
  </div>
</template>

<style>
.button-container {
  display: flex;
  justify-content: center;
  margin-top: 3%;
  margin-bottom: 5.5%;
}

.rounded-button {
  border: none;
  border-radius: 50px;
  padding: 15px 30px;
  background-color: red;
  color: #fff;
  font-size: 18px;
  cursor: pointer;
  transition: background-color 0.3s, transform 0.2s;
}

.rounded-button:hover {
  background-color: darkred;
  transform: scale(1.05);
}

@media only screen and (max-width: 1000px) {
    h1 {
        text-align: center;
    }
}
</style>
