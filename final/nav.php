
<nav>
    <a class="<?php
    if ($pathParts['filename'] == "index") {
        print 'activePage';
    }
    ?>" href="index.php">Home</a>

    <a class="<?php
    if ($pathParts['filename'] == "about") {
        print 'activePage';
    }
    ?>" href="about.php">About&nbsp;Us</a>

    <a class="<?php
    if ($pathParts['filename'] == "array") {
        print 'activePage';
    }
    ?>" href="array.php">Products</a>

    <a class="<?php
    if ($pathParts['filename'] == "detail") {
        print 'activePage';
    }
    ?>" href="detail.php">FAQs</a>
    
    <a class="<?php
    if ($pathParts['filename'] == "form") {
        print 'activePage';
    }
    ?>" href="form.php">Contact&nbsp;Us</a>
</nav>
<hr>
