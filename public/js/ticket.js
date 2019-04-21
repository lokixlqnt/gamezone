(function () {

  var data = {
    entre2et8: 0,
    entre9et18: 0,
    plusde18: 0,
    get nbPersonnes () {
      return data.entre2et8 + data.entre9et18 + data.plusde18;
    },
    get somme() {
      return (
        data.entre2et8 * prix.entre2et8 +
        data.entre9et18 * prix.entre9et18 +
        data.plusde18 * prix.plusde18
      );
    }
  };

  function refreshView() {
    var elements = document.querySelectorAll('[data-display]');
    for (var elem of elements) {
      var name = elem.getAttribute('data-display');
      elem.innerHTML = data[name];
    }
  }

  var prix = {
    entre2et8: 12.5,
    entre9et18: 13.5,
    plusde18: 15,
  }

  var buttons = document.querySelectorAll('button[data-add-person-category]');
  for (const button of buttons) {
    button.addEventListener('click', function (event) {
      var category = event.target.getAttribute('data-add-person-category');
      var action = event.target.getAttribute('data-add-person-action');
      if (action == "decrement") {
        data[category] = Math.max(data[category] - 1, 0);
      } else if (action == "increment") {
        data[category]++;
      }
      refreshView();
    })
  }
  refreshView();
}());
