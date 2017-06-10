var score = 0;
console.log("aaa");
document.body.querySelector(".img").addEventListener("click", function(e) {
    console.log("aaa");
    score += 1;
    document.body.querySelector("#score").textContent = score;
    document.body.querySelector("#scoresent").value = score;
});