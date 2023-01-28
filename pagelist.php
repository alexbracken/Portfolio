<@ elements/header.php @>
<@ elements/navbar.php @>


<@ newPagelist{
    type: 'children',
    filter: '@{?filter}'
} @>

<div class="page-header section is-small">
    <h1 class="title is-1">@{title}</h1>
</div>
    <@ elements/post-grid.php @>
