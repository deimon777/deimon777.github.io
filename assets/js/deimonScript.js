$(document).ready(function() {
  var container = $("#texto");

  container.shuffleLetters();

  function shuffle(text) {
    // Shuffle the container with custom text
    container.shuffleLetters({
      text: text
    });
  }

  var arr = ['Coming soon!', 'Próximamente!'];
  var i = 0;
  var interval = setInterval(function () {
    shuffle(arr[i++ % arr.length]);
  }, 5000);
});
