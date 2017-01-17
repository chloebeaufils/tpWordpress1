<!DOCTYPE html>
<html>
<head>
    <title>Form wp</title>
</head>

<body>

<div class="container">

    <form class="well form-horizontal" action="tpWordpress1/data/traitement.php" method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <h1>Créer un Wordpress</h1>

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

            <!-- Select Basic -->

            <div class="form-group">
                <label class="col-md-4 control-label">Theme</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="state" class="form-control selectpicker" >
                            <option value=" " >Please select your state</option>
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option >Arizona</option>
                            <option >Arkansas</option>
                            <option >California</option>
                            <option >Colorado</option>
                            <option >Connecticut</option>
                            <option >Delaware</option>
                            <option >District of Columbia</option>
                            <option> Florida</option>
                            <option >Georgia</option>
                            <option >Hawaii</option>
                            <option >daho</option>
                            <option >Illinois</option>
                            <option >Indiana</option>
                            <option >Iowa</option>
                            <option> Kansas</option>
                            <option >Kentucky</option>
                            <option >Louisiana</option>
                            <option>Maine</option>
                            <option >Maryland</option>
                            <option> Mass</option>
                            <option >Michigan</option>
                            <option >Minnesota</option>
                            <option>Mississippi</option>
                            <option>Missouri</option>
                            <option>Montana</option>
                            <option>Nebraska</option>
                            <option>Nevada</option>
                            <option>New Hampshire</option>
                            <option>New Jersey</option>
                            <option>New Mexico</option>
                            <option>New York</option>
                            <option>North Carolina</option>
                            <option>North Dakota</option>
                            <option>Ohio</option>
                            <option>Oklahoma</option>
                            <option>Oregon</option>
                            <option>Pennsylvania</option>
                            <option>Rhode Island</option>
                            <option>South Carolina</option>
                            <option>South Dakota</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option> Uttah</option>
                            <option>Vermont</option>
                            <option>Virginia</option>
                            <option >Washington</option>
                            <option >West Virginia</option>
                            <option>Wisconsin</option>
                            <option >Wyoming</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <!-- Select Basic -->

            <div class="form-group">
                <label class="col-md-4 control-label">Plugins</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="state" class="form-control selectpicker" >
                            <option value=" " >Please select your state</option>
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option >Arizona</option>
                            <option >Arkansas</option>
                            <option >California</option>
                            <option >Colorado</option>
                            <option >Connecticut</option>
                            <option >Delaware</option>
                            <option >District of Columbia</option>
                            <option> Florida</option>
                            <option >Georgia</option>
                            <option >Hawaii</option>
                            <option >daho</option>
                            <option >Illinois</option>
                            <option >Indiana</option>
                            <option >Iowa</option>
                            <option> Kansas</option>
                            <option >Kentucky</option>
                            <option >Louisiana</option>
                            <option>Maine</option>
                            <option >Maryland</option>
                            <option> Mass</option>
                            <option >Michigan</option>
                            <option >Minnesota</option>
                            <option>Mississippi</option>
                            <option>Missouri</option>
                            <option>Montana</option>
                            <option>Nebraska</option>
                            <option>Nevada</option>
                            <option>New Hampshire</option>
                            <option>New Jersey</option>
                            <option>New Mexico</option>
                            <option>New York</option>
                            <option>North Carolina</option>
                            <option>North Dakota</option>
                            <option>Ohio</option>
                            <option>Oklahoma</option>
                            <option>Oregon</option>
                            <option>Pennsylvania</option>
                            <option>Rhode Island</option>
                            <option>South Carolina</option>
                            <option>South Dakota</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option> Uttah</option>
                            <option>Vermont</option>
                            <option>Virginia</option>
                            <option >Washington</option>
                            <option >West Virginia</option>
                            <option>Wisconsin</option>
                            <option >Wyoming</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Text input-->
            <!--            <div class="form-group">-->
            <!--                <label class="col-md-4 control-label">Website or domain name</label>-->
            <!--                <div class="col-md-4 inputGroupContainer">-->
            <!--                    <div class="input-group">-->
            <!--                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>-->
            <!--                        <input name="website" placeholder="Website or domain name" class="form-control" type="text">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!---->
            <!-- radio checks -->
            <!--            <div class="form-group">-->
            <!--                <label class="col-md-4 control-label">Do you have hosting?</label>-->
            <!--                <div class="col-md-4">-->
            <!--                    <div class="radio">-->
            <!--                        <label>-->
            <!--                            <input type="radio" name="hosting" value="yes" /> Yes-->
            <!--                        </label>-->
            <!--                    </div>-->
            <!--                    <div class="radio">-->
            <!--                        <label>-->
            <!--                            <input type="radio" name="hosting" value="no" /> No-->
            <!--                        </label>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
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
            <!--            <div class="form-group">-->
            <!--                <label class="col-md-4 control-label"></label>-->
            <!--                <div class="col-md-4">-->
            <!--                    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>-->
            <!--                </div>-->
            <!--            </div>-->
            <!---->
            <!--        </fieldset>-->
    </form>
</div>
</div><!-- /.container -->

<link rel="stylesheet" href="featureIndex/css/bootstrap.css" >
<link rel="stylesheet" href="featureIndex/css/custom.css" >
<script src="featureIndex/js/bootstrap.js" />
<script src="featureIndex/js/custom.js" />
</body>
</html>