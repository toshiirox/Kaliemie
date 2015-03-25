<!-- Navigation -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=".">Kaliémie </a>
        </div>
        <center>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a>
                            </li>
                            <li><a href="#">Another action</a>
                            </li>
                            <li><a href="#">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <?php
                if (isset($_SESSION['id'])) {
                    ?>
                    <form class="navbar-form navbar-right" role="search" action="deconnexion.php" method="post">
                        <button type="submit" class="btn btn-default">Déconnexion</button>
                    </form>
                <?php
                } else {
                    ?>
                    <form class="navbar-form navbar-right" role="search" action="form_connexion.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="Username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="Password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default">Sign In</button>
                    </form>
                <?php
                }
                ?>
            </div>
        </center>
    </div>
</div>