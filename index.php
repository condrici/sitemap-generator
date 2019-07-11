<!DOCTYPE html>
<html>
<head>
    <title>Sitemap Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
        .title-wrapper { margin-top: 120px; }
        .btn-vertical { margin-top: 30px; }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center title-wrapper">
            <h1>Sitemap Generator</h1>
        </div>
        <!-- Generate Sitemap Buttons -->
        <div class="col text-center">
            <button class="btn btn-primary btn-xs btn-vertical js-generate-xml" data-locale="en">
                English
            </button>
            <button class="btn btn-primary btn-xs btn-vertical js-generate-xml" data-locale="ro">
                Romanian
            </button>
            <button class="btn btn-primary btn-xs btn-vertical js-generate-xml" data-locale="nl">
                Dutch
            </button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script>
    $('.js-generate-xml').on('click', function () {
        let locale = $(this).data('locale');
        window.location.href = window.location.href + 'sitemap.xml?locale=' + locale;
    });
</script>
</body>
</html>