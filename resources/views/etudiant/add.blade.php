<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter Etudiant</title>
</head>
<body>

     <form action="add" method="POST">
                        {{ csrf_field() }}
                       
                        Grp voulu: <input type="number" name="grpDest" placeholder="entrer le groupe voulu">
                        </br>
                        </br>
                        <input type="submit" value="Demander permutation" name="form1">
                    </br></br></br></br></br></br>

    </form>


     <!--form action="add" method="POST">
    {{ csrf_field() }}
    ancien mot de passe: <input type="text" name="ancienM" placeholder="entrer votre ancien mot de passe">
    </br>
    </br>
    nouveau mot de passe: <input type="text" name="nvM" placeholder="entrer votre nouveau mot de passe">
    </br>
    </br>
   Confirmer mot de passe: <input type="text" name="cnvM" placeholder="confirmer votre mot de passe">
    </br>
    </br>
    <input type="submit" value="Enregistrer" name="form2">
    </form>-->

    <div class="panel-heading"><h1>Changer mot de passe</h1></div>

                <div class="panel-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    <form class="form-horizontal" method="POST" action="add">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">entrer votre ancien mot de passe</label>

                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>

                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">entrer votre nouveau mot de passe</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>

                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-4 control-label">confirmer votre nouveau mot de passe</label>

                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" name="form2">
                                    changer mot de passe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

</body>
</html>