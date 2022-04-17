<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link href="{{ ('/css/pesan.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="container">
            <div class="card card-container login">
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin">
                    <span id="reauth-email" class="reauth-email"><h4>Form Pemesanan</h2></span>
                    <input type="text" class="form-control" placeholder="Name" required autofocus>
                    <input type="email" class="form-control" placeholder="E-mail" required autofocus>
                    <input type="number" class="form-control" placeholder="Age Min 16, Max 50" min="16" max="50" required autofocus>
                    <input type="text" class="form-control" placeholder="Domicile" required autofocus>
                    <input type="number" class="form-control" placeholder="Min 2 person, max 8 person" min="2" max="8" required autofocus>
                    <input type="text" class="form-control" placeholder="Tujuan" required autofocus><br>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Pesan Sekarang!</button>
                    <a href="index">
                        <button type="button" class="btn btn-danger" align="center">Back</button>
                    </a>
                </form>
            </div>
        </div>
    </body>     
</html>