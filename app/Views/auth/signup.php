{% extends 'templates/app.php'%}


{% block content %}
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Sign up</div>
            <div class="panel-body">
                <form action="{{ HTTP_ROOT }}/auth/postSignUp" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="firstname">firstname</label>
                        <input type="text" name="firstname" id="firstname" placeholder="First Name" class="form-control"

                    </div>


                    <button type="submit" class="btn btn-default">Sign up</button>

                    {{ csrf.field | raw }}
                </form>
            </div>
        </div>
    </div>
</div>

{% endblock %}

