{% if flash.getMessage('info') %}
    <div class="alert alert-info">
        {{ flash.getMessage('info') | first }}
    </div>
{% endif %}

{% if flash.getMessage('error') %}
    <div class="alert alert-danger">
        {{ flash.getMessage('error') | first }}
    </div>
{% endif %}
