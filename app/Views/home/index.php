
{% extends 'templates/app.php'%}

{% block content %}

<div class="content">
    <header class="main">
        <h1>Welcome to the home/index view</h1>
    </header>

    <p>Below is the result of the parameters passed into the URL. You can pass in the controller and model name too. Try it...</p>

    <code>/home/index/[name]/[mood]</code>

    <p>{{ name }}</p>

    {% if signedIn %}
    You are signed in

    {% else %}

    You are not signed

    {% endif %}

</div>

{% endblock %}
