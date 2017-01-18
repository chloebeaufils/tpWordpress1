<!DOCTYPE html>
<html>
<head>
    <title>Form wp</title>
</head>

<body>

<div class="container">

    <form class="well form-horizontal" action="traitement.php" method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <h1>Créer un Wordpres</h1>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">NomSite</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="NomSite" placeholder="NomSite" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >dbname</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="dbname" placeholder="dbname" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                    </div>
                </div>
            </div>


            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">url</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="url" placeholder="url" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">title</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="title" placeholder="title" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">admin_email</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="admin_email" placeholder="admin_email" class="form-control"  type="text">
                    </div>
                </div>
            </div>


            <!-- radio checks -->
            <div class="form-group">
                <label class="col-md-4 control-label">Choix des plugins</label>
                <div class="col-md-4">
                    <div class="custom-checkbox">
                        <label>
                            <input type="checkbox" name="wordfence" /> Wordfence
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="duplicator" /> duplicator
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="contactform7" /> contactform7
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="bbpress" /> bbpress
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="jetpack" /> Jetpack
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Choix des Themes à activer plus tard</label>
                <div class="col-md-4">
                    <div class="custom-radio">
                        <label>
                            <input type="checkbox" name="brigsby" /> brigsby
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="vantage" /> vantage
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="freak" /> freak
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="talon" /> talon
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="satellite" /> satellite
                        </label>
                    </div>
                </div>
            </div>
<!---->
            <!-- Text area -->
<!---->
<!--            <div class="form-group">-->
<!--                <label class="col-md-4 control-label">Project Description</label>-->
<!--                <div class="col-md-4 inputGroupContainer">-->
<!--                    <div class="input-group">-->
<!--                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>-->
<!--                        <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
            <!-- Success message -->
<!--            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>-->
<!---->
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
</div><!-- /.container -->

<link rel="stylesheet" href="featureIndex/css/bootstrap.css" >
<link rel="stylesheet" href="featureIndex/css/custom.css" >
<script src="featureIndex/js/bootstrap.js" />
<script src="featureIndex/js/custom.js" />
</body>
</html>
