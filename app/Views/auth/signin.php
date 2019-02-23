{% extends 'templates/app.php'%}

{% block content %}
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Sign in</div>
            <div class="panel-body">
                <form action="{{ HTTP_ROOT }}/auth/postSignin" method="post" autocomplete="off">
                    <div class="form-group{{ errors.email ? ' has-error' : '' }}">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="you@domain.com" class="form-control" value="{{ old.email }}">
                        {% if errors.email %}
                        <span class="help-block">{{ errors.email | first }}</span>
                        {% endif %}
                    </div>
                    <div class="form-group{{ errors.password ? ' has-error' : '' }}">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        {% if errors.password %}
                        <span class="help-block">{{ errors.password | first }}</span>
                        {% endif %}
                    </div>
                    <button type="submit" class="btn btn-default">Sign in</button>

                    {{ csrf.field | raw }}
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}