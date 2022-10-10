<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.4.1/css/bootstrap.min.css') }}">
    
    </head>
    <title>Register</title>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 45px">
                <div class="col-md-4 col-md-offset-4">
                <h4>Register User</h4>
                <br>
                    <form action="{{ route('auth.create') }}" method="post">
                    @csrf

                        <div class="results">
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif


                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{Session::get('fail')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" name="nom" placeholder="Enter your nom">
                            <span class="text-danger">@error('nom') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" name="prenom" placeholder="Enter your prénom">
                            <span class="text-danger">@error('prenom') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="birthday">Date de naissance</label>
                            <input type="date" class="form-control" name="naissance" placeholder="Enter your birthday">
                            <span class="text-danger">@error('naissance') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="sexe">Sexe</label>
                            <select class="form-control" name="sexe">
                            <option>femme</option>
                            <option>homme</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="telephone">Téléphone</label>
                            <input type="tel" class="form-control" name="telephone" placeholder="+(216)">
                            <span class="text-danger">@error('telephone') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter your email">
                            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Mot de passe</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter your password">
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                        </div>

                       
                            <label class="radio-inline">
                            <input type="radio" name="role" value="adéhrent">adéhrent
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="role" value="admin">admin
                            </label>
                            <br><span class="text-danger">@error('role') {{ $message }} @enderror</span>
                        <br> <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Register</button>
                        </div>
                        <br>
                        <a href="login">J'ai un compte, se connecter</a>
                        <br> <br>  
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>