<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Server-site</title>
</head>
<body>
    <div id='app'>

    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="" srcset="">
        <select name="genere" id="" v-model="currentGenere">
            <option disabled value="">Please select genre</option>
            <option value="">All</option>
            <option v-for="(data, index) in generi" :value="data">{{data}}</option>
        </select>
        <button @click="getSelectApi()">cerca</button>
    </header>

    <main>
        <div class="container">
            <div class="box-container">
                <div class="box" v-for="(data, index) in myArray">
                    <img :src="data.poster" alt="" srcset="">
                    <h1>{{data.title}}</h1>
                    <h4>{{data.author}}</h4>
                    <h4>{{data.year}}</h4>
                </div>
            </div>
        </div>
    </main>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="script.js"></script>
</body>
</html>