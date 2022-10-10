<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.4.1/css/bootstrap.min.css') }}">
    
    </head>
    <title>Profile</title>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 45px">
                <div class="col-md-8 col-md-offset-3">
                    <h4>Profile</h4>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>date de naissance</th>
                            <th>sexe</th>
                            <th>Téléphone</th>
                            <th>email</th>
                            <th>role</th>
                            <th>status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $LoggedUserInfo->nom }}</td>
                                <td>{{ $LoggedUserInfo->prenom }}</td>
                                <td>{{ $LoggedUserInfo->naissance }}</td>
                                <td>{{ $LoggedUserInfo->sexe }}</td>
                                <td>{{ $LoggedUserInfo->telephone }}</td>
                                <td>{{ $LoggedUserInfo->email }}</td>
                                <td>{{ $LoggedUserInfo->role }}</td>
                                <td><a href="logout">logout</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>