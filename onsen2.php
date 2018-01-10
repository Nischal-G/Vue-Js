
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
  <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
  <script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
  <script src="https://unpkg.com/vue@2.5.11/dist/vue.js"></script>
  <script src="https://unpkg.com/onsenui/js/vue-onsenui.js"></script>



  
</head>

<body>
  <template id="main-page">
    <v-ons-page>
      <v-ons-toolbar>
        <div class="center">Title</div>
      </v-ons-toolbar>

      <p style="text-align: center">
        <ons-button onclick="$on.notification.alert('Hello World!')">
          Click me!
        </ons-button>
      </p>
    </v-ons-page>
  </template>

  <div id="app">Hello World!!!!!</div>

  <script src="https://unpkg.com/vue@2.5.11/dist/vue.js"></script>
  <script src="onsenui.js"></script>
  <script src="vue-onsenui.js"></script>

  <script>
    var vm = new Vue({
      el: '#app',
      template: '#main-page'
    });
  </script>
</body>
</html>