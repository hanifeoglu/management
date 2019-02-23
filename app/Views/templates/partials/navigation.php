<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <!-- to enable navigation dropdown when viewed in mobile device -->
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="sr-only">Toggle navigation</span>
            </button>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li>
                    <a href="{{ HTTP_ROOT }}/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            {% if signedIn == true %}
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;{{ firstname }}
                        &nbsp;&nbsp;<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ HTTP_ROOT }}/auth/getSignOut">Logout</a></li>
                    </ul>
                </li>
            </ul>
            {% else %}
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ HTTP_ROOT }}/auth/signin">
                        <span class="glyphicon glyphicon-log-in"></span> Log In
                    </a>
                </li>
                <li>
                    <a href="{{ HTTP_ROOT }}/auth/signup">
                        <span class="glyphicon glyphicon-check"></span> Register
                    </a>
                </li>
            </ul>
            {% endif %}
        </div><!--/.nav-collapse -->

    </div>
</div>
<!-- /navbar -->
