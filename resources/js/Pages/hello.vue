<script>
let money = 500;
let total = 0;
if (money > 300) {
  money - 300;
  total += 30;
}

while (money > 0) {
  if (money >= 200) {
    money -= 200;
    total += 5;
  } else {
    money = money - money;
  }
}
console.log(total);
</script>

<template>he</template>
