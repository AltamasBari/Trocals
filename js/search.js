$(document).ready(function () {
  $("#done").click(function () {
    var key = $('[name="getdata"]').val().toLowerCase();
    if (key == "agra") {
      window.open("agra.php");
    } else if (key == "delhi") {
      window.open("delhi.php");
    } else if (key == "jaipur") {
      window.open("jaipur.php");
    } else if (key == "uttrakhand") {
      window.open("uttrakhand.php");
    } else if (key == "old agra walking tour") {
      window.open("city-tour/old-city-agra.php");
    } else if (key == "garden walk") {
      window.open("city-tour/garden-walk.php");
    } else if (key == "food walk") {
      window.open("city-tour/food-walk.php");
    } else if (key == "jaipur walking tour") {
      window.open("city-tour/jaipur-walking.php");
    } else if (key == "delhi night walk") {
      window.open("city-tour/night-walk.php");
    } else if (key == "beyond the taj walking tour") {
      window.open("city-tour/taj-tour.php");
    } else if (key == "wildlife") {
      window.open("city-tour/wildlife-experience.php");
    } else if (key == "wildlife sos") {
      window.open("city-tour/wildlife-sos.php");
    } else if (key == "bicycle tour") {
      window.open("city-tour/jaipur-bicycle.php");
    } else if (key == "cooking class") {
      window.open("city-tour/cooking.php");
    } else if (key == "agra handicraft") {
      window.open("city-tour/handicraft.php");
    } else if (key == "jaipur handicraft") {
      window.open("city-tour/jaipur-tour.php");
    }
  });
});

$(window).load(function () {
  setTimeout(function () {
    $("#exampleModalCenter").modal("show");
  }, 10000);
});
