
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Deparments</h1>
</div>

<div class="container">

    <nav class="nav flex-column">
        <?php
        foreach ($departments as $department) {
            echo '<a class="nav-link" href="index.php?dep_id= ' . $department['id'] .'">' . $department['name'] . "</a>";
        }
        ?>
    </nav>

</div>
