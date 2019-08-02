<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Users statistic</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item<?php if (isset($navItem) && $navItem == 'names') {?> active<?php } ?>">
                <a class="nav-link" href="/user/names">Names</a>
            </li>
            <li class="nav-item<?php if (isset($navItem) && $navItem == 'lastnames') {?> active<?php } ?>">
                <a class="nav-link" href="/user/lastnames">LastNames</a>
            </li>
            <li class="nav-item<?php if (isset($navItem) && $navItem == 'ages') {?> active<?php } ?>">
                <a class="nav-link" href="/user/ages">Ages</a>
            </li>
        </ul>
    </div>
</nav>