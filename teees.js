family = 8;
let perFamilyCount = "1 3 4 4 5 2 3 2";
perFamilyCount = perFamilyCount.split(" ");
//WRITE YOUR CODE HERE

// how many family
// how many people on one family
// how many minimum bus
// 1 buss <= 4

if (perFamilyCount.length != Number(family)) {
  console.log("Input must be equal with count of family");
  return;
}

let bus = 0;
let passenger = 0;
for (let i = 0; i < family; i++) {
  if (perFamilyCount[i] == 4) {
    bus += 1;
  } else {
    passenger += perFamilyCount[i];
    if (passenger >= 4) {
      passenger = passenger - 4;
      bus += 1;
    }
  }
}

console.log(`Minimum bus required is : ${bus}`);
