<style>
    .realContent p:first-of-type {
        display: none;
    }
</style>

<script>
    var file = '{{$repoName}}',
            baseURL = 'https://raw.githubusercontent.com/laravel-frontend-presets/' + file + '/master/README.md';

    $.get(baseURL, function (data) {
        var md = window.markdownit();
        var result = md.render(data);

        $('.realContent').append(result);

        ['Usage'].forEach(function (title) {
            $('.realContent').find("h2:contains(" + title + ")").next('ul').remove();
            $('.realContent').find("h2:contains(" + title + ")").remove();
        });

        Prism.highlightAll();
    });
</script>


<div class="row options">
    <div class="col-md-6">
        <a class="btn btn-default" href="https://github.com/laravel-frontend-presets/{{$repoName}}">
            <i class="fa fa-github"></i> GitHub
        </a>
        &nbsp;&nbsp; | &nbsp;&nbsp;
        <a href="https://github.com/laravel-frontend-presets/{{$repoName}}/edit/master/README.md" style="opacity: 0.4;">Edit</a>
    </div>
</div>
